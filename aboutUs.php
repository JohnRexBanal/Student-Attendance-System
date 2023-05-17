<?php  ?>

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
          
          <li><a href="index.php">Home</a></li>
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

   	<section class="aboutUs">
   		<h1 class="headTitle">About</h1>
   		<h2 class="titleText">Student Attendance Management System</h2>
   		<p class="para">Our Webpage is about Student Attendance Management System that uses a Barcode Scanner to scan Barcodes embedded from the back of the student ID.</p>
   	</section>


     <link rel="stylesheet" href="./social-media-icons.css">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>

    <div class="social-menu">
        <ul>
            <li><a href="" target="blank"><i class="fab fa-github"></i></i></a></li>
            <li><a href="" target="blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href=""><i class="fab fa-codepen" target="blank"></i></a></li>
        </ul>
    </div>
  
  </body>
</html>