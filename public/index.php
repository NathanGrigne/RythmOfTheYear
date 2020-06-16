<?php
// require '../database/database.php';
/**
 * Routing
 */
define ('URL','http://localhost:8888/');

//Get q param
$q = !empty($_GET['q']) ? $_GET['q'] : 'home';
//define controller
$controller = '404';

if($q == 'home')
{$controller = 'home';} 
// else if ($q == 'about')
// {$controller = 'about';} 

 
//include controller
include '../controllers/'.$controller.'.php';