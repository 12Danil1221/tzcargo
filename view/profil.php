<?= require '../blocks/header.php'?>
<?= require '../func/db.php'?>

<div class="all-services">
    <?php
    $db = new Database();
    $result = $db->query('SELECT * FROM `managers`  WHERE `name` = \''.$_COOKIE['name'].'\'')->fetchAll(PDO::FETCH_NUM);
    if($result){
            echo '<p class="all-services_p-title">Здравствуйте '.$_COOKIE['name'].'<br> Ваша роль: менеджер</p>';
            require '../view/profilmanager.php';
        }else {
            echo '<p class="all-services_p-title">Здравствуйте '.$_COOKIE['name'].'<br> Ваша роль: пользователь</p>';
            
            require '../view/profilclient.php';
        }
    ?>
    <?php  

    ?>
</div>
<?php require '../blocks/footer.php'?>