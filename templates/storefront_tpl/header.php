<!DOCTYPE html>
<html>
<head>
<title>Granza perfumes | <?php echo $pagecontent->title; ?></title>
<link rel="shortcut icon" href="img/logo/granza.png"/>
<link type="text/css" rel="stylesheet" href="css/storefront/header.css">
<link type="text/css" rel="stylesheet" href="css/storefront/footer.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800|Work+Sans:300,400" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <ul class="nav navbar-nav">
      <li><a href="?action=default">Hem</a></li>
      <li><a href="?action=category&id=1">Damdofter</a></li>
      <li><a href="?action=category&id=2">Herrdofter</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
              <li><a href="?action=about-us">Om Granza</a></li>

      <li><a href="?action=login"><span class="glyphicon glyphicon-user"></span></a></li>
      <li><a href="?action=addtocart"><span id="shop_bag"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> 

            <!-- Skriver ut antalet produkter i varukorgen -->
            <?php if(isset($_SESSION['cart-total']) && $_SESSION['cart-total'] > 0){
                printf ('<div id="qty-cart"><span id="qty">%s</span></div>', $_SESSION['cart-total']);
            }
            ?>
            </span></a></li>
    </ul>
</nav>

<!--Header -->




    <!--Meny som fälls ut 
      <input type="checkbox" id="nav-trigger" class="nav-trigger">
        <label for="nav-trigger" class="toggle">☰</label>
        <nav class="menu">
            <h1 id="menu-button">Meny</h1>
            
            <ul class="ulmenu">    
                <li><a href="?action=category&id=1">Damdofter</a></li>
                <li><a href="?action=category&id=2">Herrdofter</a></li>
                <li><a href="?action=about-us">Om oss</a></li>
                <li><a href="?action=default">Hem</a></li>
            </ul>
        </nav>-->

    <!-- Logotyp 
    <div class="div_logo">
        <a href="?action=default">
        <img src="img/logo/granza.png" alt="logotype granza" id="id_logo"></a>
    </div>-->
    
    <!-- Ikoner till Logga in som admin/member och shoppingbag
    <div class="menu_icons">
        Login icon
        
        <a href="?action=login"><i class="fa fa-user" aria-hidden="true"></i></a>
        Shopping bad icon
        <a href="?action=addtocart">
            <span id="shop_bag">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>-->
                
            <!-- Skriver ut antalet produkter i varukorgen -->
            <?php if(isset($_SESSION['cart-total']) && $_SESSION['cart-total'] > 0){
                printf ('<div id="qty-cart"><span id="qty">%s</span></div>', $_SESSION['cart-total']);
            }
                ?>
            </span></a>
    </div> 
