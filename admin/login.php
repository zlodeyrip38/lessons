<?php
if($_POST)
{
    login($_POST);
}
else
{
    require_once "login_form.php";
}
require_once "footer.php";
?>