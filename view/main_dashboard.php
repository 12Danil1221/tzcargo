<?php require '../blocks/header.php' ?>
<?php require '../func/db.php' ?>
<?php  
?>
<div class="first-screen">
    <div class="rectangle4">
        <p class="info">Перевозка крупногабаритных грузов по России и Европе. Полное<br> экспедирование,
            страхование,
            упаковка и
            хранение грузов</p>
        <p class="title">Грузовые перевозки</p>
    </div>
    <div class="rectangle2">
        <img src="../img/Rectangle 2.png" alt="">
    </div>
    <div class="mouse">

    </div>
</div>
<main>
    <h1>Основное окно грузов:</h1>
    <!-- Export -->
    <div class="col-md-12">
        <div class="float-end">
            <?php 
                if(isset($_COOKIE['name'])): 
                $db = new Database();
                $results3 = $db->query('SELECT * FROM users WHERE name = "'.$_COOKIE['name'].'"')->fetchAll(PDO::FETCH_NUM);
                if($results3){
                ?>
            <a href="exportclient.php" class="btn btn-success"><i class="dwn"></i>Export</a>
            <?php
            }else{
                ?>
            <a href="export.php" class="btn btn-success"><i class="dwn"></i>Export</a>
            <?php
            }
        endif;
            ?>
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>
                <li>ID</li>
            </th>
            <th>
                <li>Название груза</li>
            </th>
            <th>
                <li>Клиент</li>
            </th>
            <th>
                <li>Менеджер</li>
            </th>
            <th>
                <li>Документ с ценой груза</li>
            </th>
            <th>
                <li>Описание груза</li>
            </th>
            <th>
                <li>Дата прибытия</li>
            </th>
            <th>
                <li>Статус груза</li>
            </th>
        </tr>
        <tr>
            <?php if(isset($_COOKIE['name'])): ?>
            <?php 
                $db = new Database();
                $results = $db->query('SELECT * FROM cargo WHERE href_client = "'.$_COOKIE['name'].'" || href_manager = "'.$_COOKIE['name'].'"')->fetchAll(PDO::FETCH_OBJ);
?>
            <td>
                <?php foreach($results as $result) :?>
                <li><?= $result->id ?></li>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <li><?= $result->title ?></li>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <li><?= $result->href_client ?></li>
                <?php endforeach;?>
            </td>
            <td>
                <?php 
                $db = new Database();
                $cargo = $db->query('SELECT * FROM cargo WHERE href_client = "'.$_COOKIE['name'].'"')->fetchAll(PDO::FETCH_OBJ   );
                ?>
                <?php
                foreach($cargo as $result) :?>
                <li><?= $result->href_manager ?></li>
                <?php endforeach;
                ?>
                <?php 
                $db = new Database();
                $results3 = $db->query('SELECT * FROM managers WHERE name = "'.$_COOKIE['name'].'"')->fetchAll(PDO::FETCH_OBJ   );
                ?>
                <?php
                foreach($results3 as $result) :?>
                <li><?= $result->name ?> <?= $result->F ?></li>
                <?php endforeach;
                ?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <li><?= $result->price ?></li>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <li><?= $result->content ?></li>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <li><?= $result->data_pribit ?></li>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <li><?= $result->statuses ?></li>
                <?php endforeach;?>
            </td>
            <?php endif; ?>
        </tr>
    </table>
    <?php if(isset($_COOKIE['name'])){
        $_COOKIE['name'];
    }
        ?>
</main>

<?php require '../blocks/footer.php' ?>