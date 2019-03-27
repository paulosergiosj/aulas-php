<?php
// Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");


// Verificando se a conexão foi bem sucedida.
if ($conexao == false) {
	echo mysqli_connect_error();
}

// Inserindo um registro na tabela.
mysqli_query($conexao, 
	"INSERT INTO usuarios (id, nome, email, user, senha)
	VALUES (NULL, 'João José', 'jose@gmail.com', 'jose', 'jose')");

mysqli_close($conexao);
