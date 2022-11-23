<?php
session_start();
include "database.php";

if (isset($_POST['signup']))
    signup();
if (isset($_POST['login']))
    login();
if (isset($_POST['save']))
    saveproduct();
if (isset($_POST['update']))
    update();
if (isset($_POST['delete']))
    delete();
if (isset($_POST['cancel'])){
     header ('location:pages/dashbord.php');
}
    
    


function signup()
{
   
    global $conn;
    $USERNAME = htmlspecialchars(trim($_POST['USERNAME']));
    $EMAIL = $_POST['EMAIL'];
    $PASSWORD = htmlspecialchars(trim($_POST['PASSWORD']));
    if (isset($USERNAME) && isset($EMAIL) && isset($PASSWORD)) {

    $sqll = "SELECT * FROM users WHERE email='$EMAIL' ";
    $result = mysqli_query($conn, $sqll);
    $numEmail = mysqli_num_rows($result);


    if ($numEmail == 0) {
        $sql = " INSERT INTO users (`username`,`email`,`password`)
        VALUES ('$USERNAME','$EMAIL','$PASSWORD')";
        $result = mysqli_query($conn, $sql);
        $_SESSION['message'] = "your account has beeen created successfully";
        header('location:pages/login.php');
    } else {
        $_SESSION['message'] = 'this email is already exis';
        header('location:pages/signup.php');
    }
    } else {
        $_SESSION['message'] = 'check your informations';
        header('location:pages/signup.php');
    }
}

function login()
{
    global $conn;
    $email = $_POST['email'];
    $password = htmlspecialchars(trim($_POST['password']));

    if (isset($email) && isset($password)) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $emailuser = $row['email'];
        $passworduser = $row['password'];

        if ($emailuser == $email && $passworduser == $password) {
            $_SESSION['username'] = $username;
            header('location:pages/dashbord.php');
        } else {
            $_SESSION['message'] = 'check your informations';
            header('location:pages/login.php');
        }
    }

}

function saveproduct()
{
    global $conn;
    // var_dump($_FILES['IMAGE']['name']);
    $name = $_POST['NAME'];
    $category = $_POST['CATEGORY'];
    $description = $_POST['DESCRIPTION'];
    $price = $_POST['PRICE'];
    $quantite = $_POST['QUANTITE'];
    $image = $_FILES['IMAGE']['name'];
    $pathimage = $_FILES['IMAGE']['tmp_name'];
     $folder=  "../pages/image/".$image; 

    $sql = " INSERT INTO products (`name`,`category_id`,`description`,`price`,`image`,`quantite`)
    VALUES ('$name',' $category',' $description',' $price','$image','$quantite')";
    $result = mysqli_query($conn, $sql);
    move_uploaded_file($pathimage,$folder);
     if($result){
            header('location:../pages/dashbord.php');
     }

}

function display()
{

    global $conn;
    $sql = "SELECT products.id,products.name,products.category_id,products.description,products.price,products.image,products.quantite,categories.name as names
    FROM products 
    INNER JOIN  categories ON products.category_id = categories.id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return $result;
    } else {
        echo 'erreur';
    }

}


function update()
{
    global $conn;
    $id = $_POST['ID'];
    $name = $_POST['NAME'];
    $category = $_POST['CATEGORY'];
    $description = $_POST['DESCRIPTION'];
    $quantite = $_POST['QUANTITE'];
    $price = $_POST['PRICE'];
    $image = $_FILES['image']['name'];
    if (!empty($image)){
        $pathimage = $_FILES['image']['tmp_name'];
        $folder= "../pages/images/".$image; 
        $sql = "UPDATE products SET name = '$name', category_id = '$category', description = '$description', price = '$price', quantite = '$quantite', image = '$image'
        WHERE id = '$id' ";  
       $result = mysqli_query($conn, $sql);
       move_uploaded_file($pathimage,$folder);
       header('location:pages/dashbord.php');
    }
    else {
        $sql = "UPDATE products SET name = '$name', category_id = '$category', description = '$description', price = '$price', quantite = '$quantite'
        WHERE id = '$id' ";
       $result = mysqli_query($conn, $sql);
   
       header('location:pages/dashbord.php');
    }
    

   

}
function delete()
{
    global $conn;
    $id = $_POST['delete'];
    $sql = " DELETE FROM products WHERE id='$id' ";
    $result = mysqli_query($conn, $sql);
    header('location:pages/dashbord.php');
}


function conter ($count) 
{
        global $conn;
    if ($count == 1){  
        $sql="SELECT count(id) AS ids FROM products ";
        $result=mysqli_query($conn,$sql);
        $rows=  mysqli_fetch_assoc($result);
        echo $rows['ids'] ;
    }
    elseif ($count == 2){  
            $sql="SELECT count(id) AS ids FROM users ";
            $result=mysqli_query($conn,$sql);
            $rows=  mysqli_fetch_assoc($result);
            echo $rows['ids'] ;
    }
    elseif ($count == 3){  
            $sql="SELECT max(price) AS prices FROM products ";
            $result=mysqli_query($conn,$sql);
            $rows=  mysqli_fetch_assoc($result);
            echo $rows['prices'] ;
    } 
    elseif ($count == 4){  
            $sql="SELECT sum(quantite) AS quantites FROM products ";
            $result=mysqli_query($conn,$sql);
            $rows=  mysqli_fetch_assoc($result);
            echo $rows['quantites'] ;
    }               
    
}



?>