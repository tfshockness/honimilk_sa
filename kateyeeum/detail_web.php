<?php include_once 'db.php';
$id = $_GET['id'];
$query = "SELECT * FROM webProject WHERE id=" . $id;
$result = mysqli_query($dbconnection, $query);
if (!$result) {
    "database query failed";
}
?>

<div class="project_detail_wrapper">
    <a class="go_back_link btn btn-outline-secondary btn-sm" onclick="openWork('<?php echo $webProject ?>')">
        Go Back
    </a>

    <?php while ($webProject = mysqli_fetch_object($result)) { ?>
        <div style="margin-bottom: 3%;">
            <a class="web_description_title" href="<?php echo $webProject->link ?>" target="_blank">
                <?php echo $webProject->title ?>
            </a>
        </div>
        <p class="web_description_skill"><?php echo $webProject->skill ?></p>
        <p class="web_description_role"><?php echo $webProject->role ?></p>
        <a class="btn web_description_link" href="<?php echo $webProject->link ?>" target="_blank">
            View Live
        </a>
        <div>
            <?php
            $arrayScreenShot = explode(",", $webProject->screen_shot);
            foreach ($arrayScreenShot as $eachScreen) {
                ?>
                <img class="web_images" src="image/web/<?php echo $eachScreen ?>" width="650">
                <?php
            }
            ?>
            <div class="web_description_sub_title">
                <?php echo $webProject->process_title ?>
            </div> <!-- End of .web_description_title -->
            <?php
            $arrayProcessShot = explode(",", $webProject->process_shot);
            foreach ($arrayProcessShot as $eachProcess) {
                ?>
                <img class="process_images" src="image/web_process/<?php echo $eachProcess ?>">
                <?php
            }
            ?>

        </div>


    <?php } ?>

    <a class="go_back_link btn btn-outline-secondary btn-sm" onclick="openWork('<?php echo $webProject ?>')">
        Go Back
    </a>
</div> <!-- End of .project_detail_wrapper -->



