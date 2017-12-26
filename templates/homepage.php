<?php require_once('templates/header.php');

?>
<!--STARTSIDA-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/startpage.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800|Work+Sans:300,400" rel="stylesheet">
<script src='includes/js.js'></script>

<div class="startpage">
    <!--SLIDER-->
    <div class="startpage_bigimage">
                <img class="topimage" src="img/slider/big_img.jpg">
                <div class="buttonContainer">
                    <div class="buttons buttonActive"></div>
                    <div class="buttons"></div>
                    <div class="buttons"></div>
                    <div class="buttons"></div>
                </div>
                <button id="create"> Ett knappval </button>
    </div>
    
    
     <!-- FÖRSTA PRODUKTRADEN -->
    
    <a href="?action=category&id=1">
        <h2 class="our-favorites">Damdofter | Profumi Donna </h2></a>
    <div class="start_prod">
    
    <!-- Damdofter -->
    <?php foreach ($pagecontent->products as $currprod) {
    echo '<div class="product_wrapper">';
    echo '<a href="?action=product&pid='.$currprod['product_id'].'">';
    echo '<img src="'.$currprod['img_url'].'" class="prod_img">';
    echo '<h3>'.$currprod['title'].'</h3>';
    echo '<p class3="price">'.$currprod['price'] .' KR'.'</p>';
    echo '</a>';
    echo '<form method="post" action="?action=addtocart">';
    echo '</div>';
    } ?>
    </div>
    
    <!-- Ansök om medlemsskap -->
    <div id="ansok-granza">
        <div class="placement-left">
            <img class="orange" src="img/products/doftnoter/oranges.png">
            <img class="rockrose" src="img/products/doftnoter/rockrose.png">
            <img class="junpierberry" src="img/products/doftnoter/junpierberry.png">
        </div>
        <div class="placement-right">
            <img src="img/logo/granza.png">

            <h2></h2>
            <p>Ansök om medlemsskap och få tillgång<br>
            till exklusiva erbjudanden</p>
            <button id="ansok-medlemsskap"> Ansök nu </button>

        </div>
    </div>

    <!-- herrdofter -->
    <a href="?action=category&id=2"><h2 class="our-favorites">Herrdofter | Profumi Oumo</h2></a>
    <hr>
        <div class="start_prod">
    <?php foreach ($pagecontent2->products as $currprod2) {
    echo '<div class="product_wrapper">';
    echo '<a href="?action=product&pid='.$currprod2['product_id_2'].'">';
    echo '<img src="'.$currprod2['img_url_2'].'" class="prod_img">';
    echo '<h3>'.$currprod2['title_2'].'</h3>';
    echo '<p class="price">'.$currprod2['price_2'] .' KR'.'</p>';
    echo '</a>';
    echo '</div>';
    } ?>
    </div>     
    </div>
    
</div>

<?php require_once('templates/footer.php');
?>