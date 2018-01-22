<?php //Edit medlem från admins sida.
require_once('templates/admin_header.php');?>
<link type="text/css" rel="stylesheet" href="css/admin_edit_user.css">


<!-- Bakgrundsbild - marmor-->
<img class="background" src="img/products/big/marble-wallpaper-white.jpg">

<!--Vit cancas-->
<div align="center">
    <div id="edit_user" class="edit_cat">
        <!--Sid titel-->
        <h2 class="edit_user_title">
            <?php echo $pagecontent->title;?>
        </h2>

        <?php foreach ($errors as $error) {
         printf("<h3>%s</h3>", $error);
        } 
    ?>

        <form class="edit_user_form" action="?action=update_user&uid=<?php $userToChange; ?>" method="post" name="edit-user">
            <input class="edit_input" type="hidden" name="person_id" value="<?php echo $userToChange; ?>">
            <div class="left">
                <label for="fname">FÖRNAMN</label>
                <input class="edit_input" type="text" name="fname" placeholder="Förnamn" value="<?php echo $result[" fname "]; ?>">
                <label for="lname">EFTERNAMN</label>
                <input class="edit_input" type="text" name="lname" placeholder="Efternamn" value="<?php echo $result[" lname "]; ?>">
                <label for="adress1">ADRESS 1</label>
                <input class="edit_input" type="text" name="adress1" placeholder="Adress1" value="<?php echo $result[" street1 "]; ?>">
                <label for="adress2">ADRESS 2</label>
                <input class="edit_input" type="text" name="adress2" placeholder="Adress2" value="<?php echo $result[" street2 "]; ?>">
                <label for="zipcode">POSTNUMMER</label>
                <input class="edit_input" type="text" name="zipcode" placeholder="Postnummer" value="<?php echo $result[" zip "]; ?>">
            </div>
            <div class="right">
                <label for="city">STAD</label>
                <input class="edit_input" type="text" name="city" placeholder="Stad" value="<?php echo $result[" city "]; ?>">
                <label for="telefon">TELEFON</label>
                <input class="edit_input" type="text" name="telefon" placeholder="Telefon" value="<?php echo $result[" phone "]; ?>">
                <label for="email">EMAIL</label>
                <input class="edit_input" type="text" name="email" placeholder="Email" value="<?php echo $result[" email "]; ?>">
                <label for="level">BEHÖRIGHET</label>
                <input class="edit_input" type="text" name="level" placeholder="Level" value="<?php echo $result[" level "]; ?>">

                <!--CHECKBOX OCH RUBRIK FÖR NEWSLETTER-->

                <label class="newletter_label" for="newletter">JAG VILL GÄRNA HA NYHETSBREV</label>
                <input id="edit_user_checkbox" type="checkbox" checked name="newletter" value="1" value="<?php echo $result[" fname "]; ?>">
                <div class="button_wrapper">
                    <button type="submit" class="btn_save" id="edit_button" name="edit_button" action="">UPPDATERA</button>
                    <button type="submit" class="btn_save" id="delete_button" name="delete_button" value="delete_button" action="">RADERA</button>
                    <a>
                </div>
        </form>
        </div>
    </div>
</div>
