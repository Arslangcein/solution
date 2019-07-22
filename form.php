<?php
$conn=mysqli_connect('localhost','root','','software_house');
	if(isset($_POST['submit']))
	{
		$name=$_POST['userName'];
		$email=$_POST['userEmail'];
		$phone=$_POST['userPhone'];
		$subject=$_POST['userMsg'];
	$qry="INSERT into form_data(name,email,phone,subject) VALUES('$name','$email','$phone','$subject')";
	$run=mysqli_query($conn,$qry);
	
	}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>SOFTWARE HOUSE PORTAL</title>
	<link rel="stylesheet" type="text/css" href="myworklectureportal.css">
	<link rel="stylesheet" type="text/css" href="myworkcon.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>
<body>

<header>
	<div class="header_menu">
		<div class="logo"> 
			<img src="wep.jpg" alt=""> 
		</div>
		<div class="menu_list">
			<ul>
				<li><a href="index.html" >home</a></li>
				<li><a href="myworklectureportal.html">mywork</a> </li>
				<li><a href="index1.html">portfolio</a></li>
				<li><a href="aboutsir.html">aboutus</a></li>
				<li><a href="myworkcon.html">contactus</a></li>
			</ul>
		</div>
		</div>
			<!---End-header--->
			<div class="clear"> </div>
			<!---start-content----->
			<div class="content">
				<div class="wrap">
					<!-------start-contatct------>
					<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>Address,Via Rajbah Rd and Main Satiana Rd</p>
								<p> Wapexp Institute of Information Technology</p>
						   		<p>street address, STREET NO:10</p>
						   		<p>FAISALABAD</p>
				   		<p>Phone:(0305)9658250</p>
				   		<p>Fax: (xxx) xxxxxxxxx</p>
				 	 	<p>Email: <span>fiverrguru8250@gmail.com</span></p>
				   		<p>Follow us on: <span>Facebook</span>, <span>Twitter</span></p>
						
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="POST" >
					    	<div>
						    	<span><label>FULL NAME</label></span>
						    	<span><input name="userName" type="text" id="input" placeholder="FUUL NAME" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL ID</label></span>
						    	<span><input name="userEmail" type="text" id="input"placeholder="EMAIL ID" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>MOBILE NUMBER</label></span>
						    	<span><input name="userPhone" type="text" id="input" placeholder="PHONE NUMBER" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg" required > </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"  required></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
			  <div class="map">
			  <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d27241.2698449409!2d73.07180659256383!3d31.409752509988188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d31.416954999999998!2d73.0746534!4m5!1s0x39226808be449ddf%3A0x2d35d7d63da87a69!2swapexp+institute+of+information+technology!3m2!1d31.4058812!2d73.1003135!5e0!3m2!1sen!2s!4v1563377522475!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  </div>
			  <h4>ARSLAN AHMAD</h4>
			</div>
					
	</body>
</html>

