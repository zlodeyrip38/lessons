<?php
if(!$_SESSION['authorized'])

{
    if($_POST)
    {
        login($_POST);
    }
    else
    {
        require_once "login_form.php";
    }

}

if ($_GET)
{
    switch ($_GET['page'])
    {
        case "exit":
            unset($_SESSION['authorized']);
            header('Refresh: 0; URL=index.php');
            break;
        case "pageslist":
            $menu = pagesList();
            var_dump($menu);
            break;
    }
}

require_once "footer.php";