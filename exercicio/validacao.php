<?php 
require_once(validalogin.php);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$aux = 0;


if (strlen ( $nome ) < 5 or  strlen ( $nome ) >80 )
{
	$aux+=1;
	echo "Nome com tamanho inválido";
	echo "<br>";

}


if(strlen($sexo) != 1)
{
	$aux+=1;
	echo "O Sexo não pode estar vazio!";
	echo "<br>";

}
if (strlen($cpf)!=14)
{
	$aux+=1;
	echo"CPF incorreto!";
	echo"<br>";
}


if(strlen($endereco) > 200)
{
	$aux+=1;
	echo "Endereço Muito grande!";
	echo "<br>";

}
if ($sexo == "m" or $sexo == "M")
{
	$sexo = "Masculino";
}
elseif($sexo == "f" or $sexo == "F")
{
	$sexo = "Feminino";
}else
{
	echo "Sexo inválido!";
	echo "<br>";
}
if ($aux == 0)
{
	echo "Nome: ".$nome;
	echo "<br>";
	echo "Idade: ".$idade." anos";
	echo "<br>";
	echo "Sexo: ".$sexo;
	echo "<br>";
	echo "CPF: ".$cpf;
	echo "<br>";
	echo "Endereço: ".$endereco;
	echo "<br>";
	echo "Cidade: ".$cidade;
	echo "<br>";
}
echo "<form action='index' method='post'><p> <input type='submit' value='Voltar'> </p></form>";














 ?>