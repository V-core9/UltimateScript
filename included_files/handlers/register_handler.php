<?php

include '../db_config.php';

include 'save_notifications.php';




if (!empty($_POST['usernameRegister']) AND !empty($_POST['emailRegister']) AND !empty($_POST['passwordRegister']) AND !empty($_POST['passwordRegisterSec'])) {
    $username = $_POST['usernameRegister'];
    $emailRegister = $_POST['emailRegister'];
    $passwordRegister = $_POST['passwordRegister'];
    $passwordRegisterSec = $_POST['passwordRegisterSec'];

    
    $sql = "SELECT username FROM users_info WHERE username=\"$username\"";
    $result = $conn->query($sql);
    $exists = 0;
    $exists = $result->num_rows;

    if ($exists == 0) {

        if (filter_var($emailRegister, FILTER_VALIDATE_EMAIL)){
            if ($passwordRegister == $passwordRegisterSec) {
            
                $sql = "INSERT INTO users_info (username, user_email, user_password) VALUES ( \"$username\", \"$emailRegister\", \"$passwordRegister\" )";
            
    
                if ($conn->query($sql) === TRUE) {
                    echo "0 <i class='fas fa-check-circle'></i>  Register|||New record created successfully|||". date("h:i:sa") ." ". date("Y.m.d");
                    $sql = "SELECT user_id FROM users_info WHERE username=\"$username\"";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                        $_SESSION['userId'] =  $row["user_id"];
                    };

                    saveNotification($conn, '0', 'Register', $_SESSION['userId'], 'New record created successfully');
                    
                    echo '</br>';
                    
                    echo 'Username: ';
                    echo $_POST['usernameRegister'];
                    echo '</br>';
                    //echo 'Email: ';
                    //echo $_POST['emailRegister'];
                    //echo '</br>';
                    //echo 'Password: ';
                    //echo $_POST['passwordRegister'];
                    //echo '</br>';
                    //echo 'Password2: ';
                    //echo $_POST['passwordRegisterSec'];
                    //echo '</br>';
                } else {
                    echo "9 <i class='fas fa-bug'></i>  Register|||Error: " . $sql . "<br>" . $conn->error . "|||". date("h:i:sa") ." ". date("Y.m.d");
                    saveNotification($conn, '9', 'Register','0', 'Error: ' . $sql . '<br>' . $conn->error );
                }
    
            } else {
    
                echo "2 <i class='fas fa-unlock-alt'></i>  Register|||Passwords do not match!|||". date("h:i:sa") ." ". date("Y.m.d");
                saveNotification($conn, '2', 'Register','0', 'Passwords do not match!');
            }
    
        } else {
            echo "1 <i class='fas fa-exclamation-triangle'></i>  Register|||$emailRegister is not a valid email address|||". date("h:i:sa") ." ". date("Y.m.d");
            $sql = "SELECT user_id FROM users_info WHERE username=\"$username\"";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $_SESSION['userId'] =  $row["user_id"];
            };
            saveNotification($conn, '1', 'Register', '0', $emailRegister.' is not a valid email address!');
            
        }

    } else {
        echo "4 <i class='fas fa-user-circle'></i>  Register|||User already exists!|||". date("h:i:sa") ." ". date("Y.m.d");
        $sql = "SELECT user_id FROM users_info WHERE username=\"$username\"";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $_SESSION['userId'] =  $row["user_id"];
        };
        saveNotification($conn, '4', 'Register', $_SESSION['userId'], 'User already exists!');
        
    }

} else {
    echo "3 <i class='fas fa-question-circle'></i>  Register|||Please fill in the form right way.|||". date("h:i:sa") ." ". date("Y.m.d");
    saveNotification($conn, '3', 'Register', '0', 'Please fill in the form right way.');
    
}



$conn->close();


?>

