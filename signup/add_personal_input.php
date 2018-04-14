<?php 

	//include '../login_val.php';
	$db=mysqli_connect('localhost', 'root', '', 'sis');   //database connected

	
	if (isset($_POST['add_personal_submit'])) 
	{		

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



		$sql="INSERT INTO personal_details (reg_no, fname, mname, lname, gname, dob, age, email, phone, bg, gender, caste, cadd, cpin, cstate, ccoun, padd, ppin, pstate, pcoun, hobby, hobbyextra, eac) VALUES ('$regno', '$fname', '$mname', '$lname', '$gname', '$dob', '21', '$email', '$phone', '$bg', '$gender', '$caste', '$cadd', '$cpin', '$cstate', '$ccoun', '$padd', '$ppin', '$pstate', '$pcoun', '$hobby', '$hobbyextra', '$eac')";

		mysqli_query($db, $sql);

	}

?>