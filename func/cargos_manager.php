<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$href_manager = htmlentities($_POST['href_manager']);
$id = htmlentities($_POST['id']);

$sql = 'UPDATE `cargo`  SET `href_manager` = \''.$_COOKIE['name'].'\' WHERE `cargo`.`id` = \''.$_POST['id'].'\'';
$query = $pdo->prepare($sql);
$query->execute();

header('Location: ../view/main_dashboard.php');