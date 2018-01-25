<?php require_once('templates/storefront_tpl/header.php');
  //require('classes/Customer_class.php');
?>
<link type="text/css" rel="stylesheet" href="css/admin/customer_profile.css">
<!--INLOGGAD MEMBER-->
<!--BAKGRUNDBILD-->

<img class="background" src="img/products/big/marble-wallpaper-white.jpg">
<!--Vit div-->
<div align="center">
    <!--VÄLKOMMEN-->
    <h1 id="welcome-costumer">
        <?php echo "Välkommen ".$result['fname'];?>
    </h1>
    <!--::before element = profil_icon-->
    <div class="myprofile">

        <!--MINA UPPGIFTER-->

        <form action="?action=saveProfileChanges" method="post" class="myForm">
            <h3>Mina uppgifter</h3>
            <input type="text" placeholder="Förnamn" name="fname" value="<?php echo $result['fname'];?>">
            <input type="text" placeholder="Efternamn" name="lname" value="<?php echo $result['lname'];?>">
            <input type="text" placeholder="Adress" name="adress1" value="<?php echo $result['street1'];?>">
            <input type="text" placeholder="Adress" name="adress2" value="<?php echo $result['street2'];?>">
            <input type="text" placeholder="Postnummer" name="zipcode" value="<?php echo $result['zip'];?>">
            <input type="text" placeholder="Stad" name="city" value="<?php echo $result['city'];?>">
            <input type="text" placeholder="Telefon" name="tel" value="<?php echo $result['phone'];?>">
            <input type="text" placeholder="Email" name="email" value="<?php echo $result['email'];?>">
            <div class="btn">

                <button class="btn_save" type="submit">SPARA ÄNDRINGAR</button>


                <a href="?action=password"><button type="button" class="btn_save">ÄNDRA LÖSENORD</button></a>


                <a href="?action=logout"><button id="logut" type="button" class="btn_save">LOGGA UT</button></a>
                <!-- AV AKTIVERA KONTO <a href="?action=delete_profile&uid=<?php //$accountToDelete;?>"><button type="button" class="btn_save">RADERA KONTO</button></a>-->
            </div>
        </form>



        <!--MINA SENASTE ORDRAR-->
        <table class="listwrapper">
            <h3>Mina senaste ordrar</h3>

            <?php if(!empty($pagecontent->orders)) :?>
            <thead>
                <tr>
                    <th>Datum</th>
                    <th>OrderNr</th>
                    <th>Summa</th>
                    <th>Status</th>

                </tr>
            </thead>
            <?php foreach ($pagecontent->orders as $currorder): ?>
            <tr>
                <td>
                    <?php echo substr($currorder['datum'], 0, -9);?> </td>
                <td>
                    <?php echo $currorder['order_id'];?> </td>
                <td>
                    <?php echo $currorder['summa'].' KR';?>
                </td>
                <td>
                    <?php echo $currorder['status'];?> </td>

            </tr>
            <?php endforeach ?>
            <?php endif ?>
        </table>

    </div>
    <?php require_once('templates/storefront_tpl/footer.php');
?>
