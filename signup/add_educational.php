<?php include 'header2.php';
		include'../login_val.php'; 
		include 'add_educational_input.php'; 
		if (!(isset($_SESSION['success'])))
		{
			header('location: /sis2/landing.php');
		}
	?>

<!DOCTYPE html>
<html>
	<head>
		<title>ADD EDUCATIONAL DETAILS</title>
			
		<style>
			body{
			background-image: url("../images/1.jpg");
			background-size:cover;
			}

			#main{
			width:100%;
			margin-left:1px;
			margin-right:1px;
			}

			#upper{
			width:95%;
			float:left;
			margin-left:25px;
			margin-right:10px;
			margin-top:20px;
			}



			input[type=text],input[type=date]{
			width:300px;
			padding:10px 18px;
			margin:8px 0;
			display:inline-block;
			border:1px solid #ccc;
			box-sizing:border-box;
			border-radius:5px;
			}

			input[type=text1],input[type=number]{
			width:250px;
			padding:5px 10px;
			margin:8px 0;
			display:inline-block;
			border:1px solid #ccc;
			box-sizing:border-box;
			border-radius:5px;
			}

			input[type=submit],input[type=reset]{
			width=200px;
			padding:10px 15px;
			border:1px solid black;
			box-sizing:border-box;
			border-radius:5px;
			font-size:20px;
			background-color:blue;
			color:white;
			font-family:Tahoma;
			cursor:pointer;
			margin-left:20px;
			}

			input[type=submit]:hover{
			opacity:0.8;
			}
			input[type=reset]:hover{
			opacity:0.8;
			}

			#sem{
			padding:8px 10px;
			}

			#select{
			padding:8px 10px;
			}

			#prog{
			padding:8px 10px;
			}

			#college{
			padding:8px 10px;
			}

			#cgpa{
			padding:8px 10px;
			}


			#yog{
			padding:8px 10px;
			}

			#upper2{
			width:100%;
			float:left;
			margin-top:10px;
			}

			#year{
			padding:8px 10px;
			width:100%;
			}
	
		</style>

		<script type="text/javascript" >

		function validate(x)
			{
				var re = /^[A-Za-z ]+$/;				
				var message12 = document.getElementById('clg');				
				var message13 = document.getElementById('clg');				
				var message14 = document.getElementById('clg');				
								
				if(x=='college' && document.getElementById(x).value=='')
				{
					document.getElementById(x).style.background ='white';
					message12.style.color='red';
					message12.style.fontSize = "15px";
					message12.innerHTML="Please enter name";
					return true;
				}
				
				else if(re.test(document.getElementById(x).value))
				{
					document.getElementById(x).style.background ='white';
					message13.innerHTML="";
					return true;
				}
				
				else{
					document.getElementById(x).style.background ='white';
					message14.style.color='red';
					message14.style.fontSize = "15px";
					message14.innerHTML="Enter only alphabets";
					return false; 
				}
			}

		for(y = 2000; y <= 2500; y++) 
			{
        		var optn = document.createElement('option');
        		optn.innerHTML = y;
        		optn.value=y;
        		document.getElementById('yog').appendChild(optn);
            }
            document.getElementById('yog').value=2000;

		function validateReg()
			{
				var inp=document.getElementById('reg').value;
				var message = document.getElementById('regis');
				if(inp.length==8)
				{
					document.getElementById('reg').style.background ='white';
					message.innerHTML="";
					return true;
				}	
				else
				{
					document.getElementById('reg').style.background ='white';
					message.style.color='red';
					message.style.fontSize = "15px";
					message.innerHTML="Invalid registration no.";
					return false;
				}
			}
			
		function createYear()
			{
				var inp=document.getElementById('reg').value;
				yy=inp.substring(2,4);
				document.getElementById('message3').innerHTML=yy;

			}


		
    	function changedept()
			{
				var dept = ["BT","CE","CH","CS","EC","EE","IT","ME","MM"]; 
    			var x=document.getElementById('select').selectedIndex;
    			document.getElementById('message2').innerHTML=dept[x-1];	
    		}	

		
		function validate1(x)
			{
				var re = /^[A-Za-z ]+$/;				
				var message1 = document.getElementById('a');				
				var message2 = document.getElementById('a');				
				var message3 = document.getElementById('a');				
								
				if(x=='th1' && document.getElementById(x).value=='')
				{
					document.getElementById(x).style.background ='white';
					message1.style.color='red';
					message1.style.fontSize = "15px";
					message1.innerHTML="Please enter name";
					return true;
				}
				
				else if(re.test(document.getElementById(x).value))
				{
					document.getElementById(x).style.background ='white';
					message3.innerHTML="";
					return true;
				}
				
				else{
					document.getElementById(x).style.background ='white';
					message2.style.color='red';
					message2.style.fontSize = "15px";
					message2.innerHTML="Enter only alphabets";
					return false; 
				}
			}
			

		function validate2(x)
			{
				var re = /^[A-Za-z ]+$/;				
				var message4 = document.getElementById('b');				
				var message5 = document.getElementById('b');				
				var message6 = document.getElementById('b');				
								
				if(x=='th2' && document.getElementById(x).value=='')
				{
					document.getElementById(x).style.background ='white';
					message4.style.color='red';
					message4.style.fontSize = "15px";
					message4.innerHTML="Please enter name";
					return true;
				}
				
				else if(re.test(document.getElementById(x).value))
				{
					document.getElementById(x).style.background ='white';
					message5.innerHTML="";
					return true;
				}
				
				else{
					document.getElementById(x).style.background ='white';
					message6.style.color='red';
					message6.style.fontSize = "15px";
					message6.innerHTML="Enter only alphabets";
					return false; 
				}
			}
		function validate3(x)
			{
				var re = /^[A-Za-z ]+$/;				
				var message7 = document.getElementById('c');				
				var message8 = document.getElementById('c');				
				var message9 = document.getElementById('c');				
								
				if(x=='th3' && document.getElementById(x).value=='')
				{
					document.getElementById(x).style.background ='white';
					message7.style.color='red';
					message7.style.fontSize = "15px";
					message7.innerHTML="Please enter name";
					return true;
				}
				
				else if(re.test(document.getElementById(x).value))
				{
					document.getElementById(x).style.background ='white';
					message8.innerHTML="";
					return true;
				}
				
				else{
					document.getElementById(x).style.background ='white';
					message9.style.color='red';
					message9.style.fontSize = "15px";
					message9.innerHTML="Enter only alphabets";
					return false; 
				}
			}
			
		function validate4(x)
			{
				var re = /^[A-Za-z ]+$/;				
				var message12 = document.getElementById('d');				
				var message10 = document.getElementById('d');				
				var message11 = document.getElementById('d');				
								
				if(x=='th4' && document.getElementById(x).value=='')
				{
					document.getElementById(x).style.background ='white';
					message.style.color='red';
					message.style.fontSize = "15px";
					message.innerHTML="Please enter name";
					return true;
				}
				
				else if(re.test(document.getElementById(x).value))
				{
					document.getElementById(x).style.background ='white';
					message10.innerHTML="";
					return true;
				}
				
				else{
					document.getElementById(x).style.background ='white';
					message11.style.color='red';
					message11.style.fontSize = "15px";
					message11.innerHTML="Enter only alphabets";
					return false; 
				}
			}			
				
			
		</script>
	</head>
	<body>
		<form action="add_educational.php" name="form1" method="POST">
			<div id="main">
				<center><font size=10 color="black"><b>ADD EDUCATIONAL DETAILS</b></font></center>
			</div>

			<div id="upper">
				<center>
					<table >
 
						<tr>
							<td>
								<font size="5" color="#cc0000" face="Tahoma" >Name of College: </font>
							</td>
							<td>
								<input type="text" name="college_name" id="college" size="30" onblur="validate('college');" required /><span id="clg"></span>
							</td>
						</tr>

						<tr>
							<td><font size="5" color="#cc0000" face="Tahoma" >Programme: </font></td>
							<td><select name="programme" id="prog"  />
								<option selected>select..</option>
								<option>B.TECH</option>
								<option>M.TECH</option>
								<option>MCA</option>
								<option>MBA</option>
								<option>PHD</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<font size=5 color="#cc0000" face="Tahoma">Registration No. : </font>
							</td>
							<td>
								<input type="text" name="regno" id="reg" Placeholder="registration no." maxlength='8' onchange='createYear()' onblur='validateReg()' onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="required" required /><span id="regis"></span>
							</td>
						</tr>

						<tr>
							<td><font size="5" color="#cc0000" face="Tahoma">Department: </font></td>
							<td>
								<select name="dept" onchange="changedept()" id="select" class="required" required />

								<option style="font-family:courier">--Select department--</option>
								<option value="BT" style="font-family:courier">Biotechnology(BT)</option>
								<option value="CE" style="font-family:courier">Civil Engineering(CE)</option>
								<option value="CHE" style="font-family:courier">Chemical Engineeering(CHE)</option>
								<option value="CS" style="font-family:courier">Computer Science and Engineering(CSE)</option>
								<option value="EC" style="font-family:courier">Electronics and Communication Engineering(ECE)</option>
								<option value="EE" style="font-family:courier">Electrical Engineering(EE)</option>
								<option value="IT" style="font-family:courier">Information Technology(IT)</option>
								<option value="ME" style="font-family:courier">Mechanical Engineering(ME)</option>
								<option value="MM" style="font-family:courier">Materials and Metallurgical Engineering(MME)</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><font size="5" color="#cc0000" face="Tahoma">Roll No. :</font></td>
							<td>
								<span id="message3" style="width:40px" style="font-family:Tahoma;color:#000033"></span>/<span id="message2" style="width:40px" style="font-family:Tahoma;color:#000033"></span>

								<input type="number" style="width:40px" name="roll" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="required" required />
							</td>
						</tr>



						<tr>
							<td><font size="5" color="#cc0000" face="Tahoma">Semester: </font></td>
							<td>
								<select name="semester" id="sem" required />
								<option value="-1" selected>select..</option>
								<option value="1st">1st</option>
								<option value="2nd">2nd</option>
								<option value="3rd">3rd</option>
								<option value="4th">4th</option>
								<option value="5th">5th</option>
								<option value="6th">6th</option>
								<option value="7th">7th</option>
								<option value="8th">8th</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><font size="5" color="#cc0000" face="Tahoma">Current CGPA: </font></td>
							<td><input type=number name="college_cgpa" id="cgpa" size="30" required /></td>
						</tr>


						<tr>
							<td><font size="5" color="#cc0000" face="Tahoma">Year of Passing: </font></td>
							<td>
								<input type=number name="college_year" id="collegeyear" size="30" required />
							</td>		    
						</tr>

					</table></br></br>
					<table border="1">
						<tr>
							<th><center><font size="4" color="#cc0000" face="Tahoma">EXAMINATION</font></center></th>
							<th><center><font size="4" color="#cc0000" face="Tahoma">SCHOOL</font></center></th>
							<th><center><font size="4" color="#cc0000" face="Tahoma">BOARD</font></center></th>
							<th><center><font size="4" color="#cc0000" face="Tahoma">YEAR OF PASSING</font></center></th>
                            <th><center><font size="4" color="#cc0000" face="Tahoma">PERCENTAGE/CGPA</font></center></th>
                        </tr>
                        <tr>
                            <td><font size="4" color="#cc0000" face="Tahoma">10TH</font></td>
                            <td>
                            	<input name="tename" type="text1" id="th1" Placeholder="enter" onblur="validate1('th1');" required /><span id="a"></span></td>
                            </td>
                            <td>
                            	<input name="teboard" type="text1" id="th2" Placeholder="enter" onblur="validate2('th2');" required /><span id="b"></span>
                            </td>

                            <td>
                            	<input type=number name="teyear" id="teyear" size="30" required />
							</td>
							<td>
								<input name="tecgpa" type="number" id="th" Placeholder="enter" step=".01" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required />
							</td>
						</tr>
						<tr>
							<td><font size="4" color="#cc0000" face="Tahoma">12TH</font></td>
							<td>
								<input name="twelve_name" type="text1" id="th3" Placeholder="enter" onblur="validate3('th3');" required /><span id="c"></span>
							</td>
							<td>
								<input name="twelve_board" type="text1" id="th4" Placeholder="enter" onblur="validate4('th4');" required /><span id="d"></span>
							</td>
							<td>
								<input type=number name="twelve_year" id="twelve_year" size="30" required />
							</td>
							<td>
								<input name="twelve_cgpa" type="number" id="th" Placeholder="enter" step=".01" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required />
							</td>
						</tr>

					</table>
				</center>
			</div>

		<center>
			<div id="upper2">
				<a href="add_educational.php"><input type="reset"></a>
				<input type="submit" value="Submit" name="add_educational_submit" />
			</div>
		</center>
		</br></br>

	</body>
	</head>
</html>
