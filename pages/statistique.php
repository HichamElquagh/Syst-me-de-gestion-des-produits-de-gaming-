<?php
  $title='Statistique';
  include '../navbar.php';
 
?>


        
        <div class="d-flex ">   
              <div class="  col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark ">
                  <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white vh-100">
                      <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                          <span class="fs-5 d-none d-sm-inline">Menu</span>
                      </a>
                      <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                          <li class="nav-item">
                              <a href="dashbord.php" class="nav-link align-middle px-0">
                                  <i class="fa-brands fa-product-hunt"></i> <span
                                      class="ms-1 d-none d-sm-inline text-light">product</span>
                              </a>
                          </li>
                          <li>
                              <a href="" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                  <i class="fa-brands fa-stripe-s"></i></i> <span
                                      class="ms-1 d-none d-sm-inline text-light">Statistique</span>
                              </a>
                          </li>
                          <li>
                          <a href="logout.php" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-right-from-bracket "></i></i> <span
                                class=" side-h ms-1 d-none d-sm-inline text-light">Logout </span>
                            </a>
                          </li>
                      </ul>
                  </div>
              </div>
              
              <div class=" my-5 mx-5 col-7 ">
                  <div class="  card  my-4 ">
                    <div class="card-body">
                      <h5 class="  text-light fs-2 card-title">Total Product  :  <?php conter (1) ?></h5> 
                    </div>
                  </div>

                  <div class="card my-4">
                    <div class="card-body">
                      <h5 class="  text-light fs-2  card-title">Total users :  <?php conter (2) ?></h5>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <h5 class=" text-light fs-2 card-title">Max price : <?php conter (3) ?> $ </h5>
                    </div>
                  </div>

                  <div class="card my-4">
                    <div class="card-body">
                      <h5 class= " text-light fs-2 card-title"> Quantité  : <?php conter (4) ?>  </h5>
                    </div>
                  </div>
            </div> 
        </div> 
