<?php

include '../db_config.php';
include 'save_notifications.php';


session_start();

if(isset($_SESSION['loggedUser'])) {
    // remove all session variables
    saveNotification($conn, '0', 'Logout', $_SESSION['userId'] , 'Session sucessfully terminated!');
    $_SESSION['loggedUser'] = 'NULL';
    session_unset(); 
    // destroy the session 
    session_destroy(); 
    echo '0 <i class="fas fa-check-circle"></i>  Logout|||Session sucessfully terminated!|||'. date("h:i:sa") .' '. date("Y.m.d");
    
    } else {
        
    echo '3 <i class="fas fa-exclamation-triangle"></i>  Logout|||You need to login first!|||'. date("h:i:sa") .' '. date("Y.m.d");
    saveNotification($conn, '3', 'Logout', '0' , 'You need to login first!');
    }



    
    
?>