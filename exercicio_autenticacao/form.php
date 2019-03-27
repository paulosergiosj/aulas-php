<?php
	
echo $_SESSION['logado']; 
	



?>


<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
</head>
	<body>
		<form action="validacao.php" method="post">
			<p>Nome:<input type="text" name="nome"  maxlength="80"></p>

			<br>
			<p>Idade:<input type="number" name="idade"  max="130"></p>
			<br>
			<p>Sexo:</p>
			<select name="sexo">
	 			<option value="M">M</option>
	 			<option value="F">F</option>
			</select>
			<br>
			<p>CPF:<input type="number" name="cpf"  max="99999999999999"></p>
			<br>
			<p>Endereço:<input type="text" name="endereco"  maxlength="200"></p>
			<br>
			<p>Cidade:<input type="text" name="cidade"  maxlength="40"></p>
			<br>
			<p> <input type="submit" name="Salvar"> </p>
		</form>
	</body>
</html>