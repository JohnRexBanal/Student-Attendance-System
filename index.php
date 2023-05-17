<?php 
session_start();
  
  include('connection.php');
  include('functions.php');

  // collects user data
  $user_data = check_login($con);
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
          
          <li><a href="">Home</a></li>
          <li><a href="#">Student Management</a>
            <ul class="submenu">
              <li><a href="registerStudent.php">Register Student</a></li>
            </ul>

          </li>
          <li><a href="#">Attendance Management</a>
            <ul class="submenu1">
              <li><a href="scanStudent.php">Scan Attendance</a></li>
            </ul>
          </li>
          <li><a href="">Login</a>
            <ul class="submenu2">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
          </li>
          <li><a href="aboutUs.php">About Us</a></li>

        </ul>

      </nav>

    </header>

    <div class="homeTime">
      <?php 
         date_default_timezone_set('Asia/Manila');
         $date = date('d/m/y H:i:s');
         echo $date;
         ?>
    </div>
     
    <h1 class="userGreet">Hello, <?php echo $user_data['user_name']; ?></h1>


    

  
  </body>
</html>