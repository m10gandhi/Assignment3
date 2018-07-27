<?php

include('dbconnect.php');

if(isset($_POST['submit'])){
  $Ttitle = $_POST['Ttitle'];
  $Ttag = $_POST['Ttag'];
$description = $_POST['description'];

$sql = "INSERT INTO topics(Ttitle, Ttag, description) VALUES (:Ttitle, :Ttag, :description)";
 
$insert = $conn->prepare($sql);
$insert->bindParam(':Ttitle',$Ttitle);
$insert->bindParam(':Ttag',$Ttag);
$insert->bindParam(':description',$description);
$insert->execute();

header('location:dashadmin.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" type="text/css" href="css/dashtopics.css">
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
                    <a href="dashadmin.php" >Dashboard</a>
                </li>
                <li>
                    <a href="#">Topics</a>
                </li>
                <li>
                    <a href="dashquiz.php">Quiz</a>
                </li>
                <li>
                    <a href="dashusers.php">Users</a>
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
                        <a href="#menu-toggle" class="btn btn-default" id="men-toggle">Toggle Menu</a> <br>
                    </div>
                 <script>
    $("#men-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
                </div>
            <div class = "row">
<div class="container">
  <form action="dashtopics.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="Ttitle">Topic Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="Ttitle" name="Ttitle" placeholder="Enter the Topic name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Ttag">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Ttag" name="Ttag" placeholder="Enter the Topic Tag">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-75">
        <textarea id="description" name="description" placeholder="Write the Topic details here..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</div>

            </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    </body>
</html>