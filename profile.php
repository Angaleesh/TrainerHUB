<?php
require('db.php');

		$que=mysqli_query($conn,"SELECT * FROM `member` WHERE name='".$_SESSION['uname']."'");
	
	
     $row=mysqli_fetch_array($que);
		?><table class="table"><tr><?php
		echo "<td>Member ID</td>";
		echo "<td>".$row['mem_id']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Name</td>";
		echo "<td>".$row['name']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>DOB</td>";
		echo "<td>".$row['dob']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Age</td>";
		echo "<td>".$row['age']."</td>";
		echo "</tr>";
        echo "<tr>";
        echo "<td>Mobile No</td>";
		echo "<td>".$row['mobileno']."</td>";
		echo "</tr>";
        echo "<tr>";
$sql=mysqli_query($conn,"SELECT name FROM `trainer` WHERE trainer_id=$row[trainer_id]");
$r=mysqli_fetch_array($sql);
        echo "<td>Trainer Name</td>";
		echo "<td>".$r[0]."</td>";
		echo "</tr>
        </table>";


	





	
?>

