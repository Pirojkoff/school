<?php
require_once('../view/template/header.php');
?>
    <form method="POST" action="index.php?action=<?= $action ?>-teacher">
        <input type="hidden" id="id" name="id" value="<?= isset($teacher->id) ? $teacher->id : '' ?>">

        <div class="form-group">
            <label for="firstName">Имя учителя</label>
            <input type="text" class="form-control" id="first-name" name="firstName" placeholder="Имя"
                   value="<?= isset($teacher->firstName) ? $teacher->firstName : '' ?>">
        </div>
        <div class="form-group">
            <label for="lastName">Фамилия учителя</label>
            <input type="text" class="form-control" id="last-name" name="lastName" placeholder="Фамилия"
                   value="<?= isset($teacher->lastName) ? $teacher->lastName : '' ?>">
        </div>
        <div class="form-group">
            <label for="lesson">Предмет</label>
            <input type="text" class="form-control" id="lesson" name="lesson" placeholder="Предмет"
                   value="<?= isset($teacher->lesson) ? $teacher->lesson : '' ?>">
        </div>
        <div class="form-group">
            <label for="class">Класс</label>
            <input type="text" class="form-control" id="class" name="class" placeholder="Класс"
                   value="<?= isset($teacher->class) ? $teacher->class : '' ?>">
        </div>
        <button type="submit" class="btn btn-default">Отправить</button>
    </form>
<?php
require_once('../view/template/footer.php');
?>