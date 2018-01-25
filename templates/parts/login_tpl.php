<?php
include('templates/storefront_tpl/header.php');
?>

<link type="text/css" rel="stylesheet" href="css/storefront/login.css">


<div class="main_wrapper">
    <div class="login">
        
        <!-- Inputfält logga in -->
        <h2 class="login_title">
            <?php echo $pagecontent->h2 ?>
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


            <div class="login_wrapper">

            </div>
        </form>
    </div>

    <div class="create_account">
        <!--INPUTFÄLT LOGGA IN-->
        <h2 class="create_title"> Bli medlem </h2>
        <form class="create_account" action="?action=create_user" method="post" autocomplete="off">


            <!-- LOGGA IN-KNAPP-->
            <button type="submit" id="send" name="submit_button">SKAPA KONTO</button>
            <br>
        </form>
    </div>
</div>

<?php
include('templates/storefront_tpl/footer.php');
?>
