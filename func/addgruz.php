<?php 
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$title = htmlspecialchars($_POST['title']);
$href_client = htmlspecialchars($_POST['href_client']);

$sql = 'INSERT INTO cargo(title, href_client) VALUES(?,?)';
$query = $pdo->prepare($sql);
$query->execute([$title,$href_client]);

header('Location: ../view/main_dashboard.php');