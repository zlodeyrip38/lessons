<?php
require_once "header.php";
?>

<form method="post">
    <h1>Таблица Пифагора</h1>
    строк<input type="text" name="tr">
    столбцов<input type="text" name="td">
    <input type="submit" value="Нарисовать таблицу">
</form>

<?php
pifagor($_POST['tr'],$_POST['td']);


require_once "footer.php";
?>






