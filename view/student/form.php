<?php
require_once('../view/template/header.php');
?>
    <form method="POST" action="index.php?action=<?= $action ?>-student">
        <input type="hidden" id="id" name="id" value="<?= isset($student->id) ? $student->id : '' ?>">

        <div class="form-group">
            <label for="firstName">Имя ученика</label>
            <input type="text" class="form-control" id="first-name" name="firstName" placeholder="Имя"
                   value="<?= isset($student->firstName) ? $student->firstName : '' ?>">
        </div>
        <div class="form-group">
            <label for="lastName">Фамилия ученика</label>
            <input type="text" class="form-control" id="last-name" name="lastName" placeholder="Фамилия"
                   value="<?= isset($student->lastName) ? $student->lastName : '' ?>">
        </div>
        <div class="form-group">
            <label for="class">Класс ученика</label>
            <input type="text" class="form-control" id="class" name="class" placeholder="Класс"
                   value="<?= isset($student->class) ? $student->class : '' ?>">
        </div>
        <button type="submit" class="btn btn-default">Отправить</button>
    </form>
<?php
require_once('../view/template/footer.php');
?>