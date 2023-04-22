

<?php
require('db.php');
$day=1;

	


if (isset($_REQUEST['member'])) {

    $mem_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
    $workout1 = mysqli_real_escape_string($conn, $_REQUEST['workout1']);
    $workout2 = mysqli_real_escape_string($conn, $_REQUEST['workout2']);
    $workout3 = mysqli_real_escape_string($conn, $_REQUEST['workout3']);
    $workout4 = mysqli_real_escape_string($conn, $_REQUEST['workout4']);
    $workout5 = mysqli_real_escape_string($conn, $_REQUEST['workout5']);
    $workout6 = mysqli_real_escape_string($conn, $_REQUEST['workout6']);
    $workout7 = mysqli_real_escape_string($conn, $_REQUEST['workout7']);
    
    
  
      $query = "INSERT INTO workout_days (mem_id,day1,day2,day3,day4,day5,day6,day7) 
            VALUES('$mem_id','$workout1','$workout2','$workout3','$workout4','$workout5','$workout6','$workout7')";
      $sql=mysqli_query($conn, $query);
      if ($sql) {
      $msg="<div class='alert alert-success'><b>successfully ADDED</b></div>";
      }else{
        $msg="<div class='alert alert-warning'><b>Not added</b></div>";
      }
    }
  
  
  
  
  ?>
  
  
  
  
  
  
  <div class="container">
      <form class="form-group mt-3" method="post" action="">
          <div><h3>ADD WORKOUT</h3></div>
           
  <?php
  $day=1;
  while($day<=7){
      ?>
          <label class="mt-3">DAY <?php echo $day;?></label>
          <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17"
              tabindex="-1" aria-hidden="true" name="workout<?php echo $day;?>">
              <option value=""></option>
              <option value="CHEST">CHEST</option>
              <option value="SHOULDER">SHOULDER</option>
              <option value="BACK">BACK</option>
              <option value="LEG">LEG</option>
              <option value="ARMS">ARMS</option>
              <option value="ABS">ABS</option>
              <option value="REST">REST</option>
            </select>
         <?php
        $day++; }?>
          <button class="btn btn-dark mt-3" type="submit" name="member">ADD</button>
      </form>
  </div>