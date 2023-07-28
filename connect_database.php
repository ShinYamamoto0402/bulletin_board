<?php
$user = 'root';
$pass = 'test';
try{
    $dbh = new PDO('mysql:host=localhost;dbname=bulletin_board', $user, $pass);
    echo 'success';
} catch (PDOException $e) {
    echo 'false';
}
?>