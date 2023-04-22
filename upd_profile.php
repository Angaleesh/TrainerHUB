<?php

require('db.php');

$errors = array(); 
if ($_POST['member']) {
  $name =  $_POST['name'];
  $dob =  $_POST['dob'];
  $mobileno =  $_POST['mobileno'];
  $age =  $_POST['age'];
  $pwd =  $_POST['pwd'];
  
  
  $query="update member set name='$name',dob='$dob',age='$age',pwd='$dob',mobileno='$mobileno' where name='".$_SESSION['uname']."'";
    
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Trainer added successfully</b></div>";
    header('t_home.php?info=view_profile');
    }else{
      $msg="<div class='alert alert-warning'><b>Trainer not added</b></div>";
    } 
}
?>
<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>Update Profile</h3>
		 <?php include('errors.php'); 
    echo @$msg;
    $que=mysqli_query($conn,"SELECT * FROM `member` WHERE name='".$_SESSION['uname']."'");
	
	
    $row=mysqli_fetch_array($que);
    ?>
		<label class="mt-3">NAME</label>
		<input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
		<label class="mt-3">DOB</label>
		<input type="text" name="time" class="form-control" value="<?php echo $row['dob']?>">
		<label class="mt-3">Age</label>
		<input type="text" name="time" class="form-control" value="<?php echo $row['age']?>">
		<label class="mt-3">MOBILE NO</label>
		<input type="text" name="mobileno" class="form-control" value="<?php echo $row['mobileno']?>">
		<label class="mt-3">Password</label>
		<input type="text" name="mobileno" class="form-control" value="<?php echo $row['pwd']?>">
		<button class="btn btn-dark mt-3" type="submit" name="member">Update</button>
	</form>
</div>