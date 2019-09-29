<?php
// if already logged in, go to view.php page
session_start();
if(isset($_SESSION['login_id'])) {
    if($_SESSION['userType']=='client'){
        header("Location: Client/index.php");
    }
    else{
        header("Location: Photographer/index.php");
    }
}

// if login button has been clicked
if(isset($_POST['login'])) {
    include_once('Database/dbfunctions.php');
    $conn = connect_db();
    if($conn) {
        //START OF CODE FOR GETTING timeadded TO USE FOR COMPARING PASSWORD TO DB
        $stmt = $conn->prepare("SELECT timeadded FROM clients WHERE Email = :Email");
        htmlspecialchars($stmt->bindParam(":Email", $_POST['Email']));
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row1 = $stmt->fetch();

        if(!$row1){
            $stmt = $conn->prepare("SELECT timeadded FROM photographers WHERE Email = :Email");
            htmlspecialchars($stmt->bindParam(":Email", $_POST['Email']));
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row1 = $stmt->fetch();

            if(!$row1){
                $stmt = $conn->prepare("SELECT timeadded FROM admin WHERE Email = :Email");
                htmlspecialchars($stmt->bindParam(":Email", $_POST['Email']));
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $row1 = $stmt->fetch();

                $currentTime = $row1['timeadded'];

                $pass1 = ($_POST['Password']);
                $salted = $currentTime. $pass1;
                $hashed = hash('sha512', $salted);
            }
            else{
                $currentTime = $row1['timeadded'];

                $pass1 = ($_POST['Password']);
                $salted = $currentTime. $pass1;
                $hashed = hash('sha512', $salted);
            }
        }
        else{
            $currentTime = $row1['timeadded'];

            $pass1 = ($_POST['Password']);
            $salted = $currentTime. $pass1;
            $hashed = hash('sha512', $salted);
        }
        //END OF CODE FOR GETTING timeadded TO USE FOR COMPARING PASSWORD TO DB

        //START OF CODE FOR CHECKING IF USER CREDENTIAL EXISTS IN EITHER CLIENT, PHOTOGRAPHER, OR ADMIN TABLES
        $stmt = $conn->prepare("SELECT * FROM clients WHERE Email = :Email AND Password = :Password");
        htmlspecialchars($stmt->bindParam(":Email", $_POST['Email']));
        htmlspecialchars($stmt->bindParam(":Password", $hashed));
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();

        if(!$row) {
            $stmt = $conn->prepare("SELECT * FROM photographers WHERE Email = :Email 
                                                                      AND Password = :Password");
            htmlspecialchars($stmt->bindParam(":Email", $_POST['Email']));
            htmlspecialchars($stmt->bindParam(":Password", $hashed));
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();

            if(!$row){
                $stmt = $conn->prepare("SELECT * FROM admin WHERE Email = :Email 
                                                                      AND Password = :Password");
                htmlspecialchars($stmt->bindParam(":Email", $_POST['Email']));
                htmlspecialchars($stmt->bindParam(":Password", $hashed));
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $row = $stmt->fetch();

                if(!$row){
                    $error = "Invalid username and/or password.";
                }
                else {
                    $_SESSION['login_id'] = $row['ID'];
                    $_SESSION['login_name'] = $row['Email'];
                    header("Location: Admin/index.php");
                }
            }
            else{
                $_SESSION['login_id'] = $row['ID'];
                $_SESSION['login_name'] = $row['Email'];
                header("Location: Photographer/index.php");
            }
        }
        else {
            $_SESSION['login_id'] = $row['ID'];
            $_SESSION['login_name'] = $row['Email'];
            header("Location: Client/index.php");
        }
        //END OF CODE FOR CHECKING IF USER CREDENTIAL EXISTS IN EITHER CLIENT OR PHOTOGRAPHER TABLES
    }
    else {
        die();
    }
}
?>


