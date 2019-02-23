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
    echo $sql;
    $result = db($sql);

/*    foreach ($users as $v)
    {
        if(==$v['login'] AND $post['pass']==$v['password'])
        {
            $authorized = $v['name'];
        }
    }

    if($authorized)
    {
        echo "Добро пожаловать на сайт, ".$authorized;
    }
    else
    {
        echo "Неправильные логин или пароль";
    }*/

}
