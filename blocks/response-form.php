<?php
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$response = trim(filter_var($_POST['response'], FILTER_SANITIZE_STRING));

$error = '';

if(strlen($response) <= 1)
	$error = 'Введите Ваш отзыв';

if ($error != '') {
echo $error;
exit();
}

include_once 'mad.php';

$sql = 'INSERT INTO `response` (`name`, `response`) VALUES (?, ?)';
$query = $pdo -> prepare($sql);
$query->execute([$name, $response]);

echo 'Ready';

 ?>
