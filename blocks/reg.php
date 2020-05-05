<?php
$start_date_1 = $_POST['start_date_1'];
$end_date_1 = $_POST['end_date_1'];
$roomtype = $_POST['roomtype'];
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$surname = trim(filter_var($_POST['surname'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$phone = trim(filter_var($_POST['phone'], FILTER_SANITIZE_STRING));


$error = '';

if(strlen($username) <= 2)
	$error = 'Введите имя';
else if(strlen($surname) <= 2)
	$error = 'Введите фамилию';
else if(strlen($phone) <= 4)
	$error = 'Введите номер телефона';
else if(strlen($email) <= 5)
	$error = 'Введите email';

if ($error != '') {
echo $error;
exit();
}


require_once 'mad.php';

$sql = 'INSERT INTO `registration` (`start_date`, `end_date`, `roomtype`, `username`, `surname`, `email`, `phone`) VALUES (?, ?, ?, ?, ?, ?, ?)';
$query = $pdo -> prepare($sql);
$query->execute([$start_date_1, $end_date_1, $roomtype, $username, $surname, $email, $phone]);

echo 'Ready';


 ?>
