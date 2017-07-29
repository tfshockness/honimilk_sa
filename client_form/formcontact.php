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
                <section>
                    <?php
                    if ($mail->Send()) {
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
                    } else {
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
                    }
                    ?>
                </section>
            </div><!-- /fs-form-wrap -->
        </div><!-- /container -->
    </body>
</html>
