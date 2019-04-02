<?php

include '../db_config.php';
include 'save_notifications.php';
$loadSettings = 0;
$_SESSION['userId'] = 'NULL';
if (!empty($_POST['usernameLogin']) AND !empty($_POST['passwordLogin'])) {

    $username = $_POST['usernameLogin'];
    $password = $_POST['passwordLogin'];
    $userId = 0;
    $sql = "SELECT user_id, username, user_password, user_status FROM users_info WHERE username=\"$username\" AND user_password=\"$password\"";
    $result = $conn->query($sql);
    $exists = 0;
    $exists = $result->num_rows;
    if ($exists > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            if ($row['user_status'] > 0){
                echo '0 <i class="fas fa-check-circle"></i>  Login|||Sucessful, info match.';
                echo '</br>';
                echo "username: " . $row["username"]. " - password: " . $row["user_password"]. "<br>";
                echo '|||'. date("h:i:sa") .' '. date("Y.m.d");
                //echo 'Token: ';
                //$token = bin2hex(openssl_random_pseudo_bytes(64));
                //echo $token;
                session_start();
                $_SESSION['loggedUser'] = $row["username"];
                $_SESSION['userId'] = $row["user_id"];
                $userId = $row["user_id"];
                //$_SESSION['loggedUserToken'] = $token;
                $loadSettings = 1;
                
                saveNotification($conn, '0', 'Login', $_SESSION['userId'] , 'Sucessful, info match.');

            } else {
                echo '2 <i class="fas fa-exclamation-triangle"></i>  Login|||Account not active yet.|||'. date("h:i:sa") .' '. date("Y.m.d");
                saveNotification($conn, '2', 'Login', $row['user_id'] , 'Account not active yet.');

            }
        }
    } else {
        echo '3 <i class="fas fa-exclamation-triangle"></i>  Login|||Wrong information entered!|||'. date("h:i:sa") .' '. date("Y.m.d");

        saveNotification($conn, '3', 'Login', $_SESSION['userId'] , 'Wrong information entered!');
    }

} else {
  echo '4 <i class="fas fa-question-circle"></i>  Login|||Please fill in the whole form.|||'. date("h:i:sa") .' '. date("Y.m.d");
  
  saveNotification($conn, '4', 'Login', '0' , 'Please fill in the whole form.');
};


if ($loadSettings == 1) {
    $sql = "SELECT color_scheme, background_type, user_language FROM user_settings WHERE user_id=\"$userId\"";
    $result = $conn->query($sql);
    $existsSettings = $result->num_rows;
    if ($existsSettings == 0) {
        $sql = "INSERT INTO user_settings (user_id, color_scheme, background_type, user_language) VALUES (\"$userId\", 'Dark', 'Stripes', 'en')";
                    
        if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";
            $existsSettings = 1;
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // output data of each row
        
    } 

    if ($existsSettings == 1){
        $sql = "SELECT color_scheme, background_type, user_language FROM user_settings WHERE user_id=\"$userId\"";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $_SESSION['colorScheme'] = $row["color_scheme"];
            $_SESSION['backgroundType'] = $row["background_type"];
            $_SESSION['userLanguage'] = $row["user_language"];
            echo $_SESSION['colorScheme'];
            echo $_SESSION['backgroundType'];
            echo $_SESSION['userLanguage'];
        
        }

    }


}






$conn->close();

?>

