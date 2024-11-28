<?= require '../func/db.php'?>
<?= require '../blocks/header.php'?>
<main>


    <form class="form" action="../func/auth.php" method="post">
        <input type="hidden" name="id">

        <input type="text" name="name">
        <br>
        <input type="email" name="email">
        <br>
        <br>

        <button type="submit">Авторизоваться</button>
    </form>
</main>
<?= require '../blocks/footer.php'?>