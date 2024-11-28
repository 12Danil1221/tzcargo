<?php require '../blocks/header.php';?>

<main>
    <form class="form" action="../func/addgruz.php" method="post">
        <input type="text" name="title">
        <br>
        <input type="hidden" name="href_client" value="<?=$_COOKIE['name']?>">
        <br>
        <button type="submit">Завести груз</button>
    </form>
</main>

<?php require '../blocks/footer.php';?>