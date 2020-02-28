<?php require "header.php" ?>
<!DOCTYPE html>
<html>


    <body class="getbody p-5 m-5">
        <div class="container p-5">
          <h1 class="text-center mb-3">REGISTER</h1>
      
          <form name="getstarted" action="" method="post" enctype="multipart/form-data">

            <fieldset  class="p-3 mt-5"> 
              <legend>Personal Information</legend>
            <div class="row">
      
            </div>
            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required/>
              </div>
      
              <div class="col-md-6 col-sm-12">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required/>
              </div>
            </div>
      
            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Preffered Username" required/>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Date Of Birth</label>
                <input type="date" class="form-control" name="dob" required/>
              </div>
            </div>
      
            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" required/>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Confirm Email address</label>
                <input type="email" class="form-control" name="email1" placeholder="Enter email" required/>
              </div>
            </div>
      
      
            <div class="row mb-4">
              <div class="col-md-6 col-sm-12">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required/>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password1" placeholder="Confirm Password" required/>
              </div>
            </div>
      
            <div class="row mb-3">
              <div class="col-md-6 col-sm-12">
                <label>Gender</label>
                <select class="form-control" name="gender" required>
                  <option>Select</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>
                </select>
                <div class="form-group mt-3">
                  <label>Upload Profile Picture</label>
                  <input type="file" class="form-control-file" name="profile_pix">
                </div>
              </div>



              <div class="col-md-6 col-sm-12">
                <label>About Me</label>
                <div class="form-group">
                  <textarea class="form-control rounded-0" name="bio" rows="5" placeholder="" required></textarea>
                </div>
              </div>
            </div>
          </fieldset>




          <fieldset class="p-3 mt-5"> 
            <legend>Property Information</legend>
          
          
            <div class="m-3">
              <label>Property Name</label>
              <input type="text" class="form-control w-50" name="propertyname" placeholder="Enter First Name" required/>
            </div>
    
            <div class="m-3">
              <label>Address</label>
              <input type="text" class="form-control w-50" name="lastname" placeholder="Enter Last Name" required/>
            </div>
         
      
            <div class="m-3">
              <label>Year Built</label>
              <input type="date" class="form-control w-50" name="dob" required/>
            </div>
         
            <div class="m-3">
              <label>Property Type</label>
              <select class="form-control w-50" name="most_preferred_language" required>
                <option>Take your pick</option>
                <option>Personal</option>
                <option>Commercial</option>
                <option>Undeveloped</option>
              
              </select>
              <div class="form-group mt-3">
                <label>Upload Profile Picture</label>
                <input type="file" class="form-control-file" name="profile_pix">
              </div>
    
    
              <button type="submit" class="btn btn-primary text-secondary" name="getstarted" onclick="showLoginModal()">Submit</button>
    
        </fieldset>
          </form>
  