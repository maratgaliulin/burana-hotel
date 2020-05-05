<?php
$user_name = trim(filter_var($_POST['user_name'], FILTER_SANITIZE_STRING));
$sur_name = trim(filter_var($_POST['sur_name'], FILTER_SANITIZE_STRING));
$e_mail = trim(filter_var($_POST['e_mail'], FILTER_SANITIZE_EMAIL));


$error = '';

if(strlen($user_name) <= 3)
	$error = 'Введите имя';
if(strlen($sur_name) <= 3)
	$error = 'Введите фамилию';
if(strlen($e_mail) <= 5)
	$error = 'Введите email';

if ($error != '') {
echo $error;
exit();
}


include_once 'mad.php';

$sql = 'INSERT INTO `news` (`id`, `username`, `surname`, `email`) VALUES (NULL, ?, ?, ?)';
$query = $pdo -> prepare($sql);
$query->execute([$user_name, $sur_name, $e_mail]);

echo 'Ready';


 ?>
