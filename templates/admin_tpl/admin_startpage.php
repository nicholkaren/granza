<!--STARTSIDA för admin-->
<?php require_once('templates/admin_tpl/admin_header.php');?>
<head>
<link type="text/css" rel="stylesheet" href="css/admin/admin_startpage.css">
</head>

<body>
<!--VÄLKOMMSTEXT-->
<div id="admin_content">
<h2 class="admin_welcome">
<?php echo $pagecontent->title; ?>

</h2>                        

<!--Första container-->
<div class="flex-container">
  
        <div>
          <img class="admin_icon" src="img/icons/perfume_color.png">
          <span class="admin_start">Produkt</span>
          <a href="?action=create-product" class="choose_me green">välj</a>
        </div>
        <div>
            <img class="admin_icon" src="img/icons/category_color.png">
            <span class="admin_start">Kategori</span>
            <a href="?action=create-category" class="choose_me yellow">välj</a>
        </div>
        <div>
            <img class="admin_icon" src="img/icons/order_color.png">
            <span class="admin_start">Order</span>
            <a href="?action=orders" class="choose_me orange">välj</a>
        </div>
</div>
                        <!--Andra container-->

<div class="flex-container">
        <div>
            <img class="admin_icon" src="img/icons/membership_color.png">
            <span class="admin_start">Medlemsskap</span>
            <a href="?action=users" class="choose_me red">välj</a>
        </div>
        <div>
            <img class="admin_icon" src="img/icons/edit_color.png">
            <span class="admin_start">Redigerare</span>
            <a href="?action=edit-page" class="choose_me magenta">välj</a>
        </div>
        <div>
            <img class="admin_icon" src="img/icons/shop_color.png">
            <span class="admin_start"> Besök Butik</span>
            <a href="?action=default" class="choose_me blue">välj</a>
        </div>   
</div>
	</div>