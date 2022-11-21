<?php
include ('../scripts.php');
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
    <title>Document</title>
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


        
  <div class="d-flex flex-nowrap">   
  
            <div class="  col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark ">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white vh-100">

              <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <span class="fs-5 d-none d-sm-inline">Menu</span>
              </a>

              <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                  <li class="nav-item">
                      <a href="#" class="nav-link align-middle px-0">
                          <i class="fa-brands fa-product-hunt"></i> <span
                              class="ms-1 d-none d-sm-inline text-light">product</span>
                      </a>
                  </li>
                  <li>
                      <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <i class="fa-brands fa-stripe-s"></i></i> <span
                              class="ms-1 d-none d-sm-inline text-light">Statistique</span>
                      </a>
                  </li>
                  <li>
                      <a href="" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <i class="fa-solid fa-right-from-bracket "></i></i> <span
                              class="ms-1 d-none d-sm-inline text-light">Logout </span>
                      </a>
                  </li>
              </ul>

          </div>
          </div>

          <div class="d-flex my-5 justify-content-around flex-wrap">
  <div class=" col-lg-4 col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">NUMBER PRODUCT</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-3 ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">TOTAL PRICE</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>


</div> 
</body>
<script src="..\assets\js\bootstrap.bundle.min.js"></script>
<script src="..\assets\js\all.min.js"></script>
<script src="..\assets\js\scripts.js"></script>

</html>