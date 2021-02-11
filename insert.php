<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="create.php" method="post">
    <label for="email">email</label>
    <input type="text" id="email" name="email">
    <label for="password">Password</label>
    <input type="text" id="password" name="password">
    <label for="name">名前</label>
    <input type="text" id="name" name="name">
    <label for="gender">性別</label>
    <input type="radio" id="gender" name="gender" value="0">男
    <input type="radio" id="gender" name="gender" value="1">女
    <label for="blood">血液型</label>
    <select name="blood" id="blood">
      <option value="A">A型</option>
      <option value="B">B型</option>
      <option value="O">O型</option>
      <option value="AB">AB型</option>
    </select>
    <label for="old">年齢</label>
    <input type="text" id="old" name="old">
    <label for="memo">メモ</label>
    <textarea name="memo"  cols="20" rows="4" maxlength="100"></textarea>
    <input type="submit" value="新規作成">
  </form>
</body>
</html>