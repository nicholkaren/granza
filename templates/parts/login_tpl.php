<?php
include('templates/storefront_tpl/header.php');
?>

<link type="text/css" rel="stylesheet" href="css/storefront/login.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

<div class="main_wrapper">
    <div class="login"> 
        <!-- Inputfält logga in -->
        <h2 class="login_title">HEJ, <?php echo $pagecontent->h2 ?>! <i class="fas fa-angle-down"></i></h2>
            <form action="" method="post" autocomplete="off" name="login">
                <input class="login" type="text" name="email" placeholder="E-postadress">
                <br>
                <input class="login" id="passinput" type="password" name="input_password" placeholder="Lösenord">
                <br>
                <!-- FORM TOKEN-->
                <?php echo getTokenField(); ?>
                <!-- LOGGA IN-KNAPP-->
                <button type="submit" id="login">LOGGA IN</button>
            </form>
    <div class="on_top">
    <hr>
    <h2 class="create_title"> Inte medlem? <i class="fas fa-angle-down"></i></h2>
        <form class="create_account" action="?action=create_user" method="post" autocomplete="off">
            <!-- Logga-in knapp -->
            <button type="submit" id="send" name="submit_button">ANSÖK HÄR</button>
            <br>
        </form>
    </div>
    </div>
    <div class="create_account">
        <!-- Stor bild till höger -->
        <img class="create_canvas" src="img/inspo/tulipan_800x800.jpg">
    </div>
</div>