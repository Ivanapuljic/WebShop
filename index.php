<?php include "login.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>C&S</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="login.css" rel="stylesheet">
</head>

<body id="page-top">
<p id="title">C&S</p>
  <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign In</button>
  <div class="well">
    <div id="id01" class="modal">
      <form action ="" class="modal-content animate" method="post">
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit" name="login">Sign In </button>
      </div>
      <div class="container" style="background-color: lightgrey">
        <button type="button"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
      </form>
    </div>
  </div>
  <button class="btnn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
  <div id="id02" class="modal">
    <form class="modal-content animate" action="login.php" method="post">
      <div class="container" >
        <label for="uname"><b>First name</b></label>
        <input type="text" placeholder="Enter Firstname" name="user_firstname" required>
        <label for="uname"><b>Last name</b></label>
        <input type="text" placeholder="Enter Lastname" name="user_lastname" required>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <label for="emailaddr"><b>Email Address</b></label>
        <input type="text" placeholder="Enter E-mail address" name="user_email" required>
        <label for="emailaddr"><b>Address</b></label>
        <input type="text" placeholder="Street Name and Number" name="user_address" required>
        <input type="text" placeholder="City" name="city" required>
        <input type="text" placeholder="Post Number" name="post_number" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="user_password" required>     
        <button type="submit" name="create_user"><b>Register</b></button>
      </div>
      <div class="container" style="background-color: lightgrey">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 
</html>
