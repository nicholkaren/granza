<?php
$pagecontent = new stdClass;
$pagecontent ->title = "";

$errors = array();


      if (!function_exists('stripString')) {
         function stripString($value) {

        $string = strip_tags($value);
        // echo"strippad ".$string;

        $html = htmlspecialchars($string);
        //echo"charsad ".$html;
        return $html;
        } 
      }  



      /************** FUNKTIONER ****************/


    if (!function_exists('notEmpty')) {
        function notEmpty($value) {
        $value = trim($value);

        if (!isset($value) || $value === "") {
        global $errors;
    
        $errors[] = ($value).'Fyll i fältet';
 
        }
    
    }
}
        

    if (!function_exists('validChars')) {
        function validChars($value) {
  //Kollar att det endast är bokstäver stora/små, binderstreck eller mellanslag 

          $regex_name = "/[a-zA-Z]{2,50}$/";

          if (preg_match($regex_name, $value)){

          } else {
            $errors[] = 'Fyll i ditt namn korretkt';
          }
    }
}


if(!function_exists('validZip') ) {
    function validZip($value) {
        
        //KAN INNEHÅLLA MAX 5 SIFFROR

     global $errors;
    

    $regexp ="/^[0-9]{5}$/";     
    $zip = $value; 
    
    $zip = preg_replace('/\s+/', '', $zip);     
 //   echo "HÄJ".$zip; 
        
        if (preg_match($regexp, $zip)) {
        //isNumbers($zip);
//        echo "zip is valid";
    
    } else {

            $errors[] = 'Fel på postnummer';
    }
    }
}

if(!function_exists('isPassword') ) {
    function isPassword($value) {
        //MINST 6 TECKEN, VARAV EN BOKSTAV PLUS MINST EN SIFFRA 

     global $regexp;
     global $errors;
     $password = $value;
     $regexp  = '/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[\d])\S*$/';
     
       //echo"pass körs"; 
            if (preg_match($regexp, $password)) {
       
       //echo "password is valid";
    
            } else {

            $errors[] = 'Lösenord måste innehålla minst 6 tecken med både bokstäver och siffor';
    }
    }
}



if (!function_exists('isNumbers')) {        
function isNumbers($value) {
 global $errors;
 //   echo "isnumbers körs ";
  $field = $value;
  if(!is_numeric($field)) {
 $errors[] = 'Endast siffror'." ".$field;


        }
    }
}

if(!function_exists('isPhone') ) {
    function isPhone($value) {

    global $errors;
      
    $phone = $value;

    $number = 111111111111111;

        if(strlen($phone < $number) ) {
        //echo "phone is valid";

    } else {

            $errors[] = 'Fyll i ditt telefonnummer korrekt'." ".$phone;
    }
            
}

} 

if(!function_exists('setLevel')) {
function setLevel($value) {
     //kolla att level endast innehåller 0 1 eller 2
    global $errors;
    $level = $value;

    if(strpos($level, "0") === false && (strpos($level, "1") === false && (strpos($level, "2")  === false) ) ){

        $errors[] = 'Ogiltig behörighet';
    }
    }

}

        //*************KOLLAR ATT DET ÄR EN EMAIL***************//
 
 if (!function_exists('isEmail')) {
        function isEmail($value){
        $email = $value;
        global $errors;

            if (strpos($email, "@") === false){
        $errors[]= $email.'Skriv om din e-post';
        //function toLowerCase($email);
    } 
    }
 }
  

  if (!function_exists('minLength')) {
  function minLength() {
    $value = $_POST[$field];
 
    if(!isset($value[5])) {
        $errors[]= $value.'Fältet innehåller för få tecken';
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
 //} //end if post isset
