<?php


include 'connect_db.php';

$connect=openCon();

if(isset($_POST["username"])){

$username =  $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "Insert into login(username, email, password) values('$username','$email', '$password') ";

if(mysqli_query($connect, $query)){
    header("Location: userPanel.php");
}
else{
    $error=mysqli_error($conn);
    echo "<script type='text/javascript'>alert(\"$error\");</script>"; 
}

}


?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Data Management</title>

		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
     <!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		
<!--header-->
			<?php include "header.php" ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
<!--sidenav bar-->
			<?php include "sidenav.php" ?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							
							<li class="active">Create User	</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						

						<div class="page-header">
							<h1>
								Create User								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Enter all the 									

									<?php

if(!empty($r)){

 echo "<h2 style='color:green;'>Data Saved Successfully.</h2>";
}
?>

											  <div id="alert_message"></div>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-md-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="row">
							<div class="col-md-5">					


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Username </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Username" class="form-control" name="username" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email </label>

										<div class="col-sm-9">
											<input type="email" id="form-field-1-1" placeholder="Email" class="form-control" name="email" required/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> password </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-1-1" placeholder="Password" class="form-control" name="password" required/>
										</div>
									</div>


									<div class="space-4"></div>


									
						</div>
						
						
                            </div>       

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn" type="submit" value="save">

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>



									
								</form>

								

								

							
								

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include "footer.php"; ?>

		
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
	
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<!-- ace scripts -->
	
	</body>
</html>
