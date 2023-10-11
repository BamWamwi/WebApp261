<?php

    // ตรวจสอบว่ามีการส่งข้อมูลผ่าน POST หรือไม่
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับข้อมูลจากฟอร์ม
        $oname = $_POST['oname'];
        $olast = $_POST['olast'];
        $dname = $_POST['dname'];

        // ทำการเชื่อมต่อฐานข้อมูล
        $conn = new mysqli('localhost', 'root', '', 'dvdshop');
        $conn->query("SET NAMES utf8");

        // ตรวจสอบการเชื่อมต่อ
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // ตรวจสอบว่าหนังที่เลือกซื้อมีข้อมูลในตาราง dvd หรือไม่
        $check_movie_query = "SELECT * FROM dvdbio WHERE dname = '$dname'";
        $check_movie_result = $conn->query($check_movie_query);

        if ($check_movie_result->num_rows > 0) {
            // หนังมีในตาราง dvd, ทำการบันทึกข้อมูลการสั่งซื้อ
            $insert_order_query = "INSERT INTO `order` (oname, olast, omov) VALUES ('$oname', '$olast', '$dname')";

            if ($conn->query($insert_order_query) === TRUE) {
                echo "บันทึกข้อมูลการสั่งซื้อสำเร็จ";
            } else {
                echo "Error: " . $insert_order_query . "<br>" . $conn->error;
            }
        } else {
            echo "ไม่พบข้อมูลหนังที่เลือกซื้อในระบบ";
        }
        header("refresh: 1; url=http://localhost/movie/1mainmenu.php");
        // ปิดการเชื่อมต่อฐานข้อมูล
        $conn->close();
    }
?>
