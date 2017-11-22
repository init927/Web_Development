<!DOCTYPE html>
<html>
<head>
	<title>EMAIL</title>
</head>
<body>
<form method="post" action="index.php">
	<input type="hidden" name="id"/>
  Email: <input name="email" id="email" type="email" /><br />
<br>
 	<!-- OTP: <input name="otp" id="otp" type="text" /><br /> -->
  <input type="submit" value="Generate OTP" />
  
  
</form>
</body>
</html>
<?php
	mysql_connect("localhost","root","","student") or die("not connected");
	mysql_select_db("student") or die("db not found");
	if(isset($_POST['email']))
	{
		$string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $string_shuffled = str_shuffle($string);
	    $password = substr($string_shuffled, 1, 7);
	       // $password = base64_encode($password);	
		$e = $_POST["email"];
		$pw= $password;

		// $p = $_POST["password"];
		// if (filter_var($e, FILTER_VALIDATE_EMAIL)) {
	 //    	echo("$email is a valid email address");
		// } else {
	 //    	echo("$email is not a valid email address");
		// }
		require 'PHPMailerAutoload.php';
		$mail = new PHPMailer;
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'kompany4you@gmail.com';                 // SMTP username
		$mail->Password = 'Acme@927';                           // SMTP password
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->From = 'kompany4you@gmail.com';
		$mail->FromName = 'Rishi Bhalodia';
		$mail->addAddress($e);               // Name is optional

		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Otp';
		$mail->Body    =  'Hi, '.$e.'<br><br> Your Otp: <b>'.$password.'</b><br>Thank You For Joining with us<br><br><br>Ignore this message if found irrelevent';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		$query = "insert into PrivateInfo (email,pass) values ('$e', '$password')";
		if (mysql_query($query)) {
			echo "<p align='center'>Data registered.</p>";
		}
		// $name = $_GET["username"];
		

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		   
		} else {
		    echo 'Message has been sent';
		     header("Location: http://localhost/student/PHPMailer-master/Otp.php");
		}

		$mquery=mysql_query("select email from PrivateInfo where email='$e'");
		if(strcmp("$e","$mquery"))
		{
			echo "working";
		}

	}
?>
