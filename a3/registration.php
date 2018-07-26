<?php

include('dbconnect.php');

if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $ppassword = $_POST['ppassword'];
$cpassword = $_POST['cpassword'];

 if($ppassword = $cpassword){

$salt = '1wq12fse2';
$hash = hash_hmac('md5', $ppassword, $salt);

$sql = "INSERT INTO mmgandhi.user(fname, lname, email, phone, ppassword, active)
VALUES (:fname, :lname, :email, :phone, :ppassword, 1)";
 
$insert = $conn->prepare($sql);
$insert->bindParam(':fname',$fname);
$insert->bindParam(':lname',$lname);
$insert->bindParam(':email',$email);
$insert->bindParam(':phone',$phone);
$insert->bindParam(':ppassword',$hash);
$insert->execute();

session_start();
 $_SESSION['fname'] = $_POST['fname'];

header('location:dashboard.php');
}
}

?>
<!DOCTYPE html>
<html>
  <!-- https://www.w3schools.com/ -->
  <head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/navbar.css">
    <link type="text/css" rel="stylesheet" href="css/register.css">
    <link type="text/css" rel="stylesheet" href="css/snackbar.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <script src="js/register.js"></script>


  </head>
  <body>
    <!--https://www.w3schools.com/css/css_navbar.as p  -->
<!--     <div class="icon-bar">
      <a type="text" class="text">Interview Prep</a>
      <a type="submit" class="button" id="navhome" name="navhome" onclick="location.href='login.html';">Login</a>
      <a type="submit" class="active button" id="navhome" name="navhome" onclick="location.href='index.html';">Home</a>
    </div> -->
        <div class="topnav" id="myTopnav">
      <a href="index.html" class="active">Home</a>
      <a href="topics.html">Topics</a>
      <a href="groups.html">Groups</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
      <a href="javascript:void(0);" class="icon" onclick="navigationMenu()">
        <i class="fa fa-bars"></i>
      </a>
     <!-- <div class="topnav-right">
        <a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        <a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign up</a>
      </div> -->
    </div>


    <div class="login-page">
      <div class="form">
        <center><h2>Create your Account</h2></center><br>
          <form name="user_register" onsubmit="return !!(validateForm() & storeDetails());" method="post" action="registration.php">

            <div id="mfname">
              <label for="fname">First Name</label>
              <input class="form-control" type="text" name="fname" id="fname" placeholder="Enter First Name"/><br>
            </div>
            <div id="mlname">
              <label for="lname">Last Name</label>
              <input class="form-control" type="text" name="lname" id="lname" placeholder="Enter Last Name"/><br>
            </div>
            <div id="memail">
              <label for="email">Email</label>
              <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email"/><br>
            </div>
            <div id="mphone">
              <label for="phone">Phone Number</label>
              <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Phone Number"/><br>
            </div>
            <div id="mpassword">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="ppassword" id="ppassword" placeholder="Enter Password"/><br>
            </div>
            <div id=mcpassword>
              <label for="cpassword">Confirm Password</label>
              <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"/><br>
            </div>
            <div class="checkbox">
              <label><input id="rememberMe" type="checkbox" value="">Remember Me</label>
            </div>
            <button type="submit" name="submit" id="register-button"> Register </button>
          </form>
      </div>

    </div>
    <div id="snackbar"><p id="snackeyText"></p></div>

    <script type="text/javascript">


          document.getElementById("fname").value = localStorage.getItem("firstName");
          document.getElementById("lname").value = localStorage.getItem("lastname");
          document.getElementById("email").value = localStorage.getItem("email");
          document.getElementById("phone").value = localStorage.getItem("phoneNumber");
          document.getElementById("ppassword").value = localStorage.getItem("ppassword");

    </script>
<script src="js/app.js"></script>
  </body>
</html>
