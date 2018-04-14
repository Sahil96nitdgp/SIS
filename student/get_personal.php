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
				$_SESSION['reg_no']=$result['reg_no'];
				$_SESSION['fname']=$result['fname'];
				$_SESSION['gname']=$result['gname'];
				$_SESSION['mname']=$result['mname'];
				$_SESSION['lname']=$result['lname'];
				$_SESSION['dob']=$result['dob'];
				$_SESSION['age']=$result['age'];
				$_SESSION['gender']=$result['gender'];
				$_SESSION['bg']=$result['bg'];
				$_SESSION['caste']=$result['caste'];
				$_SESSION['hobby']=$result['hobby'];
				$_SESSION['eac']=$result['eac'];

				
			}
			else
			{
				$_SESSION['email']="";
				$_SESSION['fname']="";
				$_SESSION['gname']="";
				$_SESSION['mname']="";
				$_SESSION['lname']="";
				$_SESSION['dob']="";
				$_SESSION['age']="";
				$_SESSION['gender']="";
				$_SESSION['bg']="";
				$_SESSION['caste']="";
				$_SESSION['hobby']="";
				$_SESSION['eac']="";

				
			}
			
			header('location: /sis2/student/personal.php');

		}


		

	
?>