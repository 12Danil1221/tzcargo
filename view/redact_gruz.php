<?=require '../blocks/header.php'?>
<?=require '../func/db.php'?>
<main style="top:200px;">
    <h1>Основное окно для редактирования груза:</h1>
    <table class="table table-bordered w-100">
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
            <th>
                Действие
            </th>

        </tr>
        <tr>
            <?php if(isset($_COOKIE['name'])): ?>
            <?php 
                $db = new Database();
                $results = $db->query('SELECT * FROM `cargo`')->fetchAll(PDO::FETCH_OBJ);
                ?>
            <td>
                <?php foreach($results as $result) :?>
                <?= $result->id ?><br>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <?= $result->title ?><br>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <?= $result->href_client ?><br>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <?= $result->href_manager ?><br>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <?= $result->price ?>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($results as $result) :?>
                <?= $result->content ?>
                <?php endforeach;?>
            </td>
            <form class="form2 m-2" action="../func/redact_gruz.php" method="post">
                <td>
                    <?php foreach($results as $result) :?>
                    <input type="data" name="data_pribit">
                    <?php endforeach;?>
                </td>
                <td>
                    <?php foreach($results as $result) :?>
                    <select class="m-1 p-1" name="statuses">
                        <option value="">Выбирите статус груза:</option>
                        <option value="On board">On board</option>
                        <option value="Finished">Finished</option>
                    </select>

                    <?php endforeach;?>
                    <?php endif; ?>

                <td>
                    <?php foreach($results as $result) :?>
                    <input type="hidden" name="id" value="<?=$result->id?>">
                    <button style="width: 180px;" class="m-1 btn btn-primary" type="submit">Редактировать груз</button>

                    <?php endforeach;?>
            </form>
        </tr>
    </table>

</main>

<?=require '../blocks/footer.php'?>