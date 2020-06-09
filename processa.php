<?php

	// Entrada
	$valor1 = $_GET['valor1'];
	$valor2 = $_GET['valor2'];
	$operacao = $_GET['operacao'];
	$resultado=0;

	// Processamento
	switch($operacao) {

		case '+': $resultado = $valor1 + $valor2;
				  echo "Resultado: $resultado";
				  break;

		case '-': $resultado = $valor1 - $valor2;
				  echo "Resultado: $resultado";
				  break;

		case '*': $resultado=$valor1*$valor2;
				  echo "Resultado: $resultado";
				  break;

	}

?>
