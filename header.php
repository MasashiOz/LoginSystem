<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>LogIn System</title>
  <script src="https://kit.fontawesome.com/7ae489ddff.js" crossorigin="anonymous"></script>
</head>
<body style="background-color:black">

  <!-- navber area -->
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark py-3">
    <div class="container w-75">
      
      <a class="navbar-brand" href="#"><i class="fab fa-apple"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">ABOUT US</a>
          </li>

          <?php 
          if(isset($_SESSION['usersName'])){
              $user = $_SESSION['Full_Name'];
          ?>
          <li class="nav-item">
              <a class="nav-link" href="users.php">USERS</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="#"><?php echo "Welcome $user" ?></a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="logout_inc.php">LOG OUT</a>
          </li>
          <?php
          } else {
          ?>
          <li class="nav-item">
              <a class="nav-link" href="signup.php">SIGN UP</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="login.php">LOGIN</a>
          </li>
          <?php
         }
         ?>        
        </ul>        
      </div>
    </div>
  </nav>