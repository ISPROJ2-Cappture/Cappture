<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FPPF Home</title>
    <?php
    include_once '../CSS/style.php';
    include_once '../CSS/navigationBarAdmin.php';
    ?>
</head>
<body>
    <div class="split left">
        <a href="#"><h5>Compose</h5></a><br/>
        <a href="#"><h5>Inbox</h5></a><br/>
        <a href="#"><h5>Sent</h5></a><br/>
        <a href="#"><h5>Trash</h5></a><br/><br/>
        <div class="card">
            <div class="card2" style="max-width: 20rem;">
                <div class="card-header">FPPF News/Announcements</div>
                <div class="card-body">
                    <h4 class="card-title">Christmas Deals!</h4>
                    <p class="card-text">Christmas discounts until Dec 30!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="split right">
        <button type="button" class="btn btn-secondary btn-block">
            Email 1
        </button>
        <button type="button" class="btn btn-secondary btn-block">
            Email 2
        </button>
    </div>
</body>
</html>