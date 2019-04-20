<?php

function db($sql)
{
    $connection = mysqli_connect("localhost","denes",12345,"denes");
    mysqli_query($connection, "SET NAMES utf8");

    if ($sql)
    {
        $result = mysqli_query($connection,$sql);
        return $result;
    }
}

function login($post)
{
    $sql =  "SELECT name, surname FROM user WHERE login='{$post['login']}' AND password='{$post['pass']}'";

    if($result = db($sql))
    {
        $user = mysqli_fetch_assoc($result);
        if(!empty($user))
        {
            $_SESSION['authorized'] = $user['name']." ".$user['surname'];
        }

    }

    if($_SESSION['authorized'])
    {
        echo "Добро пожаловать на сайт";
        header('Refresh: 1; URL=index.php');
    }
    else
    {
        echo "Неправильные логин или пароль";
        header('Refresh: 1; URL=index.php');
    }

}

function pagesList ()
{
    $sql="SELECT id, menu_name, created, updated FROM pages";
    $pages = db($sql);
    while ($menu = mysqli_fetch_assoc($pages))
    {
        $menus[] = $menu;
    }

    return $menus;
}

function dataForPageEdit ($id)
{
    $sql="SELECT id, content, menu_name FROM pages WHERE id='{$id}'";
    $page = db($sql);
    $one_page = mysqli_fetch_assoc($page);
    return $one_page;
}

function saveDataForPage($post,$id)
{
    $date = time();
    $sql = "UPDATE pages SET menu_name='{$post['menu_name']}', content='{$post['content']}', updated = '{$date}' WHERE id='{$id}'";
    $page = db($sql);
    $one_page = mysqli_fetch_assoc($page);
    return $one_page;
}

function addNewPage($post)
{
    $date = time();
    $sql = "INSERT INTO pages (menu_name, content, created) VALUES ('{$post['menu_name']}','{$post['content']}','{$date}')";
    if ($page = db($sql))
    {
        echo "Новая станица была успешно добавлена";
    }
}