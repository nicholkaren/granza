<?php
// create session_start();
session_start();
//session_unset();
//session_destroy();


if (!isset($_SESSION['cart']))
  $_SESSION['cart'] = array();

//include settings
require_once('includes/settings.php');

// include dbcon
require_once('includes/dbcon.php');


$routes = array(
'default' => 'homepage_controller.php',
);

if(isset($_GET['action'])){
    if (is_file('controllers/'.$routes[$_GET['action']])){
        require('controllers/'.$routes[$_GET['action']]);
    } else {
    	
        require('templates/404.php');
    }
    
} else {
    require('controllers/'.$routes['default']);
}