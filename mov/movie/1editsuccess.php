<?php
require 'conn.php';
$sql_update="UPDATE dvdbio SET dname='$_POST[dname]',ddetail='$_POST[ddetail]' ,dtime='$_POST[dtime]' ,price='$_POST[price]' WHERE did='$_POST[did]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/movie/1mainmenu.php");
}

?>