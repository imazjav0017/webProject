<html>
<head>
 <script>
        function validateForm(){
            var pass = document.getElementById('password').value;
            var email = document.getElementById('email').value;
            var fn = document.getElementById('fname').value;
            var ln = document.getElementById('lname').value;
            var tel = document.getElementById('mobileNo').value;
            var address = document.getElementById('address').value;
            var et = new RegExp("^[\\w\\.]+@{1}[a-zA-Z]+\\.[a-z]+$");
            var mt = new RegExp("^[\\d]{10}$")
            var pt = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
            var nt = /[^a-zA-Z]/
            if(fn=="" || fn==null || nt.test(fn.toString())){
                alert("Enter a valid first name.");
                return false;
            }
            if(ln=="" || ln==null ||nt.test(ln.toString())){
                alert("Enter a valid last name.");
                return false;
            }
            if(tel=="" || tel==null || tel.toString().length!=10 || !mt.test(tel.toString())){
                alert("Enter Valid mobile number");
                return false;
            }
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
            if(address=="" || address==null)
            {
                alert("Enter valid address");
                return false;
            }

            return true;
        }
    </script>
<title>hotel booking</title>
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
width: 38%;
height: 87%;
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
</head>
<body class="bg">
<div align="left"><img src="logo.jpg"  height="55" width="55"></img></div>
<header class="header">
<center><h2><font color="white">Hotel Booking System</font></h2></center>
</header>
<form class="box1" name="myform" onSubmit="return validateForm()" action="createUser.php" method="post">
<table>
<caption style="text-align:center;color:white;"><h1>Register</h1></caption>
<tr>
<th>First name:</th>
<td><input type="text" name="fname" id="fname" required="required" placeHolder="Enter Your First Name" ></td>
</tr><tr>
<th>Last name:</th>
<td><input type="text" name="lname" id="lname" required="required" placeHolder="Enter Your Last Name" ></td></tr>
<tr>
<th>Email:</th>
<td><input type="email" name="email" id="email" placeHolder="Enter Your EmailID"></td>
</tr><tr>
<th>Mobile:</th><td><input type="number" name="mobNo" id="mobileNo"></td></tr>
 <tr><th> D.O.B:</th><td><input type="date" name="date" id="dob" required="required"></td></tr>
  <tr><th>Password: </th><td><input type="password" name="password" id="password" required="required"></td></tr>
  <?php
   if(isset($_GET["msg"])){
     echo $_GET["msg"];
   }
  ?>
 <tr><th> Gender:</th><td><input type="radio" name="gender" value="m" checked> Male
  <input type="radio" name="gender" value="f"> Female</td></tr>
<tr><th> Country:</th><td> <select name="Country">
  <option value="India">India</option>
  <option value="Australia">Australia</option>
  <option value="England">England</option>
  <option value="South Africa">South Africa</option>
</select></td></tr>
<tr><th> Address:</th><td><TextArea name="address" id="address" rows="4" cols="30"></TextArea></td></tr>
<tr><th> Types:</th><td>Vacation<input type="checkbox" name="types" id="vacation" value="v" checked>Business<input type="checkbox" id="business" name="types" value="b"></tr>
<tr><th class="empty"></th></tr>
<tr>
<th></th><td colspan="2">
<input type="submit" value="SignUp" class="submit"></td></tr></table>
</form>
</body>
</html>
