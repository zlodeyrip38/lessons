<?php

function login($data)
{
  require_once "users.php";
  foreach ($users as $user)
  {
      if($data['login']==$user['login'] AND $data['pass']==$user['password'])
      {
        $authorized = $user['name'];
      }
  }
  
  if($authorized)
  {
      echo "Добпро пожаловать на сайт, ".$authorized;
  }
  else
  {
      echo "Неправильные логин или пароль";
  }

}
