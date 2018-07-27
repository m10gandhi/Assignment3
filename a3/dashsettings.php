<?php
$servername = "db.cs.dal.ca";
$username = "mmgandhi";
$password = "B00788134";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mmgandhi", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" type="text/css" href="css/dashsettings.css">
</head>
<body>
   <div id="wrapper">
  <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="nav-sidebar">
                <li class="sidebar-inner">
                    <a href="index.php">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="dashboard.php" >Dashboard</a>
                </li>
                <li>
                    <a href="#">Quiz Score</a>
                </li>
                <li>
                    <a href="#">Groups</a>
                </li>
                <li>
                    <a href="#">Settings</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="content-wrapper">
            <div class="container-fluid">
                        <a href="#menu-toggle" class="btn btn-default" id="men-toggle">Toggle Menu</a>
                <div class="row">
                    <div class="col-lg-12">
                         <h1>Welcom,</h1>
    <h2><?php
    session_start();
if (!(isset($_SESSION['fname']) == "Admin")) {

header ("Location: dashboard.php");

}

elseif (!(isset($_SESSION['fname']) && $_SESSION['fname'] != '')) {

header ("Location: login.html");

}
else{
    echo $_SESSION['fname'];
}
    ?></h2>
                    </div>
                 <script>
    $("#men-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
                </div>
                <div class="row">
<form action="/action_page.php" style="max-width:500px;margin:auto">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="First name" name="fname">
  </div>

<div class="input-container">
<i class="fa fa-user-o icon"></i>
    <input class="input-field" type="text" placeholder="Last name" name="lname">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email">
  </div>
  
<div class="input-container">
<i class="fa fa-mobile-phone icon"></i>
    <input class="input-field" type="number" placeholder="Phone" name="phone">
  </div>

<button type="submit" class="btn1">Update</button>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="ppassword">
  </div>

<div class="input-container">
    <i class="fa fa-key-o icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="cpassword">
  </div>
  <button type="submit" class="btn1">Update</button>
</form>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    </body>
</html>