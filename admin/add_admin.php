<?php echo "in add admin"; 

?>

<?php 

	$db=mysqli_connect('localhost', 'root', '', 'sis');   //database connected

	
	if (isset($_POST['add_admin'])) 
	{
		
		$adminname=$_POST["adminname"];
		$adminpassword=$_POST["adminpassword"];


		$sql="INSERT INTO admin (adminname, adminpassword) VALUES ('$adminname', '$adminpassword')";

		mysqli_query($db, $sql);
		header('location: /sis2/admin/profile.php');
	}



	//LOGIN


	


	

 ?>