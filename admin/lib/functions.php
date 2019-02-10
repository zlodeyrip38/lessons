<?php

function login($post)
{
  require_once "users.php";
  foreach ($users as $v)
  {
      if($post['login']==$v['login'] AND $post['pass']==$v['password'])
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
  }

}
