
<?php

    include '../../handlers/login_status.php';


?>


<div class="pageHeading">

    <h2>Application Settings [<?php echo $_SESSION['loggedUser']; ?>]</h2>
    <div class="optionsHeader">
        <button class="saveUserSettings"><i class="far fa-save"></i>Save</button>
        <button class="cancelSave"><i class="fas fa-times"></i>Cancel</button>
    
    </div>


</div>
<div class="devider"></div>
<div class="row">
    <div class="singleSetting">
        <div class="singleSettingInfo">
            <div class="singleHeading">
                <i class="fas fa-palette"></i>
                <h3>Color Scheme</h3>                
            </div>
            <div class="singleInfoDetails">
                <p>Here you can change color scheme settings of the app.</p>
            </div>
        </div>
        <div class="singleSettingOptions">
            <select class="colorScheme">
                <option value="Dark" <?php if ($_SESSION['colorScheme'] == 'Dark'){echo 'selected';}; ?>>Dark</option>
                <option value="Light" <?php if ($_SESSION['colorScheme'] == 'Light'){echo 'selected';}; ?>>Light</option>
            </select>
        </div>
    </div>
    <div class="singleSetting">
        <div class="singleSettingInfo">
            <div class="singleHeading">
                <i class="fas fa-swatchbook"></i>
                <h3>Background Type</h3>                
            </div>
            <div class="singleInfoDetails">
                <p>Choose a type of background that you like the most.</p>
            </div>
        </div>
        <div class="singleSettingOptions">
            <select class="backgroundType">
                <option value="1" <?php if ($_SESSION['backgroundType'] == '1'){echo 'selected';}; ?>>Images</option>
                <option value="2" <?php if ($_SESSION['backgroundType'] == '2'){echo 'selected';}; ?>>Stripes</option>
                <option value="3" <?php if ($_SESSION['backgroundType'] == '3'){echo 'selected';}; ?>>Particles</option>
            </select>
        </div>
    </div>
    <div class="singleSetting">
        <div class="singleSettingInfo">
            <div class="singleHeading">
                <i class="fas fa-language"></i>
                <h3>Langugage Settings</h3>                
            </div>
            <div class="singleInfoDetails">
                <p>Choose a language that you prefer.</p>
            </div>
        </div>
        <div class="singleSettingOptions">
            <select class="languageSettings">
                <option value="en">English</option>
                <option value="ru">Russian</option>
                <option value="de">German</option>
                <option value="fr">French</option>
            </select>
        </div>
    </div>
</div>

<script src="included_files/modules/appSettings/appSettings.js"></script>