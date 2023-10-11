<?php
require 'conn.php';
$sql_update="INSERT INTO dvdbio (did, dname, ddetail,dtime,price) VALUES ('$_POST[did]', '$_POST[dname]','$_POST[ddetail]' ,'$_POST[dtime]' ,'$_POST[price]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/movie/1mainmenu.php");
}

?>