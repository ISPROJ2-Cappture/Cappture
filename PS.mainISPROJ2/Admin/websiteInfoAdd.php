<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FAQs Add</title>
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
        <h1>Add FAQ</h1>
        <hr/>
        <form method="post" action="PHP/websiteInfoAddPHP.php">
            <div class="form-group">
                Description:
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
    <a href="websiteInfo.php"><h5>Back</h5></a>
</div>
</body>
</html>