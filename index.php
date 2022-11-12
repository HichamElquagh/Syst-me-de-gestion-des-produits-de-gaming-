<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <nav class=" px-5 py-3 navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-10">
            <a class=" text-success navbar-brand" href="#">VEDIOS GAMES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class=" col-1 collapse navbar-collapse" id="navbarSupportedContent">
            <button type="submit" name="click" class="p-0 border-0 bg-transparent primaryColor ">Sign up </button>
        </div>
        <div class=" col-1 collapse navbar-collapse" id="navbarSupportedContent">
            <button type="submit" name="click" class="p-0 border-0 bg-transparent primaryColor ">Login </button>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center align-items-center inner-row ">
            <div class="form-box1  col-lg-6 col-md-9 col-sm-12 ">
                <div class=" d-flex form-box p-5 ">
                    <div class=" col-6 form-title"> account?
                        <h2 class="fw-bold">Login</h2>

                        <form class="form-box" action="scripts.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="email" class=" form-control form-control-sm" placeholder="Email"
                                    id="floatingInput">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control form-control-sm" placeholder="password"
                                    id="floatingPassword">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="mt-3">
                                <button class="btn primaryBg">Login</button>
                            </div>
                            <div class="mt-3">
                                <span>Don't have account?</span> <button type="submit" name="click"
                                    class="p-0 border-0 bg-transparent primaryColor ">Sign
                                    up </button>
                            </div>
                        </form>
                    </div>
                    <div class=" d-flex col-6 justify-content-end ">
                        <img class=" login-pic" src=".\img\greenloginpic.jpg" alt="loginpic">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>