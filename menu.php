    <h2>Меню</h2>
    <ul>
    <?php
    $menu = pagesList();

    foreach ($menu as $menu_item)
    {
        echo "<li><a href=\"index.php?page={$menu_item['id']}\">{$menu_item['menu_name']}</a></li>";
    }
    ?>
    </ul>