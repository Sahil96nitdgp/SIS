<?php 
	include 'header.php';
?>




		


			<div class="col-md-8">
				
				<div class="well">

			<center><h1><strong>Contact details<br/></strong></h1></center><br/>

			<?php if (isset($_SESSION['success'])): ?>
						
					<strong><h4>
						<table class="table table-striped">
						   
						    <tbody>
						     	<tr>
							        <td>Phone no.</td>
							        <td><?php echo $_SESSION['phone']; ?></td>
							    </tr>

							    <tr>
							        <td>Email Address</td>
							        <td><?php echo $_SESSION['email']; ?></td>
							    </tr>

							    <tr>
							        <td>Permanent Address</td>
							        <td><?php echo $_SESSION['padd']; ?></td>
							    </tr>
							    <tr>
							        <td>Pin Code</td>
							        <td><?php echo $_SESSION['ppin']; ?></td>
							    </tr>
							    <tr>
							        <td>Country</td>
							        <td><?php echo $_SESSION['pcoun']; ?></td>
							    </tr>
							    <tr>
							        <td>State</td>
							        <td><?php echo $_SESSION['pstate']; ?></td>
							    </tr>
							    <tr>
							        <td>Correspondance Address</td>
							        <td><?php echo $_SESSION['cadd']; ?></td>
							    </tr>
							    <tr>
							        <td>Pin Code</td>
							        <td><?php echo $_SESSION['cpin']; ?></td>
							    </tr>
							    <tr>
							        <td>Country</td>
							        <td><?php echo $_SESSION['ccoun']; ?></td>
							    </tr>
							    <tr>
							        <td>State</td>
							        <td><?php echo $_SESSION['cstate']; ?></td>
							    </tr>
							    
						      	
						    </tbody>
						</table>
					</h4></strong>
			<?php endif ?>
		</div>
				</div>
			</div>
		</div>
		

	</body>


</html>

