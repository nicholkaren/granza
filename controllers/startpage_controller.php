<?php
$pagecontent = new stdClass;
include('meny_controller.php');
$pagecontent->title = "startpagecontrollerna körs";


/**************** HÄMTAR 4 Damparfymer  ***************/
$sql = "SELECT * FROM granza.product, granza.product_img WHERE 
        product.product_id = product_img.product_id
        AND product.category_id = 1
        AND product.inactive = 0 ORDER BY rand() LIMIT 8";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();

$theLastProduct = null;

while ($product = $stmt->fetch(PDO::FETCH_ASSOC) ) {
		$theLastProduct = $product;
		$currprod = array();
		$currprod['title'] = $product['title'];
		$currprod['product_id'] = $product['product_id'];
		$currprod['price'] = $product['price'];
		$currprod['img_url'] = $product['img_url'];
		$pagecontent->products[] = $currprod;
	}
       
        $pagecontent->start['product_id'] = $theLastProduct['product_id'];
		$pagecontent->start['img_url'] = $theLastProduct['img_url'];
		$pagecontent->start['price'] = $theLastProduct['price'];
		$pagecontent->start['title'] = $theLastProduct['title'];


if (is_null($theLastProduct)) {
	$pagecontent->title = "Error";
} else {
	$pagecontent->title = "Startsida";
}

/**************** Hämtar 4 herrparfymer ***************/
$sql2 = "SELECT * FROM granza.product, granza.product_img WHERE 
        product.product_id = product_img.product_id
        AND product.category_id = 2
        AND product.inactive = 0 ORDER BY rand() LIMIT 8";
	$stmt = $pdo->prepare($sql2);
	$stmt->execute();

$theLastProduct2 = null;

while ($product = $stmt->fetch(PDO::FETCH_ASSOC) ) {
		$theLastProduct2 = $product;
		$currprod2 = array();
		$currprod2['title_2'] = $product['title'];
		$currprod2['product_id_2'] = $product['product_id'];
		$currprod2['price_2'] = $product['price'];
		$currprod2['img_url_2'] = $product['img_url'];
		$pagecontent2->products[] = $currprod2;
	}

        $pagecontent2->start['product_id_2'] = $theLastProduct2['product_id'];
		$pagecontent2->start['img_url_2'] = $theLastProduct2['img_url'];
		$pagecontent2->start['price_2'] = $theLastProduct2['price'];
		$pagecontent2->start['title_2'] = $theLastProduct2['title'];
		

require('templates/storefront_tpl/startpage_tpl.php');