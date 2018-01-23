<?php
$pagecontent = new stdClass;
$pagecontent->title = "Skapa produkt";
require('handle_uploads_controller.php');
include('meny_controller.php');
include('includes/token.php');

getToken();

// hämtar kategori titel och cat_id till SELECT fälten

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

require('templates/admin_tpl/addproduct_tpl.php');
?>