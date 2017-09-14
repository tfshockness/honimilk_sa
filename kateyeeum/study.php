
        <?php include_once 'db.php';
        $query = "SELECT * FROM studyProject";
        $result = mysqli_query($dbconnection, $query);
        if (!$result) {
            "database query failed";
        }
        ?>
        <?php while ($studyProject = mysqli_fetch_object($result)) { ?>
            <div class="each_project">
                <img src="image/study_cover/<?php echo $studyProject->cover_img ?>">
                <button type="button" class="btn btn-primary">Github</button>
                <button type="button" class="btn btn-primary">View Live</button>
            </div> <!-- End of .each_project -->
        <?php } ?>

