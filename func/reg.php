<?= require '../func/db.php';
$name = htmlspecialchars($_POST['name']);
$INN = htmlspecialchars($_POST['INN']);
$address = htmlspecialchars($_POST['address']);
$email = htmlspecialchars($_POST['email']);
$number = htmlspecialchars($_POST['number']);
$href_client = htmlspecialchars($_POST['href_client']);



$sql = 'INSERT INTO users(name, INN, address, email, number, href_client) VALUES(?,?,?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$name, $INN, $address, $email, $number, $href_client]);

header('Location: ../view/main_dashboard.php');