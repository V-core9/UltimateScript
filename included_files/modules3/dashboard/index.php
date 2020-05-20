<?php


include '../../handlers/login_status.php';
include '../../db_config.php';

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

$sql = "SELECT COUNT(*) as total FROM users_online";
$result = $conn->query($sql);
$online_users = $result->fetch_assoc();



$sql = "SELECT COUNT(*) as total FROM all_notifications WHERE notification_dismiss = '1'";
$result = $conn->query($sql);
$all_notifications = $result->fetch_assoc();


?>



<div class="pageHeading">

<h2><i class="fas fa-tachometer-alt"></i>  Dashboard</h2>
<p>Here you can check latest status of system.
<div class="optionsHeader dashboard">
    <div class="topInfoBlock">  
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <div class="info">
            <h3><?php echo $online_users['total']; ?> Users Online</h3>
        </div>
        <p class="moreInfo">More info >></p>

    </div>
    <div class="topInfoBlock">  
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <div class="info">
            <h3><?php echo $online_users['total']; ?> Users Online</h3>
        </div>
        <p class="moreInfo">More info >></p>

    </div>
    <div class="topInfoBlock">  
        <div class="icon">
            <i class="far fa-id-card"></i>
        </div>
        <div class="info">
            <h3><?php echo $all_notifications['total']; ?> New Notifications</h3>
        </div>
        <p class="moreInfo"  onclick="openAllNotificationsPage()">More info >></p>

    </div>
    <div class="topInfoBlock">  
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <div class="info">
            <h3><?php echo $online_users['total']; ?> Users Online</h3>
        </div>
        <p class="moreInfo"  onclick="openOnelineUsersPage()">More info >></p>

    </div>
</div>


</div>
<div class="devider"></div>



<div class="row">
    <div class="latestActivity">
        <div class="header">
            <h3><i class="far fa-list-alt"></i>  Latest Activity</h3>
        </div>
        <div class="listActivity">
        <?php
            
            $sql = "SELECT * FROM all_notifications";

            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                $dateFromDatabase = strtotime($row['notification_timestamp']);
                $oneDayAgo = strtotime("-24 hour");
                if ($dateFromDatabase >= $oneDayAgo) {
                    echo '<div class="singleNotification level'.$row['notification_level'].'" >';
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
                    echo '<p>'.$row['notification_ip'].'</p>';  
                    echo '</div>';
                }
                else {
            
                }
                
            }

        
            if ($dateFromDatabase >= $oneDayAgo) {
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


        ?>

        </div>
        
        <div class="quickSearch">
         <i class="fas fa-search"></i>  Quick Search: 
            <input type="text" class="inputQuickSearchActivity">
        </div>
    </div>

</div>























<style>
.optionsHeader {
    width: 100%;
    float: left;
    clear: both;
    display: block;
}

.optionsHeader .topInfoBlock {
    width: calc(25% - 50px);
    margin: 10px 10px;
    float: left;
    padding: 10px 15px;
    display: inline-block;
    background: rgba(255, 255, 255, .15);
}

.optionsHeader .topInfoBlock .icon {
    float: left;
    display: block;
    width: 25%;
    font-size: 50px;
    color: gray;
    border: 3px solid;
    border-radius: 50%;
    width: auto;
    padding: 10px 5px;
}

.optionsHeader .topInfoBlock .info {
    float: left;
    width: calc(75% - 20px);
    text-align: left;
    display: block;
    padding: 0px 10px;
}


.optionsHeader .topInfoBlock p.moreInfo {
    float: right;
    clear: both;
    margin: 0px;
    color: rgb(59, 149, 255);
    padding: 0px 10px;
    margin-top: -20px;
    width: auto;
}

.optionsHeader .topInfoBlock p.moreInfo:hover {
    background: rgba(255, 255, 255, .2);
    cursor: pointer;
}

.optionsHeader .topInfoBlock .info h3 {
    margin: 0px;
    color: #c3c3c3;
}

.optionsHeader .topInfoBlock:hover .info h3{
    
    color: white;
}


.optionsHeader.dashboard {
    width: 100%;
    float: left;
    clear: both;
}

.optionsHeader .topInfoBlock {
    width: calc(25% - 50px);
    margin: 10px 10px;
    background: rgba(255, 255, 255, .15);
    float: left;
    display: inline-block;
    padding: 10px 15px;
    border-bottom: 2px solid gray;
}

.pageHeading h2 {
    width: calc(100% - 40px);
    font-size: 30px;
    line-height: 20px;
    margin: 10px 0px 0px;
}

.pageHeading p {
    width: calc(100% - 40px);
    margin: 5px 20px 10px;
    float: left;
    clear: both;
}

.pageHeading h2 i {
    font-size: 40px;
    line-height: 40px;
    margin-bottom: -5px;
    color: rgb(59, 149, 255);
}


.optionsHeader .topInfoBlock:hover {
    transform: scale(1.005);
    background: rgba(255, 255, 255, .2);
    border-bottom: 2px solid rgb(59, 149, 255);
}

.optionsHeader .topInfoBlock:hover i {
    color: white;
    border-color: #f1f1f1;
}



.row {
    width: 100%;
}

.latestActivity {
    display: block;
    float: left;
    width: calc(50% - 30px);
    margin: 10px 15px;
    background: rgba(255, 255, 255, .15);
    border-left: 1px solid gray;
    border-right: 1px solid gray;
}
.listActivity .singleNotification {
    border-bottom: none;
}
.listActivity .singleNotification p {
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 240px;
    margin: 0px;
    padding: 2.5px 2.5px 2.5px 5px;
    border-right: 1px solid black;
    }


.level0{
    background: rgba(0,255,0,0.35)!important;
}

.level1{
    background: rgba(0,0,255,0.35)!important;
}

.level2{
    background: rgba(255,255,0,0.35)!important;
}

.level3{
    background: rgba(255,0,0,0.35)!important;
}

.level4{
    background: rgba(255,0,255,0.35)!important;
}

.level5{
    background: rgba(0,255,0,0.35)!important;
}

.level6{
    background: rgba(0,255,0,0.35)!important;
}

.level7{
    background: rgba(0,255,0,0.35)!important;
}

.level8{
    background: rgba(0,255,0,0.35)!important;
}

.level9{
    background: rgba(255,0,0,1)!important;
}


.listActivity {
    max-height: 450px;
    overflow: hidden;
    overflow-y: auto;
}

.latestActivity h3 {
    margin: 0px;
    padding: 10px 20px;
    background: rgba(236, 236, 236, 0.25);
}



.listActivity .singleNotification:hover {
    transform: scale(1.005);

}

.listActivity .singleNotification p:nth-child(1){
    width: 20%;
}

.listActivity .singleNotification p:nth-child(2){
    width: calc(15% - 12px);

}

.listActivity .singleNotification p:nth-child(3){
    width: calc(42.5% - 12px);

}

.listActivity .singleNotification p:nth-child(4){
    width: calc(17.5% - 12px);
}

.listActivity .singleNotification p:nth-child(5){
    width: calc(15% - 12px);

}



.listActivity .singleNotification.headingInfo {
    background: transparent;
    min-height: 0px;
}

.quickSearch {
    width: 100%;
    padding: 5px 20px;
    text-align: right;
    float: right;
    margin: 5px;
}

.quickSearch input {
    background: rgba(255, 255, 255, .15);
    border: none;
    border-bottom: 1px solid white;
    padding: 5px;
    font-size: 16px;
    color: white;
}

.quickSearch input:hover,.quickSearch input:focus {
    background: rgba(255, 255, 255, .25);
}

</style>


<script>
$(document).ready(function(){

    $('.inputQuickSearchActivity').change(function(){
        var input = $(this).val();

        $('.listActivity .singleNotification p').parent('.singleNotification').fadeOut();
        $('.listActivity .singleNotification p:contains('+input+')').parent('.singleNotification').fadeIn();

    })


})
</script>