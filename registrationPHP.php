<?php
if(isset($_POST['register'])) {
    include_once('Database/dbfunctions.php');
    $conn = connect_db();
    if($conn) {
        //START OF CODE FOR "IF USER TYPE IS CLIENT"
        if($_POST['userType']=='client'){
            //Start of CLIENT TYPE validation if user already exists
            $stmt = $conn->prepare("SELECT * FROM clients WHERE Email = :Email");
            $stmt->bindParam(":Email", $_POST['Email']);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();

            $stmt2 = $conn->prepare("SELECT * FROM photographers WHERE Email = :Email");
            $stmt2->bindParam(":Email", $_POST['Email']);
            $stmt2->execute();
            $stmt2->setFetchMode(PDO::FETCH_ASSOC);
            $row2 = $stmt2->fetch();

            $pass1 = ($_POST['Password']);
            $e = ($_POST['Email']);
            $vkey = md5(time().$e);

            $currentTime = time();
            $salted = $currentTime. $pass1;

            $hashed = hash('sha512', $salted);

            if($row || $row2) {
                $error = "Email address is already exists; please try a different user name.";
            }
            elseif ($pass1 !== $_POST["Cpassword"]){
                $error = "Password did not match.";
            }

            elseif (strlen($pass1) <= '8') {
                $error = "Your Password Must Contain At Least 8 Characters!";
            }
            //End of CLIENT TYPE validation if user already exists
            else {
                $stmt = $conn->prepare("INSERT INTO clients (Firstname, MiddleInitial, Lastname, Email, 
                                                                       HomeNumber, Mobile, Password, Vkey, timeadded) 
                                              VALUES ('$_POST[Firstname]', '$_POST[MiddleInitial]', '$_POST[Lastname]', 
                                                      '$_POST[Email]', '$_POST[HomeNumber]', '$_POST[Mobile]', 
                                                      '$hashed', '$vkey', '$currentTime')");
                htmlspecialchars($stmt->bindParam(":Firstname", $_POST['Firstname']));
                htmlspecialchars($stmt->bindParam(":MiddleInitial", $_POST['MiddleInitial']));
                htmlspecialchars($stmt->bindParam(":Lastname", $_POST['Lastname']));
                htmlspecialchars($stmt->bindParam(":Email", $_POST['Email']));
                htmlspecialchars($stmt->bindParam(":HomeNumber", $_POST['HomeNumber']));
                htmlspecialchars($stmt->bindParam(":Mobile", $_POST['Mobile']));
                htmlspecialchars($stmt->bindParam(":Password", $_POST['Password']));
                $stmt->execute();
                session_start();

                $to = $e;
                $subject = "Email Verification";
                $message = "<a href='http://localhost/thesis/verify.php?vkey?=$vkey'>Register Account </a>";
                $headers = "From: edberpaul.tingting@benilde.edu.ph\r\n";
                $headers .="MIME-Version: 1.0 ". "\r\n";
                $headers .="Content-type:text/html;charset=UTF-8" . "\r\n";

                mail($to,$subject,$message,$headers);

                $stmt = $conn->query("SELECT LAST_INSERT_ID()");
                $row = $stmt->fetch();
                $_SESSION['login_id'] = $row[0];
                $_SESSION['login_name'] = $_POST['Firstname'];
                $_SESSION['userType'] = $_POST['userType'];
                $stmt->execute();
                session_start();

                header("Location: Client/successRegistration.php");
            }
        }
        //END OF CODE FOR "IF USER TYPE IS CLIENT"

        //START OF CODE FOR "IF USER TYPE IS PHOTOGRAPHER"
        else{
            if($_POST['userType']=='photographer'){
                //Start of PHOTOGRAPHER TYPE validation if user already exists
                $stmt = $conn->prepare("SELECT * FROM photographers WHERE Email = :Email");
                $stmt->bindParam(":Email", $_POST['Email']);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $row = $stmt->fetch();

                $pass1 = ($_POST['Password']);
                $e = ($_POST['Email']);
                $vkey = md5(time().$e);

                $currentTime = time();
                $salted = $currentTime. $pass1;

                $hashed = hash('sha512', $salted);

                if($row) {
                    $error = "Email address is already exists; please try a different user name.";
                }
                elseif ($pass1 !== $_POST["Cpassword"]){
                    $error = "Password did not match.";
                }

                elseif (strlen($pass1) <= '8') {
                    $error = "Your Password Must Contain At Least 8 Characters!";
                }
                //End of PHOTOGRAPHER TYPE validation if user already exists
                else {
                    $stmt = $conn->prepare("INSERT INTO photographers (Firstname, MiddleInitial, Lastname, 
                                                                                 Email, HomeNumber, Mobile, Password, 
                                                                                 Vkey, timeadded) 
                                              VALUES ('$_POST[Firstname]', '$_POST[MiddleInitial]', '$_POST[Lastname]', 
                                                      '$_POST[Email]', '$_POST[HomeNumber]', '$_POST[Mobile]', 
                                                      '$hashed', '$vkey', '$currentTime')");
                    htmlspecialchars($stmt->bindParam(":Firstname", $_POST['Firstname']));
                    htmlspecialchars($stmt->bindParam(":MiddleInitial", $_POST['MiddleInitial']));
                    htmlspecialchars($stmt->bindParam(":Lastname", $_POST['Lastname']));
                    htmlspecialchars($stmt->bindParam(":Email", $_POST['Email']));
                    htmlspecialchars($stmt->bindParam(":HomeNumber", $_POST['HomeNumber']));
                    htmlspecialchars($stmt->bindParam(":Mobile", $_POST['Mobile']));
                    htmlspecialchars($stmt->bindParam(":Password", $_POST['Password']));
                    $stmt->execute();
                    session_start();

                    $to = $e;
                    $subject = "Email Verification";
                    $message = "<a href='http://localhost/thesis/verify.php?vkey?=$vkey'>Register Account </a>";
                    $headers = "From: edberpaul.tingting@benilde.edu.ph\r\n";
                    $headers .="MIME-Version: 1.0 ". "\r\n";
                    $headers .="Content-type:text/html;charset=UTF-8" . "\r\n";

                    mail($to,$subject,$message,$headers);

                    $stmt = $conn->query("SELECT LAST_INSERT_ID()");
                    $row = $stmt->fetch();
                    $_SESSION['login_id'] = $row[0];
                    $_SESSION['login_name'] = $_POST['Firstname'];
                    $_SESSION['userType'] = $_POST['userType'];
                    $stmt->execute();
                    session_start();

                    header("Location: Photographer/successRegistration.php");
                }
            }
        }
        //END OF CODE FOR "IF USER TYPE IS PHOTOGRAPHER"
    }
    else {
        die();
    }
}
?>