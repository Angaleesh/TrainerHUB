<?php

require('db.php');

$errors = array(); 
if (isset($_REQUEST['member'])) {
  $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
  $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
  $dob = mysqli_real_escape_string($conn, $_REQUEST['dob']);
   $package = mysqli_real_escape_string($conn, $_REQUEST['package']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['mobileno']);
  $trainer_id = mysqli_real_escape_string($conn, $_REQUEST['trainer_id']);


  if (count($errors) == 0) {
  

    $query = "INSERT INTO member (name,age,dob,package,mobileno,pay_id,trainer_id) 
          VALUES('$name','$age','$dob','$package','$mobileno','$trainer_id')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Member added successfully</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Member not added</b></div>";
    }
  }
}



?>






<div class="container">
	<form class="form-group mt-3" method="post" action="">
		<div><h3>ADD MEMBER</h3></div>
		 <?php include('errors.php'); 
    echo @$msg;

    ?>
		<label class="mt-3">MEMBER NAME</label>
		<input type="text" name="name" class="form-control">
		<label class="mt-3">AGE</label>
		<input type="text" name="age" class="form-control">
		<label class="mt-3">DOB</label>
		<input type="text" name="dob" class="form-control">
		<label class="mt-3">PAYMENT STATUS</label>
		<input type="text" name="package" class="form-control">
		<label class="mt-3">MOBILE NO</label>
		<input type="text" name="mobileno" class="form-control">
		<label class="mt-3">PASSWORD</label>
		<input type="text" name="pwd" class="form-control">
		<label class="mt-3">TRAINER ID</label>
		<input type="text" name="trainer_id" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="member">ADD</button>
	</form>
</div>