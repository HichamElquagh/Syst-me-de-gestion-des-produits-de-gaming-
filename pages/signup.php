<?php
include '../scripts.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
    <script defer  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_SESSION['message'])){
        echo '<div class="alert alert-danger mx-auto w-50 " > '.$_SESSION['message'].' </div>';
        unset($_SESSION['message']);
    }
    
    ?>
    <h1 class="nav-brand">ORIGIN GAMER</h1>
    <div class="d-flex justify-content-center">
        <div class=" row mx-4 form-box p-4 ">
            <div class=" col-lg-4 col-sm-12">
                <form action="../scripts.php" method="post" id="form" data-parsely-validate >
                    <h2 class="  fw-bold text-light mb-3">Sing up</h2>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputPassword1" name="USERNAME"
                            placeholder="user name"  data-parsley-length="[8, 40]" data-parsley-group="block2"  required />
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="EMAIL"
                            aria-describedby="emailHelp" placeholder="Email address"  data-parsley-type="email"  required/>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="PASSWORD"
                                                        placeholder="Password" data-parsley-minlength="8"
                                data-parsley-errors-container=".errorspannewpassinput"
                                data-parsley-required-message="Please enter your new password."
                                data-parsley-uppercase="1"
                                data-parsley-lowercase="1"
                                data-parsley-number="1"
                                data-parsley-special="1"
                                data-parsley-required/>
                    </div>
                    <!-- <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword" 
                                                        placeholder="Confirm Password" data-parsley-minlength="8"
                                data-parsley-errors-container=".errorspanconfirmnewpassinput"
                                data-parsley-required-message="Please re-enter your new password."
                                data-parsley-equalto="#exampleInputPassword1"
                                data-parsley-required/>
                    </div> -->
                    <button type="submit" class="btn login-btn text-light" name="signup">Sign up</button>
                    <div class="mt-3">
                        <span class="text-light">If you have account?</span>  <a href="login.php" class="text-success ">Login </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="/..assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/all.min.js"></script>
    <script src="../assets/js/scripts.js"></script>


</body>




</html>