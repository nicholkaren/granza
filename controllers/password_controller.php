<?php
include('meny_controller.php');
include('includes/token.php');
include('includes/validations.php');
//password

$pagecontent = new stdClass;
$pagecontent->title = "ÄNDRA LÖSENORD";
$pagecontent->h2 = "ANGE ANVÄNDAR-ID";
$newPassword = "";

getToken();


        /**** Check om man sökt efter användar-id för att ändra anv lösenord */
        if (isset($_POST['search_user']) && $_POST['search_user'] === "")  {
    
       $pagecontent->h2 = "ANGE ETT ID";

        } else {


        /* Här hämtas sökresultatet */
        $sql = "SELECT * FROM person
        WHERE person_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $_POST['search_user']);
            $stmt->execute();
            $result = $stmt->fetch();


        /*Kolla om det finns ett resultat 
        och isf sätt variabler */

        if (count($result) > 1){

            $pagecontent->user_id = $result['person_id'];
            $pagecontent->fname = $result['fname'];
            $pagecontent->lname = $result['lname'];
            
            $pagecontent->h2 = "Medlems nummer ".$result['person_id']."<br>"." "."Namn:  ".$result['fname']." ".$result['lname'];
            
             $pagecontent->title;

                $user = new Person();
                
                $userToChange = $_POST['search_user'];

                $user->setId($userToChange);


            } else if (isset($_POST['search_user']) && $result !== TRUE) {

                 $pagecontent->title = "Medlems nummer saknas";
            

            }

        if (isset($_POST['new_password']) && strlen($_POST['new_password']) > 0 && $_POST['new_password'] === $_POST['confirm_password'] ) {
            

            $newPassword = htmlentities($_POST['new_password']);
            $newPassword = trim($_POST['new_password']);
            $newPassword = hash('sha256', $newPassword); 

            $user->changePassword($newPassword);


            $pagecontent->title = "LÖSENORDET ÄR NU ÄNDRAT";
            $pagecontent->title;

        }


} 



require('templates/admin_tpl/change_password_tpl.php');
