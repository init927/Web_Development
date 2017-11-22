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
	      		<a class="navbar-brand" onclick="document.location.href='HomePage.php'" style="margin-top:5px;"><img src='Images/logo/Acmesy.png' style="height: 20px; width:30px;"/></a>
	      		<a class="nav navbar-nav pull-center" href="HomePage.php" style="font-size:20px;color: white; font-family: 'Lucida Console', Monaco, monospace;font-weight: bold; cursor: default; text-decoration: none;">ACME CERAMICS</a>
	    	</div>
	    	<div class="collapse navbar-collapse" style="margin-right:30px; color:#bac6c6">
	      		
	      		<ul class="nav navbar-nav pull-right"  style="font-family: 'Lucida Console', Monaco, monospace;">
	        		<li><a href="HomePage.php">Home</a></li>
	        		<li><a href="connect.php">Product</a></li> 
	    		    <li><a href="about.php">About</a></li>
	        		<li><a href='contact.php'">Contact</a></li>
	      		</ul>
	    	</div><!--/.nav-collapse -->
  		</div>
	</nav>
	<script>
		$(window).scroll(function() {
  			if ($(document).scrollTop() > 50) {
    				$('nav').addClass('shrink');
  			} else {
    			$('nav').removeClass('shrink');
  			}
		});
	</script>
<div class="box" style="height: 150px;"><br></div>
	
		<form action="connect.php" method="post" >
			<center><table  width="800" height="300" align="center">
				<td colspan="5" align="center"><h1>Register with us for Product Catalogue.</h1></td>
				<tr>
					<td align="right">Full Name:</td>
					
						<td>
						<div style="margin-left: 20px;">
							<input type="text" name="fname" align="center" placeholder="Firstname Lastname" required>
						</div>
						</td>
						
				</tr>
				<tr>
					<td align="right">Company Name:</td><td><div style="margin-left: 20px;"><input type="text" name="company_name" placeholder="Acme Ceramics" required></div></td>
				</tr>
				<tr>
					<td align="right">Phone:</td><td><div style="margin-left: 20px;"><input type="tel" name="phone" placeholder="(+91)**********" required>
					</div>
					</td>
				</tr>
				<tr>
					<td align="right">E-mail:</td><td>
					<div style="margin-left: 20px;"><input type="email" name="email" placeholder="bhalodiarishi1@gmail.com" required></div></td>

				</tr>
				<td colspan="5" align="center"><input type="submit" name="submit" value="Generate OTP" required></td>
			</table></center>
		</form></br></br></br></br>
		 
</body>
<?php
mysql_connect("localhost","root","","student") or die("not connected");
mysql_select_db("student") or die("db not found");

if (isset($_POST['email'])) 
{
	$fn=$_POST['fname'];
	$cn=$_POST['company_name'];
	$ph=$_POST['phone'];
	$em=$_POST['email'];
	$string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $string_shuffled = str_shuffle($string);
	    $password = substr($string_shuffled, 1, 7);
		$pw= $password;

	$query ="insert into data (fname,company_name,phone,email,pass) values ('$fn','$cn','$ph','$em','$password')";
	if (mysql_query($query)) {
	}

		require 'PHPMailer-master/PHPMailerAutoload.php';
		$mail = new PHPMailer;                               // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'kompany4you@gmail.com';                 // SMTP username
		$mail->Password = 'Acme@927';                           // SMTP password
		$mail->Port = 587;                                    // TCP port to connect to
		$mail->From = 'kompany4you@gmail.com';
		$mail->FromName = 'Rishi Bhalodia';
		$mail->addAddress($em);               // Name is optional
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Otp';
		$mail->Body    =  'Hi, '.$em.'<br><br> Your Otp: <b>'.$password.'</b><br>Thank You For Joining with us<br><br><br>Ignore this message if found irrelevent';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		if(!$mail->send()) {
			 echo "<p align='center'><strong>Message could not be sent. Please check your internet connection.</strong><br> </p>";
		} else {
		    header("Location: http://localhost/student/Otp.php");
		    echo '<div align="center"><h3>Thank You, '  .$fn. '</h3></div>';
			echo "<p align='center'>Your information is safe with us.</p>";
			echo "<p align='center'>Data registered.</p>";
		    echo "<p align='center'>Message could not be sent.<br> </p>";
		    echo '<h4 align="center"> Message has been sent<h4>';
		}
}


?>
</html>
<?php include 'footer.php';?>
