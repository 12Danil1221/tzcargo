<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Грузовые перевозки</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <header>
        <div class="top-line">
            <div class="top-line__lang">
                <p class="FR">FR</p>
                <p class="ENG">ENG</p>
                <p class="RUS">РУС</p>
            </div>
            <p class="email">sales@log.ru</p>
            <p class="tel">8 (800) 123-45-67</p>
            <div class="rectangle">

            </div>
        </div>
        <div class="first-line">
            <a href="../view/main_dashboard.php">
                <div class="logo">
                    <img src="../img/logo.png" alt="">
                </div>
            </a>
            <div class="first-line__main-menu">
                <?php if(!isset($_COOKIE['name'])):?>
                <p class="reg"><a href="../view/reg.php">Регистрация</a></p>
                <p class="auth"><a href="../view/auth.php">Авторизация</a></p>
                <?php endif ?>
                <?php if(isset($_COOKIE['name'])): ?>
                <?php
                $pdo = new PDO('mysql:host=localhost;dbname=test','root','');
                $sql = 'SELECT * FROM `users`  WHERE `name` = \''.$_COOKIE['name'].'\'';
                $query = $pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_NUM);
                if($result){
                    echo '<p class="addgruz"><a href="../view/addgruz.php">Завести груз</a></p>';
                    }else{
                        echo '<p class="uslugi"><a href="../view/newcargos.php">Новые грузы</a></p>';
                        echo '<p><a class="redact_gruz" href="../view/redact_gruz.php">Редактировать груз</a></p>';
                    }
                    ?>

                <p class="profil"><a href="../view/profil.php">Профиль</a></p>
                <p class="auth"><a href="../func/logout.php">Выход</a></p>
                <?php endif;
                ?>

                <p class="contact">контакты</p>
                <p class="vakans">вакансии</p>
                <p class="about">О компании</p>
            </div>
            <p class="nashiofisi">Наши офисы</p>
            <div class="placeholder">
                <img src="../img/placeholder.png" alt="">
            </div>
            <div class="line">

            </div>
        </div>

    </header>