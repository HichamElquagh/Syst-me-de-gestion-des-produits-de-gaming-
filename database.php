<?php
 //CONNECT TO MYSQL DATABASE USING MYSQLI
    $servername ="localhost";
    $username="root";
    $password="";
    $database="origingamer";
  
    global $conn ;  
    $conn = mysqli_connect($servername,$username,$password,$database);

    if($conn){
        echo ' ' ;
    }

?>