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
            $_SESSION['authorized'] = $user['name']." ".$user['surname']." | <a href='?page=exit'>выход</a>";
        }

    }

    if($_SESSION['authorized'])
    {
        echo "Добро пожаловать на сайт";
    }
    else
    {
        echo "Неправильные логин или пароль";
    }

}
