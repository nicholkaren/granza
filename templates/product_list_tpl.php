<?php require_once('templates/admin_header.php');?>
<?php require_once('includes/admin_sidemenu.php');?>

<link type="text/css" href="css/admin_list.css" rel="stylesheet"> 

<!--BAKGRUNDBILD-->
<img class="background" src="img/inspo/flowers_about.jpg">
<!--VITA DIVEN-->
<div class="all_product">
    <!--RUBRIK-->
    <h1 id="h1-cat"><?php echo strtoupper($pagecontent->title); ?></h1>



<!-- PRINTA ALLA PRODUKTER SOM FINNS I DATABASEN-->
      
<table class="list-wrapper">
    <thead>
  <tr>
    <th>Id</th>
    <th>Bild</th>
    <th>Titel</th>
    <!--<th>Beskrivning</th>-->
    <th>Pris</th>
    <th>Kategori</th>
    <th>Status</th>
    <th>Redigera</th>
  </tr>
    </thead>
    
    <?php foreach ($pagecontent->products as $currprod) {
    echo '<tr>';
    printf ('<td>%s</td>',$currprod['product_id']);
   printf ('<td><img src="%s" class="cat-list-img"</td>',$currprod['img_url']);
    printf ('<td>%s</td>',$currprod['title']);
    /*printf ('<td class="cat-desc-list">%s</td>',$currprod['description']);*/
    printf ('<td>%s</td>',$currprod['price']);
    echo '<td>';
    if ($currprod['category_id'] === '1'){
        echo 'Dam';
    } else if ($currprod['category_id'] === '2') {
        echo 'Herr';
    } /*else if ($currprod['category_id'] === '3') {
        echo 'Doftljus';
    };*/
    echo '</td>';
    echo '<td>'; 
    if ($currprod['status'] === '1'){
        echo 'Inaktiv';
    } else {
        echo 'Aktiv';
    };
    echo '</td>';
    echo '<td><a href="?action=edit-product&pid='.$currprod['product_id'].'">Redigera</a></td>';
  echo '</tr>';
};?>
</table>
    
</div>

