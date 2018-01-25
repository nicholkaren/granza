<?php

$pagecontent = new stdClass;
include('meny_controller.php');

/* Här hämtas innehållet till about */

$sql = "SELECT * FROM granza.pages WHERE pages_id = 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$result = $stmt->fetch();


if (count($result) < 1){
    $pagecontent->title = 'Inget hittades';
} else {
    $pagecontent->title = strtoupper($result['title']);
    $pagecontent->content1 = $result['content1']; //stycke 1
    $pagecontent->content2 = $result['content2']; //stycke 2 lorem ipsum 
    $pagecontent->img_url = $result['head_img_url'];
}

include('templates/storefront_tpl/about_tpl.php');