<?php
include "menu.php";

if (isset($_POST['signclick']))
    signUp();
if (isset($_POST['loginclick']))
    login();

function signUp()
{
    header('location: sign up.php');
}
function login()
{
    header('location: login.php');
}


?>