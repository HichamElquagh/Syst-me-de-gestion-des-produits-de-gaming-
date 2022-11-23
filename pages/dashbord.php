<?php
$title='Dashboard';
include '../navbar.php';

 $title="Dashboard";



?>

      
    <div class="d-flex flex-nowrap ">
          <div class="  col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark ">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="dashbord.php" class="nav-link align-middle px-0">
                            <i class="fa-brands fa-product-hunt"></i> <span
                                class=" side-h ms-1 d-none d-sm-inline text-light">product</span>
                        </a>
                    </li>
                    <li>
                        <a href="statistique.php"  class="nav-link px-0 align-middle">
                            <i class="fa-brands fa-stripe-s"></i></i> <span
                                class="side-h ms-1 d-none d-sm-inline text-light">Statistique</span>
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
        <div class="col w-100 py-3 px-3 table-responsive">
            <div class="  mt-4">
                <button class="btn mb-3 float-end btn-dark px-4 rounded-pill btn-cart" id="btntask" data-bs-toggle="modal"
                data-bs-target="#modal"><i class="fa fa-plus"></i> Add Product </a>
            </div>
            <table class=" my-3 table bg-light">
                <thead class="bg-dark">
                    <tr class="text-light">
                        <th scope="col">#</th>
                        <th scope="col">image</th>
                        <th scope="col">Product </th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                </php>
                <tbody class="table-group-divider">
                    <?php
                    $row = display();
                    $conteur = 1;
                    while ($product = mysqli_fetch_assoc($row)) {
                    
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $conteur ?>

                        </th>
                        <td>
                            <img class="image" src=" image/<?php echo $product['image']?>" alt="image" >
                        </td>
                        <td>
                            <?php echo $product['name'] ?>
                        </td>
                        <td>
                            <?php echo $product['names'] ?>
                        </td>
                        <td>
                            <?php echo $product['description'] ?>
                        </td>
                        <td>
                            <?php echo $product['quantite'] ?>
                        </td>
                        <td>
                            <?php echo $product['price'] ?>$
                        </td>
                        <td><a href="edit.php?Edit=<?php echo $product['id'] ?>"><i class="  fa-solid fa-edit text-success"
                                    data-bs-toggle="modal" data-bs-target="#modal"></i></a></td>
                        <td><i onclick="if(confirm('Are You sure to delete this !!')){document.querySelector('#hidden-form-<?php echo $product['id'] ?>').submit();} else {return false}"
                                class="fa-solid fa-trash text-danger "></i></td>
                    </tr>
                    <form action="../scripts.php" method="POST" id="hidden-form-<?php echo $product['id'] ?>">
                        <input type="hidden" name="delete" value="<?php echo $product['id'] ?>">
                    </form>
                    <?php
                        $conteur++;
                    }
                    ?>

                </tbody>    
            </table>           
        </div>
    </div>
    
    <!-- TASK MODAL -->
    <div class="modal fade" id="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal"
                        id="modalboton">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="POST" id="form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="Title">Name</label>
                            <input type="text" class="form-control" id="recipient-name" name="NAME">
                        </div>
                        <h6 class="modal-title my-2" id="exampleModalLabel">Category</h6>
                        <select class="form-select" id="selectstatus" name="CATEGORY"
                            aria-label="Default select example">
                            <option selected>Category </option>
                            <option value="1  ">casque gamer </option>
                            <option value="2">console</option>
                            <option value="3">chaise gamer</option>
                            <option value="4">accessoires</option>
                        </select>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control" id="message-text" name="DESCRIPTION" `require></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-form-label" id="image">image</label>
                            <input type="file" class="form-control" id="images" name="IMAGE">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="Title">Quantité</label>
                            <input type="number" class="form-control" id="recipient-name" name="QUANTITE">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="Title">Price</label>
                            <input type="number" class="form-control" id="recipient-name" step="any" name="PRICE">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="save" class="btn btn-primary" data-bs-dismiss="modal"
                            id="saveBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

