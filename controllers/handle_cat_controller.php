<?php

//Här hämtas filerna som laddas upp
// och hamnar i mappen nedan.
$upload_dir = 'uploads/category';

include('uploads_controller.php');
include('includes/token.php');

//här matas datan in i databasen - när kategorier skapas.
if (isset($_POST['cat'])){


if ($_POST['cat'] !== NULL && $_FILES['file1']['size'] > 0){

$sql = "INSERT INTO category (title, description, img_url) 
VALUES (:title, :description, :img_url)";
$stmt = $pdo->prepare($sql);
    
$cat_title = $_POST['cat']['title'];
$cat_desc = $_POST['cat']['desc'];
    
$stmt->bindParam(':title', $cat_title);
$stmt->bindParam(':description', $cat_desc);
$stmt->bindParam(':img_url', $url);
    
    if (checkToken($_POST['token'])) {
        
        $stmt->execute();
        $last_id = $pdo->lastInsertId();
    
    
    if($_POST['cat']['status'] === 'active'){
        $sql1 = "UPDATE granza.category SET category.Inactive = 0 WHERE category.category_id = :id";
        $stmt = $pdo->prepare($sql1);
        
        $stmt->bindParam(':id', $last_id);
        $stmt->execute();
        
    } 
    
    if($_POST['cat']['status'] === 'inactive'){
       $sql2 = "UPDATE granza.category SET category.Inactive = 1 WHERE category.category_id = :id";
        $stmt = $pdo->prepare($sql2);
        
        $stmt->bindParam(':id', $last_id);
        $stmt->execute();
    }
  } 
}
}