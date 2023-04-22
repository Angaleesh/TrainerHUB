<?php
include("auth.php");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Gym Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="style.css">
</head>

<body style="background:url(gym1.jpg);">
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">GYM MANAGEMENT SYSTEM</a>
      <a href="logout.php" class=" nav nav-link">LOGOUT</a>
    </div>
  </nav>

  <div class="row mt-3">
    <div class="col-2">
      <div id="accordion">
        <div class="list-group">

          <div class="list-group-item bg-dark">
            <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseThree">
              <i class="fas fa-user-graduate"></i> Profile
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="list-group-item" style="background-color: #303030;">
              <a href="m_home.php?info=profile" class="text-light">Profile</a>
            </div>
            <div class="list-group-item" style="background-color: #303030;">
              <a href="m_home.php?info=upd_profile" class="text-light">Update Profile</a>
            </div>
          </div>
          <div class="list-group-item bg-dark">
            <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseThree">
              <i class="fas fa-user-graduate"></i> Workout
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="list-group-item" style="background-color: #303030;">
              <a href="m_home.php?info=trainer_profile" class="text-light">Trainer Profile</a>
            </div>
            <div class="list-group-item" style="background-color: #303030;">
              <a href="m_home.php?info=view_workout" class="text-light">View Workout</a>
            </div>
          </div>
          </div>

        </div>
      </div>
      <div class="col-10">

        <?php
        @$info = $_GET['info'];
        if ($info !== "") {
          if ($info == "profile") {
            include('profile.php');
          } elseif ($info == "upd_profile") {
            include('upd_profile.php');
          } elseif ($info == "trainer_profile") {
            include('trainer_profile.php');
          } elseif ($info == "view_workout") {
            include('view_workout.php');
          } elseif ($info == "workout") {
            include('workout.php');
          } }
        ?>

      </div>
    </div>

</body>

</html>