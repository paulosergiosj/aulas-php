<?php 

$conexao=mysqli_connect("localhost","root","","aula");



 mysqli_query($conexao,"
 	INSERT INTO usuarios(id,nome,email,user,senha)
 	VALUES (NULL,'Gilson Ilson','Gi@ilson.com','Gilson','gilson') ");

  mysqli_query($conexao,"
 	INSERT INTO usuarios(id,nome,email,user,senha)
 	VALUES (NULL,'Cleber Leber','Cleber@Leber.com','Cleber','Leber') ");

   mysqli_query($conexao,"
 	INSERT INTO usuarios(id,nome,email,user,senha)
 	VALUES (NULL,'Jhonson E Jhonsons','Kude@boi.com','jonson','oi') ");
 ?>