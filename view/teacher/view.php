<?php
require_once('../view/template/header.php');
?>
    <div class="panel panel-default">
        <div class="panel-heading">Просмотр учителей</div>
        <div class="panel-body">
            <p>
                <strong>Имя: </strong><?= $teacher->firstName ?>
            </p>
            <p>
                <strong>Фамилия: </strong><?= $teacher->lastName ?>
            </p>
            <p>
                <strong>Предмет: </strong><?= $teacher->lesson ?>
            </p>
            <p>
                <strong>Класс: </strong><?= $teacher->class ?>
            </p>
        </div>
    </div>
<?php
require_once('../view/template/footer.php');
?>