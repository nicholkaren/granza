<?php require_once('templates/header.php'); ?>

<!--STARTSIDA-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/startpage.css">
<link type="text/css" rel="stylesheet" href="css/category.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800|Work+Sans:300,400" rel="stylesheet">
<script src='includes/js.js'></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">


    <!-- Liten reklambanner under headern 
    <div class="small_banner"> 
        | <i class="fa fa-bolt" aria-hidden="true"></i> Snabb leverans | 
        <i class="fa fa-gift" aria-hidden="true"></i> Parfymprov vid varje beställning |
        <i class="fa fa-clock-o" aria-hidden="true"></i> 60 dagars öppet köp |
        <i class="fa fa-smile-o" aria-hidden="true"></i> Över 20 000 nöjda kunder | 
    </div> -->

        <!-- TOPPBILD -->
        <div class="startpage_bigimage">
            <img class="topimage" src="img/slider/big_img.jpg">  
        </div>
        <a href="#">
            <button id="create"> Begin fragrance profiling </button>
        </a>
        
        
        <div class="startpage">
        <!-- FÖRSTA PRODUKTRADEN MED DAMDOFTER -->
        <a href="?action=category&id=1"> <h2 class="headline_gender"> Damdofter | Profumi donna </h2></a>
        
        <!-- Produkter visas -->
        <div class="main_wrapper">
            <?php 
                foreach ($pagecontent->products as $currprod) {
                    echo '<div class="product_wrapper">';
                    echo '<a href="?action=product&pid='.$currprod['product_id'].'">';
                    echo '<img src="'.$currprod['img_url'].'" class="prod_img">';
                    echo '<h3 class="perfume_name">'.$currprod['title'].'</h3>';
                    echo '<p class="price">'.$currprod['price'] .' KR'.'</p>';
                    echo '<button id="button" type="button"> Läs mer </button>';
                    echo '</a>';
                    echo '</div>';} 
            ?>

            <!-- UPPTÄCK ALLA DAMDOFTER -->
            <a href="?action=category&id=2">
            <div class="discover_women">
                <img class="bigperfume" src="img/products/big/005_big.jpg">
                <img class="lily" src="img/doftnoter/geranium.png">
                            <img class="mint" src="img/doftnoter/tobacco.png">

                <p class="all_women"> Discover all perfumes <br>for donna </p>
                <div class="arrow-left"></div>
            </div> 
            </a>

            <!-- PRODUKTRAD MED HERRDOFTER -->
            <a href="?action=category&id=2"><h2 class="headline_gender">Herrdofter | Profumo Oumo</h2></a>
                
            <?php 
                foreach ($pagecontent->products as $currprod) {
                    echo '<div class="product_wrapper">';
                    echo '<a href="?action=product&pid='.$currprod['product_id'].'">';
                    echo '<img src="'.$currprod['img_url'].'" class="prod_img">';
                    echo '<h3 class="perfume_name">'.$currprod['title'].'</h3>';
                    echo '<p class="price">'.$currprod['price'] .' KR'.'</p>';
                    echo '<button id="button" type="button"> Läs mer </button>';
                    echo '</a>';
                    echo '</div>';} 
            ?>

            <!-- UPPTÄCK ALLA HERRDOFTER -->
            <a href="?action=category&id=2">
            <div class="discover_men">
                <img class="bigperfume" src="img/products/big/005_big.jpg">
                <p class="all_men"> Discover all perfumes <br>for uomo </p>
                <div class="arrow-right"></div>
            </div> 
            </a>

        <!--En kreativ yta 
        <div id="philosophy">
                <p class="thephilosophy"> "In the victorian times, everyone was well versed in the language of perfume. <br> When you gifted a bouquet or a perfume, you were telling a story, or sending a message"
                <br> - Fransesco Granza</p>
        </div> -->

        <!--Ansök om medlemsskap-->
        <div id="register_member">
            <div class="placement-left">
                <img class="kollage1" src="img/doftnoter/kollage1.png">
            </div>
            <div class="placement-right">
                    <p> Bli medlem i Granza och få tillgång till exklusiva erbjudanden.<br> Dessutom får du som medlem fri frakt på din beställning. </p>

                    <button id="ansok"> Ansök här! </button>
            </div>
        </div>

        </div> <!-- main wrapper -->
    </div> <!-- End of startpage div -->
</div>
</div>

    <?php require_once('templates/footer.php');
    ?>