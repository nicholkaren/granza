<?php require_once('templates/header.php'); ?>

<!--STARTSIDA-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/startpage.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800|Work+Sans:300,400" rel="stylesheet">
<script src='includes/js.js'></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Liten reklambanner under headern -->
    <div class="small_banner"> 
        <i class="fa fa-bolt" aria-hidden="true"></i> Snabb leverans! | 
        <i class="fa fa-smile-o" aria-hidden="true"></i> Över 20 000 nöjda kunder | 
        <i class="fa fa-gift" aria-hidden="true"></i> Parfymprov vid varje beställning </div> 
            <!-- TOPPBILD -->
        <div class="startpage_bigimage">
            <img class="topimage" src="img/slider/big_img.jpg">  
                <a href="#">
                    <button id="create"> Begin fragrance profiling </button>
                </a>
        </div>
        
        
        <div class="startpage">
        <!-- FÖRSTA PRODUKTRADEN MED DAMDOFTER -->
        <a href="?action=category&id=1"> <h2 class="headline_gender"> Damdofter | Profumi donna </h2></a>
        
        <div class="start_prod">
            <?php foreach ($pagecontent->products as $currprod) {
                echo '<div class="product_wrapper">';
                echo '<a href="?action=product&pid='.$currprod['product_id'].'">';
                echo '<img src="'.$currprod['img_url'].'" class="prod_img">';
                echo '<h3 class="perfume_name">'.$currprod['title'].'</h3>';
                echo '</a>';
                echo '<form method="post" action="?action=addtocart">';
                echo '<input type="hidden" value="'.$currprod['price'].'" name="price">';
                echo '<input type="hidden" value="1" id="cart_qty" name="qty">';
                echo '<input type="hidden" value="'.$currprod['product_id'].'" id="cart_" name="pid">';
                echo '<button type="submit">Lägg i varukorgen</button>';
                echo '</form>';
                echo '</div>';
            } ?>
        </div>

        <!-- UPPTÄCK ALLA DAMDOFTER -->
        <a href="?action=category&id=2">
        <div class="discover_women">
            <img src="img/products/big/005_big.jpg">
            <p class="all_women"> Discover all perfumes <br>for donna </p>
            <div class="arrow-right"></div>
        </div> 
        </a>

        <!--Ansök om medlemsskap-->
        <div id="register_member">
            <div class="placement-left">
                <img class="kollage1" src="img/doftnoter/kollage1.png">
            </div>
            <div class="placement-right">
                <img src="img/logo/granza.png">
                    <p> Bli medlem i Granza och få tillgång till exklusiva erbjudanden.<br> Dessutom får du som medlem fri frakt på din beställning. </p>

                    <button id="ansok"> Ansök här! </button>
            </div>
        </div>

        <!-- PRODUKTRAD MED HERRDOFTER -->
        <a href="?action=category&id=2"><h2 class="headline_gender">Herrdofter | Profumi Oumo</h2></a>
            
            <div class="start_prod">
                <?php foreach ($pagecontent2->products as $currprod2) {
                    echo '<div class="product_wrapper">';
                    echo '<a href="?action=product&pid='.$currprod2['product_id_2'].'">';
                    echo '<img src="'.$currprod2['img_url_2'].'" class="prod_img">';
                    echo '<h3 class="perfume_name">'.$currprod2['title_2'].'</h3>';
                    echo '<p class="price">'.$currprod2['price_2'] .' KR'.'</p>';
                    echo '</a>';
                    echo '<form method="post" action="?action=addtocart">';
                    echo '<input type="hidden" value="'.$currprod2['price_2'].'" name="price">';
                    echo '<input type="hidden" value="1" id="cart_qty" name="qty">';
                    echo '<input type="hidden" value="'.$currprod2['product_id_2'].'" id="cart_" name="pid">';
                    echo '<button type="submit">Lägg i varukorgen</button>';
                    echo '</form>';
                    echo '</div>';
                } ?>
            </div> 

        <!--En kreativ yta -->
        <div id="philosophy">
                <p class="thephilosophy"> "In the victorian times, everyone was well versed in the language of perfume. <br> When you gifted a bouquet or a perfume, you were telling a story, or sending a message"
                <br> - Fransesco Granza</p>
        </div> 

        
    </div> <!-- End of startpage div -->
</div>

    <?php require_once('templates/footer.php');
    ?>