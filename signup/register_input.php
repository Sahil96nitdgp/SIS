<?php 

	$db=mysqli_connect('localhost', 'root', '', 'sis');   //database connected

	
	if (isset($_POST['register'])) 
	{
		
		$regno=$_POST["regno"];
		$phone=$_POST["phone"];
		$username=$_POST["username"];
		$password=md5($_POST["password"]);


		$sql="INSERT INTO registrationrequest (reg_no, phone, username, password) VALUES ('$regno', '$phone', '$username', '$password')";

		mysqli_query($db, $sql);

	}


	

 ?>