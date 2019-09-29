<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking History</title>
    <?php
    include_once '../CSS/style.php';
    ?>
</head>
<body>
<?php
include_once '../CSS/navigationBar.php';
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
    <div class="form-group width">
        <select class="custom-select">
            <option value="1">2019</option>
            <option value="2">2018</option>
            <option value="3">2017</option>
        </select>
    </div>

    <button type="button" class="btn btn-secondary btn-block">
        Booking 1
    </button>

    <button type="button" class="btn btn-secondary btn-block">
        Booking 2
    </button>
</div>
</body>
</html>