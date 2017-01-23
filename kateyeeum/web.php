
<?php include_once 'db.php';

      $query = "SELECT * FROM webProject";
      $result = mysqli_query($connection,$query);
      if(!$result){
          "database query failed";
      }
?>

<?php while($webProject = mysqli_fetch_object($result)){ ?>
    <h1><?php echo $webProject->title ?></h1>
    <img src="image/<?php echo $webProject->img ?>" >
<?php } ?>
