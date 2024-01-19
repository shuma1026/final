<?php require 'header.php';?>
<?php require 'movie_menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>削除画面</title>
    </head>
    <body>
        <table>
    <tr><th>映画番号</th><th>映画名</th><th>監督名</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from movie') as $row) {
        echo '<tr>';
        echo '<td>',$row['movie_id'], '</td>';
        echo '<td>',$row['movie_name'], '</td>';
        echo '<td>',$row['movie_artistname'], '</td>';
        echo '<td>';
        echo '<a href="movie_sakujyoOK.php?id=', $row['movie_id'], '">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
 
?>
    </table>
    </body>
</html>