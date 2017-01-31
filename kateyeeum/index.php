<!DOCTYPE html>
<html>
<head>
 <?php include_once 'header.php'; ?>
</head>
<body>
    <div class="main_board">
        <div class="main_board_content">
            <h1> Hi, </h1>
            <h1> I am Kate </h1>
            <h1> - Web Designer </h1>
        </div> <!-- End of .main_board_content -->
        <div class="main_board_links">
            <div>
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-file-pdf-o fa-stack-1x" id="pdf_icon" aria-hidden="true"></i>
                </span>
                <a href="#"> Download CV </a>
            </div>
            
            <div>
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x" id="linkedIn_icon" aria-hidden="true"></i>
                </span>
                <a href="#"> LinkedIn </a>
            </div>
        </div> <!-- End of .main_board_links -->
       
    </div> <!-- End of .main_board -->
    <div class="zigzag_border">
    </div> <!-- End of .zigzag_border -->
    
    <div class="display">
        <div class="display_title">
            <a>PROJECTS</a>
            <a href="#" id="ajax_about">ABOUT</a>
        </div> <!-- End of #display_title -->
        <div class="display_subtitle">
            <a href="#" id="project_web">WEB</a>
            <a href="#" id="project_info">INFOGRAPHIC</a>
        </div> <!-- End of #display_subtitle -->
        <div id="content">
            <?php include 'info.php'; ?>
        </div> <!-- End of .content -->
    </div> <!-- display -->
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>