<?php

session_start();

if(isset($_SESSION['loggedUser'])) {
    // remove all session variables
    $_SESSION['loggedUser'] = 'NULL';
    session_unset(); 
    // destroy the session 
    session_destroy(); 
    echo '0 <i class="fas fa-check-circle"></i>  Logout|||Session sucessfully terminated!';
    } else {
        
    echo '3 <i class="fas fa-exclamation-triangle"></i>  Logout|||You need to login first!';
    }



    
    
?>