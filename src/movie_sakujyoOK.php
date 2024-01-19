<?php require 'header.php';?>
<?php require 'movie_menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>削除完了！</title>
    </head>
    <body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from movie where movie_id=?');
    if ($sql->execute([$_GET['id']])) {
        echo '削除に成功しました。';
    } else {
        echo '削除に失敗しました。';
    }
?>
 
    </body>
</html>