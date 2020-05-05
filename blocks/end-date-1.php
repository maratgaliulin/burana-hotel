<?php
require_once 'mad.php';

$query = $pdo->query('SELECT * FROM `dates` ORDER BY `id` DESC LIMIT 1');
while($row = $query->fetch(PDO::FETCH_OBJ)) {
$row_display_end = $row->end_date;
}

 ?>
