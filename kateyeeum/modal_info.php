
<?php include_once 'db.php';
      $id = $_GET['id'];
      $query = "SELECT * FROM infoProject WHERE id=" . $id;
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>
<div class="modal_ajax_background" onClick="closeModal()">
    <div class="modal_ajax"  id="modal_ajax_info" onClick="closeModal()">
        <div class="modal_board">
            <?php while($infoProject = mysqli_fetch_object($result)){ ?>
                <div class="modal_content" id="modal_content_info">
                   <img src="image/info/<?php echo $infoProject->img ?>"style="margin-right:10px;" >
                     <div class="info_description">
                         <div class="info_description_content">
                             <?php echo $infoProject->description ?>
                         </div><br />
                     <div class="link_other-project" id="link_other-info" >
                        <a href="#">SEE OTHER PROJECT</a>
                     </div><!-- link_other-project -->
                    </div><!-- info_description-->
                </div><!-- modal_content -->
            <?php } ?>
        </div><!-- modal_board -->
    </div> <!-- modal_project -->
</div> <!-- modal_ajax_background -->