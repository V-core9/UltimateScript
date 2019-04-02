<?php 

include 'included_files/handlers/login_status.php';

?>

<div class="container loginPage" style="background: rgba(0, 0, 0, 0.75);">

	<div id="loginForm" class="tab-content current">
		<div class="heading">
			<h2>Login</h2>
		</div>
		<div class="inputContainer">
			<div class="inputRow">
				<label for="rememberMe">Username</label>
  				<input type="text" name="usernameLogin" id="usernameLogin" autocomplete=off>
			</div>
			<div class="inputRow">
				<label for="rememberMe">Password</label>
  				<input type="password" name="passwordLogin" id="passwordLogin" autocomplete=off>
			</div>
			<div class="inputRow">
				<label for="rememberMe">Remember Me</label>
  				<input type="checkbox" name="rememberLogin" id="rememberLogin" value="rememberLogin">
			</div>
			<div class="inputRow">
				<button class="submit" id="loginButton"><i class="fas fa-sign-in-alt"></i>Login</button>
			</div>
		</div>
	</div>
	<div id="registerForm" class="tab-content">
		<div class="heading">
			<h2>Register</h2>
		</div>
		<div class="inputContainer">
			<div class="inputRow">
				<label for="emailRegister">Email</label>
  				<input type="text" name="emailRegister" id="emailRegister" autocomplete="off">
			</div>
			<div class="inputRow">
				<label for="usernameRegister">Username</label>
  				<input type="text" name="usernameRegister" id="usernameRegister" autocomplete="off">
			</div>
			<div class="inputRow">
				<label for="passwordRegister">Password</label>
  				<input type="password" name="passwordRegister" id="passwordRegister" autocomplete="off">
			</div>
			<div class="inputRow">
				<label for="passwordRegisterSec">Password</label>
  				<input type="password" name="passwordRegisterSec" id="passwordRegisterSec" autocomplete="off">
			</div>
			<div class="inputRow">
				<button class="submit" id="registerButton"><i class="fas fa-sign-in-alt"></i>Register</button>
			</div>
		</div>
	
	</div>


	<ul class="tabs">
		<li class="tab-link current" data-tab="loginForm">Login</li>
		<li class="middleText">OR</li>
		<li class="tab-link" data-tab="registerForm">Register</li>
	</ul>
</div>

<script src="assets/javaScript/jquery-3.3.1.js"></script>
<script src="assets/javaScript/login_page.js"></script>
<link rel="stylesheet" type="text/css" href="assets/style/login.css">



<?php 
    if (!empty($_SESSION['colorScheme'])){

        echo '<link rel="stylesheet" id="myStyle" type="text/css" href="assets/style/main_'.$_SESSION['colorScheme'].'.css">';

    } else {
        echo '<link rel="stylesheet" id="myStyle" type="text/css" href="assets/style/main_Dark.css">';

    }

?>