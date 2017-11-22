<!DOCTYPE html>
<html>
<head>
	<title>EMAIL</title>
</head>
<body>

<form method="post" action="Otp.php">
  OTP: <input name="otp" id="otp" type="text" /><br />
  <input type="submit" value="Submit" />
  
</form>
</body>
</html>
<?php
	mysql_connect("localhost","root","","student") or die("not connected");
	mysql_select_db("student") or die("db not found");
	
	if(isset($_POST['otp']))
	{	
		$op = $_POST["otp"] ;
		$sql = "SELECT Id,email FROM PrivateInfo WHERE pass='$op' limit 1";
		$result = mysql_query($sql);
		$value = mysql_fetch_object($result);
		if($value)
		{
			$Iden = $value->Id;
			$Ema=$value->email;
			$emquery=mysql_query("select pass from PrivateInfo where Id='$Iden' limit 1");
			$value1 = mysql_fetch_object($emquery);
			if($value1)
			{	
				$op1=$value1->pass;

				if($op1===$op)
				{
					echo "We have send u some of our lastest products  <br>";
					require 'PHPMailerAutoload.php';
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
					$mail->addAttachment('result.png'); 
					$mail->isHTML(true);                                  // Set email format to HTML

					$mail->Subject = 'Our Lastest Product Catalogue from Acme Ceramics';
					$mail->Body    =  "Hi, <br>Greetings from Acme Ceramics. Our Vitrified Tiles comes with a wide range of collections in natural woods with natural beauty, innovative design and rich texture which makes you feel in heaven. Designed with modern digital technology, our wall tiles can enhance any room, whether traditional or modern, brightening its spaces and evoking sophisticated and refined atmospheres around. </br> <h1> Vision</h1> <br> Gain world wide recognition in the field of ceramic building products through Research and innovation and bring enhanced lifestyle within reach of every household.</br> <h1> Mission</h1><br> At Acme we are committed to delight customers with world class ceramic products and services, make Acme synonymous with best quality and set new benchmarks of excellence for all stakeholders. Pursue best business practices with utmost integrity to make Simpolo exciting organization to work with, for vendors, channel partners, investors and employees alike.<br><br><br> Thank you,<br> Rishi Bhalodia<br><b>Managing Director</b>";
					
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
					if(!$mail->send())
					{
				    	echo 'Message could not be sent.<br>';
				    	echo 'Mailer Error: ' . $mail->ErrorInfo;
					}else
					{
				    	echo 'Message has been sent successfully<br>';
				    	 // header("Location: http://localhost/student/PHPMailer-master/thanku.php");
					}
					$conn1=new mysqli("localhost","root","","student") or die("not connected");
					if ($conn1->connect_error) {
    					die("Connection failed: " . $conn1->connect_error);
					} 
    				$sql = "UPDATE PrivateInfo SET pass=NULL WHERE pass='$op'";

					if ($conn1->query($sql) === TRUE) 
					{
			    		echo "Record updated successfully";
					}
					else
					{
			    		echo "<br>Error updating record: " . $conn1->error;
					}
					$conn1->close();
				}
				else
				{
					echo "Invalid Key Try again";
				}
			}
			else
				echo "No Such Value Exist";
		}
		else
		{
			echo "<br>Invalid OTP. Please try again.<br>";
		} 
		
	}
	else
	{
		echo "Enter the Otp";
	}	
?>
