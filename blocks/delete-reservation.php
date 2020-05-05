<?php

require_once 'mad.php';

$reserv_id = filter_var($_POST['reserv_id'], FILTER_SANITIZE_STRING);


$error = '';

if(strlen($reserv_id) == '')
	$error = 'Введите идентификатор';

if ($error != '') {
echo $error;
exit();
};

$sql = "DELETE FROM `registration` WHERE `registration`.`id` = '$reserv_id'";
$query = $pdo -> query($sql);

echo 'Бронь удалена!';

 ?>
