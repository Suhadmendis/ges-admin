<?php

session_start();


require_once ("DB_connector.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "generate") {
   header('Content-Type: application/json');

    $ResponseXML = "";
    $ResponseXML .= "<new>";

    $sql = "SELECT content_ref FROM sys_info";
    $result = $conn->query($sql);
    $row = $result->fetch();
    $no = $row['content_ref'];
    $tmpinvno = "000000" . $row["content_ref"];
    $lenth = strlen($tmpinvno);
    $no = trim("CON/") . substr($tmpinvno, $lenth - 7);


    $en_name = "Content";

    $objArray = Array();
    array_push($objArray,$no,$en_name);

    echo json_encode($objArray);

   
}



if ($_GET["Command"] == "save_item") {
 

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql = "SELECT content_ref FROM sys_info";
        $resul = $conn->query($sql);
        $row = $resul->fetch();
        $no = $row["content_ref"];
        $tmpinvno = "000000" . $row["content_ref"];
        $lenth = strlen($tmpinvno);
        $no1 = trim("CON/") . substr($tmpinvno, $lenth - 7);

        $sql = "Insert into m_content(REF, player_ref, mdate, amount)values
                        ('" . $no1 . "' ,'" . $_GET['player_ref'] . "' ,'" . $_GET['mdate'] . "' ,'" . $_GET['amount'] . "')";
        $result = $conn->query($sql);
        
        
        $no2 = $no + 1;
        $sql = "update sys_info set content_ref = '$no2' where content_ref = '$no'";
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

    $sql = "select * from m_content where REF= '" . $REF . "'";

    $sql = $conn->query($sql);
    if ($row = $sql->fetch()) {
        $ResponseXML .= "<objSup><![CDATA[" . json_encode($row) . "]]></objSup>";
    }

   $ResponseXML .= "<IDF><![CDATA[" . $_GET['IDF'] . "]]></IDF>";

    $ResponseXML .= "</salesdetails>";
    echo $ResponseXML;
}
