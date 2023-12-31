<?php
include("developers.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <link rel="icon" type="image/png" href="./images/icons/favicon.ico"/>
        
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
 	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="table.php" method="post" class="login100-form validate-form" >
                
					<span class="login100-form-title p-b-49">
						Form
					</span>
                
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Name</span>
						<input  id="name" class="input100" type="text" name="fullName" placeholder="Enter your name" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Email</span>
						<input id="email" class="input100" type="email" name="email" placeholder="Enter your email" required>
						<span class="focus-input100" data-symbol="&#9993;"></span>
					</div>
					<br>

					<div class="wrap-input100 validate-input" data-validate="Phone number is required">
						<span class="label-input100">Phone Number</span>
						<input id="pno" class="input100" type="tel" pattern="^\d{10}$" required  name="mobile" placeholder="Enter your phone number">
						<span class="focus-input100" data-symbol="&#xf095;"></span>
					</div>
                    <br>
                    

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                        
							<button class="login100-form-btn" name="save" type="submit" value="submit" id="submit">
								<b>Submit</b>
							</button>
                    
						</div>
					</div>
                </form>
            </div></div></div>
</body>
</html>