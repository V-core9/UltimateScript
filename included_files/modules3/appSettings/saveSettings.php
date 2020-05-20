<?php

    
include '../../db_config.php';

$colorScheme = 'Dark';
$backgroundType = 1;
$languageSetting = 'en';



session_start();
if (!empty($_POST['colorScheme'])){
    $colorScheme = $_POST['colorScheme'];
};

if (!empty($_POST['backgroundType'])){
    $backgroundType = $_POST['backgroundType'];
};

if (!empty($_POST['languageSetting'])){
    $languageSetting = $_POST['languageSetting'];
};

   

    $sql = "UPDATE user_settings SET color_scheme = '".$colorScheme."', background_type =  '".$backgroundType."', user_language = '".$languageSetting."' WHERE user_id = '".$_SESSION['userId']."'";
        
    
                if ($conn->query($sql) === TRUE) {
                    echo "0 <i class='fas fa-check-circle'></i>  AppSettings|||Save successful|||". date("h:i:sa") ." ". date("Y.m.d");
                    $_SESSION['colorScheme'] = $colorScheme;
                    $_SESSION['backgroundType'] = $backgroundType;
                    $_SESSION['languageSetting'] = $languageSetting;
                } else {
                    echo "9 <i class='fas fa-bug'></i>  AppSettings|||Error: " . $sql . "<br>" . $conn->error . "|||". date("h:i:sa") ." ". date("Y.m.d");
                }


$conn->close();





?>