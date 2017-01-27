<?php
require_once('../library/class.phpmailer.php');
require_once('../library/class.smtp.php');
		//Checking if the e-mail is filled
		if (isset($_REQUEST['submit'])) {
			//Creating the conection with the Email
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->Host = "smtpout.secureserver.net";
			$mail->Port = "80";
			// $mail->SMTPSecure = 'ssl';
			$mail->Username = "hello@timoshockness.com";
			$mail->Password = "1599@Hello";

			//Catching the msg informations
			$name = $_GET['name'];
			$email = $_GET['email'];
			$message = $_GET['message'];
			$submit = $_GET['submit'];

			//Email which will recive the msg
			$my_email = "timoteo.ppt@gmail.com";

			//Function to sent the e-mail
			$mail->From = "hello@timoshockness.com";
			$mail->FromName = "Timoshockness.com Website";
			$mail->Subject = "New contact from your website";
			$mail->Body = "The follow message was sent from your website.<br />Name: ".$name. "<br />E-mail: ".$email."<br />Message: ".$message;
			$mail->IsHTML(true);
			$mail->AddAddress($my_email, "Timoteo Shockness");
			//$mail->Send();
			if($mail->Send()){
				?>
                                    <div class="full">
                                    <h2 class="sub-title ptsans-font center">Thank you for your Email!</h2>
                                        <div class="container">
                                            <p class="center">I have received your message and would like to thank you for writing to me. I will try to respond as soon as possible. Have a great day ahead!</p>
                                        </div>
                                    </div>
                                    <form method="post" action="index.php#contact" class="btn-form">
                                        <div class="center">
                                            <input type="button" onclick="send_email()" value="Send Again" />
                                        </div>
                                    </form>
				<?php
                // header('Location: email.php');
                // echo 'something is really wrong - OKAY - true';
			}else{
				// echo  "Something is wrong: " . $mail->ErrorInfo;
				?>
                                    <div class="full">
                                        <h2 class="sub-title ptsans-font center">Sorry <?php echo $name ?>! Something wrong happened!</h2>
                                        <div class="container">
                                            <p class="center">Something happened while I was trying to receive your e-mail. Could you please send me the e-mail at timoteo.ppt@gmail.com. Thank you!</p>
                                        </div>
                                    </div>
                                    <form method="post" action="index.php#contact" class="btn-form">
                                        <div class="center">
                                            <input type="button" onclick="send_email()" value="Try Again" />
                                        </div>
                                    </form>
				<?php
                // header('Location: email.php');
                // echo 'something is really wrong - OKAY - false';
			}
		}
?>