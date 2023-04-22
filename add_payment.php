<?php
require('db.php');
$errors = array(); 
if (isset($_REQUEST['payment'])) {
  $month = mysqli_real_escape_string($conn, $_REQUEST['month']);
  $amount = mysqli_real_escape_string($conn, $_REQUEST['amount']);
  $mem_id = mysqli_real_escape_string($conn, $_REQUEST['mem_id']);
  if (count($errors) == 0) {
    $query = "INSERT INTO payment (month,amount,mem_id,status) 
          VALUES('$month','$amount','$mem_id','D')";
    $sql1 = "update member set payment_status='D'";
    $sql=mysqli_query($conn, $query);
    $sql2=mysqli_query($conn, $sql1);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Payment area added successfully</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Payment area not added</b></div>";
    }
  }
}
?>
<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>ADD PAYMENT AREA</h3>
		 <?php include('errors.php'); 
    echo @$msg;
    ?>
		<label class="mt-3">Month</label>
		<select name="month" class="form-control">
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May ">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
      <option value="December">December</option>
    </select>
		<label class="mt-3">AMOUNT</label>
		<input type="text" name="amount" class="form-control">
		<label class="mt-3">Member ID</label>
		<input type="text" name="mem_id" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="payment">ADD</button>
	</form>
</div>