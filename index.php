<?php

ob_start();

ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL | E_STRICT);
session_start();
$page = $_SERVER['REQUEST_URI'];
$page = strtok($page, '?');

include("controllers/db.php");
include("controllers/functions.php");

$file = false;
$titel = '';
$template = true;

if($page=="/"||$page=="/setup1") {
  $file = "setup1.php";
} else if($page=="/setup2") {
  $file = "setup2.php";
} else if($page=="/setup3") {
  $file = "setup3.php";
} else if($page=="/setup4") {
  $file = "setup4.php";
} else if($page=="/overview") {
  $file = "overview.php";
}


if($file) {
    if($template) {
      include_once("tpl/head.php");
    }

    
    include_once("inc/".$file);


    if($template) {
      include_once("tpl/bottom.php");
    }
//404
} else {
    header("HTTP/1.0 404 Not Found"); 
    echo '<html>Siden blev ikke fundet!</html>'; 
}


?>