<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Confirmation</title>
    <?php
    include_once '../../CSS/style.php';
    ?>
</head>
<body>
<div class="container col-md-4 col-md-offset-4">
    <?php
    include_once '../../Database/dbfunctions.php';
    $conn = connect_db();
    $command = "UPDATE about SET Description=:description WHERE AboutID=:AboutID";
    $AboutID = (int)$_REQUEST["AboutID"];
    $result = $conn->prepare($command);
    $result->bindParam(':description', $_POST['description']);
    $result->bindParam(':AboutID', $AboutID);
    $result->execute();
    ?>
    <br/><br/><br/><br/>
    <div class="alert alert-dismissible alert-success">
        <strong>Thank you!</strong><br/>
        Your about entry has been updated.
        <hr/>
        <form action="../aboutPage.php">
            <input type="submit" value="Back" />
        </form>
    </div>
</div>
</body>
</html>