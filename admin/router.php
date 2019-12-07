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


if ($_POST)
{
    switch ($_GET['page'])
    {
        case "pageedit":
            saveDataForPage($_POST,$_GET['id']);
            break;
        case "pageadd":
            addNewPage($_POST);
            break;
        case "articleadd":
            addArticle($_POST);
            break;

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
        case "pageadd":
            require_once "views/VPageAdd.php";
            break;
        case "pagedelete":
            deletePage($_GET['id']);
            break;
        case "bloglist":
            require_once "views/VArticlesList.php";
            break;
        case "articleadd":
             require_once "views/VArticleAdd.php";
            break;
    
    }
}



require_once "footer.php";