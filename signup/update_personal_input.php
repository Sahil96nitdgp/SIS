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
			//$_SESSION['mname']="    ";

//////////////////////////////////////////////////////////////////////////////////////////////



	if (isset($_POST['update_personal_submit'])) 
	{		
		//echo "in here";

		$username=$_SESSION['username'];
		$phone=$_SESSION['phone'];
		$regno=$_SESSION['reg_no'];

		//$profile_pic=$_POST["profile_pic"];
		//echo $profile_pic;
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
		$gname=$_POST["gname"];
		$dob=$_POST["dob"];
		//$age=$_POST["age"];

		//echo $age;
		$email=$_POST["email"];
		$bg=$_POST["bg"];
		$gender=$_POST["gender"];
		$caste=$_POST["caste"];


		$cadd=$_POST["cadd"];
		$cpin=$_POST["cpin"];
		$cstate=$_POST["cstate"];
		$ccoun=$_POST["ccoun"];

		$padd=$_POST["padd"];
		$ppin=$_POST["ppin"];
		$pstate=$_POST["pstate"];
		$pcoun=$_POST["pcoun"];

		$hobby1=$_POST["hobby1"];
		$hobby2=$_POST["hobby2"];
		$hobby3=$_POST["hobby3"];
		$hobby4=$_POST["hobby4"];
		$eac=$_POST["eac"];
		
		$hobby=$hobby1.','.$hobby2.','.$hobby3;
		$hobbyextra=$hobby4;



		$sql="UPDATE `personal_details` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`gname`='$gname',`dob`='$dob',`age`='22',`email`='$email',`phone`='$phone',`bg`='$bg',`gender`='$gender',`caste`='$caste',`cadd`='$cadd',`cpin`='$cpin',`cstate`='$cstate',`ccoun`='$ccoun',`padd`='$padd',`ppin`='$ppin',`pstate`='$pstate',`pcoun`='$pcoun',`hobby`='$hobby',`hobbyextra`='$hobbyextra',`eac`='$eac' WHERE `reg_no`='$regno'";

		mysqli_query($db, $sql);



	}
 ?>