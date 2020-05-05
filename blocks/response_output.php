<?php
include_once 'mad.php';

$sql = 'SELECT * FROM `response` ORDER BY `id` DESC LIMIT 10';
$query = $pdo->prepare($sql);
$query->execute([$name, $response]);
$comments = $query->fetchAll(PDO::FETCH_OBJ);

foreach ($comments as $comment) {
echo "<div class='jumbotron response-paragraph' id='response-paragraph'>
	<h4 class='display-4 mb-3'>$comment->name</h4>
<p class='lead bg-transparent'>$comment->response</p>
</div>";
}

 ?>
