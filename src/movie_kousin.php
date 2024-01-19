<?php require 'header.php';?>
<?php require 'movie_menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>更新画面</title>
    </head>
    <body>
        <div class="th0">映画名</div>
        <div class="th1">監督名</div>
<?php
    $pdo=new PDO($connect, USER, PASS);
 
    foreach ($pdo->query('select * from movie') as $row) {
        echo '<form action="movie_kousinOK.php" method="post">';
        echo '<input type="hidden" name="movie_id" value="', $row['movie_id'], '">';
        echo '<div class="td0">';
        echo '<input type="text" name="movie_name" value="', $row['movie_name'], '">';
        echo '</div>';
        echo '<div class="td1">';
        echo '<input type="text" name="movie_artistname" value="', $row['movie_artistname'], '">';
        echo '</div> ';
        echo '<div class="td2"><input type="submit" value="更新"></div>';;
        echo '</form>';
        echo "\n";
    }
?>
 
    </body>
</html>