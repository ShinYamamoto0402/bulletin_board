<!DOCTYPE html>
<html lang="en">

<style>
    .success {
        font-size: 3rem;
    }
</style>

<?php
// Validation
require_once 'validation.php';
// DB接続
require_once 'connect_database.php';
// DB処理
require_once 'crud.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完了画面</title>
    <!-- BootstrapのCSSファイルを読み込む -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <p class="success">Success</p>
        <a href="index.php">Back to Top</a>
    </div>
</body>

</html>