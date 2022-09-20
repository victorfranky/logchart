<?php 
  
  include ("connection.php");
  include_once ("functions.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

<?php 

  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
      $password = $_POST['password'];
      $username = $_POST['username'];
      
      if(!empty($username) && !empty($password))
      {

        //save to database
        $id = random_num(20);
        $query = "INSERT INTO users (id, username, password) VALUES ('$id', '$username', '$password')";
        
        mysqli_query($conn, $query);

        header("Location:index.php");
        die;
    }else
       { ?>
          <p id="error"> Please Enter Some Valid Information </p> <?php
       }
    }
?>
				<form method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Register your account
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" placeholder="Username" name="username" >
						
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" placeholder="Password" name="password">
						
					</div>
					<br>
					
					<br>

					<div class="container-login100-form-btn">
						<button onClick="window.location.reload();" type="submit" class="login100-form-btn">
							Register
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Already Have an Account? &nbsp; <a style="font-size:14px" href="index.php"> Login Now  </a>
						</span>
					</div>

					
				</form>

				<div class="login100-more" style="background-image: url('images/a.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>