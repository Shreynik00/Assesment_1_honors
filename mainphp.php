<?php 

 if(!empty($_POST))
 {
    $username=$_POST['user'];
    $favourite=$_POST['food'];
 }
 date_default_timezone_set('Asia/Kolkata');

$currentHour = date("H");

if($currentHour >= 2 && $currentHour <= 11) {
     $greeting = "Morning";
 }
  elseif ($currentHour >= 11 && $currentHour < 16) {
     $greeting = "Afternoon";
 }
  elseif ($currentHour >= 16 && $currentHour < 21) {
     $greeting = "Evening";
 }
  else {
     $greeting = "Night";
 }

include 'assesment.php';
?>