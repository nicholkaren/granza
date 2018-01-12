<?php require_once('templates/header.php'); ?>

<!--STARTSIDA-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/startpage.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800|Work+Sans:300,400" rel="stylesheet">
<script src='includes/js.js'></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">


    <!-- Liten reklambanner under headern -->
    <div class="small_banner"> (ikon) Snabb leverans! | (ikon) Över 20 000 nöjda kunder | (ikon) Parfymprov vid varje beställning </div> 
    
    <div class="startpage">
        <!-- TOPPBILD -->
        <div class="startpage_bigimage">
            <img class="topimage" src="img/slider/big_img.jpg">  
            <a href="#">
                <button id="create"> Begin fragrance profiling </button>
            </a>
        </div>

        <!-- FÖRSTA PRODUKTRADEN MED DAMDOFTER -->
        <a href="?action=category&id=1">
            <h2 class="headline_gender"> Damdofter | Profumi donna </h2>
        </a>
        
        <div class="start_prod">
            <?php foreach ($pagecontent->products as $currprod) {
                echo '<div class="product_wrapper">';
                echo '<a href="?action=product&pid='.$currprod['product_id'].'">';
                echo '<img src="'.$currprod['img_url'].'" class="prod_img">';
                echo '<h3 class="perfume_name">'.$currprod['title'].'</h3>';
                echo '<p class="price">'.$currprod['price'] .' sek'.'</p>';
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

        <div class="start_prod">
            <?php foreach ($pagecontent->products as $currprod) {
                echo '<div class="product_wrapper">';
                echo '<a href="?action=product&pid='.$currprod['product_id'].'">';
                echo '<img src="'.$currprod['img_url'].'" class="prod_img">';
                echo '<h3 class="perfume_name">'.$currprod['title'].'</h3>';
                echo '<p class="price">'.$currprod['price'] .' sek'.'</p>';
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


        <!-- PRODUKTRAD MED HERRDOFTER -->
        <a href="?action=category&id=2">
        <div class="discover_men">
            <img src="img/products/uomo/redigerad_005.png">
            <p class="all_men"> Discover all perfumes <br>for oumo </p>

        </div> 
        </a>

        <!--En kreativ yta -->
        <div id="philosophy">
                <img id="leafs" src="img/doftnoter/leaf_3.png">
                <p class="thephilosophy"> ”Ett filosofiskt litet citat kanske? Eller utnyttja ytan för reklamkampanj typ?” <br> - Fransesco Granza</p>
        </div> 
        
    </div> <!-- End of startpage div -->

    <?php require_once('templates/footer.php');
    ?>