
        <?php include_once 'db.php';
        $query = "SELECT * FROM studyProject";
        $result = mysqli_query($dbconnection, $query);
        if (!$result) {
            "database query failed";
        }
        ?>
        <?php while ($studyProject = mysqli_fetch_object($result)) { ?>
            <div class="study_project" style="background-image: url('./image/study_bg/<?php echo $studyProject->background_color ?>')">
                <p class="study_cover_title"> <?php echo $studyProject->cover_title ?> </p>
                <p> <?php echo $studyProject->cover_description ?> </p>
                <p> <?php echo $studyProject->cover_skills ?> </p>
                <div class="study_project_btns">
                    <a class="btn btn-outline-secondary btn-sm" href="<?php echo $studyProject->githubLink ?>" target="_blank">Github</a>
                    <a class="btn btn-outline-secondary btn-sm" href="<?php echo $studyProject->liveLink ?>" target="_blank">View Live</a>
                </div>
            </div> <!-- End of .each_project -->
        <?php } ?>

