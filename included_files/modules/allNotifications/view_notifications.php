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



echo '<div class="singleNotification headingInfo" >';
echo '<p>ID:</p>';   
echo '<p>Level:</p>';   
echo '<p>Came from:</p>';    
echo '<p>Username:</p>';   
echo '<p>Info:</p>';   
echo '<p>Timestamp:</p>';   
echo '<p>Dismissed:</p>';   
echo '<p>User ip:</p>';  
echo '</div>';
$sql = "SELECT * FROM all_notifications";

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
    echo '<div class="singleNotification level'.$row['notification_level'].'" >';
    echo '<p>'.$row['notification_id'].'</p>';   
    echo '<p>'.$row['notification_level'].'</p>';   
    echo '<p>'.$row['came_from'].'</p>';   


    if ($row['user_id'] == 0){  
        echo '<p>No user ID</p>';   
    }  else {
        $sqlHelp = "SELECT username FROM users_info WHERE user_id= ".$row['user_id'];
        $resultHelp = $conn->query($sqlHelp);
        while ($rowHelp = $resultHelp->fetch_assoc()){
            echo '<p>'.$rowHelp['username'].'</p>';
        }
    }


    echo '<p>'.$row['notification_info'].'</p>';    
    echo '<p>'.$row['notification_timestamp'].'</p>';   
    echo '<p>'.$row['notification_dismiss'].'</p>';   
    echo '<p>'.$row['notification_ip'].'</p>';  
    echo '</div>';
}

?>