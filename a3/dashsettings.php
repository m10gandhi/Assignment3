<?php
session_start();
include('dbconnect.php');

$id = $_SESSION['id'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];


if(isset($_POST['Update'])){


	$firstname = $_POST['fname'];

	$sql = "UPDATE mmgandhi.user SET fname ='$firstname' WHERE user_id = $id";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";

    $_SESSION['fname'] = $firstname;
 }
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a href="#">
                       Prep Me
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
                         <h2>Welcom,
                         	<?php
    session_start();
if (!(isset($_SESSION['fname']) == "Admin")) {

header ("Location: dashboard.php");

}

elseif (!(isset($_SESSION['fname']) && $_SESSION['fname'] != '')) {

header ("Location: login.html");

}
else{
    echo $fname;
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
<form action="dashsettings.php" method="post" style="max-width:500px;margin:auto">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="<?php echo $fname; ?>" name="fname">
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
<button type="submit" class="btn1" name="Update">Update</button>
</form>
</div>

<div class="row">
<form action="dashsettings.php" style="max-width:500px;margin:auto">
	<h2>Change password</h2>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="ppassword">
  </div>

<div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="cpassword">
  </div>
  <button type="submit" class="btn1" name="Change">Change</button>
</form>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    </body>
</html>