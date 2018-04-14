<?php //include ('../login_val.php');
		include ('header.php');
		//include 'get_personal.php';
 ?>


 	<div class="col-md-8">
				
		<div class="well">

			<center><h1><strong>Personal details<br/></strong></h1></center><br/>

			<?php if (isset($_SESSION['success'])): ?>
						
					<strong><h4>
						<table class="table table-striped">
						   
						    <tbody>
						     	<tr>
							        <td>Name</td>
							        <td><?php 
							        if ($_SESSION['mname']!='.') {
							        	echo $_SESSION['fname']." ".$_SESSION['mname']." ".$_SESSION['lname'];
							        }
							        else
							        {
							        	echo $_SESSION['fname']." ".$_SESSION['lname'];
							        }
							         ?></td>
							        
							    </tr>
							    <tr>
							        <td>Guardian's Name</td>
							        <td><?php echo $_SESSION['gname']; ?></td>
							    </tr>
							    <tr>
							        <td>Date of Birth</td>
							        <td><?php echo $_SESSION['dob']; ?></td>
							    </tr>
							    <tr>
							        <td>Age</td>
							        <td><?php echo $_SESSION['age']; ?></td>
							    </tr>
							    <tr>
							        <td>Gender</td>
							        <td><?php echo $_SESSION['gender']; ?></td>
							    </tr>
							    <tr>
							        <td>Blood Group</td>
							        <td><?php echo $_SESSION['bg']; ?></td>
							    </tr>
							    <tr>
							        <td>Caste</td>
							        <td><?php echo $_SESSION['caste']; ?></td>
							    </tr>
							    <tr>
							        <td>Hobbies</td>
							        <td><?php echo $_SESSION['hobby']; ?></td>
							    </tr>
							    <tr>
							        <td>Extra Curricular Activities</td>
							        <td><?php echo $_SESSION['eac']; ?></td>
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
