<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
    <?php include_once '../CSS/style.php' ?>
</head>
<body>
<?php
include_once '../CSS/navigationBarPhotographer.php'
?>

<div class="split left">
    <a href="#"><h5>Ratings Received</h5></a><br/>
    <a href="#"><h5>Client Comments</h5></a><br/><br/>
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
    <div class="form-group inline width">
        <label for="exampleSelect1">By Month</label>
        <select class="form-control" id="exampleSelect1">
            <option>January</option>
            <option>February</option>
        </select>
    </div>
    <div class="form-group inline width">
        <label for="exampleSelect1">Type of Service</label>
        <select class="form-control" id="exampleSelect1">
            <option>Wedding</option>
            <option>Birthday</option>
        </select>
    </div><br/>
    <div class="form-group">
        <button type="button" class="btn btn-secondary btn-lg">
            <a href="#">Download as PDF</a>
        </button>
    </div>
</div>
</body>
</html>