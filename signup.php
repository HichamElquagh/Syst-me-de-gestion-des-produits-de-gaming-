<?php
//include 'scripts.php';
// if(isset($_POST['signup'])) 

//     echo "sign up is clicked" ;
//     function throwArray($data){
//         echo "<pre>" ;
//             var_dump($data) ;
//         echo "</re>" ;
//     }
//     throwArray($_POST) ;
//     //  signup();
//     die() ;
//  }   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1 class="nav-brand" >ORIGIN GAMER</h1>
    <div class="d-flex justify-content-center"> 
        <div class=" row mx-4 form-box p-4 ">
            <div class=" col-lg-4 col-sm-12">
                <form action="scripts.php" method="post" data-parsely-validate>
                    <h2 class="  fw-bold text-light mb-3">Sing up</h2>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputPassword1" name="USERNAME" placeholder="user name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="EMAIL" aria-describedby="emailHelp" placeholder="Email address">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="PASSWORD" placeholder="Password">
                    </div>
                    <button type="submit" class="btn login-btn text-light" name="signup" >Sign up</button>
                    <div class="mt-3">
                        <span class="text-light">If you have account?</span> <button type="submit" name="click"
                        class="p-0 border-0 bg-transparent primaryColor ">Login </button>
                    </div>
                </form>
            </div>
        </div>
    </div> 


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>

</body>




</html>