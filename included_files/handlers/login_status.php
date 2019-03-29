<?php

	if (!isset($_SESSION) && !isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		
        session_start();
        
        if(!isset($_SESSION['loggedUser'])){
            $_SESSION['loggedUser'] = 'NULL';
        }
		header('Location: index.php');
	}

?>