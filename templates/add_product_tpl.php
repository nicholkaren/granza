<!--ADMIN SKAPA PRODUKT SIDA-->
<?php require_once('templates/admin_header.php');?>
<?php require_once('includes/admin_sidemenu.php');?>

<link type="text/css" href="css/add_product.css" rel="stylesheet"> 

<!--Länk till ikoner-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1"> 


<!--BAKGRUNDBILD-->
<img class="background" src="img/inspo/flowers_about.jpg">  


<!--Här börjar hela innehållet-->
<main class="create_product">
    
    <!-- Div som omsluter formuläret för att det ska blir centrerat-->
    <div class="form_container" align="center">
        
        <!--Titel-->
        <h1 id="add-product-h1">Skapa ny produkt</h1>
        
     <!-- Här matas det sparade PID för produkten eller ERROR om det ej matas in i DB -->
    <?php if ($pagecontent->error !== ""){
        echo '<p id="p-error">'.$pagecontent->error.'</p>';
        } 
        else if (!empty($last_id)) {
        echo '<p id="p-success">Produkt med ID '.$last_id.' har lagts till <i class="fa fa-check" style="font-size:20px;color:	limegreen"></i></p>';
        }
    ?>
        <!--Form för att mata in nya produkter i DB-->
        <form method="post" action="?action=create-product" enctype="multipart/form-data" id="create-product" name="add-product">

            <input type="file" name="file1" id="file-upload" required>

            <input type="text" name="product[title]" id="prod-title" placeholder="Produkttitel" required>

            <input type="text" name="product[price]" id="prod-price" placeholder="Pris" required>

            <textarea form="create-product" rows="10" cols="50" name="product[desc]" id="prod-desc" placeholder="Produktbeskrivning">
            </textarea>

            <!--Här anger admin kategori och status för PID-->
            <label for ="choose_cat">Ange kategori:</label>
                <div class="style_select">
                    <select id="choose_cat" name="product[cat_id]">
                        <?php foreach ($pagecontent->category as $currcat) {
                            echo '<option value="'.$currcat["cat_id"].'">'.$currcat['title'].'</option>';
                        }?>
                    </select>
                    <!--IKON PIL NEDÅT-->
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>

    <!-- Väljer status för PID i DB-->
            <label for ="prod_status">Ange status:</label>
                <div class="style_select">
                    <select id="prod_status" name="product[status]">
                        <option value="active" name="product[active]">Aktiv</option>
                        <option value="inactive" name="product[inactive]">Inaktiv</option>
                    </select>
                    <!--IKON PIL NEDÅT-->
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>


            <!-- FORM TOKEN-->
            <?php echo getTokenField(); ?>

            <button type="submit" id="save-product-button" name ="save-product" class="btn_save">Spara produkt</button>

        </form>

    </div>
</main>