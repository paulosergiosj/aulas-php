<?php
// Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");


// Verificando se a conexão foi bem sucedida.
if ($conexao == false) {
	echo mysqli_connect_error();
}

// Buscando o registro.
$resultado = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = 9");
while ($registro = mysqli_fetch_array($resultado)) {
	if (password_verify('admin', $registro['senha'])) {
		echo "Senha correta.";
	}
	else {
		echo "Senha incorreta.";
	}	
}

mysqli_close($conexao);
