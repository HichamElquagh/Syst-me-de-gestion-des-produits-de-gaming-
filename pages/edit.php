<?php
include '../scripts.php';
include '../database.php';

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
    $price = $row['price'];
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
    <!-- TASK MODAL -->
    <!-- <div class="modal fade" id="modal">
        <div class="modal-dialog" role="document"> -->
            <!-- <div class="modal-content">
            </div> -->
       <!--  </div>
    </div> -->
    <div class="container">
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
                            <option value="1" <?php if ($category == 1)
        echo 'selected' ?>>casque gamer</option>
                            <option value="2" <?php if ($category == 2)
        echo 'selected' ?>>console</option>
                            <option value="3" <?php if ($category == 3)
        echo 'selected' ?>>chaise gamer</option>
                        </select>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control" id="message-text"
                                name="DESCRIPTION" `require> <?php echo $description ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="Title">Price</label>
                            <input type="text" value="<?php echo $price ?>" class="form-control" id="recipient-name"
                                name="PRICE">
                        </div>
                    </div>
                    <div class="modal-footer my-3">
                        <button type="button"  class=" mx-2 btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="update" class="btn btn-primary" data-bs-dismiss="modal"
                            id="saveBtn">update</button>
                    </div>
                </form>
        </div>
    </div>


    <?php }
    //  else
    // header('location:dashbord.php'); ?>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/scripts.js"></script>

</html>