<!--ADMIN SKAPA PRODUKT SIDA-->
<?php require_once('templates/admin_header.php');?>
<?php require_once('includes/admin_sidemenu.php');?>

<link type="text/css" href="css/add_product.css" rel="stylesheet"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<!--Här börjar hela innehållet-->
<main class="create_product">
    
    <!--Titel-->
    <h1 id="add-product-h1">Skapa ny produkt</h1>
    
    <!-- Här matas det sparade PID för produkten eller ERROR om det ej matas in i DB -->
    <?php if ($pagecontent->error !== ""){
        echo '<p id="p-error">'.$pagecontent->error.'</p>';
    } else if (!empty($last_id)) {
        echo '<p id="p-success">Produkt tillagd!</p>';
        echo '<h2>Produktens id är: '.$last_id.'</h2>';
    }?>
<!--Form för att mata in nya produkter i DB-->
    <form method="post" action="?action=create-product" enctype="multipart/form-data" id="create-product" name="add-product">
        <input type="file" name="file1" id="file-upload">
        <input type="text" name="product[title]" id="prod-title" placeholder="Produkttitel">
        <input type="text" name="product[price]" id="prod-price" placeholder="Pris">
        <textarea form="create-product" rows="10" cols="50" name="product[desc]" id="prod-desc" placeholder="Produktbeskrivning"></textarea>

<!--Här anger admin kategori för PID-->        
        <p>Ange kategori:</p>
        <select name="product[cat_id]">
            <?php foreach ($pagecontent->category as $currcat) {
                echo '<option value="'.$currcat["cat_id"].'">'.$currcat['title'].'</option>';
            }?>
        </select>
    
<!-- Väljer status för PID i DB-->
        <p>Ange status:</p>
        <select name="product[status]">
            <option value="active" name="product[active]">Aktiv</option>
            <option value="inactive" name="product[inactive]">Inaktiv</option>
        </select>
        
        <!-- FORM TOKEN-->
        <?php echo getTokenField(); ?>

        <button type="submit" id="save-product-button" name ="save-product">Spara produkt</button>

    </form>
</main>
