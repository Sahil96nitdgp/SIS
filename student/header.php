<?php include '../login_val.php'; 
	if (!(isset($_SESSION['success'])))
	{
		header('location: /sis2/landing.php');
	}
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_SESSION['username']; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="Assests/css/main.css">

	</head>


	<body style="background-image: url('../images/bg.jpg'); background-size: cover;">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			    <div class="navbar-header">
			    	<a class="navbar-brand" href="profile.php">Student Information System</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="profile.php">Profile</a></li>
			    </ul>

			    <ul class="nav navbar-nav">
			      <li><a href="profile.php" >
			      	 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

			      			<strong><font size=5  color="blue" >
			      				<?php echo "Welcome "; 
										echo $_SESSION['username']."<br>"; ?>
							</font></strong></a>

					</li>
			    </ul>
			   
			    <ul class="nav navbar-nav navbar-right">

			    	<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Details
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				        	<li><a href="../signup/add_personal.php">Personal Details</a></li>
				            <li><a href="../signup/add_educational.php">Educational Details</a></li>
				        </ul>
				    </li>



				    <li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Update Details
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				        	<li><a href="../signup/update_personal.php">Personal Details</a></li>
				            <li><a href="../signup/update_educational.php">Educational Details</a></li>
				        </ul>
				    </li>
			        <li><a href="../logout.php"> Logout</a></li>
			    </ul>
		    </div>
		</nav>

		<div class="container">
			
			<div class="col-md-4">
				
				<div class="well">
					
					<ul>
						<li><a href="get_personal.php" ><h3><strong>Personal Details</strong></h3></a></li>
						<li><a href="get_college.php"><h3><strong>Academic Details</strong></h3></a></li>
						<li><a href="get_contact.php" class="active"><h3><strong>Contact Details</strong></h3></a></li>
					</ul>
				</div>
			</div>