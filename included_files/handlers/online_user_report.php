<?php

include '../db_config.php';
include 'login_status.php';
include 'online_user_handler.php';

    updateOnlineUser($conn,$_SESSION['userId']);

?>