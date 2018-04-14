<!DOCTYPE html>
<html>
<head>
<title>ABOUT US</title>
	
	<style>
		#main{
		width:100%;
		margin-left:1px;
		margin-right:1px;
		}


		body{
		background-image: url("images/1.jpg");
		background-size:cover;
		}

		#image{
		border:2px solid black;
		margin-bottom:30px;
		margin-top:20px;
		}

		#upper{
		width:70%;
		float:left;
		margin-left:350px;
		margin-right:10px;
		}

		.dropbtn {
		    background-color:white;
		    color:black;
		    padding: 6px 10px;
		    font-size: 18px;
			bottom:18px;
			left:280px;
		    border:1px solid #993333;
			border-radius:4px;
		    cursor: pointer;
			margin-right:40px;
			margin-left:10px;
			font-family:Stencil;
			}
			
			.dropbtn:hover{
		background-color:#ffc266;
		color:red;
		}

		#upper1{
		margin-left:20px;
		margin-right:20px;

		}

		#container{
		width:80%;
		margin:50px auto;
		max-width:1280;
		margin-top:10px;
		}

	</style>
</head>
<body>

	
	<div id="main">
		<center>
			<font size=10  color="#3333cc" face="Tahoma">ABOUT STUDENT INFORMATION CENTRE</font>
		</center></br>

	</div>

	<div id="upper">
        <a href="landing.php"><button class="dropbtn">Home</button></a>

        <a href="about.php"><button class="dropbtn">About us</button></a>
        <a href="signup/register.php"><button class="dropbtn">Signup</button></a>
        <a href="contact.php"><button class="dropbtn">Contact us</button></a>
      </div>


	<div class="container">
		<center><img id="image" height="15%" width="15%" src="images/1.png"/> </center>
		<div id="upper1">
			<font size=5  color="black" face="Tahoma">This page describes the various function of our project.The actual design of the various modules and components of Student Information Centre is described in this page, which takes care of various functionalities that our project aims to achieve and for determining the operating characters of the system.</br></br>

			Student Information Centre (SIC) is a Web based application for students, faculty, academic staff and parents who want to get and retrieve student's whole information instantly via internet. The major benefit of this portal is to store the student's information at one place and it can be accessed via online interaction. The SIC web portal is to replace the old and traditional file storing process. Instead of tedious paperwork, students will be able to submit information electronically, and the departments will be able to evaluate the submissions with much quicker turnaround.</br></br>
			SIC is a web based application that tracks current student's academic information. It maintains academic information for ready access by office staff, students, their faculty advisors and committee members.
			</font> 
		</div>
	</div>

</body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>