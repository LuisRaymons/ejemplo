<?php
include("Motor.php")
class Carros extends Motor{
	$llantas;
	$modelo;
	$espejos;
	$asiento;

	public function __construct($nombre){

	}

	function avanzar(){

	}
	function retroceder(){

	}
	function pitar(){

	}
}


$chevy = new Carros("luis");
$chevy->llantas = 'negras';
$chevy->modelo = '2020';
$chevy->espejos = 'claros';
$chevy->asiento = 'cafe';
//Clase motor
$chevy->combustible = 'electrico';
$chevy->marca = 'DHL';
$chevy->modelo = 'negro';


$honda = new Carros();
$honda->llantas = 'negras';
$honda->modelo = '2004'
$honda->espejos = 'polarizado';
$honda->asiento = 'piel' 

?>