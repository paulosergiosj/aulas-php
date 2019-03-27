<?php 
// Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");


// Verificando se a conexão foi bem sucedida.
if ($conexao == false) {
	echo mysqli_connect_error();
}

// Inserindo um registro na tabela.
$SQL = "INSERT INTO usuarios (id, nome, email, user, senha)
	VALUES (NULL, 'Manoel Pereira', 'manezin@hotmail.com', 'manoel', '".password_hash('admin', PASSWORD_BCRYPT)."')";

mysqli_query($conexao, $SQL);

mysqli_close($conexao);
