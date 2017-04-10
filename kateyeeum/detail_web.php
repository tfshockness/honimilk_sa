
<?php include_once 'db.php';
      $id = $_GET['id'];
      $query = "SELECT * FROM webProject WHERE id=" . $id;
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>

<div class="project_detail_wrapper">
    <?php while($webProject = mysqli_fetch_object($result)){ ?>
            <a href="<?php echo $webProject->link ?>" target="_blank">
               <div class="web_description_title">
                    <?php echo $webProject->title ?>
               </div> <!-- End of .web_decription_title -->
            </a>
            <div class="web_description_skill">
                <?php echo $webProject->skill ?>
            </div> <!-- End of .web_description_skill -->
            <div class="web_description_role">
                <?php echo $webProject->role ?>
            </div> <!-- End of .web_description_role -->
            <div class="web_description_link">
                <a href="<?php echo $webProject->link ?>" target="_blank">
                    VIEW LIVE
                </a>
            </div>
            <?php 
                $arrayScreenShot = explode(",",$webProject->screen_shot);
                foreach($arrayScreenShot as $eachScreen){
            ?>
            <img src="image/web/<?php echo $eachScreen ?>" width="800">
            <?php
                }
            ?>
            <div class="web_description_title">
                <?php echo $webProject->process_title ?>
            </div> <!-- End of .web_description_title -->
            <?php
                $arrayProcessShot = explode(",",$webProject->process_shot);
                foreach($arrayProcessShot as $eachProcess){
            ?>
            <img src = "image/web_process/<?php echo $eachProcess ?>">
            <?php
                }
            ?>
    <?php } ?>
</div> <!-- End of .project_detail_wrapper -->



