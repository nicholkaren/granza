<?php
$pagecontent = new stdClass;
$pagecontent->title = "Redigera produkt";
$pagecontent->category_id = "";
$pagecontent->prod_title = "";
$pagecontent->price = "";
$pagecontent->description = "";
$pagecontent->img_url = "";
$pagecontent->error = "";

include('meny_controller.php');
include('includes/token.php');

    getToken();

/* Hämtar kategorititel och id till select */

$sql = "SELECT title, category_id FROM category;";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
    $result = $stmt->fetchAll();

$pagecontent->category = array();

foreach ($result as $category) {
	$currcat = array();
	$currcat['title'] = $category['title'];
	$currcat['cat_id'] = $category['category_id'];
	$pagecontent->category[] = $currcat;
}

if (isset($_POST['prod-search']) || isset($_GET['pid'])){
    
    
/*Sökresultatet */
$sql = "SELECT * FROM product, product_img
        WHERE product.product_id = product_img.product_id
        AND product.product_id = :id";
	$stmt = $pdo->prepare($sql);
    
    
    if (isset($_POST['prod-search'])){
    $pid = $_POST['prod-search'];
    }
    
    if (isset($_GET['pid'])){
        $pid = $_GET['pid'];
    }
    
    $stmt->bindParam(':id', $pid);
	$stmt->execute();
    $result = $stmt->fetch();

if (count($result)> 1){
    $pagecontent->category_id = $result['category_id'];
    $pagecontent->pid = $result['product_id'];
    $pagecontent->prod_title = $result['title'];
    $pagecontent->description = $result['description'];
    $pagecontent->price = $result['price'];
    $pagecontent->img_url = $result['img_url'];
    } else {
    $pagecontent->error = "Produkten kunde inte hittas!";
}
}

require('templates/admin_tpl/edit_product_tpl.php');
?>