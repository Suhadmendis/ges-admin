<?php

session_start();


require_once ("DB_connector.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "generate") {
   header('Content-Type: application/json');

    $ResponseXML = "";
    $ResponseXML .= "<new>";

    $sql = "SELECT course_ref FROM sys_info";
    $result = $conn->query($sql);
    $row = $result->fetch();
    $no = $row['course_ref'];
    $tmpinvno = "000000" . $row["course_ref"];
    $lenth = strlen($tmpinvno);
    $no = trim("COR/") . substr($tmpinvno, $lenth - 7);


    $en_name = "Course";

    $objArray = Array();
    array_push($objArray,$no,$en_name);

    echo json_encode($objArray);

   
}



if ($_GET["Command"] == "save_item") {
 

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql = "SELECT course_ref FROM sys_info";
        $resul = $conn->query($sql);
        $row = $resul->fetch();
        $no = $row["course_ref"];
        $tmpinvno = "000000" . $row["course_ref"];
        $lenth = strlen($tmpinvno);
        $no1 = trim("COR/") . substr($tmpinvno, $lenth - 7);



      

        $sql = "Insert into m_course(REF, course_code, course_name, faculty_ref, faculty_name, des, level, type, requirement_1, requirement_2, requirement_3, requirement_4, requirement_5, duration, amount, active, user)values
         ('" . $no1 . "', '" . $_GET['course_code'] . "', '" . $_GET['course_name'] . "', '" . $_GET['faculty_ref'] . "', '" . $_GET['faculty_name'] . "', '" . $_GET['des'] . "', '" . $_GET['level'] . "', '" . $_GET['type'] . "', '" . $_GET['requirement_1'] . "', '" . $_GET['requirement_2'] . "', '" . $_GET['requirement_3'] . "', '" . $_GET['requirement_4'] . "', '" . $_GET['requirement_5'] . "', '" . $_GET['duration'] . "', '" . $_GET['amount'] . "', '" . $_GET['active'] . "', 'user')";

        $result = $conn->query($sql);
        
        
        $no2 = $no + 1;
        $sql = "update sys_info set course_ref = '$no2' where course_ref = '$no'";
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

    $sql = "select * from m_course where REF= '" . $REF . "'";

    $sql = $conn->query($sql);
    if ($row = $sql->fetch()) {
        $ResponseXML .= "<objSup><![CDATA[" . json_encode($row) . "]]></objSup>";
    }

   $ResponseXML .= "<IDF><![CDATA[" . $_GET['IDF'] . "]]></IDF>";

    $ResponseXML .= "</salesdetails>";
    echo $ResponseXML;
}
