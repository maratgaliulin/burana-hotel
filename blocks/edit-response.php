<?php

require_once 'mad.php';

$sql = 'SELECT * FROM `response` ORDER BY `id` DESC';
$query = $pdo->prepare($sql);
$query->execute([$name, $response]);
$comments = $query->fetchAll(PDO::FETCH_OBJ);

foreach ($comments as $comment) {
echo "<p>$comment->id. $comment->name: $comment->response. $comment->date</p><br>";
};

 ?>
