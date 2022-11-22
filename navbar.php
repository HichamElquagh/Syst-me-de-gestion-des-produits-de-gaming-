<?php
include ('../scripts.php');


if(!isset($_SESSION['username'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title><?php echo $title ?></title>
</head>

<body>
<nav class=" d-flex  justify-content-between   ">
        <div>
            <h4 class=" ms-3 text-light"> ORIGIN GAMER </h4>
        </div>
        <?php if (isset($_SESSION['username'])) {
            echo '
                <div class=" text-light"> <i class=" me-3 fs-4 text-light  fa-solid fa-user"></i>
                 ' . $_SESSION['username'] . ' </div> ';
        }

        ?>
    </nav>
    </body>
<script src="..\assets\js\bootstrap.bundle.min.js"></script>
<script src="..\assets\js\all.min.js"></script>
<script src="..\assets\js\scripts.js"></script>

</html>























