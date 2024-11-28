<?= require '../func/db.php'?>
<?= require '../blocks/header.php'?>
<main>
    <form class="form" action="../func/reg.php" method="post">
        <input type="text" name="name">
        <br>
        <input type="int" name="INN">
        <br>
        <input type="int" name="address">
        <br>
        <input type="email" name="email">
        <br>
        <input type="phone" name="number">
        <br>
        <input type="text" name="href_client">

        <button type="submit">Зарегестрироваться</button>
    </form>
</main>
<?= require '../blocks/footer.php'?>