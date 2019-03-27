<?php 
//conexão
$conexao = mysqli_connect("localhost", "root", "", "aula");

if ($conexao == false){ 
echo mysqli_connect_error();

}

mysqli_query($conexao, "SELECT * FROM usuarios");
echo "Registros encontrados: " . mysqli_affected_rows($conexao);
?>
