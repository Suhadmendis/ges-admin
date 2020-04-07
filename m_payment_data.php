<?php

session_start();


require_once ("DB_connector.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "generate") {
   header('Content-Type: application/json');

    $ResponseXML = "";
    $ResponseXML .= "<new>";

    $sql = "SELECT payment_ref FROM sys_info";
    $result = $conn->query($sql);
    $row = $result->fetch();
    $no = $row['payment_ref'];
    $tmpinvno = "000000" . $row["payment_ref"];
    $lenth = strlen($tmpinvno);
    $no = trim("PAY/") . substr($tmpinvno, $lenth - 7);


    $en_name = "Payment";

    $objArray = Array();
    array_push($objArray,$no,$en_name);

    echo json_encode($objArray);

   
}




if ($_GET["Command"] == "save_item") {
 

    
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql = "SELECT payment_ref FROM sys_info";
        $resul = $conn->query($sql);
        $row = $resul->fetch();
        $no = $row["payment_ref"];
        $tmpinvno = "000000" . $row["payment_ref"];
        $lenth = strlen($tmpinvno);
        $no1 = trim("PAY/") . substr($tmpinvno, $lenth - 7);

        $sql = "Insert into m_payment(REF, batch_ref, batch_code, batch_name, student_ref, student_name, mdate, amount,user)values
                        ('" . $no1 . "' ,'" . $_GET['batch_ref'] . "' ,'" . $_GET['batch_code'] . "' ,'" . $_GET['batch_name'] . "' ,'" . $_GET['student_ref'] . "' ,'" . $_GET['student_name'] . "' ,'" . $_GET['mdate'] . "' ,'" . $_GET['amount'] . "','" . $_SESSION['UserName'] . "')";
        $result = $conn->query($sql);
        
        
        $no2 = $no + 1;
        $sql = "update sys_info set payment_ref = $no2 where payment_ref = $no";
        $result = $conn->query($sql);

        $sql = "Insert into sys_log(REF, entry, operation, user, ip)values
                        ('" . $no1 . "' ,'entry' ,'SAVE'  ,'" . $_SESSION['UserName'] . "' ,'ip')";
        $result = $conn->query($sql);



        $conn->commit();
        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}

if ($_GET["Command"] == "getForm") {
    header('Content-Type: text/xml');
    echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

    $ResponseXML = "";
    $ResponseXML .= "<salesdetails>";

    $REF = $_GET["REF"];

    $sql = "select * from m_payment where REF= '" . $REF . "'";

    $sql = $conn->query($sql);
    if ($row = $sql->fetch()) {
        $ResponseXML .= "<objSup><![CDATA[" . json_encode($row) . "]]></objSup>";
    }

   $ResponseXML .= "<IDF><![CDATA[" . $_GET['IDF'] . "]]></IDF>";

    $ResponseXML .= "</salesdetails>";
    echo $ResponseXML;
}
