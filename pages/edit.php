<?php

include '../database.php';
$title='Edit';
include '../navbar.php';

if (isset($_GET['Edit'])) {
    global $conn;
    $id = $_GET['Edit'];
    $sql = "SELECT * FROM  products WHERE products.id =$id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $name = $row['name'];
    $category = $row['category_id'];
    $description = $row['description'];
    $quantite=  $row['quantite'];
    $price = $row['price'];
?>
  
    <div class="container my-3">
        <div class="col-10 mx-auto p-4 bg-light rounded">
            <form action="../scripts.php" method="POST" id="form">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden"  value="<?php echo $id ?>"
                            name="ID">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label" id="Title">Name</label>
                        <input type="text" class="form-control" value="<?php echo $name ?>" id="recipient-name"
                            name="NAME">
                    </div>
                    <h6 class="modal-title my-2" id="exampleModalLabel">Category</h6>
                    <select class="form-select" id="selectstatus" name="CATEGORY"
                        aria-label="Default select example">
                        <option selected>Category </option>
                        <option value="1" <?php if ($category == 1) echo 'selected' ?>>casque gamer</option>
                        <option value="2" <?php if ($category == 2) echo 'selected' ?>>console</option>
                        <option value="3" <?php if ($category == 3) echo 'selected' ?>>chaise gamer</option>
                    </select>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="message-text"
                            name="DESCRIPTION" `require> <?php echo $description ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label" id="Title">Quantité</label>
                        <input type="number" value="<?php echo $quantite ?>"  class="form-control" id="recipient-name" name="QUANTITE">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label" id="Title">Price</label>
                        <input type="text" value="<?php echo $price ?>" class="form-control" id="recipient-name"
                            name="PRICE">
                    </div>
                </div>
                <div class="modal-footer my-3">
                    <button type="submit" name="cancel" class=" mx-2 btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="update" class="btn btn-primary" data-bs-dismiss="modal"
                        id="saveBtn">update</button>
                </div>
            </form>
        </div>
    </div>


    <?php } ?>
