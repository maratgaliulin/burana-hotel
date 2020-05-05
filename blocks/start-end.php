<?php
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

include_once 'mad.php';

$sql = 'INSERT INTO `dates` (`start_date`, `end_date`) VALUES (:start_date, :end_date)';
$query = $pdo -> prepare($sql);
$query->execute(['start_date' => $start_date, 'end_date' => $end_date]);

 ?>
