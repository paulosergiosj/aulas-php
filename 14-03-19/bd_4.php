<?php
// Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");


// Verificando se a conexão foi bem sucedida.
if ($conexao == false) {
	echo mysqli_connect_error();
}

// Alterando um registro.
$retorno = mysqli_query($conexao, "UPDATE usuarios SET nome = 'Renan Hagiwara' WHERE id = 5");

// Verifica se o registro foi excluído.
if ($retorno <> false) {
	echo "Registro alterado com SUCESSO!";
}

mysqli_close($conexao);
