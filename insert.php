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
    <button type="button" class="btn btn-warning"><a href="show.php">"New record created successfully"</a></button></center></h1>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);

?>
