<?php  
 $email = $_POST["email"];
 $password = $_POST["password"];
 $db = mysqli_connect("localhost","root","","user");
 $sql = "select * from login where email='".$email."'and password='".$password."'";
 $result = mysqli_query($db,$sql);
 $login_flag = false;
 $name = null;
 while ($data = mysqli_fetch_assoc($result)) {
   $login_flag = true;
   $name = $data['name'];
 }
 mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    if ($login_flag) {
      echo '<p>ログインできました</p>
            <form action="search.php" method="post">
              <label for="gender">性別</label>
              <input type="radio" name="gender" value="0">男
              <input type="radio" name="gender" value="1">女
              <label for="blood">血液型</label>
              <select name="blood">
                <option value="A">A型</option>
                <option value="B">B型</option>
                <option value="O">O型</option>
                <option value="AB">AB型</option>
              </select>
              <input type="checkbox" name="over_sixty" value="1" checked="checked">60歳以上も含む
              <input type="submit" value="検索">
            </form>';
    } else {
      echo '<p>ログインに失敗しました</p>
            <form action="index.php" type="post">
              <input type="submit" value="ログインページに戻る">
            </form>';
    }
  ?>
</body>
</html>