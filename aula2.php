<?php 
//Calculo de reajuste do salario EXERCICIO 2
$salario = 1000;


	if ($salario >= 1000){
		echo($salario * 0.08) + $salario;
	}else{
	echo($salario * 0.05) + $salario;
	}

//exercicio 3

	$valor = 3;

	if (valor > 0){
		echo "positivo";
	}
	elseif (valor< 0){
		echo"negativo";
	}
	else{
		echo "zero";
	}


 ?>