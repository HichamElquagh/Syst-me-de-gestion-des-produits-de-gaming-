<?php
include '../scripts.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
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

    <h1 class="nav-brand">ORIGIN GAMER</h1>
    <?php
    if (isset($_SESSION['message'])) {
        echo ' 
        <div class=" alert alert-success mx-auto w-50   "> ' . $_SESSION['message'] . ' </div> ';
        unset($_SESSION['message']);
    }
    if (isset($_SESSION['message'])) {
        echo '<div class="alert alert-danger mx-auto w-50 ">' . $_SESSION['message'] . ' </div>';
        unset($_SESSION['message']);
    }
    ?>
    <div class="d-flex justify-content-center">
        <div class=" row mx-4 form-box p-4 ">
            <div class=" col-lg-4 col-sm-12">
                <form action="../scripts.php" method="POST" id="form" class="form" data-parsley-validate>
                    <h2 class="  fw-bold text-light mb-3">Login</h2>
                    <div class=" mb-3">
                        <input type="email" class="form-control" id="flo" aria-describedby="emailHelp" name="email"
                            placeholder="Email address"  data-parsley-type="email" required />
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                            placeholder="Password"   placeholder="Password"
                            data-parsley-minlength="3"
                        data-parsley-errors-container=".errorspannewpassinput"
                        data-parsley-required-message="Please enter your  password."
                        data-parsley-required/>
                    </div>
                    <button type="submit" class="btn login-btn text-light" name="login">Login</button>
                    <div class="mt-3">
                        <span class="text-light">Don't have account?</span> <a href="signup.php" class="text-success">Sign up </a>
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