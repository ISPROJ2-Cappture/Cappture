<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FPPF Home</title>
    <?php
    include_once '../CSS/style.php';
    ?>
</head>
<body>
<?php
include_once '../CSS/navigationBar.php';
?>

<div class="split left">
    <img src="https://www.seekpng.com/png/full/966-9665493_my-profile-icon-blank-profile-image-circle.png"
         style="width:170px;height:170px;">
    <br/><br/><br/><br/>
    <div class="card">
        <div class="card2" style="max-width: 20rem;">
            <div class="card-header">FPPF News/Announcements</div>
            <div class="card-body">
                <h4 class="card-title">Christmas Deals!</h4>
                <p class="card-text">Christmas discounts until Dec 30!</p>
            </div>
        </div>
    </div>
</div>

<div class="split right">
    <div class="jumbotron">
        <h1>Welcome Back, User!</h1>
        <hr class="my-4">
        <p>Click below to find your desired photographer!</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg"
               href="search.php"
               role="button">Book Now!
            </a>
        </p>
    </div>

    <div class="card border-secondary mb-3" style="max-width: 70rem;">
        <div class="card-header">Comments and Ratings</div>
        <div class="card-body">
            <h5 class="card-title">Sample 1</h5>
            <p class="card-text">Sample comment
            </p>
        </div>
    </div>
    <a class="btn btn-primary" href="#" >View All</a>
    <br/><br/><br/><br/>
</div>
</body>
</html>