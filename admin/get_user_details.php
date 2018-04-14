<?php 
		include '../login_val.php';
		$db=mysqli_connect('localhost', 'root', '', 'sis');   //database connected

		if (isset($_POST['search'])) 
		{
			
				$_SESSION['username']="";
				$_SESSION['email']="";
				$_SESSION['phone']="";
				$_SESSION['reg_no']="";
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

				$_SESSION['email']="";
				$_SESSION['phone']="";
				$_SESSION['cadd']="";
				$_SESSION['cpin']="";
				$_SESSION['cstate']="";
				$_SESSION['ccoun']="";

				$_SESSION['padd']="";
				$_SESSION['ppin']="";
				$_SESSION['pstate']="";
				$_SESSION['pcoun']="";
		
			$regno=$_POST["searchuser"];
			$flag='0';


			$query= "SELECT * FROM `registration` JOIN `personal_details` ON `registration`.`reg_no`=`personal_details`.`reg_no` JOIN `academic_details` ON `registration`.`reg_no`=`academic_details`.`reg_no` WHERE `registration`.`reg_no`='$regno'";

			$res=mysqli_query($db,$query);
			$result=mysqli_fetch_array($res);

			print_r($result);

			if ($res->num_rows == 1) 
			{

				print_r($result);
				$_SESSION['success']="LOGIN SUCCESSFUL!!!";
				$_SESSION['username']=$result['username'];
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
				$flag='1';
				
			}
			
			if($flag=='1')
			{
				header('location: /sis2/admin/view_user.php');
			}
			else
			{
				echo "No User Found";
			}

			

		}


		

	
?>