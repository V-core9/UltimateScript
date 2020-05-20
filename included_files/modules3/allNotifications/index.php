
<?php

include '../../handlers/login_status.php';
include '../../db_config.php';


?>


<div class="pageHeading">

<h2>Notifications History [<?php echo $_SESSION['loggedUser']; ?>]</h2>
<div class="optionsHeader">
    
</div>


</div>
<div class="devider"></div>
<div class="row">
    <div class="filterNotifications">
        <div class="header">
            <h2>Filter Notifications</h2>        
        </div>
        <div class="filters"> 
            <div class="single">
                <h3><i class="fas fa-sort-amount-down"></i>  Level</h3>
                <select class="notification_level">
                    <option value="0" >Success</option>
                    <option value="1" >Not valueid</option>
                    <option value="2" >No match</option>
                    <option value="3" >Fill in error</option>
                    <option value="4" >Already exists</option>
                    <option value="9" >Error</option>
                    <option value="All" selected>All</option>
                </select>
            </div>
            <div class="single">
                <h3><i class="fas fa-terminal"></i>  Came From</h3>
                <select class="notification_came_from">
                    <option value="All" selected>All</option>
                <?php
                    $sql = "SELECT DISTINCT came_from FROM all_notifications";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                        echo '<option value="'.$row['came_from'].'">'.$row['came_from'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="single">
                <h3><i class="fas fa-user"></i>  User</h3>
                <select class="notif_user_id">
                    <option value="All" selected>All</option>
                    <?php
                    $sql = "SELECT user_id, username FROM users_info ORDER BY username";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                        echo '<option value="'.$row['user_id'].'">'.$row['username'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="single">
                <h3><i class="fas fa-clock"></i>  Time</h3>
                <input type="date" name="startDate" class="startDate">
                <input type="date" name="endDate" class="endDate">
            </div>
        </div>
        <button class="filterNotificationsButton"><i class="fas fa-filter"></i>  Filter</button>
    </div>
    <div class="notificationsList">
    </div>
</div>

<script src="included_files/modules/allNotifications/allNotifications.js"></script>

<link rel="stylesheet" href="included_files/modules/allNotifications/style.css" >