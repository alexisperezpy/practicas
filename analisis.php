<?php

	print_r($_REQUEST);
	echo "</br>";

	require_once ('main.php');

	$palabra0 = strtolower($_REQUEST["palabra0"]);
	$palabra1 = strtolower($_REQUEST["palabra1"]);
	$palabra2 = strtolower($_REQUEST["palabra2"]);

	if($palabra0  == $palabras[0]){
		echo "Has acertado, la palabra ingresada es correcta!!";
	}else{
		echo "Error! La palabra correcta es: " . $palabras[0];
	} 

	echo " </br> ";

	if($palabra1 == $palabras[1]){
		echo "Has acertado, la palabra ingresada es correcta!!";
	}else{
		echo "Error! La palabra correcta es: ". $palabras[1];
	}
	echo " </br> ";

	if($palabra2 == $palabras[2]){
		echo "Has acertado, la palabra ingresada es correcta!!";
	}else{
		echo "Error! La palabra correcta es: ". $palabras[2];
	}


?>