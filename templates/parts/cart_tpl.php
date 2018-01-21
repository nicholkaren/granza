<?php
require('templates/header.php');
?>

<link type="text/css" href="css/cart.css" rel="stylesheet"> 
<meta name="viewport" content="width=device-width, initial-scale=1">


    <div id="fullwidth">
        <h1 class="shoppingbag"> Din varukorg ( steg 2 ) </h1>
    <!--Här är varukorgen -->
    <div id="cart-wrapper">
        
        <!-- Formuläret med varorna -->
        <form method="post" action="?action=updatecart" id="update-cart-form">
     
            <!-- Content -->   
            <div class="cart-content">
                <?php if (!array_key_exists('cartItems', $cart)){
                    print '<p id="empty-cart">Din varukorg är tom!</p>';         
                };?>
                <?php if (isset($cart['cartItems'])):
                foreach ($cart['cartItems'] as $cartItemPid => $cartItemData): ?>
           
                <!-- Omsluter en produkt -->
                <div class="item">

                <!-- Produktbild -->
                <div class="item-img">
                    <img id="cart_img" src="<?php echo $cartItemData['img_url'];?>">
                </div>
                
                <!-- Produkttitel -->   
                <div class="item-title">
                    <span class="desc"><?php echo $cartItemData['title'];?></span>
                </div>
                
                <!-- Antal valda  produkter -->     
                <div class="item-qty">
                    <input type="number" name="cartitems[<?php echo $cartItemPid;?>]" value="<?php echo $cartItemData['qty'];?>">
                </div>
                
                <!-- Total summa för en vara -->
                <div class="item-price">
                    <?php echo $cartItemData['price'].' SEK';?>
                </div>
                        
                <!-- Total summa för en vara x antal-->    
                <div class="cart-sum">
                    <?php echo $cartItemData['sum'].' SEK';?>

                <!-- Remove cart item -->
                <a href="?action=removecartitem&pid=<?php echo $cartItemPid;?>">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </div> <!-- /content -->

    </div>  
        
            <?php endforeach ?>
            <?php endif ?>
          
        <div id="cart-total">       
            <div class="total">
                <?php echo 'Ordersumma';?>
            </div>
                        
            <div class="cart-total">
                <?php echo $cart['total'].' SEK';?>
                <br>
                <button class="update-cart-btn" type="submit"> Uppdatera varukorgen </button> 
            </div>
        </div>                                
        </div>       
    </form>
    </div>    

    <!-- Aside bredvid varukorg -->
    <div class="aside"> Har du frågor om din order?
        <ul>
            <li><i class="fa fa-phone" aria-hidden="true"></i> <span id="order"> 020 - 53 53 52 </span></li>
        </ul>
    </div>
    <!-- Checkout knapp -->
    <div class="btn-box">
        <form method="post" action="?action=checkout" name="form-checkout-btn">
            <button type="submit" id="checkoutknapp" name="place-order" 
            value="<?php $cartItemData;?>"> Fortsätt till betalning </button>
         </form>
    </div>

</div> <!-- The wrapper -->
