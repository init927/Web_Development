<!DOCTYPE html>
<html lang="en">
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
<body style="height:auto;">
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
			    	<div class="collapse navbar-collapse" style="margin-right:30px; color:#bac6c6">
			      		
			      		<ul class="nav navbar-nav pull-right" style="font-family: 'Lucida Console', Monaco, monospace;">
			        		<li><a href="HomePage.php">Home</a></li>
			        		<li><a href="connect.php">Product</a></li> 
			    		    <li><a href="about.php">About</a></li>
			        		<li><a href="contact.php">Contact</a></li>
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
	<br><br><br>
	<div class="box" style="height: 150px;"><br></div>
	<form method="post">
		<center>
			<table align="center" height="200px" width="300px;">
	  			<tr>
	  				<td colspan="5" align="center"><h1>Enter the OTP</h1></td>
	  			</tr>
	  			<tr>
					<td align="right">OTP:</td>
					<td>
						<div style="margin-left: 20px;">
							<input id="otp" type="text" name="otp" align="center" required>
						</div>
					</td>						
				</tr>
				<tr>
					<td colspan="5" align="center"><input type="submit" name="submit" value="Submit OTP" required></td>
				</tr>
			</table>
		</center>
	</form>

</body>
</html>

<?php
	mysql_connect("localhost","root","","student") or die("not connected");
	mysql_select_db("student") or die("db not found");
	
	if(isset($_POST['otp']))
	{	
		$op = $_POST["otp"] ;
		$sql = "SELECT id,email FROM data WHERE pass='$op' limit 1";
		$result = mysql_query($sql);
		$value = mysql_fetch_object($result);
		if($value)
		{
			$Iden = $value->id;
			$Ema=$value->email;
			$emquery=mysql_query("select pass from data where id='$Iden' limit 1");
			$value1 = mysql_fetch_object($emquery);
			if($value1)
			{	
				$op1=$value1->pass;

				if($op1===$op)
				{
					echo "<p align='center'>We have send u some of our lastest products </p> <br>";
					require 'PHPMailer-master/PHPMailerAutoload.php';
					$mail = new PHPMailer;
					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = 'kompany4you@gmail.com';                 // SMTP username
					$mail->Password = 'Acme@927';                           // SMTP password
					$mail->Port = 587;                                    // TCP port to connect to

					$mail->From = 'kompany4you@gmail.com';
					$mail->FromName = 'Acme Ceramics';
					$mail->addAddress($Ema);               // Name is optional
					$mail->addAttachment('PHPMailer-master/result.png'); 
					$mail->isHTML(true);                                  // Set email format to HTML

					$mail->Subject = 'Our Lastest Product Catalogue from Acme Ceramics';
					$mail->Body    =  "Hi, <br>Greetings from Acme Ceramics. Our Vitrified Tiles comes with a wide range of collections in natural woods with natural beauty, innovative design and rich texture which makes you feel in heaven. Designed with modern digital technology, our wall tiles can enhance any room, whether traditional or modern, brightening its spaces and evoking sophisticated and refined atmospheres around. </br> <h1> Vision</h1> <br> Gain world wide recognition in the field of ceramic building products through Research and innovation and bring enhanced lifestyle within reach of every household.</br> <h1> Mission</h1><br> At Acme we are committed to delight customers with world class ceramic products and services, make Acme synonymous with best quality and set new benchmarks of excellence for all stakeholders. Pursue best business practices with utmost integrity to make Simpolo exciting organization to work with, for vendors, channel partners, investors and employees alike.<br><br><br> Thank you,<br> Rishi Bhalodia<br><b>Managing Director</b>";
					
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
					if(!$mail->send())
					{
				    	echo '<p align="center">Message could not be sent.<br>';
				    	echo 'Mailer Error: ' . $mail->ErrorInfo;
					}else
					{
				    	echo '<p align="center">Message has been sent successfully</p><br>';
				    	 // header("Location: http://localhost/student/PHPMailer-master/thanku.php");
					}
					$conn1=new mysqli("localhost","root","","student") or die("not connected");
					if ($conn1->connect_error) {
    					die("Connection failed: " . $conn1->connect_error);
					} 
    				$sql = "UPDATE data SET pass=NULL WHERE pass='$op'";

					if ($conn1->query($sql) === TRUE) 
					{
			    		echo "<p align='center'>Record updated successfully</p>";
			    		header("Location: http://localhost/student/thanku.php");
					}
					else
					{
			    		echo "<br>Error updating record: " . $conn1->error;
					}
					$conn1->close();
				}
				else
				{
					echo "<p align='center'>Invalid Key Try again</p>";
				}
			}
			else
				echo "<p align='center'>No Such Value Exist</p>";
		}
		else
		{
			echo "<br><p align='center'>Invalid OTP. Please try again.</p><br>";
		} 
		
	}
?>
