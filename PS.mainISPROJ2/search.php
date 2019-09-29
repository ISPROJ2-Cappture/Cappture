<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FPPF Home</title>
    <?php
    include_once 'CSS/style.php';
    ?>
</head>
<body>
<?php
include_once 'CSS/navigationBar.php';
?>

<div class="split left">
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
    <div class="form-group inline width3">
        <label for="exampleSelect1">Type of Photography</label>
        <select class="form-control" id="exampleSelect1">
            <option>Wedding</option>
            <option>Birthday</option>
        </select>
    </div>
    <div class="form-group inline width3">
        <label for="exampleSelect1">Location</label>
        <select class="form-control" id="exampleSelect1">
            <option>Sample 1</option>
            <option>Sample 2</option>
        </select>
    </div>
    <div class="form-group inline width3">
        <label for="exampleSelect1">Date/Time</label>
        <select class="form-control" id="exampleSelect1">
            <option>Sample 1</option>
            <option>Sample 2</option>
        </select>
    </div>
    <div class="form-group inline width3">
        <label for="exampleSelect1">Price Range</label>
        <select class="form-control" id="exampleSelect1">
            <option>10,000-20,000</option>
            <option>20,000-40,000</option>
        </select>
    </div><br/>
    <div class="form-group">
        <button type="button" class="btn btn-secondary btn-lg">
            <a href="#">Filter</a>
        </button>
    </div>
</div>
</body>
</html>