<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$data_pribit = htmlentities($_POST['data_pribit']);
$statuses = htmlentities($_POST['statuses']);
$id = htmlentities($_POST['id']);

$sql = 'UPDATE `cargo`  SET `data_pribit` = \''.$data_pribit.'\',  `statuses` = \''.$statuses.'\' WHERE `cargo`.`id` = \''.$_POST['id'].'\'';
$query = $pdo->prepare($sql);
$query->execute();

header('Location: ../view/main_dashboard.php');