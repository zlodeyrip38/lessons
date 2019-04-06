<?php

$menu = pagesList();
foreach ($menu as $page)
{
    echo $page['menu_name'];
}
