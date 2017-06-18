<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
        <meta name="description" content="Timoteo Shockness. Web Designer. Web Developer. Wordpress. SEO. Search Enginer Optimization. Creating website. Hosting. PHP. HTML. CSS. C#. ASP.NET. JavaScript" />
        <meta name="og:type" content="website" />
        <meta name="og:title" content="Timoteo Shockness, web designer and web developer. Technical skills in SEO, Wordpress, PHP, C#, ASP.NET, HTML, CSS, JavaScript." />
        <meta name="og:url" content="http://www.timoshockness.com" />
        
           <!--End-of-Meta-Tag-->
        <title>Timoteo Shockness. Web Design and Web Developer. Personal Portfolio.</title>

        <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="icon/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-touch-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon-180x180.png" />
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Orbitron|Roboto" rel="stylesheet">


        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/185e0bd75a.js"></script>
    </head>
    <body id="body">
        <?php include_once 'resources/templates/menu_top.php'; ?>
        <div id="content">
            <section class="hello_world">
                <div class="intro">
                    <h1 class="f_orbitron"><span>></span> Hello World<span> _</span></h1>
                    <h2 class="f_lato">My name is Timoteo Shockness. <br /> I'm a Front End Developer.</h2>
                </div>   
            </section>

            <div class="go_top hide" id="top">
                <div>
                    <a href="#body">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

<!--            Includinig the Icons Menu      -->
        <?php include_once 'resources/templates/menu_ic.php'; ?>
            <section id="skills">
                <?php include_once 'resources/sections/skills.php'; ?>
            </section>
            <section id="qualifications">
                <?php include_once 'resources/sections/qualifications.php'; ?>
            </section>
            <section id="career">
                <?php include_once 'resources/sections/career.php'; ?>
            </section>
            <section id="portifolio">
                <?php include_once 'resources/sections/portifolio.php'; ?>
            </section>
            <section id="contact">
                <div>
                    <h2 class="f_sans title contact_title">Contact me</h2>
                    <div class="center_div" id="contact_content">
                    <span id="error" class="f_lato"></span>
                        <?php include_once 'resources/sections/contact.php'; ?>
                    </div>
                </div>
            </section>
            <section id="footer">
                <?php include_once 'resources/sections/footer.php' ?>
            </section>
        </div>
        <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
    </body>
</html>
