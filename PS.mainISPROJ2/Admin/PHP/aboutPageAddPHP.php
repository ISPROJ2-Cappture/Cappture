<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Confirmation</title>
    <?php
    include_once '../../CSS/style.php';
    ?>
</head>
<body>
<div class="container col-md-4 col-md-offset-4">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once '../../Database/dbfunctions.php';
        $conn = connect_db();

        $description= filter_input(INPUT_POST, $_POST["description"], FILTER_SANITIZE_STRING);
        $description= test_input($_POST["description"]);

        $command = "INSERT INTO about (Description) VALUES (:description);";

        $result = $conn->prepare($command);
        $result->bindParam(':description', $description);
        $result->execute();
    }
    ?>
    <br/><br/><br/><br/>
    <div class="alert alert-dismissible alert-success">
        <strong>Thank you!</strong><br/>
        Information entered.
        <hr/>
        <form action="../aboutPage.php">
            <input type="submit" value="Back" />
        </form>
    </div>
    <?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
</div>
</body>
</html>