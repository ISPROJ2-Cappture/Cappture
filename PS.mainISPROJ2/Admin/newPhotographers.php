<?php
include_once '../Database/dbfunctions.php';
$conn = connect_db();
$query = "SELECT Firstname, MiddleInitial, Lastname, Email, HomeNumber, Mobile FROM photographers;";
$result = $conn->prepare($query);
$result->execute();
?>
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
include_once '../CSS/navigationBarAdmin.php';
?>
<div class="container">
    <div class="center">
        <br/>
        <h1>FPPF Photographers</h1>
        <br/>
    </div>
    <table class="table table-hover">
        <TR class="center">
            <TD><B>Name</B></TD>
            <TD><B>Email</B></TD>
            <TD><B>Contact Details (Mobile, Home)</B></TD>
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
        }
        $result->closeCursor();
        $db= null;
        ?>
    </table>
</div>
</body>
</html>