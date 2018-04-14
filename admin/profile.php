<?php 
	include '../login_val.php';
	include 'request.php';
	if (!(isset($_SESSION['success'])))
	{
		header('location: /sis2/landing.php');
	}
?>


<html>
	<head>
	<title>Admin</title>
	<style>
		input[type=submit]{
		  color:white;
		  margin:1px 0;
		  border:none;
		  cursor:pointer;
		  border-radius:5px;
		}
	</style>

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
			
			<div class="row">


				<div class="col-md-4">
					
					<div class="well well-sm">

						<center><h3>Registered Users</h3></center>
						<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "sis";

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) 
								{
								    die("Connection failed: " . $conn->connect_error);
								} 

								$sql = "SELECT * FROM registration";
								$result = $conn->query($sql);

								echo '<center><table class="table table-striped">
									    	<thead>
											    <tr>
											        <th>Username</th>
											        <th>Registration no.</th>
											        <th>Phone no.</th>
											    </tr>
									    	</thead>
									    	<tbody>';
								if ($result->num_rows > 0) 
								{
								    while($row = $result->fetch_assoc()) 
								    {
								
								        echo '
								        
											    <tr>
										        	<td>'.$row["username"]."</td>
										        	<td>".$row["reg_no"]."</td>
										        	<td>".$row["phone"]."</td>
										        </tr>";
								        	
								    }
								} 
								echo "
									    	</tbody>
									  	</table></center>";

								$conn->close();
							?>
					</div>
					

				</div>



				<div class="col-md-3">
					
					<div class="row">
						<div class="well well-sm">
							<center><h3>Add Admin</h3></center>

							<form action="/sis2/admin/add_admin.php" method="post">
								<div class="form-group">
								    <label for="email">Admin Name : </label>
								    <input type="text" class="form-control" name="adminname" required>
								</div>
								<div class="form-group">
								    <label for="pwd">Password:</label>
								    <input type="password" class="form-control" name="adminpassword" required>
								</div>
							  	<button type="submit" class="btn btn-primary" name="add_admin">Add</button>
							</form>

						</div>
					</div>

					<div class="row">
						<div class="well well-sm">
						
							<form class="form" method="post" action="/sis2/admin/get_user_details.php">

								<center><h3>Search A Student</h3></center>
								<div class="form-group">
								    <label for="pwd">Registration Number :</label>
								    <input type="text" class="form-control" name="searchuser" required>
								</div>
							  	<button type="submit" class="btn btn-primary" name="search">View</button>
							</form>
						</div>
					</div>

				</div>




				<div class="col-md-5">

					<div class="row">
						


					</div>

					<div class="row">
						

					</div>
					
					<div class="well well-sm">
						
						<center><h3>Registration Request</h3>

						
						

				    		<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "sis";

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) 
								{
								    die("Connection failed: " . $conn->connect_error);
								} 

								$sql = "SELECT * FROM registrationrequest";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) 
								{
								    while($row = $result->fetch_assoc()) 
								    {
								
								        echo '
								        <table class="table table-condensed">
										    <thead>
										      <tr>
										        <th>Registration No.</th>
										        <th>Username</th>
										        <th>Action</th>
										      </tr>
										    </thead>
										    <tbody>
										      
										    	<tr>
								        <tr><form method="post" action="profile.php">
								        	<td>'; ?>
								        		<input style="width: 60%" type="text" name="user_register" <?php echo 'value="'.$row["reg_no"].'" '; ?> readonly >
								        		<?php echo "</td>
								        	<td>". $row["username"]. "</td>
								        	<td>" ;
								        	?>
								        		<input type="submit" value="Accept" id="submit" name="accept" style="background-color: #39e600;">

								        		<input type="submit" value="Reject" id="submit" name="reject" style="background-color: #ff3333;" >
								        		</form>
								        		
											
											<?php echo "</td>
										</tr></tr>

									    </tbody>
									  </table>";
								    }
								} else {
								    echo "No New Requests!!";
								}

								$conn->close();
							?>
						 </center>   	
					</div>
				</div>


				
			</div>
		</div>



		

		<!--<nav class="navbar navbar-default">
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
			      				<?php/* echo "Welcome Admin : "; 
										echo $_SESSION['adminname']."<br>";*/ ?>
							</font></strong></a>

					</li>
			    </ul>
			   
			    <ul class="nav navbar-nav navbar-right">

			        <li><a href="../logout.php"> Logout</a></li>
			    </ul>
		    </div>
		</nav>-->







	</body>








	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>