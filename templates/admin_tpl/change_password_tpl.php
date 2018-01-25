<?php
if ($person->isAdmin()) {
    require_once('templates/admin_tpl/admin_header.php');
}else{
    require_once('templates/storefront_tpl/header.php');
}
?>


    <link type="text/css" href="css/admin/change_password.css" rel="stylesheet">
    <!--BAKGRUNDBILD-->
    <img class="background" src="img/products/big/marble-wallpaper-white.jpg">
    <a href="?action=users" id="goback">
                <i class="fa fa-angle-left " style="font-size:14px; margin-right:4px; "></i>Tillbaka</a>
    <!--Vit div-->
    <div align="center">

        <div class="canvas">

            <!--BYT PASSWORD BÖRJAR HÄR-->
            <div class="change_password">
                <p class="change_password">
                    Ändra lösenord
                </p>
                <!-- om person är admin visas detta-->
                <?php if ($person->isAdmin()) { ?>

                <form method="post" action="?action=password" id="search_uid" name="change-pass-search">

                    <!--SÖKFUNKTION
                <p class="change_password"></p>-->

                    <input class="search_user" type="search" id="search" placeholder="SÖK ID" name="search_user">
                    <button class="icon" type="submit" id="search_user_button"><i class="fa fa-search"></i></button>

                    <p class="change_password">
                        Ange andvändar id
                    </p>
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
        <?php if (!$person->isAdmin()) {require_once('templates/storefront_tpl/footer.php');}?>
