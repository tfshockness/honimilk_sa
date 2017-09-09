<!DOCTYPE html>
<html>
<head>
    <?php include_once 'header.php'; ?>
</head>
<body>
  <div class="wrapper">
      <nav class="navbar navbar-expand-lg">
          <div class="container">
              <a class="navbar-brand" href="#">
                  <img src="./image/signature.png" width="120" class="d-inline-block align-top" alt="signature">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="#">Work</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Contact</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

      <div class="row">
              <?php include_once 'db.php';
                  $query = "SELECT * FROM webProject";
                  $result = mysqli_query($dbconnection,$query);
                  if(!$result){
                      "database query failed";
                  }
              ?>
              <?php while($webProject = mysqli_fetch_object($result)){ ?>
                  <div class="col-md-4 each_project" onClick="openDetailWeb('<?php echo $webProject->id ?>')">
                      <img src="image/web_cover/<?php echo $webProject->cover_img ?>" >
                  </div> <!-- End of .each_project -->
              <?php } ?>
      </div><!--.row-->
</div> <!-- End of .wrapper -->
    <footer>
        <p>Copyright © 2017 KATE YEEUM. All Rights Reserved.</p>
    </footer>
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>

