<?= 

require '../func/db.php';

$id = htmlspecialchars($_POST['id']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);

$db = new Database();
$result = $db->query('SELECT id FROM users; managers WHERE name = ? AND email = ?')->fetchAll(PDO::FETCH_ASSOC);

if($result === 0){
    echo "Такого пользователя нету";
}else{
    setcookie('name', $name, time() + 3600 * 24 * 30, "/");
    header('Location: ../view/main_dashboard.php');
}