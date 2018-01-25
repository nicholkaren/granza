<?php 
include('meny_controller.php');
include('includes/validations.php');
$pagecontent = new stdClass;

$pagecontent->title = "SKAPA KONTO";

$errors = array();

// Skapa användare


// Kolla om psw är angivet och att errors är en tom array


if(isset($_POST['create_user']) && $errors === array() ) {
$pagecontent->title = "SKAPA KONTO";  

// Lägg till användaren


    $newPassword= $_POST['input-password'];
    $confPassword = $_POST['confirm_password'];

//psw checkup om det är samma, annars visa error    
    if (!($newPassword === $confPassword) ) {
    global $errors;
    $errors[] = "Löserorden verkar inte stämma överens";

 
} else {

    $validate = array();
    $validate['fname'] = array('stripString','notEmpty' , 'validChars');
    $validate['lname'] = array('stripString','notEmpty', 'validChars');
    $validate['adress1'] = array('stripString','notEmpty');
    $validate['adress2'] = array('stripString','validChars'/*'notEmpty'*/);
    $validate['zipcode'] = array('stripString','validZip','isNumbers');
    $validate['city'] = array('stripString','notEmpty', 'validChars');
    $validate['telefon'] = array('stripString','notEmpty','isNumbers', 'isPhone');
    $validate['email'] = array('stripString','isEmail', 'notEmpty'/*'toLowerCase'*/);
    $validate['level'] = array('stripString','notEmpty', 'isNumbers' );
    $validate['input-password'] = array('stripString','notEmpty', 'isPassword' );
    $validate['confirm_password'] = array('stripString','notEmpty', 'isPassword' );
                

    if($person->isLoggedIn()) {
        $validate['level'] = array('notEmpty', 'isNumbers', 'setLevel');
            } else {

                $validate['level'] = array();
    }

    foreach ($validate as $field => $rules) {

            
        foreach($rules as $rule) {

            $rule($_POST[$field]);

        }

}

    global $pdo;

$sql = "INSERT INTO person (fname, lname, street1, street2, zip, city, phone, email, created_at, level, password, newletter) VALUES (:fname, :lname, :street1, :street2, :zip, :city, :phone, :email, NOW(), :level, :password, :newletter)";

        $stmt = $pdo->prepare($sql);

        $fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$adress1 = $_POST['adress1'];
			$adress2 = $_POST['adress2'];
			$zip = $_POST['zipcode'];
			$city = $_POST['city'];
			$phone = $_POST['telefon'];
			$email = $_POST['email'];
			
            if (isset($_POST['level']) ) {
              $level = $_POST['level'];  
            
            } else {
                    $level = "";
            }
		  
          $newletter = $_POST['newletter'];


            $newPassword = trim($_POST['input-password']);
            $newPassword = hash('sha256', $newPassword);


            $fname = /*removeNationalChars(removeCaps(*/stripString($_POST['fname']);
            $lname = stripString($_POST['lname']);
            $adress1 = stripString($_POST['adress1']);
            $adress2 = stripString($_POST['adress2']);
            $zip = stripString($_POST['zipcode']);
            $city = stripString($_POST['city']);
            $phone = stripString($_POST['telefon']);
            $email = stripString($_POST['email']);
            $level = stripString($_POST['level']);

            //var_dump($lastId);

            $stmt ->bindParam(':fname', $fname);
            $stmt ->bindParam(':lname', $lname);
            $stmt ->bindParam(':street1', $adress1);
            $stmt ->bindParam(':street2', $adress2);
            $stmt ->bindParam(':zip', $zip);
            $stmt ->bindParam(':city', $city);
            $stmt ->bindParam(':phone', $phone);
            $stmt ->bindParam(':email', $email);
            $stmt ->bindParam(':level', $level);
            $stmt ->bindParam(':password', $newPassword);
            $stmt ->bindParam(':newletter', $newletter);

                $stmt->execute();
                $lastId = $pdo->lastInsertId();
            //var_dump($lastId);

                
            if($person->isLoggedIn()) {

                 $pagecontent->p = "ANVÄNDARE UPPDATERAD";
                $_POST = array();

         $pagecontent->p = "ANVÄNDARE UPPDATERAD";
        $_POST = array();
    }
             
      }

            
}    
        require('templates/admin_tpl/create_new_user_tpl.php');
