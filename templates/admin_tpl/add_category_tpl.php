<?php require_once('templates/admin_tpl/admin_header.php');?>
<?php require_once('templates/admin_tpl/sidemenu_category_tpl.php');?>
<link type="text/css" href="css/admin/add_category.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--BAKGRUNDBILD-->
<img class="background" src="img/products/big/marble-wallpaper-white.jpg">
<!--Vit div-->
<div align="center">
    <div class="create_cat">
        <!--sid titel-->
        <h1 id="add-cat-h1">
            <?php echo strtoupper($pagecontent->title); ?>
        </h1>
        <?php
        if ($pagecontent->error !== ""){
            echo '<p id="p-error">'.$pagecontent->error.'</p>';
        }else if (!empty($last_id)) {
                echo '<p id="p-success">Kategori med ID '.$last_id.' är sparad <i class="fa fa-check" style="font-size:20px;color:	limegreen"></i> </p>';}
        ?>

            <form method="post" action="?action=create-category" enctype="multipart/form-data" id="create-cat" name="add-category">

                <input type="file" name="file1" id="file-upload-cat">
                <input type="text" name="cat[title]" id="cat-title" placeholder="Kategorititel">
                <textarea form="create-cat" rows="4" cols="50" name="cat[desc]" id="cat-desc" placeholder="Kategoribeskrivning"></textarea>

                <label for="sel_status">Ange status:</label>
                <div class="style_select">
                    <select name="cat[status]" id="sel_status">
                    <option value="active" name="cat[active]">Aktiv</option>
                    <option value="inactive" name="cat[inactive]">Inaktiv</option>
                </select>
                    <!--IKON PIL NEDÅT-->
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
                <!-- FORM TOKEN-->
                <?php echo getTokenField(); ?>

                <button type="submit" id="save-cat-button" class="btn_save">Spara kategori</button>
            </form>
    </div>
</div>
