<?php
require('db.php');


$id="";



if (isset($_POST['id'])) {?>
	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>PAYMENT ID</th>
				<th>AMOUNT</th>
				<th>MEMBER ID</th>
			</tr>
			<?php
			require('db.php');

			
				$all = mysqli_query($conn, "SELECT * FROM `payment` WHERE CONCAT(`pay_id`,`amount`) LIKE '%" . $id . "%'");
			
			$all_query = mysqli_query($conn, $all);
			if (mysqli_num_rows($all_query) > 0) {
				while ($row = mysqli_fetch_assoc($all_query)) {
					echo "<tr>";
					echo "<td>" . $row['pay_id'] . "</td>";
					echo "<td>" . $row['amount'] . "</td>";
					echo "<td>" . $row['mem_id'] . "</td>";
					echo "</tr><br>";
				}
			} else {
				echo "0 results";
			}

			?>

		</table>
	</div>
		<?php }?>

