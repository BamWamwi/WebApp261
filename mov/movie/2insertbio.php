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
    <form id="form1" name="form1" method="post" action="2insertbiosuccess.php">
        <label for="dactor">ไอดี</label>

        <input type="number" name="dactor" id="dactor" value="<?=$row['dactor'];?>" />

        </p>
        <p>

            <label for="nameactor">ชื่อ</label>
            <input type="text" name="nameactor" id="nameactor">

        </p>

        <p>

            <label for="lastnameactor">นามสกุล</label>

            <input type="text" name="lastnameactor" id="lastnameactor">

        </p>

        <p>

            <label for="ageactor">อายุ</label>

            <input type="text" name="ageactor" id="ageactor">

        </p>

        <p>

            <label for="nicknameactor">ชื่อเล่น</label>

            <input type="text" name="nicknameactor" id="nicknameactor">

        </p>

        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='2mainmenu.php'>Home</a>
    </form>
</body>

</html>