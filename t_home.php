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
                            <a href="t_home.php?info=view_profile" class="text-light">View Profile</a>
                        </div>
                        <div class="list-group-item" style="background-color: #303030;">
                            <a href="t_home.php?info=update_profile" class="text-light">Update profile</a>
                        </div>
                    </div>
                    <div class="list-group-item bg-dark">
                        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseThree">
                            <i class="fas fa-users"></i> Members
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="list-group-item" style="background-color: #303030;">
                            <a href="t_home.php?info=view_members" class="text-light">View Members</a>
                        </div>
                        <div class="list-group-item" style="background-color: #303030;">
                            <a href="t_home.php?info=add_workout" class="text-light">Add workout</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="col-10">

            <?php
            @$info = $_GET['info'];
            if ($info !== "") {
                if ($info == "view_profile") {
                    include('view_profile.php');
                } elseif ($info == "update_profile") {
                    include('update_profile.php');
                } elseif ($info == "view_members") {
                    include('view_members.php');
                } elseif ($info == "add_workout") {
                    include('add_workout.php');
                }
                 elseif ($info == "add_workout1") {
                    include('add_workout1.php');
                }
            }
            ?>

        </div>
    </div>

</body>

</html>