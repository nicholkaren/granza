<?php require_once('templates/storefront_tpl/header.php');
?>

<link type="text/css" rel="stylesheet" href="css/admin/create_new_user.css">
<!-- SKAPA KONTO BÖRJAR HÄR -->
<!-- Bakgrundsbild - marmor-->
<img class="background" src="img/products/big/marble-black.jpg">

<div class="login">
    <h1 class="create_account_title"> Skapa konto</h1>
    <?php //var_dump($errors);

   foreach ($errors as $error) {
        
        printf("<h3>%s</h3>", $error);
        } 
    ?>

    <form class=" create_user_form" method="post" name="create-user">
        <input type="text" name="fname" placeholder="Förnamn" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ?>">
        <input type="text" name="lname" placeholder="Efternamn" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ?>">
        <input type="text" name="adress1" placeholder="Adress1" value="<?php echo isset($_POST['adress1']) ? $_POST['adress1'] : '' ?>">
        <input type="text" name="adress2" placeholder="Adress2" value="<?php echo isset($_POST['adress2']) ? $_POST['adress2'] : '' ?>">
        <input type="text" name="zipcode" placeholder="Postnummer" value="<?php echo isset($_POST['zipcode']) ? $_POST['zipcode'] : '' ?>">
        <input type="text" name="city" placeholder="Stad" value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>">
        <input type="text" name="telefon" placeholder="Telefon" value="<?php echo isset($_POST['telefon']) ? $_POST['telefon'] : '' ?>">
        <input type="text" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">

        <?php if($person->isLoggedIn()) {
            echo '<input type="text" name="level" placeholder="Level">';
        } ?>

        <input id="passinput" type="password" name="input-password" placeholder="Lösenord" value="<?php echo isset($_POST['input-password']) ? $_POST['input-password'] : '' ?>">
        <input id="confirm_password" type="password" name="confirm_password" placeholder="Bekräfta lösenord" value="<?php echo isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '' ?>">

        <!-- CHECKBOX OCH SKAPA KONTOKNAPP -->
        <div class="checkbox_wrapper">
            <label class="newsletter_label" for="newletter">JAG VILL GÄRNA HA NYHETSBREV</label>
            <input type="checkbox" checked="checked" name="newletter" value="1" checked>
        </div>

        <!-- FORM TOKEN-->
        <?php echo getTokenField(); ?>

        <div clas="button_wrapper">
            <button type="submit" class="create_account" action="?=create_user" name="create_user" value="create_user">SKAPA KONTO</button>
    </form>

    <?php if($person->isLoggedIn()) {
        echo '<a href="?action=users" class="list_of_users"> LISTA PÅ ANVÄNDARE </a>';
     } ?>
    <!--<a href='?action=users' class="list_of_users">LISTA PÅ ANVÄNDARE</a>-->
    </div>
</div>

<?php require_once('templates/storefront_tpl/footer.php');
?>
