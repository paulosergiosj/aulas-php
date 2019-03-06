<?php 

	//Variaveis
	$texto = "Analise e Desenvolvimento de Sistemas";
	$inteiro = 2019;
	$decimal = 50.25;

	//Operadores Matemáticos

	echo $inteiro + $decimal;
	echo "<br>";
	echo $inteiro - $decimal;
	echo "<br>";
	echo $inteiro / $decimal;
	echo "<br>";
	echo $inteiro * $decimal;
	echo "<br>";

	//Concatenação
	echo $texto.$texto
	echo "<br>";
	//Arrays
	$alunos =[1,2,5,7,10];
	echo "<br>";
	echo $alunos[2];

	//PHP do Jeito Certo: Convenção de identação PHP

	$numero = 3;

	switch($numero){
		case 1:
			echo "valor ".$numero;
			break;
		case 2:
			echo"valor ".$numero;
			break;
		case 3:
			echo "valor ".$numero;
			break;
		case 4:
			echo "valor ".$numero;
			break;
		
	}

 ?>