<html>
<head>



<link rel="stylesheet" type="text/css" href="assets/style/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<?php 

session_start();
if (!isset($_SESSION['loggedUser'])) {
    $_SESSION['loggedUser'] = 'NULL';
}

include 'included_files/loading_screen.php';

?>


<div class="mainContainer" style="background:url(assets/images/background_<?php echo mt_rand(1, 8);?>.jpg); background-size: cover; background-position: center;";>
<?php

    if ($_SESSION['loggedUser'] == 'NULL') {
        include 'login.php';
    } else {
        include 'application.php';
    };

?>
</div>

<div class="notificationsContainer">

</div>




<?php 

    //include 'included_files/footer.php';

?>

</body>
</html>