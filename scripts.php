<?php
include "sign up.php ";

if (isset($_POST['click']))
    signUp();






function signUp()
{


    header('location: sign up.php');

}


?>