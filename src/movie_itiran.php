<?php require 'header.php';?>
<?php require 'movie_menu.php'; ?>
<?php require 'db-connect.php'; ?>
<form action="music_itiran.php" method="post">
<?php
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>映画情報管理画面</title>
	</head>
<body>
<table aligin="center">
    <?php
    $pdo=new PDO($connect, USER, PASS);
    $date=date('Y-m-d');
        
        foreach ($pdo->query('select * from movie') as $row) {
            echo '<tr>';

            echo '<td>';
            echo $row['movie_id'];
            echo '</td>';

            echo '<td>';
            echo $row['movie_name'];
            echo '</td>';

            echo '<td>';
            echo $row['movie_artistname'];
            echo '</td>';
        }
    ?>
    </table>
    <a href="movie_menu.php">メニューへ戻る</a>
    </body>
    </html>
    