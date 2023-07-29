<?php
$sql = 'INSERT INTO article_details (titles, contents) VALUE (:titles, :contents)';
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':titles', $title);
$stmt->bindValue(':contents', $content);
$stmt->execute();
$dbh = null;