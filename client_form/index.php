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
                    <h1>웹사이트 기획 양식</h1>
                    <h3 style="color:#808080;">이곳에서 귀하의 비즈니스 / 프로젝트에 대해 작성해주신다면,<br /> 최대한 빠르게 답변해드리도록 하겠습니다.  </h3>
                    <div class="codrops-top">
<!--                        <a class="codrops-icon codrops-icon-prev" href="http://timoshockness.com/"><span>Previous Demo</span></a>-->
                        <a class="codrops-icon codrops-icon-info" href="#"><span> 전화나 이메일로 연락하시기를 선호하신다면, (604)-561-7127 / hello@kateyeeum.com </span></a>
                    </div>
                </div>
                <form id="myform" class="fs-form fs-form-full" action="send.php" method="post" autocomplete="off">
                    <ol class="fs-fields">
                        <li data-input-trigger>
                            <label class="fs-field-label fs-anim-upper" for="q1" data-info="어떤 서비스를 원하시는지 좀 더 정확하게 알기위해 다음의 질문사항에 답해주세요">어떤 서비스를 원하시나요?</label>
                            <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                                <span><input id="q1b" name="q1" type="radio" value="new"/><label for="q1b" class="radio-mobile" style="color:#999999; font-weight:lighter;">새로운 웹사이트가<br />필요합니다</label></span>
                                <span><input id="q1c" name="q1" type="radio" value="rebuild"/><label for="q1c" class="radio-conversion "style="color:#999999; font-weight:lighter; ">기존 웹사이트를<br />바꾸고 싶습니다</label></span>
                                <span><input id="q1a" name="q1" type="radio" value="help"/><label for="q1a" class="radio-social" style="color:#999999; font-weight:lighter;">관리/유지 등 도움이<br />필요합니다</label></span>
                            </div>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q2">어떤 비즈니스를 위한 웹사이트인가요? </label>
                            <input class="fs-anim-lower" id="q2" name="q2" type="text" placeholder="레스토랑 / 회사 / 에이전시" required/>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q3">이미 웹사이트가 있으시다면 주소를 적어주세요 </label>
                            <input class="fs-anim-lower" id="q3" name="q3" type="text" placeholder="www.mywebsite.ca" />
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q4" data-info="기입해주신 이메일주소는 절대 광고나 스팸으로 사용되지 않음에 약속드립니다">이메일 주소를 적어주세요</label>
                            <input class="fs-anim-lower" id="q4" name="q4" type="email" placeholder="dear@email.us" required/>
                        </li>
                        <li>
                            <label class="fs-field-label fs-anim-upper" for="q5">원하시는 서비스에 대해 간단히 설명해주세요</label>
                            <textarea class="fs-anim-lower" id="q5" name="q5" placeholder="Describe here"></textarea>
                        </li>
                    </ol><!-- /fs-fields -->
                    <button class="fs-submit" type="submit">제출하기</button>
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
