<?php

require_once 'mad.php';

$sql = 'SELECT * FROM `registration` ORDER BY `id` DESC';
$query = $pdo->prepare($sql);
$query->execute([$id, $username]);
$comments = $query->fetchAll(PDO::FETCH_OBJ);

foreach ($comments as $comment) {
echo "<p>$comment->id. $comment->start_date - $comment->end_date: $comment->roomtype; $comment->username; $comment->surname; $comment->email; $comment->phone</p><br>";
};

 ?>
