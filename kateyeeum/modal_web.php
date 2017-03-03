
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
                <div class="modal_content" id="modal_content_web">
                    <div class="modal_img_scroll">
                        <img src="image/web/<?php echo $webProject->img ?>" >
                    </div> <!-- modal_img_scroll -->
                    <div class="web_description">
                        <div class="web_description_title"><?php echo $webProject->title ?></div>
                        <div class="web_description_content"><?php echo $webProject->role ?></div>
                        <div class="web_description_content"><?php echo $webProject->skill ?></div>
                    
                        <div class="link_other-project" style="float:left; margin-left:2%; margin-right:2%; ">
                            <a href="<?php echo $webProject->link ?>" target="_blank">VIEW LIVE</a>
                        </div><!-- link_other-project -->
                        <div class="link_other-project" style="float:left; margin-left:0;">
                            <a href="#">OTHER PROJECT</a>
                        </div><!-- link_other-project -->
                    </div><!-- web_description -->
                </div> <!-- modal_content -->
            <?php } ?>
        </div> <!-- modal_board -->
    </div> <!-- modal_project -->
</div> <!-- modal_ajax_background -->