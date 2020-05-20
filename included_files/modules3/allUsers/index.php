
<?php

include '../../handlers/login_status.php';
include '../../db_config.php';


?>


<div class="pageHeading">

<h2>All users</h2>
<div class="optionsHeader">
    
</div>


</div>
<div class="devider"></div>
<div class="row">
    <div class="filterNotifications">
        <div class="header">
            <h2>Filter users</h2>        
        </div>
        <div class="filters"> 
            <div class="single">
                <h3><i class="fas fa-sort-amount-down"></i>  Level</h3>
                <select class="notification_level">
                    <option value="All" selected>All</option>
                </select>
            </div>
            <div class="single">
                <h3><i class="fas fa-terminal"></i>  Came From</h3>
                <select class="notification_came_from">
                    <option value="All" selected>All</option>
                </select>
            </div>
            <div class="single">
                <h3><i class="fas fa-user"></i>  User</h3>
                <select class="notif_user_id">
                    <option value="All" selected>All</option>
                    
                </select>
            </div>
            <div class="single">
                
            </div>
        </div>
        <button class="filterUsersButton"><i class="fas fa-filter"></i>  Filter</button>
    </div>
    <div class="allUsersList">
    </div>
</div>

<script src="included_files/modules/allUsers/allUsers.js"></script>

<link rel="stylesheet" href="included_files/modules/allUsers/style.css" >