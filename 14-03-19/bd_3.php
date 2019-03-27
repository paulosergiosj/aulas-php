<?php
// Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");


// Verificando se a conexão foi bem sucedida.
if ($conexao == false) {
	echo mysqli_connect_error();
}

// Excluindo um registro na tabela.
$retorno = mysqli_query($conexao, "DELETE FROM usuarios WHERE id = 1");

// Verifica se o registro foi excluído.
if ($retorno <> false) {
	echo "Registro excluído!";
}

mysqli_close($conexao);
