<?php
// error_reporting(0);
if ($_POST['article_submission_flg'] == 1) {
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
}
