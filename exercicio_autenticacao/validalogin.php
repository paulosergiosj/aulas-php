<?php 
//Requisições GET e POST.
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario != "UNIFCV" or $senha != "web45semestre")
{
	echo "Usuario ou senha incorretos!";
	echo "<form action='index' method='post'><p> <input type='submit' value='Voltar'> </p></form>";
}else
{
	$_SESSION['logado'] = true;
	header("Location: form.php");
}


 ?>