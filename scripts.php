<?php
include "database.php";

if (isset($_POST['signup']))
    signup();
if (isset($_POST['login']))
    login();
if (isset($_POST['save']))
    saveproduct();
if (isset($_POST['update']))
    update();
    if (isset($_POST['delete'])){
    delete();}


function signup()
{
    global $conn;
    $USERNAME = $_POST['USERNAME'];
    $EMAIL = $_POST['EMAIL'];
    $PASSWORD = $_POST['PASSWORD'];

    $sqll = "SELECT * FROM users WHERE email='$EMAIL'";


    $sql = " INSERT INTO users (`username`,`email`,`password`)
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
    $sql = "SELECT 'email' FROM users WHERE email='$email'";
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

    $sql = " INSERT INTO products (`name`,`category_id`,`description`,`price`)
    VALUES ('$name',' $category',' $description',' $price')";
    $result = mysqli_query($conn, $sql);
    header('location: dashbord.php');

}

function display()
{

    global $conn;
    $sql = "SELECT products.id,products.name,products.category_id,products.description,products.price,categories.name as names
    FROM products 
    INNER JOIN  categories ON products.category_id = categories.id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return $result;
    } else {
        echo 'erreur';
    }

}


function update() {
    global $conn;
     $id=$_POST['ID'];
     $name=$_POST['NAME'];
     $category=$_POST['CATEGORY'];
     $description=$_POST['DESCRIPTION'];
     $price=$_POST['PRICE'];
     $sql="UPDATE products SET name = '$name', category_id = '$category', description = '$description', price = '$price'
     WHERE id = '$id' "; 
     $result=mysqli_query($conn,$sql);

     header('location:dashbord.php');

}
function delete()
{
    global $conn;
    $id=$_POST['delete'];
    $sql=" DELETE FROM products WHERE id='$id' ";
    $result=mysqli_query($conn,$sql);

}
?>