<?php 
require "dbconnection.php";

//receive inputs from users

if (isset($_POST['submittenantreg'])) {

    $firstname = $_POST ["firstname"];
    $lastname = $_POST ["lastname"];
    $username = $_POST ["username"];
    $dob = $_POST ["dob"];
    $email = $_POST ["email"];
    $phonenumber = $_POST ["phonenumber"];
    $password = $_POST ["password"];
    $gender = $_POST ["gender"];
    $aboutme = $_POST ["aboutme"];
    $address = $_POST ["address"];
    $uploadfile = $_FILES ['profilepix']['tmp_name'];
    $target = "asset/".basename ($_FILES ['profilepix']['name']);
    $profilepix =  $_FILES['profilepix']['name'];
    move_uploaded_file($uploadfile, $target);
    // $address = $_POST['address'];
    $address = 324328;
    $userstatus = $_POST['userstatus'];
    $role = 3;


    //insert the values into database

    $query = "INSERT INTO `users` (`firstname`, `lastname`, `username`, `dob`, `email`, `phonenumber`, `password`, `gender`, `aboutme`, `profilepix`, `role`, `userstatus`) VALUES ('$firstname', '$lastname', '$username', '$dob', '$email', '$phonenumber', '$password', '$gender', '$aboutme', '$profilepix', '$role', '$userstatus')";


    //perform a query against database

    if (mysqli_query($conn, $query)) {
        echo "<h3>You Have Successfully Registered. Go to <a href='index.php'>Sign In</a> to continue</h3>";

    } else {
        echo "<strong>Registration not successful.<a href='tenantreg.php'>Please Sign Up again</a></strong>" . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>