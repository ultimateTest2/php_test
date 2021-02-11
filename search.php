<?php 
  $gender = $_POST['gender'];
  $blood = $_POST['blood'];
  $sql = "select * from login where gender='".$gender."' and blood='".$blood."'";
  if (!isset($_POST["over_sixty"])) {
    $sql = $sql."and old<60 ";
  }
  $db = mysqli_connect("localhost","root","","user");
  $result = mysqli_query($db,$sql);
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
  <table border="1">
    <tr>
      <th>id</th>
      <th>email</th>
      <th>名前</th>
      <th>性別</th>
      <th>血液型</th>
      <th>年齢</th>
      <th>詳細</th>
    </tr>
    <?php 
      while($data = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$data["id"].'</td>';
        echo '<td>'.$data["email"].'</td>';
        echo '<td>'.$data["name"].'</td>';
        if ($data["gender"] == 0) {
          echo '<td>男</td>';
        } else {
          echo '<td>女</td>';
        }
        echo '<td>'.$data["blood"].'型</td>';
        echo '<td>'.$data["old"].'歳</td>';
        echo '<td><a href="detail.php?id='.$data["id"].'">詳細はこちら</a></td>';
        echo '</tr>';
      }
    ?>
</body>
</html>