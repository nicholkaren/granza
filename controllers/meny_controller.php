<?php
// här hämtas kategori titel & cat_id till menyn.

$pagecontentcat = new stdClass;

$sql1 = "SELECT title, category_id FROM category;";
	$stmt = $pdo->prepare($sql1);
	$stmt->execute();
    $result = $stmt->fetchAll();


$pagecontentcat->cat = array();

foreach ($result as $cat) {
	$currcat1 = array();
	$currcat1['title'] = $cat['title'];
	$currcat1['category_id'] = $cat['category_id'];
	$pagecontentcat->cat[] = $currcat1;
}

