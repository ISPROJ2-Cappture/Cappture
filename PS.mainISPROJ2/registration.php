<title>Registration</title>
<?php
include_once 'CSS/navigationBarlogin.php';
include_once 'registrationPHP.php';
?>
<div class="container col-md-7">
    <hr/>
    <h1>Registration</h1>
    <hr/>
    <?php
    if(isset($error)):
        ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php
    endif;
    ?>
    <form method="POST">
        <div class="form-group">
            <label for="Firstname">First Name:</label>
            <input type="text" id="Firstname" name="Firstname" class="form-control">
        </div>
        <div class="form-group">
            <label for="MiddleInitial">MiddleInitial:</label>
            <input type="text" id="MiddleInitial" name="MiddleInitial" class="form-control">
        </div>
        <div class="form-group">
            <label for="Lastname">Lastname:</label>
            <input type="text" id="Lastname" name="Lastname" class="form-control">
        </div>
        <div class="form-group">
            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" class="form-control">
        </div>
        <div class="form-group">
            <label for="HomeNumber">HomeNumber:</label>
            <input type="text" id="HomeNumber" name="HomeNumber" class="form-control">
        </div>
        <div class="form-group">
            <label for="Mobile">Mobile:</label>
            <input type="text" id="Mobile" name="Mobile" class="form-control">
        </div>
        <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" class="form-control">
        </div>
        <div class="form-group">
            <label for="Cpassword">Confirm Password:</label>
            <input type="password" id="Cpassword" name="Cpassword" class="form-control">
        </div>
        <fieldset class="form-group">
            <legend>Type of user:</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="userType" id="optionClient"
                           value="client" checked="">
                    Client
                </label>
            </div>
            <!-- id="is used for one"; name="is used for many" -->
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="userType" id="optionPhotographer"
                           value="photographer">
                    Photographer
                </label>
            </div>
        </fieldset>
        <hr/>
        <button type="submit" name="register" class="btn btn-info">Register</button>
        <a href="homepage.php" class="btn btn-danger">Cancel</a>
    </form>
</div>