<?php require_once('templates/header.php');?>

<!--KATEGORI SIDA-->
<link type="text/css" rel="stylesheet" href="css/category.css">

<div class="category">
        <div class="canvas_allperfumes"></div>

    <!-- Stor kategoribild som presenterar Donna -->
    <div class="category_banner">
        <img src="<?php echo $pagecontent->category['img']; ?>" class="cat_img">
    </div>
    
    <!-- Kategoritext som presenterar Donna -->
    <div class="category_banner_text">
        <h1 class="bigheadline_category"><?php echo $pagecontent->category['title']; ?></h1>
        <p class="description"><?php echo $pagecontent->category['desc'];?></p>
    </div>

    <!-- Produkter visas -->
    <div class="main_wrapper">
        <?php 
            foreach ($pagecontent->products as $currprod) {
                echo '<div class="product_wrapper">';
                echo '<a href="?action=product&pid='.$currprod['product_id'].'">';
                echo '<img src="'.$currprod['img_url'].'" class="prod_img">';
                echo '<h3 class="perfume_name">'.$currprod['title'].'</h3>';
                echo '<p class="price">'.$currprod['price'] .' KR'.'</p>';
                echo '<button id="button" type="button">KÖP</button>';
                echo '</a>';
                echo '</div>';} 
        ?>
    </div>
</div>
<?php require_once('templates/footer.php');?>