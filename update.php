<?php
var_dump($_POST['id']);
  $id = $_POST['id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $blood = $_POST['blood'];
  $old = $_POST['old'];
  $memo = $_POST['memo'];
  $sql = "update login set email='".$email."', password='".$password."', name='".$name."', gender='".$gender."', blood='".$blood."', old=".$old.", memo='".$memo."' where id=".$id;
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
  <p>設定が完了しました</p>
  <a href="index.php">ログインページへ</a>
</body>
</html>