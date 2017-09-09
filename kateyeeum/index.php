<!DOCTYPE html>
<html>
<head>
    <?php include_once 'header.php'; ?>
</head>
<body>
  <div class="wrapper">
    <div class="main_board">
        <div class="main_board_content">
                <a href="index.php">
                    <h1> KATE YEEUM </h1>
                    <h1> / </h1>
                    <h1> WEB DESIGNER </h1>
                </a>

            <div class="main_board_links">
                <div>
                    <span class="fa-stack fa-lg">
                        <a href="image/kate_cv.pdf" download><i class="fa fa-file-pdf-o fa-stack-1x" id="pdf_icon" aria-hidden="true"></i></a>
                    </span>
                </div>

                <div>
                    <span class="fa-stack fa-lg">
                        <a href="https://www.linkedin.com/in/kate-yeeum-lee-b3a971139/" target="_blank"><i class="fa fa-linkedin fa-stack-1x" id="linkedIn_icon" aria-hidden="true"></i></a>
                    </span>
                </div>        
            </div> <!-- End of .main_board_links -->
        </div> <!-- End of .main_board_content -->
    </div> <!-- End of .main_board -->

        <div id="content">
            <div class="display_all_projects">
                    <?php include_once 'db.php';
                        $query = "SELECT * FROM webProject";
                        $result = mysqli_query($dbconnection,$query);
                        if(!$result){
                            "database query failed";
                        }
                    ?>
                <?php while($webProject = mysqli_fetch_object($result)){ ?>
                        <div class="each_project" onClick="openDetailWeb('<?php echo $webProject->id ?>')">
                                    <img src="image/web_cover/<?php echo $webProject->cover_img ?>" >
                        </div> <!-- End of .each_project -->
                <?php } ?>
            </div> <!-- End of .display_all_projects -->
        </div> <!-- End of #content -->
</div> <!-- End of .wrapper -->
    <footer>
        <p>Copyright © 2017 KATE YEEUM. All Rights Reserved.</p>
    </footer>
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>

