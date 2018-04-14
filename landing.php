<?php
include ('signup/register_input.php');
include 'login_val.php';
?>
<html>
<head>
<title>STUDENT INFORMATION CENTRE</title>

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
  width:97%;
  height:10%;
  float:left;
  margin-left:20px;
  margin-top:20px;
  }

  #upper2{
  width:45%;
  float:left;
  margin-left:50px;
  margin-top:20px;

  }

  #upper3{
  width:45%;
  float:right;
  margin-left:10px;
  margin-top:20px;
  }



  marquee{
  font-size:30px;
  color:#ff0066;
  font-family:Tahoma;
  }

  input[type=text],input[type=password]{
  width:70%;
  padding:12px 20px;
  margin:8px 0;
  display:inline-block;
  border:1px solid #ccc;
  box-sizing:border-box;
  border-radius:5px;
  }

  input[type=submit]{
  background-color:#4CAF50;
  color:white;
  padding:14px 20px;
  margin:8px 0;
  border:none;
  cursor:pointer;
  width:20%;
  border-radius:5px;
  }

  input[type=submit]:hover{
  opacity:0.8;
  }



</style>
<script type="text/javascript">

  function checkName(form)
  {
   var eobj=document.getElementById('realnameerror');
   var sRealName = form.username.value;
   var oRE = /^[a-z0-9]+[_.-]?[a-z0-9]+$/i;
   var error=false;
   eobj.innerHTML='';
   if (sRealName == '') {
    error='Username cannot be blank!';
    form.username.focus();
    eobj.style.color='red';
    eobj.style.fontSize = "20px";
    }
   else if (sRealName.length < 4)
   {
    error="Username should be atleast 4 characters long";
    eobj.style.color='red';
    eobj.style.fontSize = "20px";
     }
   else if (!oRE.test(sRealName))
   {
    error="Incorrect format.";
    eobj.style.color='red';
    eobj.style.fontSize = "20px";
  }
   if (error)
   {
    form.username.focus();
    eobj.innerHTML=error;
    return false;
   }
  return true;
 }
 
 function validatePwd(form) 
  { 
        var eobj1=document.getElementById('passworderror');
 
    var minLength=6;
    var invalid=' ';
    var pw1=form.password.value;
 
    var error=false;
    eobj1.innerHTML='';
 
    if (pw1.length<1)
      {
        error='Please enter your password.';
        eobj1.style.color='red';
        eobj1.style.fontSize = "20px";
      }
    else if (pw1.length < minLength)
      {
        error='Your password must be at least ' + minLength + ' characters long. Try again.';
        eobj1.style.color='red';
        eobj1.style.fontSize = "20px";
      }
    else if (pw1.indexOf(invalid) > -1)
      {
        error='Sorry, spaces are not allowed.';
        eobj1.style.color='red';
        eobj1.style.fontSize = "20px";
      }
    if (error)
      {
        form.password.focus();
        eobj1.innerHTML=error;
        return false
      }
    return true;
  }   

function checkName1(form1)
  {
    var eobj=document.getElementById('realnameerror1');
    var sRealName = form1.adminname.value;
    var oRE = /^[a-z0-9]+[_.-]?[a-z0-9]+$/i;
    var error=false;
    eobj.innerHTML='';
    if (sRealName == '') 
      {
        error='Username cannot be blank!';
        form1.adminname.focus();
        eobj.style.color='red';
        eobj.style.fontSize = "20px";
      }
    else if (sRealName.length < 4)
      {
        error="Username should be atleast 4 characters long";
        eobj.style.color='red';
        eobj.style.fontSize = "20px";
      }
    else if (!oRE.test(sRealName))
      {
        error="Incorrect format.";
        eobj.style.color='red';
        eobj.style.fontSize = "20px";
      }
    if (error)
      {
        form1.adminname.focus();
        eobj.innerHTML=error;
        return false;
      }
    return true;
  }
 
 function validatePwd1(form1) 
  { 
 var eobj1=document.getElementById('passworderror1');
 
 var minLength=6;
 var invalid=' ';
 var pw1=form1.adminpassword.value;
 
 var error=false;
 eobj1.innerHTML='';
 
 if (pw1.length<1)
 {
  error='Please enter your password.';
   eobj1.style.color='red';
   eobj1.style.fontSize = "20px";
 }
 else if (pw1.length < minLength)
 {
  error='Your password must be at least ' + minLength + ' characters long. Try again.';
  eobj1.style.color='red';
   eobj1.style.fontSize = "20px";
 }
 else if (pw1.indexOf(invalid) > -1)
 {
  error='Sorry, spaces are not allowed.';
  eobj1.style.color='red';
   eobj1.style.fontSize = "20px";
 }
 if (error)
 {
  form1.adminpassword.focus();
  eobj1.innerHTML=error;
  return false
 }
  return true;
} 


    function validate1()
      {
        var form1 = document.forms['form1'];
        var ary=[checkName1,validatePwd1];
        var rtn=true;
        var z0=0;
        for (var z0=0;z0<ary.length;z0++)
          {
            if (!ary[z0](form1))
              {
                rtn=false;
              } 
          }
        return rtn;
      }

    function validate()
      {
        var form = document.forms['form'];
        var ary=[checkName,validatePwd];
        var rtn=true;
        var z0=0;
        for (var z0=0;z0<ary.length;z0++)
          {
            if (!ary[z0](form))
              {
                rtn=false;
              }
          }
        return rtn;
      }


      
</script>
</head>

  <body >
    <div class="container">

      <div id="main">
        <center><font size=10  color="black" face="Tahoma">STUDENT INFORMATION CENTRE</font></center></br> 
      </div>

      <div id="upper">
        <a href="landing.php"><button class="dropbtn">Home</button></a>

        <a href="about.php"><button class="dropbtn">About us</button></a>
        <a href="signup/register.php"><button class="dropbtn">Signup</button></a>
        <a href="contact.php"><button class="dropbtn">Contact us</button></a>
      </div>


      <div id="upper1">
        <marquee direction="left" scrollamount=9>WELCOME TO STUDENT INFORMATION CENTRE</marquee></br></br></br>
      </div>


      <div id="upper2">
        <center><label><b><font size=6 color=black>Student Login</font></b></label></center>
        <form action="/sis2/login_val.php" method="post" name="form" onsubmit="return validate()" >
          <h3 style="color: red;">
            <?php 

          if (isset($_SESSION['errorflag1'])) {
            # code...
            echo $_SESSION['error'];
            session_unset(); 
            session_reset();
            // destroy the session 
            session_destroy();
          }
           

          ?></h3>
          <label><b><font size=5 color=black>Username</font></b></label></br>
          <input type="text" placeholder="Enter Username"  name="username" onblur="checkName(form);" required=""><span id="realnameerror"></span></br></br>
          <label><b><font size=5 color=black>Password</font></b></label></br>
          <input type="password" placeholder="Enter Password" name="password" maxlength="12" onblur="validatePwd(form);" required=""><span id="passworderror" ></span></br></br>
          <input type="submit" value="LOGIN" id="submit" name="login" >
        </form>
      </div>



      <div id="upper3">
        <center><label><b><font size=6 color=black>Admin Login</font></b></label><br></center>
        <form action="/sis2/login_val.php" method="post" name="form1" onsubmit="return validate1()" >
          <h3 style="color:red;">
            <?php 

          if (isset($_SESSION['errorflag2'])) {
            # code...
            echo $_SESSION['error'];
            session_unset(); 
            session_reset();
            // destroy the session 
            session_destroy();
          }
           

          ?></h3>
          <label><b><font size=5 color=black>Username</font></b></label></br>
          
          <input type="text" placeholder="Enter Username"  name="adminname" onblur="checkName1(form1);" required><span id="realnameerror1"></span></br></br>

          <label><b><font size=5 color=black>Password</font></b></label></br>
          
          <input type="password" placeholder="Enter Password" name="adminpassword" maxlength="12" onblur="validatePwd1(form1);" required><span id="passworderror1" ></span></br></br>


          <input type="submit" value="LOGIN" id="submit" name="login_admin" >
        </form>


      </div>
    </div>



<!--<div id="upper3">
        <center><label><b><font size=6 color=black>Admin Login</font></b></label><br></center>
        <form action="/sis2/login_val.php" method="post" name="form1" onsubmit="return validate1()" >
          <h3 style="color:red;">
            <?php 

          /*if (isset($_SESSION['errorflag2'])) {
            # code...
            echo $_SESSION['error'];
            session_unset(); 
            session_reset();
            // destroy the session 
            session_destroy();
          }*/
           

          ?></h3>
          <label><b><font size=5 color=black>Username</font></b></label></br>
          
          <input type="text" placeholder="Enter Username"  name="adminname" onblur="checkName1(form1);" required><span id="realnameerror1"></span></br></br>

          <label><b><font size=5 color=black>Password</font></b></label></br>
          
          <input type="password" placeholder="Enter Password" name="adminpassword" maxlength="12" onblur="validatePwd1(form1);" required><span id="passworderror1" ></span></br></br>


          <input type="submit" value="LOGIN" id="submit" name="login_admin" >
        </form>


      </div>
    </div>-->




  </body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>