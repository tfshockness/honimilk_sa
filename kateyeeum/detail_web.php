
<?php include_once 'db.php';
      $id = $_GET['id'];
      $query = "SELECT * FROM webProject WHERE id=" . $id;
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>

<p class="project_detail_wrapper">
    <div class="go_back_link">
        <a onclick="openWork('<?php echo $webProject ?>')" class="btn btn-secondary">
            GO BACK
        </a>
    </div>
    <?php while($webProject = mysqli_fetch_object($result)){ ?>
            <a href="<?php echo $webProject->link ?>" target="_blank">
                    <?php echo $webProject->title ?>
            </a>
            <p>
                <?php echo $webProject->skill ?>
            </p> <!-- End of .web_description_skill -->
            <p>
                <?php echo $webProject->role ?>
            </p> <!-- End of .web_description_role -->
            <a class="btn btn-outline-secondary btn-large" href="<?php echo $webProject->link ?>" target="_blank">
                    VIEW LIVE
            </a>

            <?php
                $arrayScreenShot = explode(",",$webProject->screen_shot);
                foreach($arrayScreenShot as $eachScreen){
            ?>
            <img src="image/web/<?php echo $eachScreen ?>" width="500">
            <?php
                }
            ?>
            <div class="web_description_title second_title">
                <?php echo $webProject->process_title ?>
            </div> <!-- End of .web_description_title -->
            <?php
                $arrayProcessShot = explode(",",$webProject->process_shot);
                foreach($arrayProcessShot as $eachProcess){
            ?>
            <img src = "image/web_process/<?php echo $eachProcess ?>" width="500">
            <?php
                }
            ?>


    <?php } ?>
    <div class="go_back_link" style="margin-bottom: 4%;">
        <a href="index.php">
            GO BACK
        </a>
    </div>
</div> <!-- End of .project_detail_wrapper -->



