
<?php 

// tiene que elegir un personaje del array y mantenerlo durante una hora. 
// xapo tiene que tomar las variables del modal 
// el modal tiene que tomar las variables de donde provino el click


ini_set('display_errors', 'on'); //Borrame cuando me subas

error_reporting(E_ALL);

// VARIABLES Y ARRRAYS

$satoshiNum = 1000;

$numTickets = 2;
$counter = "00:00";




// SELECCIONA MONSTRUOS

$monsters = array("01", "02", "03", "04", "05");

$aleatorias = array_rand($monsters, 2);
$fighter1 = $monsters[$aleatorias[0]] . "\n";
$fighter2 = $monsters[$aleatorias[1]] . "\n";




















