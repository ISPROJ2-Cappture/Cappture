<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>About Entry Update</title>
    <?php
    include_once '../CSS/style.php';
    ?>
</head>
<body>
<?php
include_once '../CSS/navigationBarAdmin.php';
?>
<br/>
<?php
include_once '../Database/dbfunctions.php';
$conn = connect_db();
$stmt = $conn->prepare("SELECT Description FROM about WHERE AboutID = :AboutID");
htmlspecialchars($stmt->bindParam(":AboutID", $_REQUEST['AboutID']));
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$row1 = $stmt->fetch();
?>
<div class="container col-md-4 col-md-offset-4">
    <div class="form-group">
        <h1>Update About Entry</h1>
        <hr/>
        <form method="post" action="PHP/aboutPageUpdatePHP.php?AboutID=<?php echo $_REQUEST["AboutID"]; ?>">
            <div class="form-group">
                Description:
                <textarea class="form-control"
                          id="description"
                          name="description"
                          rows="4"
                          style="margin-top: 0px; margin-bottom: 0px; height: 81px;"><?php echo $row1['Description'] ?></textarea>
            </div>
            <hr/>
            <input type="Submit" name="submit" value="Submit">
        </form>
    </div>
    <a href="websiteInfo.php"><h5>Back</h5></a>
</div>
</body>
</html>