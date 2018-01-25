<?php

$pagecontent = new stdClass;
$pagecontent ->title = "";

$errors = array();

if (array_key_exists('checkout', $_POST)) {

/

    
/* Functions */
    if (!function_exists('notEmpty')) {
        function notEmpty($value) {
        $value = trim($value);

    if (!isset($value) || $value === "") {
    global $errors;
    
    $errors[] = ($value).'Fältet får inte vara tomt!';
 
        }
    
    }
}

    if (!function_exists('validChars')) {
        function validChars($value) {
  //Kollar att det endast är bokstäver stora/små, binderstreck eller mellanslag Nån typ av regex
    }
}

    if (!function_exists('maxChars')) {
        function maxChars($value) {
//KOLLAR ATT DET MAX ÄR 50 TECKEN I STRÄNGEN
    }
} 

if(!function_exists('validAdress') ) {
    function validAdress($value) {
        //KAN INNEHÅLLA BOKSTÄVER, SIFFROR SAMT MELLANSLAG : OCH /
    }
}

if(!function_exists('validZip') ) {
    function validZip($value) {
        //KAN INNEHÅLLA MAX 5 SIFFROR
     global $errors;
    

    $regexp ="/^[0-9]{5}$/";     
    $zip = $value; 
    
    $zip = preg_replace('/\s+/', '', $zip);     
        
        if (preg_match($regexp, $zip)) {
        isNumbers($zip);
    
    } else {

            $errors[] = 'Fel postkod';
    }
    }
}

if(!function_exists('isPassword') ) {
    function isPassword($value) {
        //MINST 6 BOKSTÄVER PLUS EN SIFFRA
    }
}



if (!function_exists('isNumbers')) {        
function isNumbers($value) {
 global $errors;
    echo "isnumbers körs ";
  $field = $value;
  if(!is_numeric($field)) {
 $errors[] = 'Fältet får endast innehålla siffror'." ".$field;


        }
    }
}

if(!function_exists('isPhone') ) {
    function isPhone($value) {

    global $errors;
      
    $phone = $value;

    $number = 111111111111111;


        if(strlen($phone < $number) ) {
        
        echo "phone is valid";

    } else {

            $errors[] = 'Skriv om ditt telefonnummer'." ".$phone;
    }
            
}

} 


if(!function_exists('setLevel')) {
function setLevel($value) {
     //kolla att level endst innehåller 0 1 eller 2
}
   
}


/* Kollar att det är email */
 if (!function_exists('isEmail')) {
        function isEmail($value){
        $email = filter_var($value, FILTER_SANITIZE_EMAIL);
        global $errors;

           // echo'körs isEmail ';
            if (strpos($email, "@") === false){
        $errors[]= $value.'Skriv om din e-post';
    }else{
               // echo'filtrerad '.$email;
            }
     
        }}

  if (!function_exists('minLength')) {
  function minLength() {
    $value = $_POST[$field];
 
    if(!isset($value[5])) {
        $errors[]= $value.'Fältet innehåller för få tecken!';
        global $errors;
    }
    }
}
  

  if (!function_exists('toLowerCase')) {        
function toLowerCase($value) {
    $str = $value;
    $str = strtolower($str);
   
    }
}
    
    
$validate = array();

    $validate['email'] = array('isEmail', 'notEmpty', 'toLowerCase');
                

    /*if($person->isLoggedIn()) {
        $validate['level'] = array('notEmpty', 'isNumbers');
            } else {

                $validate['level'] = array();
   }*/




    foreach ($validate as $field => $rules) {

            
        foreach($rules as $rule) {

            $rule($_POST[$field]);


            
        }

    }
        
 }
