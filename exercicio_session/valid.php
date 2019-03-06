<?php 

//Requisições GET e POST.


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario != "admin" or $senha != "unifcv")
{
	echo "Usuario ou senha incorretos!";
	echo "<form action='login.php' method='post'><p> <input type='submit' value='Voltar'> </p></form>";
}else{
	
	$_SESSION['logado'] = true;
	header("Location: logado.php");
}

 ?>

