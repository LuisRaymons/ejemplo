<?php
	//clases
	class Persona{
		//Variables
		var $cabello;
		var $manos;
		var $ojos;
		//funciones
		function saludar($nombre){
		}

		function hablar(){

		}
		function correr(){

		}
		function reir(){
		}
	}

//Instancio tio Ramon
$tioramon = new Persona();
$tioramon->cabello = 'corto';
$tioramon->manos ='grande';
$tioramon->ojos = 'cafes';
$tioramon->saludar("Mayra");

//print_r($tioramon->ojos);

//Instancia Mayra
$mayra = new Persona();
$mayra->cabello = 'largo';
$mayra->manos = 'medianas';
$mayra->ojos = 'negros';
$mayra->saludar('tio ramon');

$arraypersonasfull = array();
// agregar las personas a un array
//array_push(array, var)

array_push($arraypersonasfull, $tioramon);
array_push($arraypersonasfull, $mayra);

//print_r(json_encode($arraypersonasfull));

foreach ($arraypersonasfull as $a) {
	print_r($a->cabello . "</br>");
}

?>