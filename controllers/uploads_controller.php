<?php
//Logik för uppladningen av filer som används i admin när produkt eller kategori skapas.

if(!empty($_FILES['file1']['name'])) {
    
    $error = false;
    
    if ($_FILES['file1']['size'] > 1024000){
        $error = true;
        $message = "Filen är för stor!";
    } elseif($_FILES['file1']['size'] < 1){
        $error = true;
        $message = "Ingen fil är vald!";
    } 
    
    $url = $upload_dir."/".$_FILES['file1']['name'];
    if (!$error){
    //Hör flyttas den uppladdade filen till rätt mapp i filstrukturen.
        
        move_uploaded_file($_FILES['file1']['tmp_name'], $url);
    } else {
        $pagecontent->error = 'Det finns errors: <br>'.$message;
    }
}