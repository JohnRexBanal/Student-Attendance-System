<?php 
session_start();
  

  include('connection.php');
  include('functions.php');


  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

     
      $query = "select * from users where user_name = '$user_name' limit 1";

      $result = mysqli_query($con, $query);

      if($result){

        if($result && mysqli_num_rows($result) > 0){

          $user_data = mysqli_fetch_assoc($result);

          if($user_data['password'] === $password){

             $_SESSION['user_id'] = $user_data['user_id'];
             header("Location: index.php");
             die();
          }
        }
      }
      echo "<span class='form-error'>Wrong username or password!</span>";

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

    <form class="login-form" method="post">
	<h1>Login</h1>
	<div class="txtb">
		<input type="text" name="user_name" placeholder="Username">
	</div>
	<div class="txtb">
		<input type="password" name="password" placeholder="Password">
	</div>
	<input type="submit" value="Login" class="logbtn">
	<div class="bottom-text">
		Don't have account? <a href="signup.php">Sign up</a>
	</div>
  <p class="form-message" id="form-res"></p>
</form>

  
  </body>
</html>