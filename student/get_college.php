<?php 
		include '../login_val.php';
		$db=mysqli_connect('localhost', 'root', '', 'sis');   //database connected

		if (isset($_SESSION['success'])) 
		{
			

				


			$username=$_SESSION["username"];
			$password=$_SESSION["password"];
			


			$query= "SELECT * FROM `registration` JOIN `academic_details` ON `registration`.`reg_no`=`academic_details`.`reg_no` WHERE `registration`.`username`='$username' AND `registration`.`password`='$password'";

			$res=mysqli_query($db,$query);
			$result=mysqli_fetch_array($res);

			//print_r($result);

			if ($res->num_rows == 1) 
			{

				//print_r($result);
				$_SESSION['success']="LOGIN SUCCESSFUL!!!";
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				$_SESSION['college_name']=$result['college_name'];
				$_SESSION['dept']=$result['dept'];
				$_SESSION['college_cgpa']=$result['college_cgpa'];
				$_SESSION['sem']=$result['sem'];
				$_SESSION['college_year']=$result['college_year'];
				$_SESSION['roll']=$result['roll'];
				$_SESSION['programme']=$result['programme'];
				$_SESSION['tename']=$result['tename'];

				$_SESSION['tename']=$result['tename'];
				$_SESSION['teboard']=$result['teboard'];
				$_SESSION['teyear']=$result['teyear'];
				$_SESSION['tecgpa']=$result['tecgpa'];

				$_SESSION['twelve_name']=$result['twelve_name'];
				$_SESSION['twelve_board']=$result['twelve_board'];
				$_SESSION['twelve_year']=$result['twelve_year'];
				$_SESSION['twelve_cgpa']=$result['twelve_cgpa'];
				

				
			}
			else
			{


				$_SESSION['college_name']="";
				$_SESSION['dept']="";
				$_SESSION['college_cgpa']="";
				$_SESSION['sem']="";
				$_SESSION['college_year']="";
				$_SESSION['roll']="";
				$_SESSION['programme']="";
				$_SESSION['tename']="";

				$_SESSION['tename']="";
				$_SESSION['teboard']="";
				$_SESSION['teyear']="";
				$_SESSION['tecgpa']="";

				$_SESSION['twelve_name']="";
				$_SESSION['twelve_board']="";
				$_SESSION['twelve_year']="";
				$_SESSION['twelve_cgpa']="";

				
			}
			

			header('location: /sis2/student/college.php');

		}


		

	
?>