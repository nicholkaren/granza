<?php require_once('templates/storefront_tpl/header.php'); ?>
<link type="text/css" rel="stylesheet" href="css/storefront/singleproduct.css">

<!--Produktsida för singelprodukt -->
<div class="product_single">
     
  <!-- Stor produktbild -->
    <div class="single_img_wrapper">
        <figure>
            <img src="<?php echo $pagecontent->img_url;?>" class="single_img">
        </figure>
    </div>
    
    <div class="prod_info_wrapper">
        
        <!-- Produkttitel -->
        <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">
            <div class="goback"><i class="fa fa-angle-left"></i> Tillbaka </div>
        </a>
        <hgroup>
            <h2 class="product_title"><?php echo $pagecontent->title;?></h2>
        </hgroup>
        
        <!-- Produktpris -->
        <span class="product_price"><?php echo $pagecontent->price.' SEK '; ?></span>
        <p class="product_details"><?php echo $pagecontent->description;?></p>

        <!-- Knapp till varukorg -->  
        <form method="post" action="?action=addtocart">
            <input type="hidden" value="<?php echo $pagecontent->price;?>" name="price">
            <label for="cart_qty"> Antal: </label>
            <input type="text" value="1" id="cart_qty" name="qty">
            <input type="hidden" name="pid" value="<?php echo $pagecontent->pid;?>">
            <!--<input type="hidden" name="cart-token">-->
            <button type="submit" id="single-prod-button">Lägg i varukorg</button>
        </form>

        <!-- Leveransalternativ knapp -->
        <a class="button_2" href="#popup1"> Leveransalternativ </a>
        <div id="popup1" class="overlay">
            
            <!-- Popup -->
            <div class="popup">
            <!-- Rubrik -->
                <h2>Leveransalternativ</h2>
                <!-- Stäng knapp -->
                <a class="close" href="#">&times;</a>
           
            <!-- Content div delivery options -->
            <div class="content">

              <div class="delivery_options">
                  <table>
                      <tr>
                          <td>Postnord </td>
                          <td> 0 SEK</td>
                          <td> Leverans 2-5 arbetsdagar </td>
                      </tr>
                      <tr>
                          <td>DHL </td>
                          <td>0 SEK</td>
                          <td> Leverans 2-5 arbetsdagar </td>
                      </tr>
                  </table>
              </div><!-- delivery options div -->
            </div><!-- End of content div -->
            </div> <!-- End of popup div -->
        </div> <!-- End of overlay -->
     
      <!-- Sociala medier
       <div>
        <div class="share-prod">
            <a href="http://www.facebook.com"><span id="fb-font"></span></a>
            <a href="http://www.instagram.com"><span id="inst-font"></span></a>
            <a href="mailto:info@granza.se" data-email="info@granza.se"><span id="mail-font"></span></a>
          </div>
       </div>
        <meta property="og:url" content="" />
        <meta property="og:type" content="product" />
        <meta property="og:title" content="<?php echo $pagecontent->title;?>" />
        <meta property="og:description" content="<?php echo $pagecontent->description;?> "/>
        <meta property="og:image" content="<?php echo $pagecontent->img_url;?> " />
        -->

</div> <!-- End of product single div -->
      
      <hr>

      <!-- Block med doftfamiljs-hjul
      <div id="block">
          <img class="scent-wheel" src="img/products/big/scent_wheel.png"> 
      </div>-->

      <!--Liknande produkter 4 st -->
      <div class="product_upsale">
          <h2 class="upsale_title"> Du kanske också gillar </h2>
      </div>
      
      <div class="product_upsale">
          <?php foreach ($pagecontent2->products as $currprod2) {
              echo '<a href="?action=product&pid='.$currprod2['product_id_2'].'"><div class="product_wrapper">';
              echo '<img src="'.$currprod2['img_url_2'].'" class="prod_img">';
              echo '<h3 class="perfume_name">'.$currprod2['title_2'].'</h3>';
              echo "<br>";         
              echo '<a href="?action=product&pid='.$currprod2['product_id_2'].'" class="upsale-button-a"><button class="button" type="button"> Lägg i varukorg </button></a>';
              echo '</div></a>';
          } ?>
      </div>   
        <div class="before_footer"></div>
                                 
 
</div>          
</div>

<?php require_once('templates/storefront_tpl/footer.php');
?>