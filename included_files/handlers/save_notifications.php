<?php


function saveNotification($conn, $level, $cameFrom, $usesId, $message){
    $sql = "INSERT INTO all_notifications (notification_level, came_from, user_id, notification_info, notification_ip) VALUES ('".$level."','".$cameFrom."','".$usesId."','".$message."','".getRealIpAddr()."')";
                        
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function getRealIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


?>