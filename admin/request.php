<?php
	
	$db=mysqli_connect('localhost', 'root', '', 'sis');   //database connected
			
	if (isset($_POST['accept'])) 
	{
		# code...
		

		$regno=$_POST['user_register'];
		
		$query= "SELECT * FROM `registrationrequest` WHERE `reg_no`='$regno'";
		
		$res=mysqli_query($db,$query);
		$result=mysqli_fetch_array($res);


		$username=$result['username'];
		$phone=$result['phone'];
		$password=$result['password'];

		$sql="INSERT INTO registration (reg_no, phone, username, password) VALUES ('$regno', '$phone', '$username', '$password')";

		mysqli_query($db, $sql);


		$sql = "DELETE FROM registrationrequest WHERE `registrationrequest`.`reg_no`='$regno'";

		if ($db->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $db->error;
		}


	}
	if (isset($_POST['reject'])) {
		# code...
		$regno=$_POST['user_register'];

		$sql = "DELETE FROM registrationrequest WHERE `registrationrequest`.`reg_no`='$regno'";

		if ($db->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $db->error;
		}

	}
?>