
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

    <div class="container">
    	<div class="header">
    		<h1>Student Registration</h1>
    	</div>

    	<form class="form-container" action="insert.php" method="post">
    		<input class="input" id="form_fname" type="text" name="firstname" placeholder="First name" required>
    		<input class="input" id="form_mname" type="text" name="middle_initial" placeholder="Middle Initial">
    		<input class="input" id="form_lname" type="text" name="lastname" placeholder="Lastname">
        <label for="birthday">Date of Birth:</label>
        <input class="input" type="text" id="form_bdate" name="birthdate" placeholder="YYYY-MM-DD">
    		<select class="input" id="form_gender" name="gender">
    			<option selected hidden value="">Select Gender</option>
    			<option value="Male">Male</option>
    			<option value="Female">Female</option>
    		</select> 
    		<input class="input" id="form_address" type="text" name="address" placeholder="Address"> 
    		<input class="input" id="form_email" type="text" name="email" placeholder="Email Address">
    		<input class="input" id="form_tel" type="tel" name="phone" placeholder="Phone number">
        <button id="form_submit" id="form_submit" type="submit" name="submit" >Submit</button>
        <p class="form-msg" id="form-res"></p>
    	</form>
    </div>

    <script>
    	$(document).ready(function(){
    		$('form').submit(function(event){
    			event.preventDefault();

    		let firstname = $("#form_fname").val();
				let middle_initial = $("#form_mname").val();
				let lastname = $("#form_lname").val();
				let birthdate = $("#form_bdate").val();
				let gender = $("#form_gender").val();
				let address = $("#form_address").val();
				let email = $("#form_email").val();
				let phone = $("#form_tel").val();
				let submit = $("#form_submit").val();

				$(".form-msg").load("insert.php" ,{

					firstname: firstname, 
					middle_initial: middle_initial,
					lastname: lastname,
					birthdate: birthdate,
					gender:gender,
					address: address,
					email: email,
					phone: phone,
					submit: submit

				})
    		})
    	})

    </script>

  
  </body>
</html>