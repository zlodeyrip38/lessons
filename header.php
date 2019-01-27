<?php
require_once "lib/functions.php";
?>
</<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link href="style/style.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>

<div id="header" class="row">
    <div class="col-md-2">
        <img src="img/logo.png">
    </div>
    <div class="col-md-9">
        <h1>Личный сайт Твердохлеба Дениса</h1>
    </div>
</div>

<div class="row">
    <div  id="menu" class="col-md-2">

        <?php
        require_once "menu.php";
        ?>

    </div>
    <div class="col-md-9 content">