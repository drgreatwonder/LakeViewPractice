<?php require "session.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/dashboard.css">
</head>
<body>
    <!-- Side navigation -->
    <div class="sidenav">
  
  <a href="index.php">Home</a>
  <a href="securitydues.php">Payments</a>
  <a href="#">Property Registration</a>
  <a href="visitorsreg.php">Visitors Registration</a>
  <a href="#">Events</a>
  <a href="logout.php">Logout</a>
</div>

<!-- Page content -->
<div class="main">

  <?php 
  echo "<img src='asset/" .$row['profilepix'] ."' . class='profilepix' alt='avatar'>" 
  ?> 


  <div class="card">

  <div class="container personalinfo">
    <h4>Personal Info</h4>
   
    <p><b>Username: </b> <?php echo $username ?></p>

    <p><b>Email: </b> <?php echo $email ?></p>
  
    <p><b>DOB: </b> <?php echo $dob ?></p>
    
    <p><b>Phone Number: </b> <?php echo $phonenumber ?></p>
    
    <p><b>About Me: </b> <?php echo $aboutme ?></p>
    
    <p><b>Address: </b> <?php echo $address ?></p>
    <?php $date =  date("Y/m/d") ?>
    <p><b>You joined at: </b> <?php echo $date ?></p>
    
  </div>
  </div>
</body>
</html>