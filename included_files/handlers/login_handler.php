<?php

include '../db_config.php';


if (!empty($_POST['usernameLogin']) AND !empty($_POST['passwordLogin'])) {

    $username = $_POST['usernameLogin'];
    $password = $_POST['passwordLogin'];
    $sql = "SELECT username, user_password FROM users_info WHERE username=\"$username\" AND user_password=\"$password\"";
    $result = $conn->query($sql);
    $exists = 0;
    $exists = $result->num_rows;
    if ($exists > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '0 <i class="fas fa-check-circle"></i>  Login|||Sucessful, info match.';
            echo '</br>';
            echo "username: " . $row["username"]. " - password: " . $row["user_password"]. "<br>";
            //echo '</br>';
            //echo 'Token: ';
            //$token = bin2hex(openssl_random_pseudo_bytes(64));
            //echo $token;
            session_start();
            $_SESSION['loggedUser'] = $row["username"];
            //$_SESSION['loggedUserToken'] = $token;
        }
    } else {
        echo '3 <i class="fas fa-exclamation-triangle"></i>  Login|||Wrong information entered!';
    }

} else {
  echo '4 <i class="fas fa-question-circle"></i>  Login|||Please fill in the whole form.';
};





$conn->close();

?>

