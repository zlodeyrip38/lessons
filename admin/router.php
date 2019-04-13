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
            require_once "views/VPagesList.php";
            break;
        case "pageedit":
            require_once "views/VPageEdit.php";
            break;

    }
}

require_once "footer.php";