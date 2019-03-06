<?php 

if (@$_SESSION['logado'] != true)
		header("Location: login.php");



echo "Usuario LOGADO";



 ?>