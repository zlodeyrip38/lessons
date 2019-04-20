<?php
$page = dataForPageEdit($_GET['id']);

echo "Редактирование страницы ".$page['menu_name'];
?>
<form method="post">
    Названние страницы в меню
    <input type="text" name="menu_name" value="<?=$page['menu_name']?>">
    Контент
    <input type="text" name="content" value="<?=$page['content']?>">
    <input type="submit" value="Сохранить">
</form>
