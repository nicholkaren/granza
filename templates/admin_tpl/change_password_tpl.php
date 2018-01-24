<?php require_once('templates/storefront_tpl/header.php');?>


<link type="text/css" href="css/admin/change_password.css" rel="stylesheet">
<!--BAKGRUNDBILD-->
<img class="background" src="img/products/big/marble-wallpaper-white.jpg">
<!--Vit div-->
<div align="center">
    <div class="canvas">

        <!--BYT PASSWORD BÖRJAR HÄR-->
        <div class="change_password">
            <h2 class="change_password">
                <?php echo $pagecontent->title?>
            </h2>
            <!-- om person är admin visas detta-->
            <?php if ($person->isAdmin()) { ?>

            <form method="post" action="?action=password" id="search_uid" name="change-pass-search">

                <!--SÖKFUNKTION
                <p class="change_password"></p>-->
                <div class="container-4">
                    <input class="search_user" type="search" id="search" placeholder="SÖK ID" name="search_user">
                    <button class="icon" type="submit" id="search_user_button"><i class="fa fa-search"></i></button>
                </div>
                <h2>
                    <?php echo $pagecontent->h2?>
                </h2>
                <hr>
            </form>
            <?php } 


     if (!$person->isAdmin()) {
        $userToChange = $person->getId();
     }

     ?>
            <!--FORMULÄR FÖR BYTE AV PASSWORD-->
            <form class="change_password" method="post" action="?action=password&uid=<?php $userToChange;?>" name="change-pass">
                <input class="change_password" id="new_password" type="password" name="new_password" placeholder="Nytt lösenord">
                <br>
                <input class="change_password" id="confirm_password" type="password" name="confirm_password" placeholder="Bekräfta lösenord">
                <br>
                <!-- FORM TOKEN-->
                <?php echo getTokenField(); ?>

                <input type="hidden" name="search_user" value="<?php echo $userToChange;?>">
                <a class="change_password" href="#"><button type="submit" class="btn_save" name="save_password" id="save_button">SPARA</button></a>
                <br>
            </form>

        </div>
    </div>
    <?php require_once('templates/storefront_tpl/footer.php');?>
