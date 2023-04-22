<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>WORKOUT</th>
				<th>SETS</th>
				<th>REPS</th>
			</tr>
            <?php
require('db.php');
	
		$que=mysqli_query($conn,"SELECT * FROM `workout` WHERE w_name='".$_GET['wo']."'");
     $row=mysqli_fetch_array($que);
		?>
        <tr>
		<td><?php echo $row['w1']?></td>
		<td><?php echo $row['set1']?></td>
		<td><?php echo $row['rep1']?></td>
        </tr>
        <tr>
		<td><?php echo $row['w2']?></td>
		<td><?php echo $row['set2']?></td>
		<td><?php echo $row['rep2']?></td>
        </tr>
        <tr>
		<td><?php echo $row['w3']?></td>
		<td><?php echo $row['set3']?></td>
		<td><?php echo $row['rep3']?></td>
        </tr>
        <tr>
		<td><?php echo $row['w4']?></td>
		<td><?php echo $row['set4']?></td>
		<td><?php echo $row['rep4']?></td>
        </tr>
        <tr>
		<td><?php echo $row['w5']?></td>
		<td><?php echo $row['set5']?></td>
		<td><?php echo $row['rep5']?></td>
        </tr>
        </table>