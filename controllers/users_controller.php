<?php
 require('templates/admin_tpl/admin_header.php');
$pagecontent = new stdClass;
$pagecontent->title = 'Användare';
include('meny_controller.php');

$sql = "SELECT * FROM person";

        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
        $result = $stmt->fetchAll();

        //BAKGRUNDBILD
        echo '<img class="background" src="img/products/big/marble-wallpaper-white.jpg">';
//VITA DIVEN
       echo '<div id ="memberlist" class="all_product">';
        echo "<table class='list-wrapper'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Användarid</th>";
        echo "<th>Förnamn</th>";
        echo "<th>Efternamn</th>";
        echo "<th>Email</th>";
        /*echo "<th>Adress 1</th>";
        echo "<th>Adress 2</th>";
        echo "<th>Postnummer</th>";
        echo "<th>Stad</th>";
        echo "<th>Telefon</th>";*/
        echo "<th>Nyhetsbrev</th>";
        echo "<th>Skapad</th>";
        echo "<th>Uppdaterad</th>";
        echo "<th>Behörighet</th>";
        echo "<th>Redigera</th>";
        echo "</tr>";
        echo "</thead>";
    
   if (count($result)> 1){
       
       
      /*echo $pagecontent->title = "<h2 class='user_list_header'>Medlemmar hos granza</h2>";*/
     
        

        foreach($result as $user) {
      
      $pagecontent->fname = $user["fname"];
      $pagecontent->lname = $user["lname"];
      $pagecontent->email = $user["email"];
      $pagecontent->street1 = $user["street1"];
      $pagecontent->street2 = $user["street2"];
      $pagecontent->zip = $user["zip"];
      $pagecontent->city = $user["city"];
      $pagecontent->phone= $user["phone"];
      $pagecontent->newletter= $user["newletter"];
      $pagecontent->created_at= $user["created_at"];
      $pagecontent->updated_at= $user["updated_at"];
      $pagecontent->level= $user["level"];
      $pagecontent->uid = $user["person_id"];


require('templates/parts/user_list_tpl.php');

    } 
    
    echo "</table>";
       

}
