<?php 
//Requisições GET e POST.
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//validação de dados


 //is_numeric($usuario); //verifica se é numérico
if(valida_campo($usuario) ==true){

    echo "Funcionou";
}
 



 ?>