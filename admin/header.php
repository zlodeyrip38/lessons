<?php
session_start();
require_once "lib/functions.php";
?>
</<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <?php
        if($_SESSION['authorized'])
        {?>
              <link href="style/style.css" rel="stylesheet" />
        <?php
        }
        else
        {?>
            <link href="style/login.css" rel="stylesheet" />
        <?php
        }?>
    <title>Document</title>
</head>
<body class="text-center">

<?php if($_SESSION['authorized'])
{?>

        <div id="header" class="row">
            <div class="col-md-2">
                <img src="../img/logo.png">
            </div>
            <div class="col-md-9">
                <h1>Система администрирования сайта</h1>
            </div>
        </div>

        <div class="row">
            <div  id="menu" class="col-md-2">
                <h3>МЕНЮ</h3>
                <ul>
                    <li> <?=$_SESSION['authorized']?> | <a href='?page=exit'>выход</a></li>
                    <li><a href='?page=pageslist'>список страниц</a></li>
                    <li><a href='?page=pageadd'>дабавить страницу</a></li>
                    <li><a href='?page=bloglist'>блог</a></li>
                    <li><a href="http://localhost/denes/index.php" target="_blank">на сайт</a> </li>
                </ul>
            </div>
            <div class="col-md-9 content">
                <?require_once  "router.php";?>
            </div>
        </div>
<?php
}
else
{
        require_once  "router.php";
}