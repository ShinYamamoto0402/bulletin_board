<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完了画面</title>
    <!-- BootstrapのCSSファイルを読み込む -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            text-align: center;
            margin-top: 100px;
        }

        .success {
            font-size: 3rem;
            color: #28a745;
        }

        .back-link {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            color: #007bff;
            font-weight: 600;
        }
    </style>
</head>

<?php
// Validation
require_once 'validation.php';
// DB接続
require_once 'connect_database.php';
// DB処理
require_once 'create.php';
?>

<body>

    <?php require_once 'nav.php' ?>


    <div class="container">
        <p class="success">Success</p>
        <a href="index.php" class="back-link">Back to Top</a>
    </div>
</body>

</html>