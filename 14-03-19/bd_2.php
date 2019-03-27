<?php
// Função para conexão com o banco de dados.
$conexao = mysqli_connect("localhost", "root", "", "aula");


// Verificando se a conexão foi bem sucedida.
if ($conexao == false) {
	echo mysqli_connect_error();
}

// Buscando registros no banco.
mysqli_query($conexao, "SELECT * FROM usuarios");
echo "Registros encontrados: ". mysqli_affected_rows($conexao);

echo "<br>"; echo "<br>";
// Buscando registros e organizando em array para exibição.
$resultado = mysqli_query($conexao, "SELECT * FROM usuarios");
while ($registro = mysqli_fetch_array($resultado)) {
	echo "Nome: ".$registro['nome'];
	echo "<br>";
	echo "E-mail: ".$registro['email'];
	echo "<br>";
	echo "Usuário: ".$registro['user'];
	echo "<br>";
	echo "<br>";
}

mysqli_close($conexao);
