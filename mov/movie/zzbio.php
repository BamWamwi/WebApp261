<?php
require 'conn.php';

if (isset($_GET['did']) && is_numeric($_GET['did'])) {
    $did = $_GET['did'];
    
    // สร้างคำสั่ง SQL สำหรับลบข้อมูล
    $sql = "DELETE FROM dvdbio WHERE did = $did";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
} else {
    echo "Invalid MID.";
}


header("Location: 1mainmenu.php");
?>
