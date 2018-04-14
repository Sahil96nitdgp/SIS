<?php include ('register_input.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>SIGN UP</title>
    
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
      width:70%;
      float:left;
      margin-top:40px;
      margin-left:200px;
      margin-right:10px;
      }

      input[type=text],input[type=password],input[type=email],input[type=phone]{
      width:300px;
      padding:12px 20px;
      margin:8px 0;
      display:inline-block;
      border:1px solid #ccc;
      box-sizing:border-box;
      border-radius:5px;
      }

      input[type=submit]{
      width=200px;
      padding:16px 20px;
      border:1px solid black;
      box-sizing:border-box;
      border-radius:5px;
      font-size:20px;
      background-color:blue;
      color:white;
      font-family:Tahoma;
      cursor:pointer;
      }

      input[type=submit]:hover{
      opacity:0.8;
      }



    </style>
    <script type="text/javascript">



    function validateReg()
      {
        var inp=document.getElementById('regno').value;
        var message = document.getElementById('regis');
        if(inp.length==8)
        {
          document.getElementById('regno').style.background ='white';
          message.innerHTML="";
          return true;
        } 
        else
        {
          document.getElementById('regno').style.background ='white';
          message.style.color='red';
          message.style.fontSize = "15px";
          message.innerHTML="Invalid registration no.";
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

      
    function checkName(form)
      {
        var eobj=document.getElementById('realnameerror');
        var sRealName = form.realname.value;
        var oRE = /^[a-z0-9]+[_.-]?[a-z0-9]+$/i;
        var error=false;
        eobj.innerHTML='';
        if (sRealName == '') 
          {
            error='Username cannot be blank!';
            form.realname.focus();
            eobj.style.color='red';
            eobj.style.fontSize = "15px";
          }
        else if (sRealName.length < 4)
          {
            error="Username should be atleast 4 characters long";
            eobj.style.color='red';
            eobj.style.fontSize = "15px";
          }
        else if (!oRE.test(sRealName))
          {
            error="Incorrect format.";
            eobj.style.color='red';
            eobj.style.fontSize = "15px";
          }
        if (error)
          {
            form.realname.focus();
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
            eobj1.style.fontSize = "15px";
          }
        else if (pw1.length < minLength)
          {
            error='Your password must be at least ' + minLength + ' characters long. Try again.';
            eobj1.style.color='red';
            eobj1.style.fontSize = "15px";
          }
        else if (pw1.indexOf(invalid) > -1)
          {
            error='Sorry, spaces are not allowed.'; 
            eobj1.style.color='red';
            eobj1.style.fontSize = "15px";
          } 
        if (error)
          {
            form.password.focus();
            eobj1.innerHTML=error;
            return false
          }
        return true;
      } 

    function validatePassword()
      {
        var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");
        var message = document.getElementById('confirmMessage');
        if(password.value != confirm_password.value)
          {
            message.style.color='red';
            message.style.fontSize = "15px";
            message.innerHTML = "Passwords do not Match!";
            return false;
          }
        else
          {
            message.style.fontSize = "15px";
            message.style.color='green';
            message.innerHTML = "Passwords Match!"
            return true;
          }
      }

        </script>

    <body>

    <div id="main">
      <center><font size=11  color="black" face="Tahoma">STUDENT INFORMATION CENTRE</font></center></br>

    </div>

    <div id="upper">
        <a href="../landing.php"><button class="dropbtn">Home</button></a>

        <a href="../about.php"><button class="dropbtn">About us</button></a>
        <a href="../signup/register.php"><button class="dropbtn">Signup</button></a>
        <a href="../contact.php"><button class="dropbtn">Contact us</button></a>
      </div>

    <div id="upper1">
      <center><font size=6  color="black" face="Tahoma">New User?? Register Here</font></center><br><br>

      <form action="../landing.php" method="post" name="form" />
        <center>
        <table>

          <tr>
            <td>
              <strong><font size=5 color="#cc0000" face="Tahoma">REGISTRATION NO. : </font></strong>
            </td>
            <td>
              <input type="text" name="regno" id="regno" Placeholder="registration no." onblur="validateReg();" required /><span id="regis"></span>
            </td>

          </tr>


          <tr>
            <td>
              <strong><font size=5 color="#cc0000" face="Tahoma">PHONE NUMBER:  </font></strong>
            </td>
            <td>
              <input type="Phone" name="phone"  pattern="[1-9]{1}[0-9]{9}" Placeholder="phone no." id="phoneno" onblur="validPhone(form);" required /><span id="phonenoerror"></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="userid"><font size=5 color="#cc0000" face="Tahoma">USERNAME: </label> </font>
            </td>
            <td>
              <input type="text" name="username" id="realname" placeholder="username" onblur="checkName(form);"><span id="realnameerror" required /></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="passid"><font size=5 color="#cc0000" face="Tahoma">PASSWORD: </label></font>
            </td>
            <td>
              <input type="password" placeholder="Password" name="password" id="password" maxlength="12" onblur="validatePwd(form);" required /><span id="passworderror" ></span>
            </td>
          </tr>
          <tr>
            <td>
              <strong><font size=5 color="#cc0000" face="Tahoma">CONFIRM PASSWORD:  </font></strong>
            </td>
            <td>
              <input type="password" name="cpassword" id="confirm_password" Placeholder="Confirm Password"  onkeyup="validatePassword();" required /><span id="confirmMessage"></span>
            </td>
          </tr>

        </table></br>
        <center><input type="submit" value="REGISTER" id="register" name="register"/></center></br>
        </center></br></br>
      </form>
    </div>

    <!--<form action="../landing.php" method="post" name="form" />
        <center>
        <table>

          <tr>
            <td>
              <strong><font size=5 color="#cc0000" face="Tahoma">REGISTRATION NO. : </font></strong>
            </td>
            <td>
              <input type="text" name="regno" id="regno" Placeholder="registration no." onblur="validateReg();" required /><span id="regis"></span>
            </td>

          </tr>


          <tr>
            <td>
              <strong><font size=5 color="#cc0000" face="Tahoma">PHONE NUMBER:  </font></strong>
            </td>
            <td>
              <input type="Phone" name="phone"  pattern="[1-9]{1}[0-9]{9}" Placeholder="phone no." id="phoneno" onblur="validPhone(form);" required /><span id="phonenoerror"></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="userid"><font size=5 color="#cc0000" face="Tahoma">USERNAME: </label> </font>
            </td>
            <td>
              <input type="text" name="username" id="realname" placeholder="username" onblur="checkName(form);"><span id="realnameerror" required /></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="passid"><font size=5 color="#cc0000" face="Tahoma">PASSWORD: </label></font>
            </td>
            <td>
              <input type="password" placeholder="Password" name="password" id="password" maxlength="12" onblur="validatePwd(form);" required /><span id="passworderror" ></span>
            </td>
          </tr>
          <tr>
            <td>
              <strong><font size=5 color="#cc0000" face="Tahoma">CONFIRM PASSWORD:  </font></strong>
            </td>
            <td>
              <input type="password" name="cpassword" id="confirm_password" Placeholder="Confirm Password"  onkeyup="validatePassword();" required /><span id="confirmMessage"></span>
            </td>
          </tr>

        </table></br>
        <center><input type="submit" value="REGISTER" id="register" name="register"/></center></br>
        </center></br></br>
      </form>
    </div>-->

  </body>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
</html>