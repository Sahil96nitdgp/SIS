<?php //include('../login_val.php'); 
		include 'header.php';
?>



			<div class="col-md-8">
				<center><h1><strong><font color="white">Academic details</font><br/></strong></h1></center><br/>
				<div class="well well-sm">

			<?php if (isset($_SESSION['success'])): ?>
						
					<strong><h4>
						<table class="table table-striped">
						    <center><h2><strong>College details<br/></strong></h2></center><br/>
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
							        <td>Department</td>
							        <td><?php echo $_SESSION['dept']; ?></td>
							    </tr>
							    <tr>
							        <td>Registration No.</td>
							        <td><?php echo $_SESSION['reg_no']; ?></td>
							    </tr>
							    <tr>
							        <td>Semester</td>
							        <td><?php echo $_SESSION['sem']; ?></td>
							    </tr>
							    <tr>
							        <td>Roll No.</td>
							        <td><?php echo $_SESSION['roll']; ?></td>
							    </tr>
							    <tr>
							        <td>Passing Year</td>
							        <td><?php echo $_SESSION['college_year']; ?></td>
							    </tr>
							    <tr>
							        <td>CGPA</td>
							        <td><?php echo $_SESSION['college_cgpa']; ?></td>
							    </tr>
							    
						      	
						    </tbody>
						</table>
					</h4></strong>


			<?php endif ?>
				</div>

				<div class="well well-sm">

			<?php if (isset($_SESSION['success'])): ?>
						
					<strong><h4>
						<table class="table table-striped">
						    <center><h2><strong>12th Details<br/></strong></h2></center><br/>
						    <tbody>
						     	<tr>
							        <td>School Name</td>
							        <td><?php echo $_SESSION['twelve_name']; ?></td>
							    </tr>
							    <tr>
							        <td>Board</td>
							        <td><?php echo $_SESSION['twelve_board']; ?></td>
							    </tr>
							    <tr>
							        <td>Passing Year</td>
							        <td><?php echo $_SESSION['twelve_year']; ?></td>
							    </tr>
							    <tr>
							        <td>Percentage/CGPA</td>
							        <td><?php echo $_SESSION['twelve_cgpa']; ?></td>
							    </tr>
							    
							    
						      	
						    </tbody>
						</table>
					</h4></strong>

					
			<?php endif ?>
				</div>


				<div class="well well-sm">

			<?php if (isset($_SESSION['success'])): ?>
						
					<strong><h4>
						<table class="table table-striped">
						    <center><h2><strong>10th Details<br/></strong></h2></center><br/>
						    <tbody>
						     	<tr>
							        <td>School Name</td>
							        <td><?php echo $_SESSION['tename']; ?></td>
							    </tr>
							    <tr>
							        <td>Board</td>
							        <td><?php echo $_SESSION['teboard']; ?></td>
							    </tr>
							    <tr>
							        <td>Passing Year</td>
							        <td><?php echo $_SESSION['teyear']; ?></td>
							    </tr>
							    <tr>
							        <td>Percentage/CGPA</td>
							        <td><?php echo $_SESSION['tecgpa']; ?></td>
							    </tr>
							    
							    
						      	
						    </tbody>
						</table>
					</h4></strong>

					
			<?php endif ?>
				</div>
			</div>
		</div>
		

	</body>


</html>

