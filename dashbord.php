<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>



<nav class="navbar navbar-light bg-light">
  <!-- <a class="navbar-brand " href="#">Navbar</a> -->
  <h5 class="mx-4 ">ORIGIN GAMER</h5>
  <div class="">
        <button  class="btn btn-success px-4 rounded-pill" id="btntask" data-bs-toggle="modal" data-bs-target="#modal" ><i class="fa fa-plus"></i> Add Tas </a>
    </div>
</nav>
   


<div class="d-flex">  
    <aside class="bg-dark vh-100 vw-20">
        <div class="list">
            <li class="list-li"><i><a href="#"></a></i>HOME</li>
            <li class="list-li"><i><a href="#"></a></i>Statistique</li>
            <li class="list-li"><i><a href="#"></a></i>HOME</li>
        </div>
    </aside>
   <div class="w-100 py-3 px-3 ">  
            <table class="table bg-light">
            <thead class="bg-dark">
                <tr class="text-light">
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">description</th>
                <th scope="col">Edit</th>
                <th scope="col">Supprimer</th>
                
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><i class=" fa-solid fa-edit text-success"></i></td>
                <td><i class="fa-solid fa-trash text-danger "></i></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
<!-- TASK MODAL -->
<div class="modal fade" id="modal">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" >Add task</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal" id="modalboton">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<form action="scripts.php" method="POST" id="form">
					<div class="modal-body">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label" id="Title"  >TITLE</label>
							<input type="text" class="form-control" id="recipient-name" name="TITLE" >
						</div>
						<h6 class="form-title my-3" id="exampleModalLabel">Type</h6>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="TYPE" id="exampleRadios1" value="1">
							<label class="form-check-label" for="exampleRadios1" >
							Feature
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="TYPE" id="exampleRadios1" value="2" >
							<label class="form-check-label" for="exampleRadios2">
							Bug
							</label>
						</div>
						<h6 class="modal-title mt-3 mb-1 " id="exampleModalLabel">Priority</h6>
						<select class="form-select" id="Selectproprity" name="PRIORITY" aria-label="Default select example">
							<option selected>Please select </option>
							<option value="1">High</option>
							<option value="2">Low</option>
						</select>
						<h6 class="modal-title my-2" id="exampleModalLabel">Status</h6>
						<select class="form-select" id="selectstatus" name="STATUS" aria-label="Default select example">
							<option selected>Please select </option>
							<option value="1">To Do</option>
							<option value="2">In Progress</option>
							<option value="3">Done</option>
						</select>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Date</label>
							<input type="date" class="form-control" id="date-task" name="DATETIME" placeholder="Please Select">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Description</label>
							<textarea class="form-control" id="message-text" name="DESCRIPTION"`require ></textarea>
						</div>
					</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						<button type="submit"  name="save" class="btn btn-primary" data-bs-dismiss="modal" id="saveBtn" >Save</button>
						</div>
				</form>
			</div>
		</div>
	</div>	

</body>
<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
</html>