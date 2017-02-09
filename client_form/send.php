<?php
require_once('library/class.phpmailer.php');
require_once('library/class.smtp.php');
//Checking if the e-mail is filled
if (isset($_REQUEST['submit'])) {
    //Creating the conection with the Email
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "mail.timoshockness.com";
    $mail->Port = "26";
    // $mail->SMTPSecure = 'ssl';
    $mail->Username = "support@kateyeeum.com";
    $mail->Password = "support@Milk18";

    //Catching the msg informations
    $q1 = $_GET['q1'];
    $q2 = $_GET['q2'];
    $q3 = $_GET['q3'];
    $q4 = $_GET['q4'];
    $q5 = $_GET['q5'];

    //Email which will recive the msg
    $my_email = "timoteo.ppt@gmail.com";

    //Function to sent the e-mail
    $mail->From = "support@kateyeeum.com";
    $mail->FromName = "Client Form.";
    $mail->Subject = "IMPORTANT! New Contact Made in VANCHOSUN";
    $mail->Body = "The follow message was sent from VANCHOSAN.<br />Which service do you need: " . $q1 . "<br />What is your business: " . $q2 . "<br />Website: " . $q3 . "<br />";
    $mail->Body .= "Email: " . $q4 . "<br />Tell little bit about: " . $q5;
    $mail->IsHTML(true);
    $mail->AddAddress($my_email, "Timoteo Shockness");
    //$mail->Send();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yeeum Lee - Form for a new website.</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body style="background-color:#FFFED8 ">
        <div class="container">
            <div class="fs-form-wrap" id="fs-form-wrap">
                <div class="fs-title">
                    <h1 style="color: #314558">웹사이트 기획 양식</h1>
                    <div class="codrops-top">
<!--                        <a class="codrops-icon codrops-icon-prev" href="http://timoshockness.com/"><span>Previous Demo</span></a>-->
                        <a class="codrops-icon codrops-icon-info" href="#"><span> 전화나 이메일로 연락하시기를 선호하신다면, (604)-561-7127 / hello@kateyeeum.com </span></a>
                    </div>
                </div>
                <section class="response">


                    <?php
                    if ($mail->Send()) {
                        ?>
                        <div class="full">
                            <h2 class="sub-title">Thank you for your Email!</h2>
                            <div class="container">
                                <p class="paragraph">I have received your message and would like to thank you for writing to me. I will try to respond as soon as possible. Have a great day ahead!</p>
                            </div>
                            <div class="link_form">
                                <a href="index.php">Back to the Form</a>
                            </div>
                        </div>

                        <?php
                    } else {

                        ?>
                        <div class="full">
                            <h2 class="sub-title">Sorry, I could not get your email!</h2>
                            <div class="container">
                                <p class="paragraph">Something happened while I was trying to receive your e-mail. Could you please send me the e-mail at timoteo.ppt@gmail.com. Thank you!</p>
                            </div>
                            <div class="link_form">
                                <a href="index.php">Back to the Form</a>
                            </div>
                        </div>
                        <?php

                    }
                    ?>
                </section>
            </div><!-- /fs-form-wrap -->
        </div><!-- /container -->
    </body>
</html>
