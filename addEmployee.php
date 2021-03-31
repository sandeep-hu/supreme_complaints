<!DOCTYPE html>
<?php
session_start();
$email_address= $_SESSION['email'];
include('config/database.php');
include('partials/header.php');
include('partials/sidebar.php'); 	
?>
<html lang="eng">
	<head>
		<title>Employee List | Supreme Solar</title>
		 <!-- CSS only -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		
		
		 <div class="container" >
			<div class="alert alert-primary">Employee List</div>
			<div class="modal fade" id="edit_student" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content panel-warning">
						<div class="modal-header panel-heading">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModallabel">Edit Employee</h4>
						</div>
						<div id="edit_query"></div>
					</div>
				</div>
			</div>
			<div class="well col-lg-12">
				<button class="btn btn-success" type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Add new </button>
				<br />
				<br />
				<table id="table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Employee No</th>
							<th>Name</th>
							
							<th>Mobile Number</th>							
							<th>Password</th>
							<th>Action</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
						$sql = "SELECT * FROM employee";
						$query = $conn->query($sql);
		                
						 while($row = $query->fetch_assoc()){
						   
							
						?>
						<tr>
							<td><?php echo $row['employee_no']?></td>
							<td><?php echo $row['firstname']?></td>
							
							<td><?php echo $row['Email']?></td>
							<td><?php echo $row['position']?></td>
							
							
							
							<td>
								<center>
								<a href="update_employee.php?id=<?php echo $row['employee_no'];?>"><i class="fa fa-edit"></i></a>
								<!-- <button class="btn btn-sm btn-outline-primary edit_employee" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-edit"></i></button>-->
								<!--<span class="action"><a href="#" id="<?php echo $row['id']?>" class="delete" title="Delete" style="color:red;"><i class="fa fa-trash"></i></a></span>-->
								<button class="btn btn-sm btn-outline-danger remove_employee" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-trash"></i></button>
								</center>
							</td>
							
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
			<br />
			<br />	
			<br />	
		</div>
		
		<div class="modal fade" id="new_employee" tabindex="-1" role="dialog" >
				<div class="modal-dialog modal-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							
							<h4 class="modal-title" id="myModallabel">Add new Employee</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<form id='employee_frm' method="post" action="add_employee.php">
							<div class ="modal-body">
							
							<div class="form-group">
									<label>EMP ID</label>
									<input type="hidden" name="id" />
									<input type="text" name="employee_no" required="required" class="form-control" />
								</div>
								<div class="form-group">
									<label>Name</label>
									<input type="hidden" name="id" />
									<input type="text" name="firstname" required="required" class="form-control" />
								</div>
								<div class="form-group">
									<label>Mobile No</label>
									<input type="text" name="Mobile" required="required" class="form-control" />
								</div>
								
								<div class="form-group">
									<label>Set Password</label>
									<input type="text" name="password" required="required" class="form-control" />
								</div>
							</div>
							<div class="modal-footer">
								<button  class="btn btn-primary" name="save" id="new_emp_btn"><span class="glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
								
								
							
								
								
								
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
            $('#new_emp_btn').click(function(){
			
				$('[name="employee_no"]').val('')
				$('[name="firstname"]').val('')
				$('[name="lastname"]').val('')
				$('[name="Dob"]').val('')
				
				$('[name="position"]').val('')
				$('[name="Mobile"]').val('')
				$('[name="Email"]').val('')
				$('[name="password"]').val('')
				$('#new_employee .modal-title').html('Add New Employee')
				$('#new_employee').modal('show')
			})
		});

</html>