
<?php include_once 'db.php';

      $query = "SELECT * FROM infoProject";
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>

 <div class="display_all_projects" id="display_all_info">
    <?php while($infoProject = mysqli_fetch_object($result)){ ?>
        <div class="each_project_info" onClick="openDetail('<?php echo $infoProject->id ?>')">
                 <img src="image/info_cover/<?php echo $infoProject->cover_img ?>" >
        </div> <!-- End of .each_project_info -->
    <?php } ?>
        <div class="modal_project" id="modal_project">
        </div> <!-- End of .modal_project -->
</div> <!-- End of .display_all_projects -->
