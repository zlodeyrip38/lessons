<?php
function pifagor($tr,$td)
{
    echo "<table>";

    for ($i=1;$i<=$tr;$i++)
    {

        echo "<tr>";
        if($i==1)
        {
            for ($j=1;$j<=$td;$j++)
            {
                if ($j==1)
                {
                    echo "<td class='pifagor'></td>";
                }
                else
                {
                    echo "<td class='pifagor'>{$j}</td>";
                }

            }
        }
        else
        {
            for ($j=1;$j<=$td;$j++)
            {
                if ($j==1)
                {
                    echo "<td class='pifagor'>";
                }
                else
                {
                    echo "<td>";
                }
                echo $j*$i."</td>";
            }
        }
        echo "</tr>";
    }


    echo "</table>\n";
}

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

function pagesList ()
{
    $sql="SELECT id, menu_name FROM pages";
    $pages = db($sql);
    while ($menu = mysqli_fetch_assoc($pages))
    {
        $menus[] = $menu;
    }

    return $menus;
}

function dataForPage ($id)
{
    $sql="SELECT content,blog FROM pages WHERE id='{$id}'";
    $page = db($sql);
    $one_page = mysqli_fetch_assoc($page);
    return $one_page;
}

function dataForBlog ($id)
{
    $sql="SELECT * FROM blog WHERE page_id='{$id}'";
    $result = db($sql);
    while ($article = mysqli_fetch_assoc($result))
    {
        $articles[] = $article;
    }

    return $articles;
}

function receiveAticle ($id)
{
    $sql="SELECT name, content, created, author, img FROM blog WHERE id='{$id}'";
    $page = db($sql);
    $one_page = mysqli_fetch_assoc($page);
    return $one_page;
}

//находит последнюю точку и обрезает всё что после неё
// $string - строка, которую нужно укоротить
function trim_to_dot($string) {
    $pos = strrpos($string, '.'); // поиск позиции точки с конца строки
    if (!$pos) {
        return $string; // если точка не найдена - возвращаем строку
    }
    return substr($string, 0, $pos + 1); // обрезаем строку используя количество
    // символов до точки + 1 (сама точка,
    // если она не нужна "+1" нужно убрать)
}// конец функции