
<?php include_once 'db.php';
      $id = $_GET['id'];
      $query = "SELECT * FROM webProject WHERE id=" . $id;
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>
<div class="modal_ajax_background" onClick="closeModal()">
    <div class="modal_ajax" onClick="closeModal()">
        <div class="modal_board">
            <?php while($webProject = mysqli_fetch_object($result)){ ?>
                <div class="modal_content">
                   <img src="image/web/<?php echo $webProject->img ?>" >
                    <p class="web_description">
                        <p class="web_description_title"><?php echo $webProject->title ?></p>
                        <p class="web_description_content"><?php echo $webProject->role ?></p>
                        <p class="web_description_content"><?php echo $webProject->skill ?></p>
                    </p>
                </div> <!-- modal_content -->
            <?php } ?>
        </div> <!-- modal_board -->
    </div> <!-- modal_project -->
</div> <!-- modal_ajax_background -->