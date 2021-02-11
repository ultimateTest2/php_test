<?php 
  $id = $_POST["id"];
  $sql = "delete from login where id=".$id;
  $db = mysqli_connect("localhost","root","","user");
  $result = mysqli_query($db,$sql);
  mysqli_close($db);
  var_dump($sql);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>正常に削除されました</p>
  <a href="index.php">トップに戻る</a>
</body>
</html>


