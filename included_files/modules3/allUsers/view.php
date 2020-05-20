<?php

include '../../handlers/login_status.php';
include '../../db_config.php';
$notif_level = 'All';
$came_from = 'All';
$notification_user_id = 'All';
$start_date = 'All';
$end_date = 'All';

if (isset($_POST['notif_level']) && ($_POST['notif_level'] !== 'All')){
    $notif_level = $_POST['notif_level'];
}

if (isset($_POST['came_from']) && ($_POST['came_from'] !== 'All')){
    $came_from = $_POST['came_from'];
    
};

if (isset($_POST['user_id']) && ($_POST['user_id'] !== 'All')){
    $notification_user_id = $_POST['user_id'];
    
};

if (isset($_POST['start_date']) && ($_POST['start_date'] !== '')){
    $start_date = $_POST['start_date'];
    
};

if (isset($_POST['end_date']) && ($_POST['end_date'] !== '')){
    $end_date = $_POST['end_date'];
    
};



echo '<div class="singleUser headingInfo" >';
echo '<p>ID:</p>';   
echo '<p>Username:</p>';   
echo '<p>Email:</p>';    
echo '<p>Status:</p>';   
echo '<p>Location:</p>';   
echo '</div>';
$sql = "SELECT * FROM users_info";

if (($notif_level !== 'All') || ($came_from !== 'All') || ($notification_user_id !== 'All') || ($start_date !== 'All') || ($end_date !== 'All')){
    $sql = $sql." WHERE";
    $helper = 0;
    
    
    if ($notif_level !== 'All'){
        $sql = $sql." notification_level='".$notif_level."' ";
        $helper = 1;
    }
    
    if ($came_from !== 'All'){
        if ($helper == 1){
            $sql = $sql."AND";
        }
        $sql = $sql." came_from='".$came_from."' ";
        $helper = 1;
        
    }
    
    if ($notification_user_id !== 'All'){
        if ($helper == 1){
            $sql = $sql."AND";
        }
        $sql = $sql." user_id='".$notification_user_id."' ";
        $helper = 1;
    }
    
    if ($start_date !== 'All'){
        if ($helper == 1){
            $sql = $sql."AND";
        }
        $sql = $sql." notification_timestamp>='".$start_date." 00:00:00' ";
        $helper = 1;
    }
    
    if ($end_date !== 'All'){
        if ($helper == 1){
            $sql = $sql."AND";
        }
        $sql = $sql." notification_timestamp<='".$end_date." 23:59:59' ";
        $helper = 1;
    }
}

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo '<div class="singleUser" >';
    echo '<p>'.$row['user_id'].'</p>';   
    echo '<p>'.$row['username'].'</p>';   
    echo '<p>'.$row['user_email'].'</p>';  
    if ($row['user_status'] == 0){
        echo '<p><i class="fas fa-hourglass-half"></i> Not Activated</p>'; 
    } else if ($row['user_status'] == 1){
        echo '<p><i class="far fa-check-circle"></i>  Active</p>'; 
    } else {
        echo '<p><i class="fas fa-times-circle"></i>  Disabled</p>'; 
    }
    echo '<p>'.$row['user_status'].'</p>';  
    echo '<p class="button " onclick="editUserButton('.$row['user_id'].')"><i class="fas fa-hourglass-half"></i>  Edit User</p>';  
    echo '</div>';
}

?>