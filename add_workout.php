<?php
require('db.php');
$name="";
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Mem_Id</th>";
	echo "<th>Name</th>";
	echo "<th></th>";
	
	echo "</tr>";
	echo "</div>";

    $query=mysqli_query($conn,"SELECT trainer_id FROM `trainer` WHERE name='".$_SESSION['uname']."'");
    $r=mysqli_fetch_array($query);
        $que=mysqli_query($conn,"SELECT * FROM `member` WHERE trainer_id='".$r[0]."'");

		
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['mem_id']."</td>";
		echo "<td>".$row['name']."</td>";
		if($row['payment_status']=='P'){
			echo "<td><b>Can't Add Workout<b></td>";
		}
		else{
		echo  "<td><a style='text_decoration:none;' href='t_home.php?id=$row[mem_id]&info=add_workout1'><b>Add workout<b></i></a></td>";
		}
	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	


	
?>
