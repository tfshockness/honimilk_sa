<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="fs-form-wrap" id="fs-form-wrap">
                <div class="fs-title">
                    <h1>Project Worksheet</h1>
                    <div class="codrops-top">
                        <a class="codrops-icon codrops-icon-prev" href="http://timoshockness.com/"><span>Previous Demo</span></a>
                        <a class="codrops-icon codrops-icon-info" href="#"><span>If you prefer, call me or send an email: (604)000-0000 / hello@kateyeeum.com</span></a>
                    </div>
                </div>
                <form id="myform" class="fs-form fs-form-full" action="send.php" method="post" autocomplete="off">
                    <ol class="fs-fields">
                        <li data-input-trigger>
                            <label class="fs-field-label fs-anim-upper" for="q1" data-info="This will help us know what kind of service you need">What's your company need?</label>
                            <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                                <span><input id="q1b" name="q1" type="radio" value="new"/><label for="q1b" class="radio-mobile">New Website</label></span>
                                <span><input id="q1c" name="q1" type="radio" value="rebuild"/><label for="q1c" class="radio-conversion ">Re-build your Website</label></span>
                                <span><input id="q1a" name="q1" type="radio" value="help"/><label for="q1a" class="radio-social">Need Help</label></span>
                            </div>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q2">What's your bussines?</label>
                            <input class="fs-anim-lower" id="q2" name="q2" type="text" placeholder="Restaurant / Office / Agency" required/>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q3">link website</label>
                            <input class="fs-anim-lower" id="q3" name="q3" type="text" placeholder="www.mywebsite.ca" required/>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q4" data-info="We won't send you spam, we promise...">What's your email address?</label>
                            <input class="fs-anim-lower" id="q4" name="q4" type="email" placeholder="dean@road.us" required/>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q5">Describe how you imagine your new website</label>
                            <textarea class="fs-anim-lower" id="q5" name="q5" placeholder="Describe here"></textarea>
                        </li>
                    </ol><!-- /fs-fields -->
                    <button class="fs-submit" type="submit">Send answers</button>
                </form><!-- /fs-form -->
            </div><!-- /fs-form-wrap -->

        </div><!-- /container -->
        <script src="js/classie.js"></script>
        <script src="js/selectFx.js"></script>
        <script src="js/fullscreenForm.js"></script>
        <script>
            (function () {
                var formWrap = document.getElementById('fs-form-wrap');

                [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function (el) {
                    new SelectFx(el, {
                        stickyPlaceholder: false,
                        onChange: function (val) {
                            document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                        }
                    });
                });

                new FForm(formWrap, {
                    onReview: function () {
                        classie.add(document.body, 'overview'); // for demo purposes only
                    }
                });
            })();
        </script>
    </body>
</html>
