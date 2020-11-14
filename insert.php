<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-nattapong.mysql.database.azure.com', 'it63070233@itf-nattapong', 'WGFuhe86', 'ITFLAB', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo  "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
<h1><center><button type="button" class="btn btn-warning"><a href="show.php">หน้าหลัก</a></button></center></h1>
  
mysqli_close($conn);
?>
