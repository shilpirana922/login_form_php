<?php
include 'connect_db.php';

$conn=openCon();


if(isset($_POST['username'])){

    $username = $_POST['username'];// get username from request
    $password = $_POST['password'];// get passwrod from request
   
    // sql query for matching data
    $query = "select * from login where username='".$username."' and password='".$password."'";
     
    // search result
    $result = mysqli_query($conn,$query);

     // finding no. of record present if equals to 1 then login success other wise fail.
    if(mysqli_num_rows($result)==1){
        header("Location: userPanel.php");
    }
    else{
        echo "<script type='text/javascript'>alert('Invalid Username and Password');</script>";
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div style="margin-top:-50px;>					 
<span class="login100-form-title p-b-70" >
						
						<h1 align="center">Login</h1>
				
					</span>
                                </div>         

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	

</body>
</html>