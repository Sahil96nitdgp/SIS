<?php //include ('../login_val.php');
		include ('header.php');
 ?>





			<div class="col-md-8">
				
				<div class="well">
					<?php if (isset($_SESSION['success'])): ?>
						
						<h1><?php 
							echo $_SESSION['success']."<br>";
							echo "Welcome "; 
							echo $_SESSION['username']."<br>"; 
							echo $_SESSION['phone']."<br>";
							echo $_SESSION['reg_no']."<br>";
							
							
							?></h1>

					<?php endif ?>
				</div>
			</div>
		</div>
		


	</body>


</html>

