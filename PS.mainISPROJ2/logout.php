<?php
include_once 'protected.inc.php';

session_destroy();
header("Location: loginCLIENT.php?logout=true");