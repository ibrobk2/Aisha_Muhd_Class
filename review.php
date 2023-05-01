<?php

// $cars = ["Honda", "BMW", "Toyota"];

// array_push($cars, "Hyuandai");
// array_push($cars, "Benz", "Camry");

// echo count($cars);

// $i = 0;

// while ($i<count($cars)){
//     echo $cars[$i]."<br>";
//     // $i+=1;
//     $i = $i+1;
// }

// foreach($cars as $car){
//     echo $car."<br>";
// }

session_start();



$details = ['name'=>"Aminatu", 'age'=>27, 'address'=>"MLF"];


$_SESSION['deta'] = $details;
// echo $details['name'];

// foreach($details as $info){
//     echo $info."<br>";
// }




?>