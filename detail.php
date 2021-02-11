<?php
  $id = $_GET["id"];
  $db = mysqli_connect("localhost","root","","user");
  $sql = "select * from login where id=".$id;
  $result = mysqli_query($db,$sql);
  mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    while($data = mysqli_fetch_assoc($result)) {
      echo '<form action="update.php" method="post">';
        echo '<label for="email">Email</label>';
        echo '<input type="text" id="email" name="email" value="'.$data["email"].'">';
        echo '<label for="password">Password</label>';
        echo '<input type="text" id="password" name="password" value="'.$data["password"].'">';
        echo '<label for="name">名前</label>';
        echo '<input type="text" id="name" name="name" value="'.$data["name"].'">';
        echo '<label for="gender">性別</label>';
        if ($data["gender"] == 0) {
          echo '<input type="radio" name="gender" value="0" checked=checked>男';
          echo '<input type="radio" name="gender" value="1">女';
        } else {
          echo '<input type="radio" name="gender" value="0">男';
          echo '<input type="radio" name="gender" value="1" checked=checked>女';
        }
        echo '<label for="blood">血液型</label>';
        $blood_list = array("A","B","O","AB");
        echo '<select name="blood">';
        for ($i = 0; $i < count($blood_list); $i++) {
          if ($data["blood"] == $blood_list[$i]) {
            echo '<option value="'.$blood_list[$i].'"selected>'.$blood_list[$i].'型</option>';
          } else {
            echo '<option value="'.$blood_list[$i].'">'.$blood_list[$i].'型</option>';
          }
        }
        echo '</select>';
        echo '<label for="old">年齢</label>';
        echo '<input type="text" id="old" name="old" value="'.$data["old"].'">';
        echo '<label for="memo">メモ</label>';
        echo '<textarea name="memo" rows="4" cols="20" maxlength="100">'.$data["memo"].'</textarea>';
        echo '<input type="hidden" name="id" value="'.$data["id"].'">';
        echo '<input type="submit" value="更新">';
      echo '</form>';
      echo '<form action="delete.php" method="post">';
        echo '<input type="hidden" name="id" value="'.$data["id"].'">';
        echo '<input type="submit" value="削除">';
      echo '</form>';
    }
    
  ?>
</body>
</html>