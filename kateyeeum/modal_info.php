
<?php include_once 'db.php';
      $id = $_GET['id'];
      $query = "SELECT * FROM infoProject WHERE id=" . $id;
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>
<div class="modal_ajax_background">
    <div class="modal_ajax">
        <?php while($infoProject = mysqli_fetch_object($result)){ ?>
               <img src="image/info/<?php echo $infoProject->img ?>" >
                 <p class="info_description">
                    <?php echo $infoProject->description ?>
                 </p>
        <?php } ?>
    </div> <!-- modal_project -->
</div> <!-- modal_ajax_background -->