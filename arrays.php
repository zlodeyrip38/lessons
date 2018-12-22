<?php
require_once "header.php";

/*$fruits [] = "бананы";
$fruits [] = "апельсины";
$fruits [] = "яблоки";*/


//$fruits= array("апельсин"=>3,"бананы"=>8,"яблоки"=>6);
//echo $fruits ["апельcин"];
$y['z']=9;
$y['o']=5;
$y['j']=2;
echo $y['o'] ['l'];

foreach ($y as $key => $value  )
{
    echo  $value ;
}

require_once "footer.php";