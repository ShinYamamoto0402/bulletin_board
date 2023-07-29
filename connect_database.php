<?php
$user = 'root';
$pass = 'test';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=bulletin_board', $user, $pass);
} catch (PDOException $e) {
    echo "エラー: " . $e->getMessage();
}
