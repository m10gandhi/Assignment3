<?php
$servername = "db.cs.dal.ca";
$username = "mmgandhi";
$password = "B00788134";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mmgandhi", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['LOGIN'])){
 $email = $_POST['email'];
 $ppassword = $_POST['ppassword'];

$salt = '1wq12fse2';
$hash = hash_hmac('md5', $ppassword, $salt);
 
 $select = $conn->prepare("SELECT * FROM user WHERE email='$email' and ppassword='$hash'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
$firstname = $data['fname'] ;
$lastname = $data['lname'] ;
$phone = $data['phone'] ;
$id = $data['user_id'];

 if($data['email']!=$email and $data['ppassword']!=$hash)
 {
  echo "invalid email or password";
  exit();
 }
elseif($data['email']=='admin@prepme.com' and $data['ppassword']==$hash)
 {
  session_start();

    $_SESSION['email'] = $_POST['email']; // store username
    $_SESSION['ppassword'] = $_POST['ppassword']; // store password
  $_SESSION['fname'] = $firstname;
$_SESSION['lname'] = $lastname;
$_SESSION['phone'] = $phone;


    header('location: dashadmin.php');
  }

 elseif($data['email']==$email and $data['ppassword']==$hash)
 {
  session_start();

    $_SESSION['email'] = $_POST['email']; // store username
    $_SESSION['ppassword'] = $_POST['ppassword']; // store password
  $_SESSION['fname'] = $firstname;
$_SESSION['lname'] = $lastname;
$_SESSION['phone'] = $phone;
$_SESSION['id'] = $id;

    header('location: dashboard.php');
  }
  
  else {
    $error = "Invalid Username or Password Please Try Again";
  }

 }
}

catch(PDOException $e)
{
echo "error".$e->getMessage();
}


?>

<!DOCTYPE html>
<html>
  <!-- https://www.w3schools.com/ -->
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/navbar.css">
    <link type="text/css" rel="stylesheet" href="css/register.css">
    <link type="text/css" rel="stylesheet" href="css/snackbar.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <script src="js/login.js"></script>
  </head>
  <body>
    <!--https://www.w3schools.com/css/css_navbar.as p  -->
<!--     <div class="icon-bar">
      <a type="text" class="text">Interview Prep</a>
      <a type="submit" class="button" id="navhome" name="navhome" onclick="location.href='register.html';">Register</a>
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
    <!--  <div class="topnav-right">
        <a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        <a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign up</a>
      </div> -->
    </div>

    <div class="login-page">
      <div class="form">
        <center><h2>Login to your Account</h2></center><br>
          <form name="user_register" onsubmit="return !!(validateForm() & storeDetails());" method="post" action="login.php">
            <div id="memail">
              <label for="email">Email</label>
              <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email"/><br>
            </div>
            <div id="mpassword">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="ppassword" id="ppassword" placeholder="Enter Password"/><br>
            </div>
            <div class="checkbox">
              <label><input id="rememberMe" type="checkbox" value="">Remember Me</label>
            </div>
            <button type="submit" name="LOGIN" id="login-button"> Login </button>
            <br/>
            <br/>
            <button type="button" onclick="window.location.href='register.html'">Don't have an account? Register Now</button>
          </form>
      </div>
    </div>
    <div id="snackbar"><p id="snackeyText"></p></div>
    <script type="text/javascript">
          document.getElementById("email").value = localStorage.getItem("email");
          document.getElementById("password").value = localStorage.getItem("password");
    </script>
    <script src="js/app.js"></script>
  </body>
</html>
