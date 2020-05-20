<?php

    include 'login_status.php';



    function addOnlineUser($conn,$user_id){
        $timestamp = date('Y-m-d G:i:s');
        $sql = "INSERT INTO users_online ( user_id, last_report) VALUES ( '".$user_id."', '".$timestamp."')";
        if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    
    function updateOnlineUser($conn,$user_id){
        $exists = '0';
        $sql = "SELECT COUNT(*) as total FROM users_online WHERE user_id='".$user_id."'";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();

        $timestamp = date('Y-m-d G:i:s');
        
        if ($data['total'] > 0){
            $sql = "UPDATE users_online SET last_report=now() WHERE user_id='".$user_id."'";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        } else {
            $sql = "INSERT INTO users_online ( user_id, last_report) VALUES ( '".$user_id."', '".$timestamp."')";
            if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully";
            } else {
                //echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }

    }


    
    function removeOnlineUser($conn,$user_id){
        
        $sql = "DELETE FROM users_online WHERE user_id='".$user_id."'";
        if ($conn->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }



?>