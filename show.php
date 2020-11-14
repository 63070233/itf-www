<html>
<head>
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-nattapong.mysql.database.azure.com', 'it63070233@itf-nattapong', 'WGFuhe86', 'ITFLAB', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">           
  <table class="table table-dark table-striped">
    <thead>
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="200"> <div align="center">Link </div></th>
    <th width="150"> <div align="center">ลบ </div></th>
    <th width="150"> <div align="center">แก้ไข </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr class="table-success text-dark">
    <td align="center"><?php echo $Result['Name'];?></div></td>
    <td align="center"><?php echo $Result['Comment'];?></td>
    <td align="center"><?php echo $Result['Link'];?></td>
    <td align="center"><a href="delete.php?id=<?php echo $Result['id']; ?>">ลบ</a></td>
    <td align="center"><a href="edit.php"?id=<?php echo $Result['id']; ?>>แก้ไข</a></td>
  </tr>
<?php
}
?>
</table>
<center><h1>
<button type="button" class="btn btn-warning"><a href="form.html"?id=<?php echo $Result['id']; ?>เพิ่ม</a></button></center></h1>
<?php
mysqli_close($conn);
?>

</body>
</html>
