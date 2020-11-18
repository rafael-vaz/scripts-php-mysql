<?php 
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING); 
$disciplina = filter_input(INPUT_POST,'disciplina', FILTER_SANITIZE_STRING);
$nota1 = filter_input(INPUT_POST,'nota1', FILTER_SANITIZE_STRING);
$nota2 = filter_input(INPUT_POST,'nota2', FILTER_SANITIZE_STRING);
$nota3 = filter_input(INPUT_POST,'nota3', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Disciplina: $disciplina <br>";
//echo "Nota 01: $nota1 <br>";

$result = "INSERT INTO dados (nome, disciplina, nota1, nota2, nota3) VALUES ('$nome', '$disciplina', '$nota1', '$nota2', '$nota3')";
$result_final = mysqli_query($conn, $result);

if (mysqli_insert_id($conn)) {
$_SESSION['msg'] = "<p style = 'color:green;'>Dados cadastrados com sucesso!</p>";
header ("Location: cadastro.php");} 

else { 
$_SESSION['msg'] = "<p style = 'color:red;'>Dados não cadastrados com sucesso!</p>";
header ("Location: cadastro.php");}

?>