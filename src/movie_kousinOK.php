<?php require 'header.php';?>
<?php require 'movie_menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>更新完了！</title>
    </head>
    <body>
<?php
    $pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update movie set movie_name=?,movie_artistname=? where movie_id=?');
if (empty($_POST['movie_name'])){
    echo'映画名を入力してください。';
}else if (empty($_POST['movie_artistname'])){
    echo'監督名を入力してください。';
} else if ($sql->execute([htmlspecialchars($_POST['movie_name']),$_POST['movie_artistname'],$_POST['movie_id']])){
        echo '更新に成功しました';
    } else {
        echo '更新に失敗しました';
    }
?>
    </body>
</html>