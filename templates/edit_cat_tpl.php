<!-- Admin, redigera kategorier-->
<?php require_once('templates/admin_header.php');?>
<?php require_once('includes/admin_sidemenu_cat.php');?>

<link type="text/css" href="css/admin_edit_cat.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bakgrundsbild - marmor-->
<img class="background" src="img/products/big/marble-wallpaper-white.jpg">

<!--Vit cancas-->
<div align="center">
    <div class="edit_cat">
        <!--Sid titel-->
        <h1 id="add-cat-h1">
            <?php echo strtoupper($pagecontent->title); ?>
        </h1>

        <?php //Medd ifall ändingarna sparats
if ($pagecontent->error !== ""){
    echo '<p id="p-error">'.$pagecontent->error.'</p>';
} else if (isset($_POST['save-cat']) && $pagecontent->error === "") {
    echo '<p id="p-success">Ändringar sparade <i class="fa fa-check" style="font-size:20px;color:	limegreen"></i> </p>';
}?>

        <form method="post" action="?action=edit-category" id="search-cat" name="search-category">
            <div class="container-4">
                <input type="search" name="cat-search" id="search" placeholder="Sök Kategori">
                <button type="submit" id="search-cat-button" class="icon"><i class="fa fa-search" style="margin-left:0; margin-right:0;"></i></button>
            </div>
        </form>

        <form method="post" action="?action=update-category&id=<?php echo $pagecontent->category_id;?>" enctype="multipart/form-data" id="create-cat" name="edit-category">
            <div id="cat-pic-div">
                <img src="<?php echo $pagecontent->img_url;?>" id="cat-pic">
            </div>
            <input type="file" name="file1" id="file-upload-cat">
            <input type="hidden" name="saved-img" value="<?php echo $pagecontent->img_url;?>">
            <input type="text" name="cat[title]" id="cat-title" placeholder="Kategorititel" value="<?php echo $pagecontent->cat_title;?>">
            <textarea form="create-cat" rows="6" cols="50" name="cat[desc]" id="cat-desc" placeholder="Kategoribeskrivning"><?php echo $pagecontent->description;?></textarea>

            <label for="sel_status">Ange status 
            </label>
            <div class="style_select">
                <select id="sel_status" name="cat[status]">
                    <option value="active" name="cat[active]">Aktiv</option>
                    <option value="inactive" name="cat[inactive]">Inaktiv</option>
                </select>
                <!--IKON PIL NEDÅT-->
                <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>

            <!-- FORM TOKEN-->
            <?php echo getTokenField(); ?>


            <button type="submit" class="btn_save" id="save-cat-button" name="save-cat">Spara kategori</button>

        </form>
    </div>
</div>
