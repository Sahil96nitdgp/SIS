<?php 
		include '../login_val.php';
		$db=mysqli_connect('localhost', 'root', '', 'sis');   //database connected

		if (isset($_SESSION['success'])) 
		{
			

				


		
			$username=$_SESSION["username"];
			$password=$_SESSION["password"];
			


			$query= "SELECT * FROM `registration` JOIN `personal_details` ON `registration`.`reg_no`=`personal_details`.`reg_no` WHERE `registration`.`username`='$username' AND `registration`.`password`='$password'";

			$res=mysqli_query($db,$query);
			$result=mysqli_fetch_array($res);

			//print_r($result);

			if ($res->num_rows == 1) 
			{

				//print_r($result);
				$_SESSION['success']="LOGIN SUCCESSFUL!!!";
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				$_SESSION['email']=$result['email'];
				$_SESSION['phone']=$result['phone'];
				$_SESSION['cadd']=$result['cadd'];
				$_SESSION['cpin']=$result['cpin'];
				$_SESSION['cstate']=$result['cstate'];
				$_SESSION['ccoun']=$result['ccoun'];

				$_SESSION['padd']=$result['padd'];
				$_SESSION['ppin']=$result['ppin'];
				$_SESSION['pstate']=$result['pstate'];
				$_SESSION['pcoun']=$result['pcoun'];


				
			}
			else
			{
				
				

				$_SESSION['email']="";
				$_SESSION['cadd']="";
				$_SESSION['cpin']="";
				$_SESSION['cstate']="";
				$_SESSION['ccoun']="";

				$_SESSION['padd']="";
				$_SESSION['ppin']="";
				$_SESSION['pstate']="";
				$_SESSION['pcoun']="";
			}
			
			header('location: /sis2/student/contact.php');


		}


		

	
?>