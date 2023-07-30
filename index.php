<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #fff;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <?php require_once 'nav.php' ?>

    <!-- 記事一覧 -->
    <div class="container mt-4">
        <?php
        // DB接続
        require_once 'connect_database.php';
        // DB処理
        require_once 'read.php';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['titles'] . '</h5>';
            echo '<p class="card-text">' . $row['contents'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- メインコンテンツ -->
    <div class="container mt-4">
        <a href="article_submission.php" class="btn btn-primary">記事を投稿</a>
    </div>

    <!-- Bootstrapのスクリプトリンク -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
