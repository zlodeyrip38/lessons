<?php
require_once "users.php";

var_dump($_POST);

foreach ($users as $v)
{
    if($v['n1']==$_POST['name1'] AND $v['n2']==$_POST['name2'])
    {
        echo "ваш возраст ".$v['a']." лет";
    }
}
