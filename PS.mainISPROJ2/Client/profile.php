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
include_once '../Database/dbfunctions.php';
$conn = connect_db();
$query = "SELECT Firstname, MiddleInitial, Lastname, Email, HomeNumber, Mobile, Password FROM clients;";
$result = $conn->prepare($query);
$result->execute();
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

<div class="split right2">
    <?php
    while ($myrow = $result->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <form method="post" action="Database/update.php">
        <input type="hidden" id="ClientID" name="ClientID" value="<?php echo $myrow["ClientID"];?>">
        <div class="form-group width2">
            <label for="userName">Name</label>
            <input type="text"
                   name="Firstname"
                   class="form-control"
                   value="<?php echo $myrow["Firstname"];?>">
        </div>
        <div class="form-group width2">
            <label for="userMI">Middle Initial</label>
            <input type="text"
                   name="MiddleInitial"
                   class="form-control"
                   value="<?php echo $myrow["MiddleInitial"];?>">
        </div>
        <div class="form-group width2">
            <label for="userLName">Last Name</label>
            <input type="text"
                   name="Lastname"
                   class="form-control"
                   value="<?php echo $myrow["Lastname"];?>">
        </div>
        <div class="form-group width2">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email"
                   name="Email"
                   class="form-control"
                   value="<?php echo $myrow["Email"];?>">
        </div>
        <div class="form-group width2">
            <label for="userLandline">Landline</label>
            <input type="number"
                   name="HomeNumber"
                   class="form-control"
                   value="<?php echo $myrow["HomeNumber"];?>">
        </div>
        <div class="form-group width2">
            <label for="userLandline">Cellphone Number</label>
            <input type="number"
                   name="Mobile"
                   class="form-control"
                   value="<?php echo $myrow["Mobile"];?>">
        </div>
        <div class="form-group width2">
            <label for="exampleInputPassword1">Password</label>
            <input type="password"
                   name="Password"
                   class="form-control"
                   value="">
        </div>
        <input type="submit" class="btn btn-primary" value="Save Changes">
    </form>
    <br/><br/><br/><br/>

    <?php
    }
    ?>

</div>
</body>
</html>