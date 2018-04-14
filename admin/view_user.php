<?php 
	include 'get_user_details.php';
	if (!(isset($_SESSION['success'])))
	{
		header('location: /sis2/landing.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>view</title>
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
			      	 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

			      			<strong><font size=5  color="blue" >
			      				<?php echo "Welcome Admin : "; 
										echo $_SESSION['adminname']."<br>"; ?>
							</font></strong></a>

					</li>
			    </ul>
			   
			    <ul class="nav navbar-nav navbar-right">

			        <li><a href="../logout.php"> Logout</a></li>
			    </ul>
		    </div>
		</nav>

	<div class="container">
		<div class="col-md-6">
			
			<div class="well well-sm">
				
				<center><h3><strong>Personal Details</strong></h3></center>

				<strong><h4>
				<table class="table table-striped">
				    
				    <tbody>
				      	<tr>
					        <td>Name</td>
					        <td><?php echo $_SESSION['fname']." ".$_SESSION['mname']." ".$_SESSION['lname']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Guardian's Name</td>
					        <td><?php echo $_SESSION['gname'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Date of Birth</td>
					        <td><?php echo $_SESSION['dob'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Gender</td>
					        <td><?php echo $_SESSION['gender'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Blood Group</td>
					        <td><?php echo $_SESSION['bg'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Caste</td>
					        <td><?php echo $_SESSION['caste'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Phone No</td>
					        <td><?php echo $_SESSION['phone'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Email Address</td>
					        <td><?php echo $_SESSION['email'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Address</td>
					        <td><?php echo $_SESSION['padd'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Pincode</td>
					        <td><?php echo $_SESSION['ppin'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Country</td>
					        <td><?php echo $_SESSION['pcoun'] ?></td>
				      	</tr>
				      	<tr>
					        <td>State</td>
					        <td><?php echo $_SESSION['pstate'] ?></td>
				      	</tr>
				      	<tr>
					        <td>Extra Curricular Activities</td>
					        <td><?php echo $_SESSION['eac'] ?></td>
				      	</tr>
				      	
				      
				    </tbody>
				  </table></h4></strong>

			</div>
		</div>

		<div class="col-md-6">
			
			<div class="well well-sm">
				<center><h3><strong>Academic Details</strong></h3></center>
				<strong><h4>
				<table class="table table-striped">
					<tbody>
				      	<tr>
					        <td>College Name</td>
					        <td><?php echo $_SESSION['college_name']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Programme</td>
					        <td><?php echo $_SESSION['programme']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Deprtment</td>
					        <td><?php echo $_SESSION['dept']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Semester</td>
					        <td><?php echo $_SESSION['sem']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Registration No.</td>
					        <td><?php echo $_SESSION['reg_no']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Passing Year</td>
					        <td><?php echo $_SESSION['college_year']; ?></td>
				      	</tr>
				      	<tr>
					        <td>CGPA</td>
					        <td><?php echo $_SESSION['college_cgpa']; ?></td>
				      	</tr>

				      	<tr>
					        <td>12th School</td>
					        <td><?php echo $_SESSION['twelve_name']; ?></td>
				      	</tr>
				      	<tr>
					        <td>12th Passing Year</td>
					        <td><?php echo $_SESSION['twelve_year']; ?></td>
				      	</tr>
				      	<tr>
					        <td>12th Score</td>
					        <td><?php echo $_SESSION['twelve_cgpa']; ?></td>
				      	</tr>
				      	<tr>
					        <td>10th School</td>
					        <td><?php echo $_SESSION['tename']; ?></td>
				      	</tr>
				      	<tr>
					        <td>10th Passing Year</td>
					        <td><?php echo $_SESSION['teyear']; ?></td>
				      	</tr>
				      	<tr>
					        <td>10th Score</td>
					        <td><?php echo $_SESSION['tecgpa']; ?></td>
				      	</tr>
				    </tbody>
				</table></h4></strong>
			</div>
		</div>

	</div>




	<!--<div class="col-md-6">
			
			<div class="well well-sm">
				<center><h3><strong>Academic Details</strong></h3></center>
				<strong><h4>
				<table class="table table-striped">
					<tbody>
				      	<tr>
					        <td>College Name</td>
					        <td><?php //echo $_SESSION['college_name']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Programme</td>
					        <td><?php //echo $_SESSION['programme']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Deprtment</td>
					        <td><?php //echo $_SESSION['dept']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Semester</td>
					        <td><?php //echo $_SESSION['sem']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Registration No.</td>
					        <td><?php //echo $_SESSION['reg_no']; ?></td>
				      	</tr>
				      	<tr>
					        <td>Passing Year</td>
					        <td><?php //echo $_SESSION['college_year']; ?></td>
				      	</tr>
				      	<tr>
					        <td>CGPA</td>
					        <td><?php //echo $_SESSION['college_cgpa']; ?></td>
				      	</tr>

				      	<tr>
					        <td>12th School</td>
					        <td><?php //echo $_SESSION['twelve_name']; ?></td>
				      	</tr>
				      	<tr>
					        <td>12th Passing Year</td>
					        <td><?php //echo $_SESSION['twelve_year']; ?></td>
				      	</tr>
				      	<tr>
					        <td>12th Score</td>
					        <td><?php //echo $_SESSION['twelve_cgpa']; ?></td>
				      	</tr>
				      	<tr>
					        <td>10th School</td>
					        <td><?php //echo $_SESSION['tename']; ?></td>
				      	</tr>
				      	<tr>
					        <td>10th Passing Year</td>
					        <td><?php //echo $_SESSION['teyear']; ?></td>
				      	</tr>
				      	<tr>
					        <td>10th Score</td>
					        <td><?php //echo $_SESSION['tecgpa']; ?></td>
				      	</tr>
				    </tbody>
				</table></h4></strong>
			</div>
		</div>-->


</body>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
</html>