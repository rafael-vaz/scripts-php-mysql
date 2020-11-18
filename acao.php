<?php 
$nome = $_POST ["nome"];
$sobrenome = $_POST ["sobrenome"];

// echo $nome . $sobrenome; 

$link = mysqli_connect ("localhost", "root", "", "test");

if (!$link) { echo "Erro na conexão com o banco de dados!"; mysqli_connect_errno();} 
else { echo "DADOS CASTRADOS COM SUCESSO!";}

$resultado = "INSERT INTO meubanco (nome , sobrenome) values ('$nome', '$sobrenome')";
$resultado_final = mysqli_query($link,$resultado);

?>