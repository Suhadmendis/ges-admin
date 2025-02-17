<?php

session_start();


require_once ("DB_connector.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "generate") {
   header('Content-Type: application/json');

    $ResponseXML = "";
    $ResponseXML .= "<new>";

    $sql = "SELECT lecturer_ref FROM sys_info";
    $result = $conn->query($sql);
    $row = $result->fetch();
    $no = $row['lecturer_ref'];
    $tmpinvno = "000000" . $row["lecturer_ref"];
    $lenth = strlen($tmpinvno);
    $no = trim("LEC/") . substr($tmpinvno, $lenth - 7);


    $en_name = "Lecturer";

    $objArray = Array();
    array_push($objArray,$no,$en_name);

    echo json_encode($objArray);

   
}



if ($_GET["Command"] == "save_item") {
 

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql = "SELECT lecturer_ref FROM sys_info";
        $resul = $conn->query($sql);
        $row = $resul->fetch();
        $no = $row["lecturer_ref"];
        $tmpinvno = "000000" . $row["lecturer_ref"];
        $lenth = strlen($tmpinvno);
        $no1 = trim("CON/") . substr($tmpinvno, $lenth - 7);


 
        

        $sql = "Insert into m_lecturer(REF, lecturer_name, des, address_1, address_2, tel_1, tel_2, email, active,user)values
                        ('" . $no1 . "' ,'" . $_GET['lecturer_name'] . "' ,'" . $_GET['des'] . "' ,'" . $_GET['address_1'] . "' ,'" . $_GET['address_2'] . "' ,'" . $_GET['tel_1'] . "' ,'" . $_GET['tel_2'] . "' ,'" . $_GET['email'] . "' ,'" . $_GET['active'] . "','" . $_SESSION['UserName'] . "')";
        $result = $conn->query($sql);
        
        
        $no2 = $no + 1;
        $sql = "update sys_info set lecturer_ref = '$no2' where lecturer_ref = '$no'";
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

    $sql = "select * from m_lecturer where REF= '" . $REF . "'";

    $sql = $conn->query($sql);
    if ($row = $sql->fetch()) {
        $ResponseXML .= "<objSup><![CDATA[" . json_encode($row) . "]]></objSup>";
    }

   $ResponseXML .= "<IDF><![CDATA[" . $_GET['IDF'] . "]]></IDF>";

    $ResponseXML .= "</salesdetails>";
    echo $ResponseXML;
}
