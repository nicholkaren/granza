<?php
include('templates/storefront_tpl/header.php');
?>

<link type="text/css" rel="stylesheet" href="css/storefront/login.css">


<div class="main_wrapper">
    <div class="login">
        
        <!-- Inputfält logga in -->
        <h2 class="login_title">
            HEJ, <?php echo $pagecontent->h2 ?>!
        </h2>
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
    </div>

    <div class="create_account">
        <!--INPUTFÄLT LOGGA IN-->
        <img class="create_canvas" src="img/inspo/tulipan_800x800.jpg">

        <div class="on_top">
            <h2 class="create_title"> Bli medlem </h2>
            <form class="create_account" action="?action=create_user" method="post" autocomplete="off">


                <!-- LOGGA IN-KNAPP-->
                <button type="submit" id="send" name="submit_button">SKAPA KONTO</button>
                <br>
            </form>
        </div>
    </div>
</div>