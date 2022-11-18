<?php
include "database.php";

if (isset($_POST['signup']))
    signup();
if (isset($_POST['login']))
    login();
if (isset($_POST['save']))
    saveproduct();
if (isset($_POST['Update']))
    update();


function signup()
{
    global $conn;
    $USERNAME = $_POST['USERNAME'];
    $EMAIL = $_POST['EMAIL'];
    $PASSWORD = $_POST['PASSWORD'];

    $sqll = "SELECT * FROM admin WHERE email='$EMAIL'";


    $sql = " INSERT INTO admin (`username`,`email`,`password`)
    VALUES ('$USERNAME','$EMAIL','$PASSWORD')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: login.php');
    } else {
        header('location: singup.php');
    }

}
function login()
{

    global $conn;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT 'email' FROM admin WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: dashbord.php');
    } else {

    }

}

function saveproduct()
{
    global $conn;

    $name = $_POST['NAME'];
    $category = $_POST['CATEGORY'];
    $description = $_POST['DESCRIPTION'];
    $price = $_POST['PRICE'];

    $sql = " INSERT INTO product (`name`,`category`,`description`,`price`)
    VALUES ('$name',' $category',' $description',' $price')";
    $result = mysqli_query($conn, $sql);
    header('location: dashbord.php');

}

function display()
{

    global $conn;
    $sql = "SELECT product.name,product.category,product.description,product.price,category_id.name as names
    FROM product 
    INNER JOIN  category_id ON product.category = category_id.id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return $result;
    } else {
        echo 'erreur';
    }

}


function update()
{
}
function delete()
{

}
?>