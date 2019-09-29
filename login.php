<title>Login Page</title>
<?php
include_once 'CSS/navigationBarlogin.php';
include_once 'loginPHP.php';
?>
<div class="container col-md-4">
    <hr/>
    <h1>Login</h1>
    <hr/>

    <?php if(isset($error)): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>

    <?php elseif(isset($_GET['loginexpired'])): ?>
        <div class="alert alert-danger">
            Session expired; please login again.
        </div>

    <?php elseif(isset($_GET['logout'])): ?>
        <div class="alert alert-info">
            You have successfully logged out.
        </div>

    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label for="Email">User name:</label>
            <input type="text" id="Email" name="Email" class="form-control">
        </div>
        <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" class="form-control">
        </div>
        <button type="submit" name="login" class="btn btn-info">Login</button>
    </form>
</div>