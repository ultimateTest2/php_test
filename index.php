<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="mypage.php" method="POST">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="入力してください" required>
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <input type="submit">
  </form>
  <a href="insert.php">会員の新規登録</a>
</body>
</html>