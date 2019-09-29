<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Client Deactivation Confirmation</title>
    <?php
    include_once '../CSS/style.php';
    ?>
</head>
<body>
<?php
include_once '../CSS/navigationBarAdmin.php';
?>
<br/>
<div class="container col-md-4 col-md-offset-4">
    <div class="form-group">
        <h1>Deactivate Account of [Client Name]</h1>
        <hr/>
        <form method="post" action="#">
            <div class="form-group">
                Reason for deactivation:
                <textarea class="form-control"
                          id="description"
                          name="description"
                          rows="4"
                          style="margin-top: 0px; margin-bottom: 0px; height: 81px;"></textarea>
            </div>
            <hr/>
            <input type="Submit" name="submit" value="Submit">
        </form>
    </div>
    <a href="accMgmtClient.php"><h5>Back</h5></a>
</div>
</body>
</html>