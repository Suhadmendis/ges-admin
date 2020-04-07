<?php

session_start();


require_once ("DB_connector.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "generate") {
   header('Content-Type: application/json');

    $sql = "SELECT batch_ref FROM sys_info";
    $result = $conn->query($sql);
    $row = $result->fetch();
    $no = $row['batch_ref'];
    $tmpinvno = "000000" . $row["batch_ref"];
    $lenth = strlen($tmpinvno);
    $no = trim("BAT/") . substr($tmpinvno, $lenth - 7);

    
    $en_name = 'Batch';

    $objArray = Array();
    array_push($objArray,$no,$en_name);

    echo json_encode($objArray); 
}



if ($_GET["Command"] == "save_item") {
 

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql = "SELECT batch_ref FROM sys_info";
        $resul = $conn->query($sql);
        $row = $resul->fetch();
        $no = $row["batch_ref"];
        $tmpinvno = "000000" . $row["batch_ref"];
        $lenth = strlen($tmpinvno);
        $no1 = trim("BAT/") . substr($tmpinvno, $lenth - 7);




        $sql = "Insert into m_batch(REF, batch_code, batch_name, course_ref, course_code, course_name, des, start_date, day, s_time, e_time, amount, active, user)values
                        ('" . $no1 . "' ,'" . $_GET['batch_code'] . "' ,'" . $_GET['batch_name'] . "' ,'" . $_GET['course_ref'] . "' ,'" . $_GET['course_code'] . "' ,'" . $_GET['course_name'] . "' ,'" . $_GET['des'] . "' ,'" . $_GET['start_date'] . "' ,'" . $_GET['day'] . "' ,'" . $_GET['s_time'] . "' ,'" . $_GET['e_time'] . "' ,'" . $_GET['amount'] . "' ,'" . $_GET['active'] . "' ,'user')";
        $result = $conn->query($sql);
        
        
        $no2 = $no + 1;
        $sql = "update sys_info set batch_ref = '$no2' where batch_ref = '$no'";
        $result = $conn->query($sql);

        $sql = "Insert into activity_log(REF, entry, operation, user, ip)values
                        ('" . $no1 . "' ,'entry' ,'SAVE'  ,'user' ,'ip')";
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

    $sql = "select * from m_batch where REF= '" . $REF . "'";

    $sql = $conn->query($sql);
    if ($row = $sql->fetch()) {
        $ResponseXML .= "<objSup><![CDATA[" . json_encode($row) . "]]></objSup>";
    }

   $ResponseXML .= "<IDF><![CDATA[" . $_GET['IDF'] . "]]></IDF>";

    $ResponseXML .= "</salesdetails>";
    echo $ResponseXML;
}
