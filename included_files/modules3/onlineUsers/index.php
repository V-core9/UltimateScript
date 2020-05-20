
<?php


include '../../handlers/login_status.php';
include '../../db_config.php';

?>


<div class="pageHeading">

<h2>Online Users </h2>
<div class="optionsHeader">
    
</div>

<?php

echo '<div class="singleUser headingInfo" >';
echo '<p>Login ID:</p>';   
echo '<p>User ID:</p>';   
echo '<p>Username:</p>';   
echo '<p>Last update:</p>';  
echo '</div>';

$sql = "SELECT * FROM users_online";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    
    $dateFromDatabase = strtotime($row['last_report']);
    $oneMinuteAgo = strtotime("-30 second");

    if ($dateFromDatabase >= $oneMinuteAgo) {
        // less than 12 hours ago
    }
    else {
        $sql = "DELETE FROM users_online WHERE user_id='".$row['user_id']."'";

        if ($conn->query($sql) === TRUE) {
            //echo "Record deleted successfully";
        } else {
            //echo "Error deleting record: " . $conn->error;
        }

    }
}



$sql = "SELECT * FROM users_online";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo '<div class="singleUser" >';
    echo '<p>'.$row['online_id'].'</p>';   
    echo '<p>'.$row['user_id'].'</p>';   
    echo '<p>';  
    $sqlHelp = "SELECT username FROM users_info WHERE user_id= ".$row['user_id'];
    $resultHelp = $conn->query($sqlHelp);
    while ($rowHelp = $resultHelp->fetch_assoc()){
        echo $rowHelp['username'];
    } 

    echo '<p>'.$row['last_report'].'</p>';  
    echo '</div>';
}




?>


<style>
.pageHeading {
    width: 100%;
    float: left;
    clear: both;
}

.singleUser {
    width: calc(100% - 30px);
    float: left;
    clear: both;
    margin: 2.5px 15px;
    background: rgba(255, 255, 255, .15);
}

.singleUser p {
    display: inline-block;
    width: calc(25% - 40px);
    padding: 5px 20px;
    margin: 0px;
}

.singleUser.headingInfo {
    background: transparent;
}

</style>