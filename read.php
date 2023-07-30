<?php
// データベースの値を取得して表示
$sql = 'SELECT * FROM article_details ORDER BY created_at DESC';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dbh = null;
