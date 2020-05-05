<?php

require_once 'mad.php';

$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);


$error = '';

if(strlen($id) == '')
	$error = 'Введите идентификатор';

if ($error != '') {
echo $error;
exit();
};

$sql = "DELETE FROM `response` WHERE `response`.`id` = '$id'";
$query = $pdo -> query($sql);

echo 'Отзыв удален!';

 ?>
