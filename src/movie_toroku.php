<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>映画情報登録画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <p>映画を登録する</p>
   <form action="movie_torokuOK.php" method="post">
   <p>映画名<input type="text" name="movie_name"></p>
    <p>監督名<input type="text" name="movie_artistname"></p>
    <button type="submit">登録</button>
</form>
</body>
</html>