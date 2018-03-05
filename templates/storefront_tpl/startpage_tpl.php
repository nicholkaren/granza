<?php require_once('templates/storefront_tpl/header.php'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/storefront/startpage.css">
<link type="text/css" rel="stylesheet" href="css/storefront/category.css">
<script src='includes/js.js'></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dr+Sugiyama" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo" rel="stylesheet">

<!-- Liten reklambanner under headern -->
<div class="small_banner">
    | <i class="fa fa-bolt" aria-hidden="true"></i> Snabb leverans |
    <i class="fa fa-gift" aria-hidden="true"></i> Parfymprov vid varje beställning |
    <i class="far fa-clock"></i> 60 dagars öppet köp |
</div>

<!-- TOPPBILD -->
<div class="startpage_bigimage">
    <img class="topimage" src="img/slider/big_img.jpg">
    <img class="topimage2" src="img/inspo/big_img_mobile.jpg">
</div>
    <div class="create"> 
        <p>Italian quality <br> & excellence </p>
        <p class="est">since 1990</p>
    </div>
    <a class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
<!-- MAIN CONTENT -->
<div class="startpage">
    <!-- Första produktraden med damdofter -->
    <a href="?action=category&id=1">
        <h2 class="headline_gender"> Damdofter | Profumi donna </h2>
    </a>
    <!-- Produkter -->
    <div class="main_wrapper_startpage">
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
        <a href="?action=category&id=1">
            <div class="discover_women">
                <img class="bigperfume" src="img/products/big/women_all.jpg">
                <img class="bigperfume2" src="img/products/big/women_all_mobile.jpg">

                <p class="all_women"> Se alla parfymer <br>för donna </p>

                <div class="arrow-left"></div>
            </div>
        </a>
        <!-- BLI MEDLEM -->
        <div id="register_member">
            <div class="placement-left">
            </div>
            <div class="placement-right">
                <p> Bli medlem i Granza och få tillgång till exklusiva erbjudanden! <br> Prenumerera på nyhetsbrevet och ta del av spännande resereportage <br> om när vi besöker våra parfymerier i Italien. </p>
                <a href="?action=login"><button id="ansok"> Ansök här! </button></a>
            </div>
        </div>

    </div>
    <!-- / Första main -->
    <!-- HERRDOFTER -->
    <a href="?action=category&id=2">
        <h2 class="headline_gender">Herrdofter | Profumo Oumo</h2>
    </a>
    <div class="main_wrapper_startpage">
        <?php 
            foreach ($pagecontent2->products as $currprod2) {
                echo '<div class="product_wrapper">';
                echo '<a href="?action=product&pid='.$currprod2['product_id_2'].'">';
                echo '<img src="'.$currprod2['img_url_2'].'" class="prod_img">';
                echo '<h3 class="perfume_name">'.$currprod2['title_2'].'</h3>';
                echo '<p class="price">'.$currprod2['price_2'] .' KR'.'</p>';
                echo '<button id="button" type="button"> Läs mer </button>';
                echo '</a>';
                echo '</div>';} 
        ?>
        <!-- UPPTÄCK ALLA HERRDOFTER -->
        <a href="?action=category&id=2">
            <div class="discover_men">
                <img class="bigperfume" src="img/products/big/tabacco.jpg">
                <img class="bigperfume2" src="img/products/big/tabacco_mobile.jpg">

                <p class="all_men"> Se alla dofter <br>för uomo </p>
                <div class="arrow-right"></div>
            </div>
        </a>
        <!-- Kreativ yta -->
        <div id="philosophy">
            <p class="thephilosophy"> "In the victorian times, everyone was well versed in the language of perfume. <br> When you gifted a bouquet or a perfume, you were telling a story, or sending a message"
            <br> - Fransesco Granza</p>
        </div>
    </div>
    <!-- main wrapper -->
</div>
<!-- End of startpage div -->

<?php require_once('templates/storefront_tpl/footer.php');?>
