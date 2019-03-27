<?php 
//Requisições GET e POST.


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario != "UNIFCV" or $senha != "web45semestre")
{
	echo "Usuario ou senha incorretos!";
	echo "<form action='index' method='post'><p> <input type='submit' value='Voltar'> </p></form>";
}else
{	
	session_start();
	$_SESSION['logado'] = true;
	header("Location: form.php");
}


 ?>