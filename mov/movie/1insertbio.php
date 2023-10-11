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
    <form id="form1" name="form1" method="post" action="1insertbiosuccess.php">
        <label for="did">ไอดี</label>

        <input type="number" name="did" id="did" value="<?=$row['did'];?>" />

        </p>
        <p>

            <label for="dname">ชื่อหนัง</label>
            <input type="text" name="dname" id="dname">

        </p>

        <p>

            <label for="ddetail">รายละเอียด</label>

            <input type="text" name="ddetail" id="ddetail">

        </p>

        <p>

            <label for="dtime">วันที่ฉาย</label>

            <input type="date" name="dtime" id="dtime">

        </p>

        <p>

            <label for="price">ชื่อนักแสดง</label>

            <input type="number" name="price" id="price">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='1mainmenu.php'>Home</a>
    </form>
</body>

</html>