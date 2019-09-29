<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Website Information</title>
    <?php
    include_once '../CSS/style.php';
    ?>
</head>
<body>
<?php
include_once '../CSS/navigationBarAdmin.php';
?>
<div class="container">
    <br/>
    <a href="aboutPage.php"><strong>About Page</strong></a>
</div>
<div class="container">
    <h1>FAQs</h1>
    <form action="websiteInfoAdd.php">
        <input type="submit" value="Add" />
    </form>
</div>
<br/>
<?php
include_once '../Database/dbfunctions.php';
$conn = connect_db();
$query ="SELECT FAQsID, Description FROM faqs;";
$result = $conn->prepare($query);
$result->execute();
?>
    <div class="container">
        <table class="table table-hover">
            <TR class="center">
                <TD><B>Description</B></TD>
                <TD><B>Delete</B></TD>
                <TD><B>Update</B></TD>
            </TR>
            <?php
            while ($myrow = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<TR><TD align=\"center\">";

            echo $myrow["Description"] . "</td>";

            echo "<TD align=\"center\">";
            ?>
            <a href="PHP/websiteInfoPHPDELETE.php?FAQsID=<?php echo $myrow["FAQsID"]; ?>">
                Delete<?php echo"</td>"; ?><a/>

            <?php
            echo "<TD align=\"center\">";
            ?>
            <a href="websiteInfoUpdate.php?FAQsID=<?php echo $myrow["FAQsID"]; ?>">
                Update<?php echo"</td>"; ?><a/>

            <?php
            }
            $result->closeCursor();
            $db= null;
            ?>
        </table>
    </div>
</body>
</html>