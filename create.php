<?php
  var_dump($_POST);
  $email = $_POST["email"];
  $password = $_POST["password"];
  $name = $_POST["name"];
  $gender = $_POST["gender"];
  $blood = $_POST["blood"];
  $old = $_POST["old"];
  $memo = $_POST["memo"];
  $db = mysqli_connect("localhost","root","","user");
  $sql = "insert into login (email,password,name,gender,blood,old,memo) value ('".$email."','".$password."','".$name."','".$gender."','".$blood."',".$old.",'".$memo."')";
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
  <p>登録が完了しました。</p>
  <a href="index.php">トップに戻る</a>
</body>
</html>
