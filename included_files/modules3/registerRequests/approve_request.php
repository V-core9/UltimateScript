<?php 


include '../../handlers/login_status.php';
include '../../db_config.php';

include '../../handlers/save_notifications.php';

$user_ip = getRealIpAddr();


if (isset($_POST['request_user_id'])){

    $sql = "UPDATE users_info SET user_status='1' WHERE user_id='".$_POST['request_user_id']."'";

    if ($conn->query($sql) === TRUE) {
        echo '0 <i class="fas fa-check-circle"></i>  Register Request|||Approved succesfully!|||'. date("h:i:sa") .' '. date("Y.m.d");
        saveNotification($conn, '0', 'Register Request', $_SESSION['userId'], 'Approved succesfully '.$_POST['request_user_id'],$user_ip);
    } else {
        echo '9 <i class="fas fa-exclamation-triangle"></i>  Register Request|||Error updating record: '. $conn->error.'|||'. date("h:i:sa") .' '. date("Y.m.d");
        saveNotification($conn, '9', 'Register Request', $_SESSION['userId'], 'Error updating record: '. $conn->error,$user_ip);
    }
} else {
    echo '3 <i class="fas fa-exclamation-triangle"></i>  Register Request|||Something went wrong, no user id!|||'. date("h:i:sa") .' '. date("Y.m.d");
    saveNotification($conn, '3', 'Register Request', $_SESSION['userId'], 'Something went wrong, no user id!',$user_ip);
}


$conn->close();
?>