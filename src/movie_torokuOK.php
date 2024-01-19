<?php require 'header.php';?>
<?php require 'movie_menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>追加完了！</title>
</head>
<body>
    <?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into movie(movie_name, movie_artistname) values (?, ?)');
    if (empty($_POST['movie_name'])){
        echo'映画名を入力してください。';
    }else if (empty($_POST['movie_artistname'])){
        echo'監督名を入力してください。';
    }else if($sql->execute([$_POST['movie_name'], $_POST['movie_artistname']])) {
        echo '<font color="red">追加に成功しました</font>';
    }else{
        echo '<font color="red">追加に失敗しました</font>';
    }
    ?>
    <br><hr><br>
   
    </body>
</html>
</body>
</html>