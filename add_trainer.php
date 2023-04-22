<?php

require('db.php');

$errors = array(); 
if (isset($_REQUEST['trainer'])) {

  
  $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
  $time = mysqli_real_escape_string($conn, $_REQUEST['time']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['mobileno']);
   $pay_id = mysqli_real_escape_string($conn, $_REQUEST['pay_id']);
  
  

  if (count($errors) == 0) {
  

    $query = "INSERT INTO trainer (name,time,mobileno,pwd) 
          VALUES('$name','$time','$mobileno','$pay_id')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Trainer added successfully</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Trainer not added</b></div>";
    }
  }
}



?>





<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>ADD TRAINER</h3>
		 <?php include('errors.php'); 
    echo @$msg;

    ?>

		<label class="mt-3">TRAINER NAME</label>
		<input type="text" name="name" class="form-control">
		<label class="mt-3">TIME</label>
		<input type="text" name="time" class="form-control">
		<label class="mt-3">MOBILE NO</label>
		<input type="text" name="mobileno" class="form-control">
		<label class="mt-3">Password</label>
		<input type="text" name="pay_id" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="trainer">ADD</button>
	</form>
</div>