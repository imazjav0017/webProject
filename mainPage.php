<html>
<head>
<title>hotel booking</title>
<style>
.pad
{
margin-top: 10px;
}
.white
{
color: #fff;
}
.black
{
color: #000;
}
body, html {
  height: 100%;
  margin: 0;
}
.bg {
  background-image: url("beach.jpeg");
  height: 100%;
  background-position: center;
  /*background-repeat: no-repeat;*/
  background-size: cover;
background-attachment: fixed;
}
.center
{
display: flex;
justify-content: center;
align-items: center;
}

.header,.footer {
  display: block;
  background-color: rgba(0,0,0,.5);
  color: white;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.aboutBox
{
border: 1px solid white;
padding: 10px;
border-radius: 10px;
}

.box1 {
  border: 1px solid white;
  padding: 15px;
  margin-top: 70px;
  background-color: rgba(0,0,0,.5);
  margin-left: 20px;
  margin-right: 20px;
  display: inline;
  border-radius: 10px;
  overflow: hidden;
  float : left;
}
.ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.li {
  float: left;
  color: white;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: red;
}
</style>
</head>
<body class="bg">
<div align="left"><img src="logo.jpg"  height="55" width="55"></img> <div align="right">
<a href="signup.php"><font color="white">SignUp</a>
<a href="login.php"><font color="white">Login</a>
</div></div>
<header class="header">
<div class="center"><h1><font color="white">Hotel Booking
System</font><h1></div>
<center>
<ul class="ul">
<li class="li"><a class="active" href="">Home</font></a></li>
<li class="li"><a class="li a" href="about.html">Gallery</font></a></li>
<li class="li"><a class="li a" href="book.html">Book</font></a></li>
<li class="li"><a class="li a" href="login.php">Logout</font></a></li>
</ul>
</center>
</header>
<?php
if(!isset($_COOKIE["user"])) {
   
} else {
    echo "<center><font color=\"white\">Welcome " . $_COOKIE["user"]."</font></center>";
}
?>
<?php
        if(isset($_GET["booked"]) && $_GET["booked"]=='true'){
              echo "<center><font color=\"white\">Booked Success</font></center>";
                            }
    ?>
<section>
<div class="aboutBox">
<article><h1 class="white">How To Book?</h1>
<p class="white">Now, suppose you are travelling to Goa, press the 'Domestic' button. After
typing Goa under the 'Search' header, select your option. Then, enter the check-in and check-out
dates, and tell us the number of adults and children, for whom the booking is to be made. On
clicking the 'Search Hotels' button, all the accommodation options are displayed on a single page.
To make your task easier, our portal is provided with filters that you can use to narrow down your
search. You can refine the results on the basis of star category, location, area, price range and even
the facilities you want.</p></article></div>
<center><input type="text" placeholder="Eg: Goa,Shimla,etc" class="pad">
<button type="submit">Search</button></center>
<section class="center">
<article class="box1"><h1><font color="white">Top Destinations</h1>
<ol><font color="white">
<li>Dubai</li>
<li>Goa</li>
<li>Shimla</li>
<li>Melbourne</li>
<li>Berlin</li>
</ol>
</article>
<article class="box1"><h1><font color="white">Best Brands In India</h1>
<ol><font color="white">
<li>Taj</li>
<li>Oberoi</li>
<li>ITC</li>
<li>Hilton</li>
<li>Sheraton</li>
</ol>
</article>
</section>
</section>

<footer class="footer"><p class="center">Contact us at:+91991110010 or email at support@hotel.com</p></footer>
</body>
</html>
