<?php

$Continue = true;

while ($Continue) {
	//ingresa los numeros
	$num1 = (int) readLine("ingresa el primer numero: ");
	$num2 = (int) readLine("ingresa el sugundo numero: ");

	//ingresa la operacion deseada
	$operacion = readLine("Ingresa la operacion a realizar (+, -, /, *): ");

	//busca la opciones disponibles
	switch ($operacion) {
		case "+":
			$resultado = $num1 + $num2;
			break;

		case "-":
			$resultado = $num1 - $num2;
			break;

		case "*":
			$resultado = $num1 * $num2;
			break;

		case "/":
			$resultado = $num1 / $num2;
			break;

		default:
			echo "ingresa una de la opciones disponibles";	
	}

	echo "el resultado es: " . $resultado . "\n";

	$continuar = readLine("Deseas hacer otra operacion? (Si/No): ");
	
	//Pregunta si quiere hacer otra operacio	
	////Pregunta si quiere hacer otra operacion
	if ($continuar == "Si") {

		$Continue = true;

	} elseif ($continuar == "No") {

		$Continue = false;

	}
}
?>
