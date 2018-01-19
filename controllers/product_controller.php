<?php
$pagecontent = new stdClass;
include('meny_controller.php');
include('includes/token.php'); //bortkommenterad at the moment, kolla om vi hinner innan 26/1

/* Databasanrop */
$sql = "SELECT * FROM granza.product, granza.product_img
        WHERE granza.product.product_id = granza.product_img.product_id
        AND granza.product.inactive = 0 
        AND granza.product.product_id = :id;";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $_GET['pid']);
$stmt->execute();

$result = $stmt->fetch();


if (count($result) < 1){
    $pagecontent->title = 'Ingen produkt hittades'; // Ingen produkt 
} else {
    $pagecontent->cat_id = $result['category_id'];
    $pagecontent->pid = $result['product_id'];
    $pagecontent->title = $result['title'];
    $pagecontent->description = $result['description'];
    $pagecontent->price = $result['price'];
    $pagecontent->img_url = $result['img_url'];
}


