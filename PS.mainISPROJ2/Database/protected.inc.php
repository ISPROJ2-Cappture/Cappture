<?php
session_start();

if(!isset($_SESSION['login_id'])) {
    session_destroy();
    header("Location: view.php?loginexpired=true");
}

define('PROTECTED', true);
?>