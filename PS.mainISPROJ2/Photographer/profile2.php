<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FPPF Home</title>
    <?php include_once '../CSS/style.php' ?>
</head>
<body>
<?php include_once '../CSS/navigationBarPhotographer.php' ?>

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
    <div class="form-group width">
        <label for="userName">Name</label>
        <input type="text"
               class="form-control"
               placeholder="Enter First Name">
    </div>
    <div class="form-group width">
        <label for="userLName">Last Name</label>
        <input type="text"
               class="form-control"
               placeholder="Enter Last Name">
    </div>
    <div class="form-group width">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email"
               class="form-control"
               placeholder="Enter email">
    </div>
    <div class="form-group width">
        <label for="userLandline">Landline</label>
        <input type="number"
               class="form-control"
               placeholder="Enter Landline">
    </div>
    <div class="form-group width">
        <label for="userLandline">Cellphone Number</label>
        <input type="number"
               class="form-control"
               placeholder="Enter Cellphone Number">
    </div>
    <div class="form-group width">
        <label for="exampleInputPassword1">Password</label>
        <input type="password"
               class="form-control"
               placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
    <br/><br/><br/><br/>
</div>
</body>
</html>