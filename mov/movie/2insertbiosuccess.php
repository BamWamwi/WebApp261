<?php
require 'conn.php';
$sql_update="INSERT INTO actor (dactor, nameactor, lastnameactor,ageactor,nicknameactor) VALUES ('$_POST[dactor]', '$_POST[nameactor]','$_POST[lastnameactor]' ,'$_POST[ageactor]' ,'$_POST[nicknameactor]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/movie/2mainmenu.php");
}

?>