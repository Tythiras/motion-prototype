<?php

ob_start();

ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL | E_STRICT);
session_start();
$page = $_SERVER['REQUEST_URI'];
$page = strtok($page, '?');

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
} else if($page=="/overview2") {
  $file = "overview_circle.php";
} else if($page=="/assignment") {
  $file = "assignment.php";
}

$assignments = [
  ["title" => "Lav 5 armbøjninger", "time" => "12:00", "icon"=>"fa fa-dumbbell"],
  ["title" => "Lav 5 englehop", "time" => "13:43", "icon"=>"fa fa-dumbbell"],
  ["title" => "Spis noget mad", "time" => "14:56", "icon"=>"fa fa-dumbbell"],
  ["title" => "Lorem ipsum", "time" => "16:20", "icon"=>"fa fa-dumbbell"],
  ["title" => "Lorem iDolemar", "time" => "16:50", "icon"=>"fa fa-quidditch"],
  ["title" => "Lav 5 armbøjninger", "time" => "12:00", "icon"=>"fa fa-bicycle"],
  ["title" => "Lav 5 armbøjninger", "time" => "12:00", "icon"=>"fa fa-bicycle"],
  ["title" => "Lav 5 armbøjninger", "time" => "12:00", "icon"=>"fa fa-bicycle"],
];

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