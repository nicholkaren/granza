<!--Admin visa alla kategorier-->
<?php require_once('templates/admin_tpl/admin_header.php');?>
<?php require_once('templates/admin_tpl/sidemenu_category_tpl.php');?>
<link type="text/css" href="css/admin/admin_list.css" rel="stylesheet">

<!--BAKGRUNDBILD-->
<img class="background" src="img/products/big/marble-wallpaper-white.jpg">
<!--VITA DIVEN-->
<div class="all_product">
    <!--sid titel-->
    <h1 id="h1-cat">
        <?php echo strtoupper($pagecontent->title); ?>
    </h1>

    <!-- PRINTA ALLA KATEGORIER SOM FINNS I DATABASEN-->

    <div class="overflow-wrapper">
        <table class="list-wrapper">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Bild</th>
                    <th>Titel</th>
                    <th>Beskrivning</th>
                    <th>Status</th>
                    <th>Redigera</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pagecontent->categories as $currcat) {
                  echo '<tr>';
                    printf ('<td>%s</td>',$currcat['category_id']);
                    printf ('<td><img src="%s" class="cat-list-img"</td>',$currcat['img_url']);
                    printf ('<td>%s</td>',$currcat['title']);
                    printf ('<td class="cat-desc-list">%s</td>',$currcat['description']);
                    echo '<td>'; 
                if ($currcat['status'] === '1'){
                        echo 'Inaktiv';
                    } else {
                        echo 'Aktiv';
                    }; 
                    echo '</td>';
                    echo '<td><a href="?action=edit-category&id='.$currcat['category_id'].'">Redigera</a></td>';
                  echo '</tr>';
                }?>
            </tbody>
        </table>
    </div>

</div>
