<?php
require 'conn.php';
$sql_update="UPDATE memberbio SET mname='$_POST[mname]',mlastname='$_POST[mlastname]' ,address='$_POST[address]' ,telephone='$_POST[telephone]' WHERE mid='$_POST[mid]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/movie/mainmenu.php");
}

?>