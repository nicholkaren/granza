<?php // här är logiken för att kunna redigera en medlem.
$pagecontent= new stdClass;
include('meny_controller.php');

$errors = array();
	
	$pagecontent->title ="REDIGERA KONTO";
	$pagecontent->h2 ="Medlems ID ".$_GET['uid'];


// Sätt get till användare vars konto skall uppdateras
if(isset($_GET['uid'])) {

$userToChange = $_GET['uid'];

// Hämta all info från databasen och läs in i formuläret
$sql= "SELECT * FROM person WHERE person_id = {$userToChange}";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetch();


}
require('templates/admin_tpl/edit_user_tpl.php');
