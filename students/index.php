<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<?php include ("db_connection.php")?>
<div class="header" style="background-color:#1d44b8;">
	<h1>Education Management System</h1>
</div>
<div class="menu_pop" id="menu_desc" style="display:none">
    Menu
</div>
<body style="background-color:white;">
<ul>
    <li class="menu-item">
		<b><a href="index.php" class="drp">Home</a></b>
	</li>
	
	<li class="menu-item">
		<b><a href="faculty.php" class="drp">Faculty</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="courses.php" class="drp">Courses</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="myInfo.php" class="drp">My Info</a></b>
    </li>
	
	<li class="menu-item">
		<b><a href="#" class="drp">Register</a></b>
		<div class="menu-content">
			<a href="register.php" class=linktext>Register a course</a><br>
			<a href="registered.php" class=linktext>Recently registered courses</a><br>
		</div>
    </li>
</ul>
</div>
<marquee behavior=scroll scrollamount="20" direction="left">
<p id="letra"><span>“The more that you read, the more things you will know, the more that you learn, the more places you’ll go.” —Dr. Seuss</span></p>
</marquee>
<div class="slideshow-container fade">

  <!-- Full images with numbers and message Info -->
  <div class="Containers">
    <div class="MessageInfo">1 / 3</div>
    <img src="img/img22.jpg" style="width:100%">
    <div class="Info">Campus Life</div>
  </div>

  <div class="Containers">
    <div class="MessageInfo">2 / 3</div>
    <img src="img/img1.jpg" style="width:100%">
    <div class="Info">Work time!</div>
  </div>

  <div class="Containers">
    <div class="MessageInfo">3 / 3</div>
    <img src="img/img3.jpg" style="width:100%">
    <div class="Info">Study at the Library</div>
  </div>
</div>
<br>

<!-- The circles/dots -->
<div style="text-align:center">
  <span class="dots" onclick="currentSlide(1)"></span>
  <span class="dots" onclick="currentSlide(2)"></span>
  <span class="dots" onclick="currentSlide(3)"></span>
</div>
<table><td>
<td><i><h3><span style="font-size: 400%" style="line-height:1.25;">Mission</span></h3></i>
<p align=left>The mission of our education management system website is to provide educational institutions with a comprehensive platform that enhances the learning experience for students, teachers, and administrators.<br>
The website aims to streamline administrative tasks, improve communication, and provide easy access to learning resources and online tools.<br>
The ultimate goal is to support the educational institution in providing a high-quality learning experience for all students.<br></p></td>
<td><i><h3><span style="font-size: 400%;" style="line-height:1.25;">Vision</span></h3></i>
<p>The vision of our education management system website is to be the go-to platform for educational institutions seeking to manage their operations and administrative tasks efficiently.<br>
The website aims to be innovative, user-friendly, and flexible, catering to the evolving needs of the education industry.<br> 
It aspires to empower educational institutions to achieve their goals by providing them with the necessary tools and resources to support their mission of delivering high-quality education to students.<br></p></td>
</table>




<script>
var slidePosition = 0;
SlideShow();

function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slidePosition++;
  if (slidePosition > slides.length) {slidePosition = 1}
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 2000); // Change image every 2 seconds
} 
</script>
</body>
</html>