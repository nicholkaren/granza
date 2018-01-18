<?php require_once('templates/admin_header.php');?>
<?php require_once('includes/admin_sidemenu.php');?>    

<link type="text/css" href="css/edit_product.css" rel="stylesheet"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<!--BAKGRUNDBILD-->
<img class="background" src="img/inspo/flowers_about.jpg">

<!--VITA DIVEN-->
<div class="edit_product">
    <!-- CENTRERA DIV-->
    <div class="form_container" align="center">
        
        <!--Titel redigera produkt-->
        <h1 id="add-product-h1"><?php echo strtoupper($pagecontent->title); ?></h1>

        <!--SUCCESS VS ERRORMEDD-->
        <?php 
        if (isset($_GET['pid']) && $pagecontent->error !== ""){
            echo '<p id="p-error">'.$pagecontent->error.'</p>';
        } else if (isset($_POST['save-product']) && $pagecontent->error === "") {
            echo '<p id="p-success">Ändringar sparade <i class="fa fa-check" style="font-size:20px;color:	limegreen"></i></p>';
        }?>

        <!-- SÖK FORMULÄR -->
        <form method="post" action="?action=edit-product" id="search-product" name="search-product">
            <div class="container-4">
            <input id="search" type="search" name="prod-search" placeholder="Sök produkt" required>
            <button type="submit" id="search-product-button" class="icon"><i class="fa fa-search"></i>
            </button>
            </div>
        </form>

        <!-- REDIGERA FORMULÄR -->
        <form method="post" action="?action=update-product&pid=<?php echo $pagecontent->pid?>" enctype="multipart/form-data" id="update-product" name="edit-product">

            
            <label for="file-upload">Bild</label>
            <input type="file" name="file1" id="file-upload">

            <!--Gömt input fält som sparar prod_img-->
            <input type="hidden" name="saved-img" value="<?php echo $pagecontent->img_url;?>">

            <label for="prod-title">Produkt titel</label>
            <input type="text" name="product[title]" id="prod-title" placeholder="Produkttitel" value="<?php echo $pagecontent->prod_title;?>">

            <label for="prod-price">Pris</label>
            <input type="text" name="product[price]" id="prod-price" placeholder="Pris" value="<?php echo $pagecontent->price;?>">

            <label for="prod-desc">Beskrivning</label>
            <textarea form="update-product" rows="10" cols="50" name="product[desc]" id="prod-desc" placeholder="Produktbeskrivning"><?php echo $pagecontent->description;?></textarea>

            <label for="sel_cat">Ange kategori</label>
            <div class="style_select">
                <select id="sel_cat" name="product[cat_id]">
                    <?php foreach ($pagecontent->category as $currcat) {
                    echo '<option value="'.$currcat["cat_id"].'"';
                    if ($currcat["cat_id"] == $pagecontent->category_id){
                        echo ' selected';
                    }
                echo '>'.$currcat['title'].'</option>';
            };?>
                </select>
                <!--IKON PIL NEDÅT-->
                <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>

            <label for="sel_status">Ange status</label>
            <div class="style_select">
                <select id="sel_status" name="product[status]">
                    <option value="active" name="product[active]">Aktiv</option>
                    <option value="inactive" name="product[inactive]">Inaktiv</option>
                </select>
                <!--IKON PIL NEDÅT-->
                <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
            <!-- FORM TOKEN-->
            <?php echo getTokenField(); ?>

            <button type="submit" class="btn_save" id="save-product-button" name="save-product">Spara produkt
            </button>
<!--Produktbild på aktuell PID-->
            <div id="prod-pic-div">
                <img src="<?php echo $pagecontent->img_url;?>" id="prod-pic">
            </div>
        </form>
    </div>
    
</div>


