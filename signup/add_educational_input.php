<?php 

	//include '../login_val.php';
	$db=mysqli_connect('localhost', 'root', '', 'sis');   //database connected

	//echo "cool";
	
	if (isset($_POST['add_educational_submit'])) 
	{		

		$username=$_SESSION['username'];
		$phone=$_SESSION['phone'];
		$regno=$_SESSION['reg_no'];

		//echo $username;

		$college_name=$_POST['college_name'];
		$programme=$_POST['programme'];
		$dept=$_POST['dept'];
		$semester=$_POST['semester'];
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




		$sql="INSERT INTO academic_details (reg_no, dept, roll, programme, sem, college_year, college_name, college_cgpa, tename, teboard, teyear, tecgpa, twelve_name, twelve_board, twelve_year, twelve_cgpa) VALUES ('$regno', '$dept', '$roll', '$programme', '$semester', '$college_year', '$college_name', '$college_cgpa', '$tename', '$teboard', '$teyear', '$tecgpa', '$twelve_name', '$twelve_board', '$twelve_year', '$twelve_cgpa')";

		mysqli_query($db, $sql);


	}

?>