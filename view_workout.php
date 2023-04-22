<?php
require('db.php');

$query=mysqli_query($conn,"SELECT mem_id FROM `member` WHERE name='".$_SESSION['uname']."'");
	$r=mysqli_fetch_array($query);
	
		$que=mysqli_query($conn,"SELECT * FROM `workout_days` WHERE mem_id=".$r[0]);
     $row=mysqli_fetch_array($que);
		?>
        <table class="table"><tr>
		<td>DAY 1</td>
		<td><a href="m_home.php?info=workout&wo=<?php echo $row['day1']?>"><?php echo $row['day1']?></td>
        </tr>
        <tr>
        <td>DAY 2</td>
		<td><a href="m_home.php?info=workout&wo=<?php echo $row['day2']?>"><?php echo $row['day2']?></td>
        </tr>
        <tr>
        <td>DAY 3</td>
		<td><a href="m_home.php?info=workout&wo=<?php echo $row['day3']?>"><?php echo $row['day3']?></td>
        </tr>
        <tr>
        <td>DAY 4</td>
		<td><a href="m_home.php?info=workout&wo=<?php echo $row['day4']?>"><?php echo $row['day4']?></td>
		</tr>
        <tr>
        <td>DAY 5</td>
		<td><a href="m_home.php?info=workout&wo=<?php echo $row['day5']?>"><?php echo $row['day5']?></td>
		</tr>
        <tr>
        <td>DAY 6</td>
		<td><a href="m_home.php?info=workout&wo=<?php echo $row['day6']?>"><?php echo $row['day6']?></td>
		</tr>
        <tr>
        <td>DAY 7</td>
		<td><a href="m_home.php?info=workout&wo=<?php echo $row['day7']?>"><?php echo $row['day7']?></td>
		</tr></table>