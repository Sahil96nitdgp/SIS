<?php 

	include '../login_val.php';
	$db=mysqli_connect('localhost', 'root', '', 'sis');  

	$regno=$_SESSION['reg_no'];


	$query= "SELECT * FROM `registration` JOIN `personal_details` ON `registration`.`reg_no`=`personal_details`.`reg_no` JOIN `academic_details` ON `registration`.`reg_no`=`academic_details`.`reg_no` WHERE `registration`.`reg_no`='$regno'";

			$res=mysqli_query($db,$query);
			$result=mysqli_fetch_array($res);

			
			if ($res->num_rows == 1) 
			{

				$_SESSION['success']="LOGIN SUCCESSFUL!!!";
				$_SESSION['username']=$result['username'];
				$_SESSION['email']=$result['email'];
				$_SESSION['phone']=$result['phone'];
				$_SESSION['reg_no']=$result['reg_no'];
				$_SESSION['fname']=$result['fname'];

				if ($result['mname']=="") {
					$_SESSION['mname']=".";
				}
				else
				{
					$_SESSION['mname']=$result['mname'];
				
				}
				$_SESSION['gname']=$result['gname'];
				$_SESSION['lname']=$result['lname'];
				$_SESSION['dob']=$result['dob'];
				$_SESSION['age']=$result['age'];
				$_SESSION['gender']=$result['gender'];
				$_SESSION['bg']=$result['bg'];
				$_SESSION['caste']=$result['caste'];
				$_SESSION['hobby']=$result['hobby'];
				$_SESSION['hobbyextra']=$result['hobbyextra'];
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

			//print_r($_SESSION);

//////////////////////////////////////////////////////////////////////////////////////////////



	if (isset($_POST['update_educational_submit'])) 
	{		
		//echo "in here";

		$username=$_SESSION['username'];
		$phone=$_SESSION['phone'];
		$regno=$_SESSION['reg_no'];

		//echo $username;

		$college_name=$_POST['college_name'];
		$programme=$_POST['programme'];
		$dept=$_POST['dept'];
		$sem=$_POST['sem'];
		$roll=$_POST['roll'];
		$college_cgpa=$_POST['college_cgpa'];
		$college_year=$_POST['college_year'];

		$tename=$_POST['tename'];
		$teboard=$_POST['teboard'];
		$teyear=$_POST['teyear'];
		$tecgpa=$_POST['tecgpa'];

		$twelve_name=$_POST['twelve_name'];
		$twelve_board=$_POST['twelve_board'];
		$twelve_year=$_POST['twelve_year'];
		$twelve_cgpa=$_POST['twelve_cgpa'];




		$sql="UPDATE `academic_details` SET `dept`='$dept',`roll`='$roll',`programme`='$programme',`sem`='$sem',`college_year`='$college_year',`college_name`='$college_name',`college_cgpa`='$college_cgpa',`tename`='$tename',`teboard`='$teboard',`teyear`='$teyear',`tecgpa`='$tecgpa',`twelve_name`='$twelve_name',`twelve_board`='$twelve_board',`twelve_year`='$twelve_year',`twelve_cgpa`='$twelve_cgpa' WHERE `reg_no`='20150144'";

		mysqli_query($db, $sql);



	}



 ?>