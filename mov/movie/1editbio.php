<?php
if(!isset($_GET['did'])){
    header("refresh: 0; url=http://localhost/movie/1mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM dvdbio WHERE did='$_GET[did]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="1editsuccess.php">
        <p>

        <label for="did">ไอดี</label>

        <input type="number" name="did" id="did" value="<?=$row['did'];?>"readonly />

        </p>
        <p>

            <label for="dname">ชื่อหนัง</label>

            <input type="text" name="dname" id="dname" value="<?=$row['dname'];?>" />

        </p>

        <p>

            <label for="ddetail">รายละเอียด</label>

            <input type="text" name="ddetail" id="ddetail" value="<?=$row['ddetail'];?>" />

        </p>

        <p>

            <label for="dtime">วันที่ฉาย</label>

            <input type="date" name="dtime" id="dtime" value="<?=$row['dtime'];?>" />

        </p>

        <p>

            <label for="price">ราคา</label>

            <input type="number" name="price" id="price" value="<?=$row['price'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='1mainmenu.php'>Home</a>
    </form>
</body>

</html>