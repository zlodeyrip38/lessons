<?php
?>
<form method="post">


</form>

<div class="content">
    <div class="row header">
        <div class="col-md-12">
            добавление новой страницы
        </div>
    </div>
    <form method="post">
        <div class="row">
            <div class="col-md-2">
                Название страницы в меню
            </div>
            <div class="col-md-10">
                <input type="text" name="menu_name" value="<?=$page['menu_name']?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                Контент
            </div>
            <div class="col-md-10">
            <textarea name="content">
                <?=$page['content']?>
            </textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
                <input type="submit" value="Сохранить">
            </div>
        </div>
    </form>

</div>