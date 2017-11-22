<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Tile, Ceramic Tiles, Vitrified tiles, Floor Tiles, Flooring Tiles, Wall Tiles, Wall Cladding, bathroom tiles, kitchen tiles, living room tiles, flooring tiles, tile dealers, Tiles in India, ceramic floor tiles, outdoor tiles, Bathroom Wall Tiles, floor tiles design, flooring tiles price list, double charge, porcelain tiles, colour body tiles, terra Duro, wall tiles, hexagon tiles, Glazed Vitrified tiles, Polished glazed Vitrified tiles.">
	<title>Acme Ceramics</title>
	<link rel="icon" href="Images/logo/Acmesy.png">
	<link rel="stylesheet" type="text/css" href="Astyles.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height: auto;">
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height:20px;z-index: 20; color: white;">
  		<div class="navbar-inner" style='background-image: url("Images/logo/color1.jpg"); z-index: 20;'>
    		<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      		</button>
	      		<a class="navbar-brand" onclick="document.location.href='HomePage.php'" style="margin-top:5px;" ><img src='Images/logo/Acmesy.png' style="height: 20px; width:30px; cursor: hand;" /></a>
	      		<a class="nav navbar-nav pull-center" href="HomePage.php" style="font-size:20px;color: white; font-family: 'Lucida Console', Monaco, monospace;font-weight: bold; cursor: default; text-decoration: none;">ACME CERAMICS</a>	
	    	</div>
	    	<div class="collapse navbar-collapse" style="margin-right:30px; color:#bac6c6;">
	      		<ul class="nav navbar-nav pull-right" style="font-family: 'Lucida Console', Monaco, monospace;">
	        		<li><a href="HomePage.php">Home</a></li>
	        		<li><a href="connect.php">Product</a></li> 
	    		    <li><a href="about.php">About</a></li>
	        		<li><a href="contact.php">Contact</a></li>
	      		</ul>
	    	</div>
  		</div>
	</nav>
	<script>
		$(window).scroll(function() 
		{
  			if ($(document).scrollTop() > 50) 
  			{
    			$('nav').addClass('shrink');
  			} 
  			else 
  			{
    			$('nav').removeClass('shrink');
  			}
		});
	</script>
	<div class="box" style="height: 100px;"></div>
	<form action="contact.php" method="post" >
		<center><table  width="400" height="300" align="center">
			<td colspan="5" align="center" style="color:#a8a8a8;"><h1>Connect With Us<h1></td>
			<tr>
				<td align="right" style="color: #afafaf;">Full Name:</td>			
				<td>
					<div style="margin-left: 20px;">
						<input id="fname" type="text" name="fname" align="center" placeholder="Firstname Lastname" required>
					</div>
				</td>
						
			</tr>
			<tr>
				<td align="right" style="color: #afafaf;">Company Name:</td>
				<td>
					<div style="margin-left: 20px;">
						<input id="cname" type="text" name="company_name" placeholder="Acme Ceramics" required>
					</div>
				</td>
			</tr>
			<tr>
				<td align="right" style="color: #afafaf;">Phone:</td>
				<td>
					<div style="margin-left: 20px;">
						<input id="phone" type="tel" name="phone" placeholder="(+91)**********" required>
					</div>
				</td>
			</tr>
			<tr>
				<td align="right" style="color: #afafaf;">E-mail:</td>
				<td>
					<div style="margin-left: 20px;">
						<input id="email" type="email" name="email" placeholder="bhalodiarishi1@gmail.com" required>
					</div>
				</td>
			</tr>
			<tr>
				<td align="right" style="color: #afafaf;">Message:</td>
				<td>
					<div style="margin-left: 20px;">
						<input  id="message" type="text" style="height: 30px;" name="message" placeholder="Write your message" required></div></td>
			</tr>
				<input id="date" name="date" type="hidden" />
				<script type="text/javascript">
  					document.getElementById('date').value = Date();
  				</script>
			<td colspan="5" align="center">
				<input id="submit" type="submit" name="submit" value="submit">
			</td>
		</table></center>
	</form>
	<script>
		$('#submit').click(function()
		{
   			if($.trim($('#fname').val()) == '')
   			{
      			alert('Input can not be left blank');
   			}
		});
	</script>
	</br></br>
	<h3 align="center" style="color: #918f8f;">Locate Us Here </h3></br>
	<div class="box1 " id="worldbox" style="height:auto; display: flex; justify-content: center;">
		<a href="https://goo.gl/maps/QDSKGMWNC7S2">
			<img src="Images/backgrounds/w.png">
		</a>
	</div>
	</br></br>
	<div class="contactadd">
		<div class="contactaddbox">
			<h4>Main Office</h4>
			</br></br>
			<p align="center">
				8-A, National Highway,
				</br>Lalpar, Morbi-363 642
				</br>Gujarat (India).</br>
			</p>
		</div>
		<div class="contactaddbox">
			<h4>Customer Care</h4>
			</br>
			<p align="center">
				M. No: +91 98258 27884, +91 90999 45755</br>
				</br>P. No: +91 2822 241480, +91 2822 241502</br>
				</br>F. No: +91 2822 242103, +91 2822 226102</br>
			</p>
		</div>
		<div class="contactaddbox">
			<h4>E-Services</h4>
			</br>
			<p align="center">
				Email: info@acmeceramics.com </br></br>
				Whatsapp:+91 9426500927</br></br>
				Twitter: RKBhalodia_927</br></br>
			</p>
		</div>
	</div>


<?php
mysql_connect("localhost","root","","student") or die("not connected");
mysql_select_db("student") or die("db not found");

if (isset($_POST['submit'])) {
	 $fn=$_POST['fname'];
	 echo "<script type='text/javascript'>alert('Thank You, $fn Your privacy is protected with us.');</script>";
	$cn=$_POST['company_name'];
	$ph=$_POST['phone'];
	$em=$_POST['email'];
	$msg=$_POST['message'];
	$tme=$_POST['date'];

	$query ="insert into contactinfo (fname,company_name,phone,email,message,date) values ('$fn','$cn','$ph','$em','$msg','$tme')";
	if (mysql_query($query)) {
		echo "<p align='center'>Data registered.<br><br><br></p>";
	}
	else
	{
		echo "Data is not registered succesfully<br><br><br>";
	}
}

?></br></br></br>
		<?php include 'footer.php';?>


</body>

</html>
