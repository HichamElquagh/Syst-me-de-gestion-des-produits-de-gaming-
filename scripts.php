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
            header('location: login.php');
        } else {
            $_SESSION['message'] = 'this email is already exis';
            header('location: signup.php');
        }
    } else {
        $_SESSION['message'] = 'check your informations';
        header('location: signup.php');
    }



}
function login()
{

    global $conn;
    $email = $_POST['email'];
    $password = htmlspecialchars(trim($_POST['password']));

    if (isset($email) && isset($email)) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        // $emailchechek=mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $emailuser = $row['email'];
        $passworduser = $row['password'];

        if ($emailuser == $email && $passworduser == $password) {
            $_SESSION['username'] = $username;
            header('location: dashbord.php');
        } else {
            $_SESSION['message'] = 'check your informations';
            header('location: login.php');
        }
    }
    // else{
    // $_SESSION['rempliData']='';
    // header('location: login.php'); 
    // }

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


function update()
{
    global $conn;
    $id = $_POST['ID'];
    $name = $_POST['NAME'];
    $category = $_POST['CATEGORY'];
    $description = $_POST['DESCRIPTION'];
    $price = $_POST['PRICE'];
    $sql = "UPDATE products SET name = '$name', category_id = '$category', description = '$description', price = '$price'
     WHERE id = '$id' ";
    $result = mysqli_query($conn, $sql);

    header('location:dashbord.php');

}
function delete()
{
    global $conn;
    $id = $_POST['delete'];
    $sql = " DELETE FROM products WHERE id='$id' ";
    $result = mysqli_query($conn, $sql);
    header('location:dashbord.php');
}




// function signUp(){
//     global $conn;

//     $username =htmlspecialchars(trim($_POST['userName']));
//     // Remove all illegal characters from email
//     $email =filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
//     // $email =htmlspecialchars(trim($_POST['email']));
//     // $password = $_POST['password'];
//     // $password =htmlspecialchars(trim(password_hash($_POST['password'], PASSWORD_BCRYPT)));
//     $password =htmlspecialchars(trim(md5($_POST['password'])));
//     $passwordCheck =$_POST['passwordCheck'];

//     if(!empty($username) && !empty($password) && !empty($email) && !is_numeric($username))
//     {
//     $sql = "SELECT * FROM admins WHERE email='$email'";
//     $result = mysqli_query($conn,$sql);
//     $numEmail = mysqli_num_rows($result);

//     if($numEmail == 0){
//         $sql = "INSERT INTO admins (name,email,password) VALUES ('$username','$email','$password')";
//         $result = mysqli_query($conn,$sql);

//         $_SESSION['accountCreated'] = 'your account has beeen created successfully';
//         header('location: .././pages/login.php');
//     }else{
//         $_SESSION['emailExist'] = 'this email is already exist';
//         header('location: .././pages/signup.php');
//     }
// }else{
//     $_SESSION['wrongData']='check your informations';
//     header('location: .././pages/signup.php');
// }
// }
?>