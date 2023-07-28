<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>記事投稿画面</title>
    <!-- BootstrapのCSSファイルを読み込む -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- ここに記事投稿画面のコンテンツを記述 -->
    <div class="container mt-5">
        <form action="completion.php" method="post">
            <div class="form-group">
                <label for="title">記事タイトル</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="記事のタイトルを入力してください" required>
            </div>
            <div class="form-group">
                <label for="content">記事本文</label>
                <textarea class="form-control" id="content" name="content" rows="8" placeholder="記事の内容を入力してください" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">投稿する</button>
        </form>
    </div>

    <!-- BootstrapのJavaScriptファイルを読み込む -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>