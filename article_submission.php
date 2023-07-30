<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>記事投稿画面</title>
    <!-- BootstrapのCSSファイルを読み込む -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            max-width: 600px;
        }

        .form-group label {
            font-weight: 600;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .back-link {
            display: inline-block;
            text-decoration: none;
            color: #007bff;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <?php require_once 'nav.php' ?>


    <!-- ここに記事投稿画面のコンテンツを記述 -->
    <div class="container">
        <form action="completion.php" method="post">
            <div class="form-group">
                <label for="title">記事タイトル</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="記事のタイトルを入力してください" required>
            </div>
            <div class="form-group">
                <label for="content">記事本文</label>
                <textarea class="form-control" id="content" name="content" rows="8" placeholder="記事の内容を入力してください" required></textarea>
            </div>
            <button type="submit" name="article_submission_flg" value="1" class="btn btn-primary">投稿する</button>
        </form>
    </div>
    <div class="container mt-4">
        <a href="index.php" class="back-link">Back to Top</a>
    </div>

    <!-- BootstrapのJavaScriptファイルを読み込む -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>