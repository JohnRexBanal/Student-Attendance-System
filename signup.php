<?php 
session_start();
  

  include('connection.php');
  include('functions.php');


  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

      $user_id = random_num(20);
      $query = "insert into users (user_id,  user_name,  password) values ('$user_id', '$user_name', '$password')";

      mysqli_query($con, $query);

      echo "<span class='form-success'>Successfully registered.</span>";  
      
    }else{

      echo "<span class='form-error'>Please enter some valid information.</span>";
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attendance System</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <style>
      <?php include "style.css" ?>
    </style>
    <script src="script.js"></script>

  </head>
  <body class="top">

    <header>
      
      <nav>
        
        <h1 class="logo">Student Attendance</h1>
        <ul class="menu">
          
          
          <li><a href="login.php">Login</a>
            <ul class="submenu2">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
          </li>
         

        </ul>

      </nav>

    </header>

    <form class="sign-form" method="post">
	<h1>Sign up</h1>
	<div class="txtform">
		<input type="text" name="user_name" placeholder="Username">
	</div>
	<div class="txtform">
		<input type="password"a name="password" placeholder="Password">
	</div>
	<input type="submit" value="Sign up" class="signbtn">
	<div class="sign-text">
		Already have an account? <a href="login.php">Login</a>
	</div>
</form>

  
  </body>
</html>