<?php

$menu = pagesList();
foreach ($menu as $page)
{?>
    <div class="pages_list">
        <div class="row">
            <div class="col-md">
                <a href='?page=pageedit&id=<?=$page['id']?>'> <?=$page['menu_name']?></a>
            </div>
            <div class="col-md">
                <a href='?page=pageedit&id=<?=$page['id']?>'>редактировать</a>
            </div>
            <div class="col-md">
                <a href='?page=pagedelete&id=<?=$page['id']?>'>удалить</a>
            </div>
        </div>
    </div>
<?php


}