<?php
require('db.php');

		$query=mysqli_query($conn,"SELECT trainer_id FROM `member` WHERE name='".$_SESSION['uname']."'");
        $r=mysqli_fetch_array($query);
		$que=mysqli_query($conn,"SELECT * FROM `trainer` WHERE trainer_id=$r[0]");
	
	
     $row=mysqli_fetch_array($que);
		?><table class="table"><tr><?php
		echo "<td>Trainer ID</td>";
		echo "<td>".$row['trainer_id']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Name</td>";
		echo "<td>".$row['name']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Timing</td>";
		echo "<td>".$row['time']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Mobile No ID</td>";
		echo "<td>".$row['mobileno']."</td>";
		echo "</tr></table>";


	





	
?>

