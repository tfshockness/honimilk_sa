    <?php include_once 'db.php';
    $query = "SELECT * FROM webProject";
    $result = mysqli_query($dbconnection, $query);
    if (!$result) {
        "database query failed";
    }
    ?>
    <?php while ($webProject = mysqli_fetch_object($result)) { ?>
        <div class="each_project" onClick="openDetailWeb('<?php echo $webProject->id ?>')" style="background-color: <?php echo $webProject->backgroundColor ?>">
            <img src="image/web_cover/<?php echo $webProject->cover_img ?>">
            <p class="read_more">Check this project</p>
        </div> <!-- End of .each_project -->
    <?php } ?>