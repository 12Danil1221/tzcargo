<?=

setcookie('name', $name, time() - 3600 * 24 * 30, "/");
header('Location: ../view/main_dashboard.php');