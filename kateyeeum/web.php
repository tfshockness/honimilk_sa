
<?php include_once 'db.php';

      $query = "SELECT * FROM webProject";
      $result = mysqli_query($dbconnection,$query);
      if(!$result){
          "database query failed";
      }
?>
<?php while($webProject = mysqli_fetch_object($result)){ ?>
    <div class="display_all_projects">
        <div class="each_project" style="background-color: #f2f2f2;">
            <img src="image/<?php echo $webProject->img ?>" >
        </div>
    </div> <!-- End of .display_all_projects -->
<?php } ?>

