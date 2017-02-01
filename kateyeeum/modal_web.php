
<?php include_once 'db.php';

      $query = "SELECT * FROM infoProject";
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>

<div class="modal_ajax">
    <?php while($infoProject = mysqli_fetch_object($result)){ ?>
        <div class="modal_content">
           <img src="image/info/<?php echo $infoProject->img ?>" >
            <p class="info_description">
                <?php echo $infoProject->description ?>
            </p>
        </div> <!-- modal_content -->
    <?php } ?>
</div> <!-- modal_project -->