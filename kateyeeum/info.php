
<?php include_once 'db.php';

      $query = "SELECT * FROM infoProject";
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>

 <div class="display_all_projects">
    <?php while($infoProject = mysqli_fetch_object($result)){ ?>
        <div class="each_project_info" onClick="openDetail()">
                 <img src="image/info_cover/<?php echo $infoProject->cover_img ?>" >
        </div> <!-- End of .each_project_info -->
    <?php } ?>
        <div class="modal_project" id="modal_project">
            <p>ITS HERE WE SHOULD BE HERE COME TO HERE PLEASE</p>
        </div> <!-- End of .modal_project -->
</div> <!-- End of .display_all_projects -->
