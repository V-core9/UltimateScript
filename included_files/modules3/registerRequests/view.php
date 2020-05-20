
<?php

include '../../handlers/login_status.php';
include '../../db_config.php';
echo '<div class="singleRequest first">';
    echo '<p>User ID:</p>';   
    echo '<p>Username:</p>';   
    echo '<p>User Email:</p>';   
    echo '<p>Register time and date:</p>'; 
    echo '</div>';

$sql = "SELECT * FROM users_info WHERE user_status='0'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo '<div class="singleRequest">';
    echo '<p>'.$row['user_id'].'</p>';   
    echo '<p>'.$row['username'].'</p>';   
    echo '<p>'.$row['user_email'].'</p>';   
    echo '<p>'.$row['user_register_datetime'].'</p>'; 
    echo '<p class="button approveRegisterButton" onclick="approveRegisterRequest('.$row['user_id'].')" ><i class="far fa-check-circle"></i>  Approve</p>';   
    echo '</div>';
}



?>

