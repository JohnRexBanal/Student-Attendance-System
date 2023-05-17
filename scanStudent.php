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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
      <?php include "script.js" ?>
    </script>

  </head>
  <body class="top" onload="startTime()">

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
              <li><a href="#">Scan Attendance</a></li>
            </ul>
          </li>
          <li><a href="login.php">Login</a>
            <ul class="submenu2">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
          </li>
          <li><a href="aboutUs.php">About Us</a></li>

        </ul>

      </nav>

    </header>



    <div class="timeContainer">
      <div class="time" id="txt"></div>
    </div>

    <div class="scanContainner">
      <form action="" method="GET">
         <input type="text" name="search" class="barInt" autofocus value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">

      </form>
    </div>

    <table class="tableContainer">
      <tr>
        <th>ID</th>
        <th>LAST NAME</th>
        <th>FIRST NAME</th>
         <th>TIME</th>
      </tr>

       </thead>
                            <tbody>
                                <?php 
                                date_default_timezone_set('Asia/Manila');
                                $date = date('d/m/y H:i:s');
                                  
                                    $con = mysqli_connect("localhost","root","","registeredstud");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM students WHERE CONCAT(id,lastname,firstname) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['lastname']; ?></td>
                                                    <td><?= $items['firstname']; ?></td>
                                                    <td><?= $items = $date; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="3">No Student Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	</body>

</html>