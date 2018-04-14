<?php 

	session_start();
	
	$db=mysqli_connect('localhost', 'root', '', 'sis');   //database connected
	$_SESSION['error']="Invalid Credentials";
	

		if (isset($_POST['login'])) 
		{
		
			$username=$_POST["username"];
			$password=md5($_POST["password"]);
			


			$query= "SELECT * FROM `registration` WHERE `username`='$username' AND `password`='$password'";

			$res=mysqli_query($db,$query);
			$result=mysqli_fetch_array($res);

			print_r($result);

			if ($res->num_rows == 1) 
			{

				$_SESSION['success']="LOGIN SUCCESSFUL!!!";
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				$_SESSION['phone']=$result['phone'];
				$_SESSION['reg_no']=$result['reg_no'];
				header('location: /sis2/student/profile.php');
			}
			else
			{
				$_SESSION['errorflag1']="INVALID CRDENTIALS!!";
				header('location: /sis2/landing.php');
			}



		}


		if (isset($_POST['login_admin'])) 
		{
		
			$adminname=$_POST["adminname"];
			$adminpassword=$_POST["adminpassword"];
			


			$query= "SELECT * FROM `admin` WHERE `adminname`='$adminname' AND `adminpassword`='$adminpassword'";

			$res=mysqli_query($db,$query);
			$result=mysqli_fetch_array($res);

			print_r($result);

			if ($res->num_rows == 1) 
			{

				$_SESSION['success']="LOGIN SUCCESSFUL";
				$_SESSION['adminname']=$adminname;
				$_SESSION['password']=$password;
				
				header('location: /sis2/admin/profile.php');
			}
			else
			{
				$_SESSION['errorflag2']="INVALID CRDENTIALS!!";
				header('location: /sis2/landing.php');
			}

		}


		

	
?>