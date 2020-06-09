<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<center><h1>Calculadora</h1></center>
		<center><table border="5" cellpadding="9" cellspacing="9"></center>

			<tr>
				<th colspan="5" align="right">
					<?php

						// Entrada
						$valor1 = $_GET['valor1'];
						$valor2 = $_GET['valor2'];
						$operacao = $_GET['operacao'];
						$resultado=0;

						// Processamento
						switch($operacao) {

							case '+': $resultado = $valor1 + $valor2;
									  echo "$resultado";
									  break;

							case '-': $resultado = $valor1 - $valor2;
									  echo "$resultado";
									  break;

							case '*': $resultado=$valor1*$valor2;
									  echo "$resultado";
									  break;

							case '/': $resultado=$valor1/$valor2;
									  echo "$resultado";
									  break;

						}

					?>
				</th>
			</tr>

			<tr align="center">
				<th>MC</th>
				<th>MR</th>
				<th>MS</th>
				<th>M+</th>
				<th>M-</th>
			</tr>

			<tr align="center">
				<th>←</th>
				<th>CE</th>
				<th>C</th>
				<th>±</th>
				<th>√</th>
			</tr>

			<tr align="center">
				<th>7</th>
				<th>8</th>
				<th>9</th>
				<th>/</th>
				<th>%</th>
			</tr>

			<tr align="center">
				<th>4</th>
				<th>5</th>
				<th>6</th>
				<th>*</th>
				<th>1/x</th>
			</tr>

			<tr align="center">
				<th>1</th>
				<th>2</th>
				<th>3</th>
				<th>-</th>
				<th rowspan="2">=</th>
			</tr>

			<tr align="center">
				<th colspan="2">0</th>
				<th>,</th>
				<th>+</th>
			</tr>

		</table>
	</body>
</html>
