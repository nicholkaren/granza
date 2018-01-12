<?php require_once('templates/admin_header.html');?>

<link type="text/css" rel="stylesheet" href="css/admin_start.css">

<!--STARTSIDA för admin-->

<!--VÄLKOMMSTEXT-->
<div id="admin_content">
<h2 class="admin_welcome">
<?php echo $pagecontent->title; ?> 
</h2>
                        <!--Första container-->
<div class="flex-container">
  
        <div>
          <img class="admin_icon" src="img/icons/perfume_color.png">
          <span class="admin_start">Produkter</span>
          <a href="?action=create-product" class="choose_me">välj</a>
        </div>
        <div>
            <img class="admin_icon" src="img/icons/category_color.png">
            <span class="admin_start">Kategori</span>
            <a href="?action=create-category"class="choose_me">välj</a>
        </div>
        <div>
            <img class="admin_icon" src="img/icons/order_color.png">
            <span class="admin_start">Order</span>
            <a href="?action=orders" class="choose_me">välj</a>
        </div>
</div>
                        <!--Andra container-->

<div class="flex-container">
        <div>
            <img class="admin_icon" src="img/icons/membership_color.png">
            <span class="admin_start">Medlemsskap</span>
            <a href="?action=users" class="choose_me">välj</a>
        </div>
        <div>
            <img class="admin_icon" src="img/icons/edit_color.png">
            <span class="admin_start">Redigerare</span>
            <a href="?action=edit-page" class="choose_me">välj</a>
        </div>
        <div>
            <img class="admin_icon" src="img/icons/shop_color.png">
            <span class="admin_start">Butik</span>
            <a href="?action=default" class="choose_me">välj</a>
        </div>   
</div>
	</div>