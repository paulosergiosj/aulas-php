<?php 


 $var = 6;

 function tabuada ($valor)
{
for ($i=1; $i <= 10 ; $i++) { 
	$resultado = $valor*$i;
	echo "".$valor." X ".$i." = ".$resultado;
	echo"<br>";
}
}


tabuada($var);



 ?>