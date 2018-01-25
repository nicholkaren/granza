<?php //Här hämtas alla ordrar från DB samt uppdatera status på order och skickar iväg bekräftelsemejl.
include('meny_controller.php');

$pagecontent = new stdClass;
$pagecontent->title = "Alla ordrar";


//hämtar och visar alla ordrar när man söker på order.
if (($_GET['action'] === 'orders') ||($_GET['action'] === 'searchOrder') ){
    //Logiken om man har tryckt på sök knappen
    if($_GET['action'] === 'searchOrder' && $_POST['order_search'] !== ""){ 
        if (isset($_POST['order_search'])){
            //sökresultatet
              $sql1 = "SELECT * FROM orders WHERE order_id = :id;";         
                $stmt1 = $pdo->prepare($sql1);
                $stmt1->bindParam(':id', $_POST['order_search']);
                $stmt1->execute();
                $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
                $pagecontent->title = "Sökresultat";
            }
        
    } else {
            // Hämtar alla ordrar
            $sql1 = "SELECT  * FROM orders;";         
                $stmt1 = $pdo->prepare($sql1);
                $stmt1->execute();
                $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    }

        // Hämtar status till selects, aktiv eller inaktiva
        $sql = "SELECT * FROM order_status";    
            $stmt = $pdo->prepare($sql);
            $stmt->execute();  
            $result = $stmt->fetchAll();

        //Vi skapar en array för att lägga reultatet av sql i
        $pagecontent->status = array();

        // loopar över resultatet och lägger in i arrayen $pagecontent->status
        foreach ($result as $status) {
            $currstatus = array();
            $currstatus['title'] = $status['title'];
            $currstatus['status_id'] = $status['order_status_id'];
            $pagecontent->status[] = $currstatus;
        }

 if (!empty($result1)){
        //Loppar vi över $result1 och varje element i resultat blir $order
        foreach ($result1 as $orderRow){
            // En tom array där vi placerar element från $order som vi loopar över
            $currorder = array();
            $currorder['Datum'] = $orderRow['created_at'];
            $currorder['OrderNr'] = $orderRow['order_id'];
            $currorder['Person_id'] = $orderRow['person_id'];
            $currorder['Payement_id'] = $orderRow['payment_id'];
            $currorder['Shipper_id'] = $orderRow['shipper_id'];
            $currorder['Status'] = $orderRow['order_status_id'];
           
            //Allt som ligger i $currorder läggs i $pagecontent->order[] som vi skapar. 
            $pagecontent->orders[] = $currorder;
        }

            //Här trycker vi in allt i $pagecontent
            $pagecontent->Datum = $orderRow['created_at'];
            $pagecontent->OrderNr = $orderRow['order_id'];
            $pagecontent->Person_id = $orderRow['person_id'];
            $pagecontent->Payement_id = $orderRow['payment_id'];
            $pagecontent->Shipper_id = $orderRow['shipper_id'];
            $pagecontent->Status = $orderRow['order_status_id'];
        } 

    //admin order template
    require('templates/admin_tpl/admin_order_tpl.php');

}
//hämtar orderinformation om specifik order.
if ($_GET['action'] === 'singleOrder'){
  
    $sql = "SELECT * FROM order_items WHERE order_id = :oid;";         
    $stmt = $pdo->prepare($sql);
    $stmt ->bindParam(':oid', $_GET['oid']);
    $stmt->execute();
    $result = $stmt->fetchAll();
   
        $totalsumma = 0;
        foreach ($result as $orderItemRow){
            // Här skapar vi en tom array där vi placerar element från $order som vi loopar över
            
            $currItem = array();
            $currItem['OrderNr'] = $orderItemRow['order_id'];
            $currItem['Produkt_id'] = $orderItemRow['product_id'];
            $currItem['Pris'] = $orderItemRow['price'];
            $currItem['Antal'] = $orderItemRow['quantity'];        
            $currItem['Total'] = $orderItemRow['price'] *  $orderItemRow['quantity']; 
            $totalsumma += $currItem['Total'];
            
            //Allt som ligger i $currorder läggs i $pagecontent->order[] som vi skapar. 
            $pagecontent->orderItems[] = $currItem;
        }

            //Här trycker vi in allt i $pagecontent
            $pagecontent->OrderNr = $orderItemRow['order_id'];
            $pagecontent->Produkt_id = $orderItemRow['product_id'];
            $pagecontent->Pris = $orderItemRow['price'];
            $pagecontent->Antal = $orderItemRow['quantity'];
            $pagecontent->Total = $orderItemRow['price'] * $orderItemRow['quantity']; 
    
    
    require('templates/admin_tpl/single_order_tpl.php'); 
    
     $sql1 = "SELECT  * FROM
                    (SELECT created_at as datum, orders.order_id, title as status
                    FROM orders, order_status, order_items
                    WHERE orders.order_status_id = order_status.order_status_id
                    AND orders.order_id = order_items.order_id = :oid
                    GROUP BY orders.order_id) AS t1
                    INNER JOIN
                    (SELECT order_id, SUM(price*quantity)
                    FROM order_items
                    GROUP BY order_id) AS t2
                    ON t1.order_id = t2.order_id;";
        $stmt1 = $pdo->prepare($sql1);
        $stmt1 ->bindParam(':oid', $_GET['oid']);
        $stmt1->execute();
        
        $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
}

//Uppdaterar orderstatus i databasen
if ($_GET['action'] === 'updateOrderStatus'){
    
$oid = $_GET['oid'];

    // Om man har tryckt på button -updatestatus- finns updateStatus i $_POST
    if (array_key_exists('updateStatus', $_POST)){
        
        $sql = "UPDATE orders SET order_status_id = :order_status, updated_at = NOW() WHERE order_id = :order_id";
        $stmt = $pdo->prepare($sql);
        $status = $_POST['status']['order'];
        $stmt->bindParam(':order_id', $oid);
        $stmt->bindParam(':order_status', $status);
        $stmt->execute();
        
    //skickar mejl till person med uppdaterad orderstatus
    $sql = "SELECT title FROM order_status WHERE order_status_id = :order_status";    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':order_status', $status);
    $stmt->execute();  
    $result = $stmt->fetch();

    $msg = "Hej!\n Din order är nu ".strtolower($result['title'])."! \n Vänligen, Lorenzo Granza";
    $msg = wordwrap($msg,70);

    // skicka mejl
    mail("someone@example.com","Din order",$msg);

    }//skickas tillbaka till action=orders
     header("Location:?action=orders");
}
