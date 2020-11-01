<?php

include 'connect_db.php';

$conn = openCon();

$query =  "select * from login";

$result = mysqli_query($conn,$query);


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

	
<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />


		<script src="assets/js/ace-extra.min.js"></script>
		 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	</head>

	<body class="no-skin">
		<?php include "header.php" ?>

		<div class="main-container ace-save-state" id="main-container">
		
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

							
							<li class="active">Records</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							


						</div><!-- /.nav-search -->
					</div>
                    <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
    <?php

              while($row = $result->fetch_assoc()) {
                 echo "<tr>";
                   echo "<td>".$row["id"]."</td>";
                   echo "<td>".$row["username"]."</td>";
                   echo "<td>".$row["email"]."</td>";
                   echo "<td>".$row["password"]."</td>";
                   echo "</tr>";
                  }
            
    ?>
     </tbody>
  </table>
               
					
                      
						
					</div><!-- /.page-content -->
				</div>


               
			</div><!-- /.main-content -->
    
			<?php include "footer.php"; ?>

			
		</div><!-- /.main-container -->

<script src="assets/js/bootstrap.min.js"></script>



		
	</body>
</html>
