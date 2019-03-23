<?php
if($_SESSION['authorized'])
{
    echo $_SESSION['authorized'];
}
else
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
            break;
    }
}

require_once "footer.php";