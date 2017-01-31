
<?php include_once 'db.php';

      $query = "SELECT * FROM infoProject";
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>

 <div class="display_all_projects">
    <?php while($infoProject = mysqli_fetch_assoc($result)){ ?>
            <div class="each_project_info">
                <a href="image/info/<?php echo $infoProject['img'] ?>" class="click_project">
                 <img src="image/info_cover/<?php echo $infoProject['cover_img'] ?>" >
                </a>
                <p class="info_description"><?php echo $infoProject['description'] ?><p>
            </div> <!-- End of .each_project_info -->
    <?php } ?>
</div> <!-- End of .display_all_projects -->
