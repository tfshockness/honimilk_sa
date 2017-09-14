
<?php include_once 'db.php';
      $id = $_GET['id'];
      $query = "SELECT * FROM studyProject WHERE id=" . $id;
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>

<div class="project_detail_wrapper">
    <div class="go_back_link">
        <a href="study.php">
            GO BACK
        </a>
    </div>
    <?php while($studyProject = mysqli_fetch_object($result)){ ?>
            <a href="<?php echo $studyProject->link ?>" target="_blank">
               <div class="web_description_title">
                    <?php echo $studyProject->title ?>
               </div> <!-- End of .web_decription_title -->
            </a>

            <div class="web_description_link">
                <a href="<?php echo $studyProject->link ?>" target="_blank">
                    VIEW LIVE
                </a>
            </div>

            <?php
                $arrayScreenShot = explode(",",$studyProject->screen_shot);
                foreach($arrayScreenShot as $eachScreen){
            ?>
            <img src="image/study/<?php echo $eachScreen ?>" width="800">
            <?php
                }
            ?>
            <div class="web_description_title second_title">
                <?php echo $studyProject->process_title ?>
            </div> <!-- End of .web_description_title -->

            <?php
                }
            ?>

    <div class="go_back_link" style="margin-bottom: 4%;">
        <a href="study.php">
            GO BACK
        </a>
    </div>
</div> <!-- End of .project_detail_wrapper -->



