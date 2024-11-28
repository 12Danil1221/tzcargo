<?=require '../blocks/header.php'?>
<?=require '../func/db.php'?>
<main style="top:200px;">
    <h1>Основное окно для выбора груза:</h1>
    <table class="table table-bordered align-middle">
        <tr>
            <th>
                ID
            </th>
            <th>
                Название груза
            </th>
            <th>
                Клиент
            </th>
            <th>
                Менеджер
            </th>
            <th>
                Документ с ценой груза
            </th>
            <th>
                Описание груза
            </th>
            <th>
                Дата прибытия
            </th>
            <th>
                Статус груза
            </th>

        </tr>
        <tr>
            <?php if(isset($_COOKIE['name'])): ?>
            <?php 
                $db = new Database();
                $results = $db->query('SELECT * FROM `cargo` WHERE href_manager = \'\'')->fetchAll(PDO::FETCH_OBJ);
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

                <?php 
                $db = new Database();
                $results2 = $db->query('SELECT * FROM cargo WHERE href_manager = \'\'')->fetchAll(PDO::FETCH_OBJ);
                ?>
                <?php foreach($results2 as $result) :?>
                <li><?= $result->href_client ?></li>

                <?php endforeach;?>
            </td>
            <td>
                <?php 
                $db = new Database();
                $results3 = $db->query('SELECT * FROM managers WHERE name = "'.$_COOKIE['name'].'"')->fetchAll(PDO::FETCH_OBJ);
                ?>
                <?php foreach($results as $result) :?>

                <form class="form2" action="../func/cargos_manager.php" method="post">
                    <input type="hidden" name="id" value="<?=$result->id?>">
                    <input type="hidden" name="href_manager" value="<?=$_COOKIE['name']?>">
                    <button style="width: 250px;" type="submit">Стать менеджером этого груза</button>
                </form>

                <?php endforeach;?>
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
                <?php endif; ?>
        </tr>
    </table>
    <td>

</main>

<?=require '../blocks/footer.php'?>