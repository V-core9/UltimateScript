<?php
    include 'handlers/login_status.php';
?>
<div class="topHeader">
    <div class="logo">
        LOGO INFO
    </div>
    <div class="centerMenu">
        <ul>
            <li class="first">Start Me</li>
            <li class="first">Or second</li>
            <li class="first">This GOOD</li>
        </ul>
    </div>

    <div class="rightMenu">
                
            <div class="userInfo dropDown topDrop">
                <div class="heading"><i class="far fa-user"></i><?php echo $_SESSION['loggedUser']; ?></div>
                <div class="dropList">
                    <div class="dropEntry"><i class="fas fa-info"></i>Notifications</div>
                    <div class="dropEntry"><i class="far fa-envelope"></i>Messages</div>
                    <div class="dropEntry"><i class="far fa-user"></i>My Profile</div>
                    <div class="dropEntry logoutButton"><i class="fas fa-sign-out-alt"></i>Log Out</div>
                </div>
            </div>
    </div>
</div>






<div class="mainMenuSide">

    <div class="accordion-container">
  <div class="set">
    <p class="menu-heading">
      Dashboard 
      <i class="fa fa-plus"></i>
    </p>
    <div class="content">
      <ul>
        <li class="dashboardPage" onclick="openDashboardPage()"><i class="fa fa-cog"></i>Start Page</li>
        <li class="cartPage"><i class="fa fa-question"></i>Cart</li>
      <ul>
    </div>
  </div>
  <div class="set">
    <p class="menu-heading">
      Sales 
      <i class="fa fa-plus"></i>
    </p>
    <div class="content">
      <ul>
        <li class="usersSettings"><i class="fa fa-cog"></i>Orders</li>
        <li class="registrationRequests"><i class="fa fa-question"></i>Returns</li>
        <li class="registrationRequests"><i class="fa fa-users"></i>Vouchers</li>
      <ul>
    </div>
  </div>
  <div class="set">
    <p class="menu-heading">
      Products 
      <i class="fa fa-plus"></i>
    </p>
    <div class="content">
      <ul>
        <li class="usersSettings"><i class="fa fa-cog"></i>Inventory</li>
        <li class="registrationRequests"><i class="fa fa-question"></i>All Products</li>
        <li class="registrationRequests"><i class="fa fa-users"></i>Categories</li>
        <li class="registrationRequests"><i class="fa fa-users"></i>Downloads</li>
        <li class="registrationRequests"><i class="fa fa-users"></i>Reviews</li>
        <li class="usersSettings"><i class="fa fa-cog"></i>Tags</li>
        <li class="usersSettings"><i class="fa fa-cog"></i>Manufacturers</li>
      <ul>
    </div>
  </div>
  <div class="set">
    <p class="menu-heading">
      Projects 
      <i class="fa fa-plus"></i>
    </p>
    <div class="content">
      <ul>
        <li class="usersSettings"><i class="fa fa-cog"></i>All Projects</li>
        <li class="registrationRequests"><i class="fa fa-question"></i>Sections</li>
        <li class="registrationRequests"><i class="fa fa-users"></i>Tasks</li>
        <li class="registrationRequests"><i class="fa fa-users"></i>Downloads</li>
      <ul>
    </div>
  </div>
  <div class="set">
    <p class="menu-heading">
      Comunications 
      <i class="fa fa-plus"></i>
    </p>
    <div class="content">
      <ul>
        <li class="registrationRequests" onclick="openMessagesPage()"><i class="fa fa-question"></i>Messages</li>
        <li class="registrationRequests"><i class="fa fa-users"></i>Contact Messages</li>
        <li class="registrationRequests"><i class="fa fa-users"></i>All Messages</li>
        <li class="usersSettings"><i class="fa fa-cog"></i>Settings</li>
      <ul>
    </div>
  </div>
  <div class="set">
    <p class="menu-heading">
      Users 
      <i class="fa fa-plus"></i> 
    </p>
    <div class="content">
      <ul>
        <li class="registrationRequests" onclick="openRegisterRequestPage()"><i class="fa fa-question"></i>Registration Requests</li>
        <li class="allUsersPage" onclick="openAllUsersPage()"><i class="fa fa-users"></i>All users</li>
        <li class="usersSettings"><i class="fa fa-user"></i>My Profile</li>
        <li class="usersSettings"><i class="fa fa-cog"></i>Settings</li>
      <ul>
    </div>
  </div>
  <div class="set">
    <p class="menu-heading">
      System 
      <i class="fa fa-plus"></i> 
    </p>
    <div class="content">
      <ul>
        <li class="locationsPage"><i class="fa fa-question"></i>Locations</li>
        <li class="taxSettingsPage"><i class="fa fa-question"></i>Tax Settings</li>
        <li class="loginSettingsPage"><i class="fa fa-users"></i>Login & Registration</li>
        <li class="appSettingsPage"><i class="fa fa-cog"></i>System Settings</li>
      <ul>
    </div>
  </div>
  <div class="set">
    <p class="menu-heading">
      Reports 
      <i class="fa fa-plus"></i> 
    </p>
    <div class="content">
      <ul>
        <li class="locationsPage"><i class="fa fa-question"></i>Reports</li>
        <li class="invocesPage"><i class="fa fa-users"></i>Invoices</li>
        <li class="taxSettingsPage" onclick="openOnelineUsersPage()"><i class="fa fa-question"></i>Who's online</li>
        <li class="loginSettingsPage"><i class="fa fa-users"></i>Statistics</li>
        <li class="allNotificationsPage" onclick="openAllNotificationsPage()"><i class="fa fa-users"></i>All Notifications</li>
      <ul>
    </div>
  </div>
</div>

<div class="serverStatus">
<?php
 for ($i = 1; $i <= 3; $i++) {
  $stresTest = str_repeat("159as591das915asd", 9999999);
  $stresTest2 = str_repeat("159as591das915asd", 9999999);
  $stresTest = round(((memory_get_usage()/1024)/1024),1);
}

?>
<p><span class="description">In Use:</span> <span class="result"><?php echo round(((memory_get_usage()/1024)/1024),1); ?>MB</span></p>
<p><span class="description">Peak usage: </span> <span class="result"><?php echo round(((memory_get_peak_usage()/1024)/1024),1); ?>MB</span></p>
<p><span class="description">Stress string lenght: </span> <span class="result"><?php echo $stresTest; ?>chars</span></p>

</div>


</div>






























<style>

.topHeader {
    width: 100%;
    height: 50px;
    background: rgba(255, 255, 255, 0.25);
    z-index: 100;
    position: relative;
}

.topHeader .logo {
    width: 250px;
    height: 50px;
    background: rgba(0, 0, 0, 0.15);
    float: left;
}

.topHeader .centerMenu {
    width: 500px;
    float: left;
    height: 50px;
}

.topHeader div.centerMenu > ul li {
    display: inline-block;
    height: 50px;
    line-height: 50px;
    padding: 0px 10px;
}

.topHeader div.centerMenu > ul {
    padding: 0px;
    margin: 0px;
}

.topHeader div.centerMenu > ul li:hover {
    background: white;
}

.topHeader .rightMenu {max-width: 250px;width: 250px;display: block;height: 50px;background: rgba(0, 0, 0, 0.15);float: right;}




.topHeader .languagepicker {
	
    background-color: rgba(0, 0, 0, 0.75);
    display: inline-block;
    padding: 0;
    height: 50px;
    overflow: hidden;
    transition: all .3s ease;
    margin: 0;
    vertical-align: top;
    float: left;
    border: 1px solid transparent;
}

.topHeader .languagepicker.show {
    border: 1px solid #007eff;
}

.topHeader .languagepicker a{
	color: white;
	text-decoration: none;
}

.topHeader .languagepicker li {
    display: block;
    padding: 0px 20px;
    line-height: 50px;
    /* border-top: 1px solid #EEE; */
    height: 0px;
    display: block;
    overflow: hidden;
}

.topHeader .languagepicker li:hover{
	background-color: rgba(255,255,255,0.1);
}

.topHeader .languagepicker a.active li {
    border: none;
    background: rgba(255, 255, 255, 0.15);
    color: white;
    height: auto;
}

.topHeader .languagepicker.show a li {
    height: auto;

}

.topHeader .languagepicker li img {
	margin-right: 5px;
}

.topHeader .large.show {
	/* 
	don't forget the 1px border!
	The first language is 40px heigh, 
	the others are 41px
	*/
	height: 305px;
}
















.mainMenuSide {
    width: 250px;
    height: calc(100% - 90px);
    display: block;
    position: fixed;
    top: 50px;
    left: 0px;
    background: rgba(16, 16, 16, 0.5);
    z-index: 2000;
}
















.accordion-container{
  position: relative;
  max-width: 500px;
  height: auto;
  margin: 10px auto;
}
.accordion-container > h2{
  text-align: center;
  color: #fff;
  padding-bottom: 5px;
  margin-bottom: 20px;
  padding-bottom: 15px;
  border-bottom: 1px solid #ddd;
}
.set{
    position: relative;
    height: auto;
    float: left;
    display: block;
    width: 100%;
}
.set > .menu-heading{
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    color: white;
    font-weight: 600;
    border-bottom: 1px solid #ddd0;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    transition: all 0.2s linear;
    float: left;
    width: calc(100% - 30px);
    margin: 0;
}
.set > .menu-heading i{
  float: right;
  margin-top: 2px;
}
.set > .menu-heading.active{
  background-color:#3399cc;
  color: #fff;
}
.set > .menu-heading:hover {
    background: rgba(255, 255, 255, .15);
}
.mainMenuSide .content{
    background-color: rgba(255, 255, 255, .15);
    border-bottom: 1px solid #fff;
    display: none;
    float: left;
    width: 100%;
}
.mainMenuSide .content p{
    padding: 10px 15px;
    margin: 0;
    color: white;
}
</style>