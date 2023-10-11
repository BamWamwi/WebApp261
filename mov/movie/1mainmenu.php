<?php
    require 'conn.php';
    $sql = "SELECT * FROM dvdbio";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

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
      <li><a href='2mainmenu.php'>Actor</a></li>
      <li><a href='buy.php'>Buy</a></li>
    </ul>
  </div>
</nav>

    <div class="container">
        <h1>DVD Bio</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-5">ชื่อหนัง</th>
                    <th scope="col-5">รายละเอียด</th>
                    <th scope="col-5">วันที่ฉาย</th>
                    <th scope="col-5">ราคา</th>
                    <th scope="col-5">Edit</th>
                    <th scope="col-5">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["did"]."</td>"."<td>".$row["dname"]."</td>"."<td>".$row["ddetail"]."</td>"."<td>".$row["dtime"]."</td>"."<td>".$row["price"]."</td>"."<td>"."<a class='btn btn-warning' href='1editbio.php?did=".$row["did"]."'>Edit</a>"."</td>"."<td>"."<a class='btn btn-danger' href='zzbio.php?did=".$row["did"]."'>Delete</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='1insertbio.php'>Insert DVD</a>
    </div>
</body>

</html>