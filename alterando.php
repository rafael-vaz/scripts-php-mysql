<?php 
session_start();
include_once("conexao.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$disciplina = $_POST['disciplina'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$result = "UPDATE dados SET nome = '$nome', disciplina = '$disciplina', nota1 = '$nota1', nota2 = '$nota2', nota3 = '$nota3' WHERE id = $id"; 
mysqli_query($conn, $result);

header ("Location:consulta.php");
$_SESSION['msg'] ="<p style = 'color:green'>Dados alterados com sucesso!</p>";

?>