<div class="all-services_item">
    <?php 
    $db = new Database();
    $result = $db->query('SELECT * FROM `managers`, `users` WHERE href_manager =  "'.$_COOKIE['name'].'" || href_client =  "'.$_COOKIE['name'].'"')->fetchAll(PDO::FETCH_ASSOC);


?>

    <div class="all-services_item-rectangle3">
        <div class="all-services_item-eclipse">
            <img class="all-services_item-img" src="../img/airplane-flight.png" alt="">
        </div>
        <?php foreach($result as $el):?>
        <p class="all-services_p-info">
            <?= $el['name'] ?>
        </p>
    </div>
</div>
<div class="all-services_item2">
    <div class="all-services_item-rectangle3">
        <div class="all-services_item-eclipse">
            <img class="all-services_item-img" src="../img/airplane-flight.png" alt="">
        </div>
        <p class="all-services_p-info">
            +<?= $el['INN'] ?>
        </p>

    </div>
</div>
<div class="all-services_item3">
    <div class="all-services_item-rectangle3">
        <div class="all-services_item-eclipse">
            <img class="all-services_item-img" src="../img/airplane-flight.png" alt="">
        </div>
        <p class="all-services_p-info">
            <?= $el['address']?>
        </p>

    </div>
</div>
<div class="all-services_item4">
    <div class="all-services_item-rectangle3">
        <div class="all-services_item-eclipse">
            <img class="all-services_item-img" src="../img/airplane-flight.png" alt="">
        </div>
        <p class="all-services_p-info">
            <?= $el['email']?>
        </p>

    </div>
</div>
<div class="all-services_item5">
    <div class="all-services_item-rectangle3">
        <div class="all-services_item-eclipse">
            <img class="all-services_item-img" src="../img/airplane-flight.png" alt="">
        </div>
        <p class="all-services_p-info">
            <?= $el['number']?>
        </p>

    </div>
</div>
<div class="all-services_item6">
    <div class="all-services_item-rectangle3">
        <div class="all-services_item-eclipse">
            <img class="all-services_item-img" src="../img/airplane-flight.png" alt="">
        </div>
    </div>
</div>
<div class="all-services_item7">
    <div class="all-services_item-rectangle3">
        <div class="all-services_item-eclipse">
            <img class="all-services_item-img" src="../img/airplane-flight.png" alt="">
        </div>
    </div>
</div>
<div class="all-services_item8">
    <div class="all-services_item-rectangle3">
        <div class="all-services_item-eclipse">
            <img class="all-services_item-img" src="../img/airplane-flight.png" alt="">
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="rectangle2">

</div>