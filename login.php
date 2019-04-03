<html>
<head>
<title>hotel booking</title>
<script>
function validateForm()
{
var email=document.getElementById("email").value;
var pass=document.getElementById("password").value;
var et = new RegExp("^[\\w\\.]+@{1}[a-zA-Z]+\\.[a-z]+$");
var pt = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
if(email=="" || email==null || !et.test(email.toString())){
alert("Enter a valid email.");
return false;
}

if(pass=="" || pass==null){
    alert("password must not be empty.");
    return false;
}
if(!pt.test(pass.toString())){
    alert("Password must contain minimum eight characters, at least one letter, one number and one special character");
    return false;
}

return true;
}
</script>
</head>
<style>
.header,.footer {
  display: block;
  background-color: rgba(0,0,0,.5);
  color: white;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
.bg {
  background-image: url("beach.jpeg");
  height: 100%;
  background-position: center;
  /*background-repeat: no-repeat;*/
  background-size: cover;
  background-attachment: fixed;
}
.box1 {
  border: 1px solid gray;
  padding: 10px;
border-radius: 8px;
background-color:  rgba(0,0,0,.5);
width: 35%;
height: 50%;
margin-right: auto;
margin-left: auto;
text-align: center;
position: relative;
}
table {
width: inline;
height: inline;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
}
th{ text-align: left;
padding:10px;
color: white;}
td{ color: white;}
input,TextArea{
border: 1px solid gray;
border-radius: 10px;
padding:5px;}
.submit{
width:160px;
background-color:  rgba(0,0,0,.5);
color: white;}
form {text-align: center;
position: absolute;
top:7%;
}
th.empty{width:30px;height: 10px;}
</style>

<body class="bg">
<center><img src="logo.jpg"  height="55" width="55"></img></center>
<header class="header">
<center><h2><font color="white">Hotel Booking System</font></h2></center>
</header>
<form class="box1" onSubmit="return validateForm()" action="loginUser.php" method="post">
  <table>
  <caption style="text-align:center;color:white;"><h1>Login</h1></caption>
  <tr>
  <th>Email:</th> <td> <input type="text" name="email" id="email" required="required"></td></tr>
  <tr><th>Password:</th><td> <input type="password" name="password" id="password"required="required"></td></tr>
  <tr><th class="empty"></th></tr>
  <?php
        if(isset($_GET["msg"]) && $_GET["msg"]=='failed'){
              echo "Wrong Username/Password";
                            }
    ?>
  <tr>
  <th></th><td colspan="2">
 <input type="submit" value="Login" class="submit"></td></tr>
</table>
</form>
</body>
</html>
