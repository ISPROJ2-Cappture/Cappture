<?php
include_once '../CSS/navigationBarAdmin.php';
include_once '../Database/dbfunctions.php';
$conn = connect_db();
include_once '../CSS/style.php';

$query = "SELECT Firstname, MiddleInitial, Lastname, Email, HomeNumber, Mobile FROM clients;";
$result = $conn->prepare($query);
$result->execute();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FPPF Home</title>
</head>
<body>
<br/>
<div class="container">
    <a href="accMgmtPhotographer.php">Photographers</a> ||
    <a href="accMgmtDeactivated.php">Deactivated Accounts</a>
</div>
<div class="container">
    <h1 class="center">FPPF Clients</h1>
    <br/>
    <table class="table table-hover">
        <TR class="center">
            <TD><B>Name</B></TD>
            <TD><B>Email</B></TD>
            <TD><B>Contact Details (Mobile, Home)</B></TD>
            <TD><B>Action</B></TD>
        </TR>
        <?php
        while ($myrow = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<TR><TD align=\"center\">";

            echo $myrow["Lastname"];
            echo ", ";
            echo $myrow["Firstname"] . "</TD>";

            echo "<TD align=\"center\">";
            echo $myrow["Email"] . "</TD>";

            echo "<TD align=\"center\">";
            echo $myrow["Mobile"];
            echo ", ";
            echo $myrow["HomeNumber"] . "</TD>";

            echo "<TD align=\"center\">";
            ?>
            <form action="accMgmtClientDeactivate.php">
                <input type="submit" value="Deactivate" />
            </form>
            <?php echo"</TD>"; ?>
            <?php
        }
        $result->closeCursor();
        $db= null;
        ?>
    </table>
</div>
</body>
</html>