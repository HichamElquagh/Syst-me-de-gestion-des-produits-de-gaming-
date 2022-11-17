<?php
include "database.php";

 if(isset($_POST['signup'])) signup();
 if(isset($_POST['login'])) login();



function signup(){
    global $conn ;
    $USERNAME=$_POST['USERNAME'];
    $EMAIL=$_POST['EMAIL'];
    $PASSWORD=$_POST['PASSWORD'];

    $sqll="SELECT * FROM admin WHERE email='$EMAIL'";
     
     
    $sql = " INSERT INTO admin (`username`,`email`,`password`)
    VALUES ('$USERNAME','$EMAIL','$PASSWORD')";
    $result=mysqli_query($conn,$sql);
    if($result) {  
    header('location: login.php');
    }
    else{
        header ('location: singup.php');
    }

}
 function login(){
    global $conn;
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM admin WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location: dashbord.php');
    }
    else{
        
    }

 }




?>