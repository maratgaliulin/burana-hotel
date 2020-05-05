<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = '';

if(strlen($login) <= 2)
	$error = 'Введите логин';
else if(strlen($pass) <= 2)
	$error = 'Введите пароль';

if ($error != '') {
echo $error;
exit();
};

$hash = "oiuhl8768768ghfhgf";
$login = md5($login . $hash);
$pass = md5($pass . $hash);



require_once 'mad.php';

$sql = 'SELECT `id` FROM `superintendants` WHERE `login` = :login && `pass` = :pass';
$query = $pdo->prepare($sql);
$query->execute(['login' => $login, 'pass' => $pass]);
$user = $query->fetch(PDO::FETCH_OBJ);
  if($user->id == 0)
    echo 'Такого пользователя не существует';
  else {
    setcookie('log', $login, time() + 3600 * 24 * 30, "/");
    echo 'Ready';
};

 ?>
