<?php include 'header2.php'; 
include '../login_val.php';
	include 'add_personal_input.php';
	if (!(isset($_SESSION['success'])))
	{
		header('location: /sis2/landing.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Personal details</title>

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
width:50%;
float:left;
margin-left:400px;
margin-right:10px;
margin-top:20px;
}

input[type=text],input[type=date],input[type=email],input[type=phone],input[type=number],input[type=file]{
width:300px;
padding:10px 18px;
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



#blood{
padding:8px 10px;
}

#area{
padding:8px 10px;
}


#upper2{
width:100%;
float:left;
margin-top:20px;
}

</style>

<script type="text/javascript" >
function validateName1(x)
			{
				var re = /^[A-Za-z ]+$/;				
				var message1 = document.getElementById('a');				
				var message2 = document.getElementById('a');				
				var message3 = document.getElementById('a');				
								
				if(x=='name1' && document.getElementById(x).value=='')
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
			
			function validateName2(x)
			{
				var re = /^[A-Za-z ]+$/;				
				var message4 = document.getElementById('b');				
				var message5 = document.getElementById('b');				
				var message6 = document.getElementById('b');				
								
				if(x=='name2' && document.getElementById(x).value=='')
				{
					document.getElementById(x).style.background ='white';
					message4.innerHTML="";
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
function validateName3(x)
			{
				var re = /^[A-Za-z ]+$/;				
				var message7 = document.getElementById('c');				
				var message8 = document.getElementById('c');				
				var message9 = document.getElementById('c');				
								
				if(x=='name3' && document.getElementById(x).value=='')
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
			
function validateName4(x)
			{
				var re = /^[A-Za-z ]+$/;				
				var message = document.getElementById('d');				
				var message10 = document.getElementById('d');				
				var message11 = document.getElementById('d');				
								
				if(x=='name4' && document.getElementById(x).value=='')
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
			
			
function validateEmail(email){ 
			  var re = /\S+@\S+\.\S+/;
			  var message = document.getElementById('error');
			  if(re.test(document.getElementById(email).value) || document.getElementById(email).value==''){
			    document.getElementById('email').style.background ='white';
			    message.innerHTML="";
			    return true;
			  }else{
			    document.getElementById('email').style.background ='white';
				message.style.color='red';
				message.style.fontSize = "15px";
				message.innerHTML="Invalid email id";
			    return false;
			  }
			}		

function validPhone(form)
{
 var eobj=document.getElementById('phonenoerror');
 var valid = '0123456789';
 var phone = form.phoneno.value;
 var error=false;
 var i=0;
 var temp;
 eobj.innerHTML='';
 if (phone == '')
 {
  error='This field is required. Please enter phone number';
  eobj.style.color='red';
   eobj.style.fontSize = "15px";
 }
 else if (!phone.length > 1 || phone.length < 10)
 {
  error='Invalid phone number length! Please try again.';
  eobj.style.color='red';
   eobj.style.fontSize = "15px";
 }
 else
 {
  for (i=0; i < phone.length; i++)
 {
   temp = '' + phone.substring(i, i + 1);
   if (valid.indexOf(temp) == -1)
    {
    error='Invalid characters in your phone. Please try again.';
	eobj.style.color='red';
   eobj.style.fontSize = "15px";
    }
  }
 }
 if (error)
 {
  form.phoneno.focus();
  eobj.innerHTML=error;
  return false;
 }
 return true;
}



function submitBday () 
    	{
    		var input = document.getElementById( 'txtDate' ).value;
			var d = new Date( input );
    		var year = d.getFullYear();
    		var month = d.getMonth();
    		var day = d.getDate();
    		var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1;
			var yyyy = today.getFullYear();
			var age=0;
			if(yyyy!=year)
				age=yyyy-year-1;
			if(month<mm)
				age+=1;
			else if(mm==month && day<=dd)
				age+=1;
			document.getElementById('age').innerHTML=age;
		}
		
		function FillBox(f)
			{
				if(f.same.checked==true)
				{
					f.padd.value=f.cadd.value;
					f.ppin.value=f.cpin.value;
					f.pstate.value=f.cstate.value;
					f.pcon.value=f.ccon.value;
				}
			}

</script>
</head>
<body>
	<form action="add_personal.php" name="form" method="POST">
	<div id="main">
		<center><font size=10 color="black"><b>ADD PERSONAL DETAILS</b></font></center>
	</div>



	<div id="upper">
		<center>
		<table>
			
			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">First Name: </font>
				</td>
				<td>
					<input type="text" name="fname"  id="name1" size="30" onblur="validateName1('name1')" required /><span id="a"></span>
				</td>
			</tr>

			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Middle Name: </font>
				</td>
				<td>
					<input type="text" name="mname" id="name2" size="30" onblur="validateName2('name2')" /><span id="b"></span>
				</td>
			</tr>


			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Last Name: </font>
				</td>
				<td>
					<input type="text" name="lname" id="name3" size="30" onblur="validateName3('name3')" required /><span id="c"></span>
				</td>
			</tr>

			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Guardian's Name: </font>
				</td>
				<td>
					<input type="text" name="gname" id="name4" size="30" onblur="validateName4('name4')" required /><span id="d"></span>
				</td>
			</tr>


			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">DOB: </font>
				</td>
				<td>
					<input type="date" name="dob" id="txtDate" onblur="submitBday();" onsubmit="valdob()" size="30" required /><span id="erdob"></span>
				</td>
			</tr>

			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Age: </font>
				</td>
				<td>
					<span id="age" name="age"></span>
				</td>
			</tr>

			<tr>
				<td>
					<font size=5 color="#cc0000" face="Tahoma">Email id: </font>
				</td>
				<td>
					<input type="email" name="email" id="email" Placeholder="email" onblur="validateEmail('email')" /><span id="error" ></span>
				</td>
			</tr>


			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Blood Group: </font>
				</td>
				<td>
					<select name="bg" id="blood">
					<option value="-1" selected>select..</option>
					<option>A+</option>
					<option >B+</option>
					<option >AB+</option>
					<option >O+</option>
					<option >O-</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Gender: </font>
				</td>
				<td>
					<font size="4" color="black"><input type="radio" name="gender" value="male" size="10" required>Male</font>
					<font size="4" color="black"><input type="radio" name="gender" value="Female" size="10" required>Female</font>
					<font size="4" color="black"><input type="radio" name="gender" value="Other" size="10" required>Other</font>
				</td>
			</tr>

			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma" >Caste: </font>
				</td>
				<td>
					<font size="4" color="black"><input type="radio" name="caste" id="cast" value="SC" required>SC</font>
					<font size="4" color="black"><input type="radio" name="caste" id="cast" value="ST" required>ST</font>
					<font size="4" color="black"><input type="radio" name="caste" id="cast" value="OBC" required>OBC</font>
					<font size="4" color="black"><input type="radio" name="caste" id="cast" value="GEN" required>GEN</font>
				</td>
			</tr>



			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Correspondence Address: </font>
				</td>
				<td>
					<textarea rows="5" cols="60"  name="cadd" id="area1" placeholder="enter address" required></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Pin-code: </font>
				</td>
				<td>
					<input type="number" name="cpin" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="required" required>
				</td>
			</tr>
			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">State: </font>
				</td>
				<td>
					<input type="text" name="cstate" class="required" required>
				</td>
			</tr>

			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Country: </font>
				</td>
				<td>
					<input type="text" name="ccoun" class="required" required>
				</td>
			</tr>
								
			<tr>
				<td>
					<input type="checkbox" name="same" onclick="FillBox(this.form)"><font size="4" color="#cc0000" face="Tahoma">Check if parmanent address is same as temporary address</font>
				</td>
			</tr>
			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Parmanent Address: </font>
				</td>
				<td>
					<textarea rows="5" cols="60"  name="padd" id="area2"  placeholder="enter address" required></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Pin-code:</font>
				</td>
				<td>
					<input type="number" name="ppin" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="required" required>
				</td>
			</tr>
			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">State:</font>
				</td>
				<td>
					<input type="text" name="pstate" class="required" required>
				</td>
			</tr>
			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Country:</font>
				</td>
				<td>
					<input type="text" name="pcoun" class="required" required>
				</td>
			</tr>
				


		</table>
		</center>
		</br>


		<table>
			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Hobby:</font></br>
				</td>
				<td>
					<font size="4" color="#cc0000" face="Tahoma">
						<input type="checkbox" name="hobby1" value="Reading"  checked>Reading <br>
						<input type="checkbox" name="hobby2" value="Singing" >Singing <br> 
						<input type="checkbox" name="hobby3" value="Dancing" >Dancing <br> 
					</font>
					<br>
					<textarea id='txt' rows="4" cols="30" name="hobby4" placeholder="Please specify your hobby if you select 'others'"></textarea><br><br>
				</td>
			</tr>

			<tr>
				<td>
					<font size="5" color="#cc0000" face="Tahoma">Extra-curricular activities:</font><br>
				</td>
				<td>
					<br><textarea id="txt" rows="5" cols="50" name="eac" ></textarea>
				</td>
			</tr>

		</table>
	</div>

		<center>
			<div id="upper2">
				<a href="add_personal.php"><input type="reset"></a>
				<input type="submit" value="Submit" name="add_personal_submit" />
			</div>
		</center>
		</br></br>
	</form>

</body>
</html>