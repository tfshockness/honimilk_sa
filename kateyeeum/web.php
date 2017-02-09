
<?php include_once 'db.php';

      $query = "SELECT * FROM webProject";
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>

 <div class="display_all_projects">
    <?php while($webProject = mysqli_fetch_object($result)){ ?>
            <div class="each_project" onClick="openDetailWeb('<?php echo $webProject->id ?>')">
                <img src="image/web_cover/<?php echo $webProject->cover_img ?>" >
            </div> <!-- End of .each_project -->
    <?php } ?>
            <div class="modal_project_web" id="modal_project_web">
            </div> <!-- End of .modal_project_web -->
</div> <!-- End of .display_all_projects -->

