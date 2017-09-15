<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./image/signature.png" width="120" class="d-inline-block align-top" onclick="openWork('<?php echo $webProject ?>')" alt="signature">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" onclick="openWork('<?php echo $webProject ?>')">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onClick="openStudy('<?php echo $studyProject ?>')">Study</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onClick="openAbout()">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>