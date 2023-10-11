<?php
require 'conn.php';

if (isset($_GET['mid']) && is_numeric($_GET['mid'])) {
    $mid = $_GET['mid'];
    
    // สร้างคำสั่ง SQL สำหรับลบข้อมูล
    $sql = "DELETE FROM memberbio WHERE mid = $mid";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
} else {
    echo "Invalid MID.";
}


header("Location: mainmenu.php");
?>
