<?php

require('db.php');

$errors = array(); 
if ($_POST['trainer']) {

  $trainer_id =  $_POST['id'];
  $name =  $_POST['name'];
  $time =  $_POST['time'];
  $mobileno =  $_POST['mobileno'];
  
  
  $query="update trainer set trainer_id='$trainer_id',name='$name',time='$time',mobileno='$mobileno' where name='".$_SESSION['uname']."'";
    
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
    $que=mysqli_query($conn,"SELECT * FROM `trainer` WHERE name='".$_SESSION['uname']."'");
	
	
    $row=mysqli_fetch_array($que);
    ?>
		<label class="mt-3">TRAINER ID</label>
		<input type="text" name="id" class="form-control" value="<?php echo $row['trainer_id']?>">
		<label class="mt-3">TRAINER NAME</label>
		<input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
		<label class="mt-3">TIME</label>
		<input type="text" name="time" class="form-control" value="<?php echo $row['time']?>">
		<label class="mt-3">MOBILE NO</label>
		<input type="text" name="mobileno" class="form-control" value="<?php echo $row['mobileno']?>">
		<button class="btn btn-dark mt-3" type="submit" name="trainer">Update</button>
	</form>
</div>