<?php


include "include/db_connect_oo.php";


if(isset($_POST["type"])){

    if($_POST["type"] == "edit"){
        $ide_check = $_POST["ide_check"];
        $ide_subject = $_POST["ide_subject"];
        $check = $_POST["check"];
        $studentcode = $_POST["studentcode"];
        $studentname = $_POST["studentname"];

        


        $sql = "UPDATE `cs_check` SET `check_name` = '$check' WHERE `id` = $ide_check;";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        }else{
            echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');</script>";
        }
    }
}



?>