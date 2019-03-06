<?php 

session_start();

$_SESSION['disciplina'] = "Programação para Internet";
$_SESSION['status'] = true;

echo $_SESSION['disciplina'];

echo $_SESSION['status'];


unset($_SESSION);
session_destroy();

session_cache_expire(5);
session_start();
echo session_cache_expire();

if (session_status() <> PHP_SESSION_ACTIVE){
	echo "não existe sessão";
}


 ?>