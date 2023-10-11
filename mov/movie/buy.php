<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Member Bio</title>
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
    <li><a href='mainmenu.php'>Member</a></li>
      <li><a href='1mainmenu.php'>DVD</a></li>
      <li><a href='2mainmenu.php'>Actor</a></li>
    </ul>
  </div>
</nav>

<body>
    <h1>สั่งซื้อหนัง</h1>
    <form action="buysus.php" method="POST">
        <label for="oname">ชื่อ:</label>
        <input type="text" id="oname" name="oname" required><br><br>

        <label for="olast">นามสกุล:</label>
        <input type="text" id="olast" name="olast" required><br><br>

        <label for="dname">หนังที่ต้องการสั่งซื้อ:</label>
        <select id="dname" name="dname" required>
            <option value="" disabled selected>โปรดเลือกหนัง</option>

            <!-- ใส่ตัวเลือกหนังจากฐานข้อมูล -->
            <?php
                $conn = new mysqli('localhost','root','','dvdshop');
                $conn->query("SET NAMES utf8");
                if($conn->connect_error){
                    die("Connection Fail God damn it ". $conn->$conn_error);
                }
                // ดึงข้อมูลหนังจากตาราง dvd
                $result = $conn->query("SELECT * FROM dvdbio");
                var_dump($result);
                // สร้างตัวเลือกใน dropdown menu
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['dname'] . "'>" . $row['dname'] . "</option>";
                }

                // ปิดการเชื่อมต่อฐานข้อมูล
                $conn->close();
            ?>
        </select><br><br>

        <input type="submit" value="สั่งซื้อ">
    </form>
</body>
</html>
