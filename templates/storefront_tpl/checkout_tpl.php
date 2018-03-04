<?php require_once('templates/storefront_tpl/header.php'); ?>

<link type="text/css" href="css/storefront/checkout.css" rel="stylesheet"> 
<link type="text/css" href="css/storefront/cart.css" rel="stylesheet"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<div id="fullwidth">
    <h1 class="shoppingbag2"> Din Checkout ( steg 3 ) </h1>
    <div id="cart-wrapper">
        <!-- Tillbaka knapp -->
        <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">
        <div class="goback2"><i class="fa fa-angle-left"></i> Tillbaka till varukorg </div>
        </a>
        <br>
    <div class="cart-content">      
      <form action="?action=order" method="post" id="your-info" name="checkout">
          <!-- Steg 1 Leveransadress -->
          <h3 class= "form-header"> 1. Leveransadress </h3>
              <input type="text" name="fname" required placeholder="Förnamn"  value="<?php echo $person->getUserInfo('fname');?>">
              <input type="text" name="lname" required placeholder="Efternamn"  value="<?php echo $person->getUserInfo('lname');?>">
              <input type="text" name="street1" required placeholder="Adress"    value="<?php echo $person->getUserInfo('street1');?>">
              <input type="text" name="street2" placeholder="Adress"    value="<?php echo $person->getUserInfo('street2');?>">
              <input type="text" name="zip" required placeholder="Postnummer" value="<?php echo $person->getUserInfo('zip');?>">
              <input type="text" name="city" required placeholder="Stad"       value="<?php echo $person->getUserInfo('city');?>">
              <input type="text" name="email" required placeholder="E-post"     value="<?php echo $person->getUserInfo('email');?>">
              <input type="text" name="phone" required placeholder="Mobilnummer"    value="<?php echo $person->getUserInfo('phone');?>">
          <!-- Steg Välj annan leveransadress -->
          <p> Vill du leverera ditt paket till en annan adress än ovan? </p>
          <input type="checkbox"> Välj en annan leveransadress
              <div id="street2-hidden">
                  <h3 class= "form-header"> Annan leveransadress </h3>         
                      <input type="text" name="fname2"     placeholder="Förnamn">
                      <input type="text" name="lname2"     placeholder="Efternamn">
                      <input type="text" name="street12"   placeholder="Adress">
                      <input type="text" name="street22"   placeholder="Adress">
                      <input type="text" name="zip2"       placeholder="Postnummer">
                      <input type="text" name="city2"      placeholder="Stad">
                      <input type="text" name="phone2"     placeholder="Telefon">
              </div>
          <br>
          <hr>
          <!-- Välj betalningsmetod -->
          <h2 class="site_title"> 2. Betalningsmetod </h2>
          <ul class="payment-method">
              <li class ="payment-lista">
                  <label><input type="radio" value="1" name="payment_option">Kortbetalning</label>
              </li>
              <li class ="payment-lista">
                 <label><input type="radio" value="2" name="payment_option">Faktura</label>
              </li>
              <li class ="payment-lista">
                   <label><input type="radio" value="3" name="payment_option">Klarna</label>
              </li>
              <li class ="payment-lista">
                  <label><input type="radio" value="4" name="payment_option">Direktbetalning med bank</label>
              </li>
          </ul>
          <hr>
          <h2 class="site_title"> 3. Fraktsätt </h2>
          <ul class="shipping-method">
              <li class="shipping-lista">
                  <label><input type="radio" value="2" name="shipping_option"> PostNord ( +0 SEK ) 2-5 arbetsdagar<br></label>
              </li>
              <li class="shipping-lista">
                  <label><input type="radio" value="1" name="shipping_option"> DHL Express ( + 0 SEK ) 2-5 arbetsdagar<br></label>
              </li>
          </ul>
          <hr id ="last-hr">
    </div> <!-- wrapper -->
    </div> <!-- content -->
      </div> 
    <!-- Aside bredvid varukorg med minicart -->
    <div class="aside_checkout">
        <div class="mini-cart">
          <h3 class= "form-header">Ordersummering</h3>
          <hr id="minicart">
              <table>
                  <?php foreach ($pagecontent->products as $currprod){
                      echo'<tr>';
                      echo '<td><img class="checkout-img" src="'.$currprod['img_url'].'" class="prod_img"></td>';
                      echo '<td>'.$currprod['title'].'</td>';
                      echo '<td>'.$currprod['price'] .' KR'.'</td>';
                      echo'<td id="prod-sum">'.$currprod['sum'] .' SEK'.'</td>';
                      echo'</tr>';
                  };
                      echo'</table>';
                      echo'<hr id="minicart">';
                      echo'<div id="to-pay">'.'Att betala '.$totalSum .' SEK'.'</div>';
                      echo'<div id="moms">'.'varav moms '.ceil($momsSats).' SEK'.'</div>';
                      echo'<div id="moms">'.'frakt'.' 0 SEK'.'</div>';
                  ?>
              </table>
        <button action="?=order" type="submit" class="btn-placeorder" value="placeorder" name="checkout"> Bekräfta order </button>
      </form> <!-- Rad 16 -->
        <!-- Vill du shoppa mer knapp -->
        <a href="?action=default">
        <div class="goback3"> Eller vill du shoppa mer? 
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
        </a> 
        <br>
</div> <!-- full width-->
</div>

<!-- Ingen footer här, fokus ska ligga på checkout -->
