<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規会員登録</title>
  <!-- BootstrapのCSSファイルを読み込む -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <form>
    <div class="form-group">
      <label for="username">ユーザーネーム</label>
      <input type="text" class="form-control" id="username" placeholder="ユーザーネームを入力してください">
    </div>
    <div class="form-group">
      <label for="password">パスワード</label>
      <input type="password" class="form-control" id="password" placeholder="パスワードを入力してください">
    </div>
    <button type="submit" class="btn btn-primary">登録する</button>
  </form>
</div>

<!-- BootstrapのJavaScriptファイルを読み込む -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
