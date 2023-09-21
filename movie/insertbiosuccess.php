<?php
require 'conn.php';
$sql_update="INSERT INTO memberbio (mid, mname, mlastname,address,telephone) VALUES ('$_POST[mid]', '$_POST[mname]','$_POST[mlastname]' ,'$_POST[address]' ,'$_POST[telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/movie/mainmenu.php");
}

?>