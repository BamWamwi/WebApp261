<?php
require 'conn.php';
$sql_update="UPDATE actor SET nameactor='$_POST[nameactor]',lastnameactor='$_POST[lastnameactor]' ,ageactor='$_POST[ageactor]' ,nicknameactor='$_POST[nicknameactor]' WHERE dactor='$_POST[dactor]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/movie/2mainmenu.php");
}

?>