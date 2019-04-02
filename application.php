<?php 

include 'included_files/header.php';

?>

<div class="contentContainerApp">
 <?php
    include 'included_files/modules/users/index.php';
 ?>
</div>


<?php 

include 'included_files/footer.php';

?>

<script src="assets/javaScript/jquery-3.3.1.js" ></script>
<script src="assets/javaScript/app.js" async></script>



<?php 
    if (!empty($_SESSION['colorScheme'])){

        echo '<link rel="stylesheet" id="myStyle" type="text/css" href="assets/style/main_'.$_SESSION['colorScheme'].'.css">';

    } else {
        echo '<link rel="stylesheet" id="myStyle" type="text/css" href="assets/style/main_Dark.css">';

    }

?>