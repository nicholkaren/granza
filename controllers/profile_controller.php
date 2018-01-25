<?php 
//Här finns all logik kring när användaren är inloggad samt utloggad 
$pagecontent = new stdClass;
include('meny_controller.php');
require('classes/Customer_class.php');
require('classes/Admin_class.php');
include('includes/token.php');


//Om personen loggar ut så hamnar den på default dvs startpage.
if ($_GET['action'] === "logout"){
    $person->logOut();
    // Redirect to login page after logout.
    //destroyToken();
    header("Location:?action=login");
}

$pagecontent->title = "LOGGA IN";
$pagecontent->h2 = "VÄLKOMMEN ATT LOGGA IN";

//KOLLA OM DU ÄR INLOGGAD OCH AVGÖR OM ADMIN 
getToken();
    if($person->isLoggedIn()) {
       
        if ($person->isAdmin() ){

//HÄMTA INFO FRÅN DB OM ADMIN
            $person->getUserInfoFromDB();

            $pagecontent->title = "Benvenuto ".$person->getUserInfo('fname')."!";

            require('templates/admin_tpl/admin_startpage.php');
            
            $id = $person->getId();
            $admin = new Admin();
            $admin->setId($id);
         
        
        } else { //HÄMTA INFO OM INLOGGAD GÄST
            // Ska skapas en costumer objekt 
            $id = $person->getId();
            $user = new Customer();
            $user->setId($id);
            $result1 = $user->getOrders();
         
          
        
            $sql= "SELECT * FROM person WHERE person_id = {$person->getId()}";
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if (!empty($result1)){
                //Loppar vi över $result1 och varje element i resultat blir $order
                foreach ($result1 as $orderRow){
                    // Skappar vi en tom array där vi placerar element från $order som vi loopar över
                    $currorder = array();
                    $currorder['datum'] = $orderRow['datum'];
                    $currorder['order_id'] = $orderRow['order_id'];
                    $currorder['status'] = $orderRow['status'];
                    $currorder['summa'] = $orderRow['SUM(price*quantity)'];
                    //Allt som ligger i $currorder läggs i $pagecontent->order[] som vi skapar. 
                    $pagecontent->orders[] = $currorder;
                }

                    //Här trycker vi in allt i $pagecontent
                    $pagecontent->order_id = $orderRow['order_id'];
                    $pagecontent->datum = $orderRow['datum'];
                    $pagecontent->status = $orderRow['status'];
                    $pagecontent->summa = $orderRow['SUM(price*quantity)'];

            } else {
                    $pagecontent->order_id = "";
                    $pagecontent->datum = "";
                    $pagecontent->status = "";
                    $pagecontent->summa = ""; 
            }

            require('templates/admin_tpl/customer_tpl.php'); //Denna jäveln behövde ligga i admin_tpl för att routa rätt
        }
    
   } else {
        
        require('templates/parts/login_tpl.php');
   }
