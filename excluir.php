<?php 
session_start();
include_once("conexao.php");
$id = $_GET['id'];
$result = "DELETE FROM dados WHERE id = $id";
mysqli_query($conn,$result);
header("Location:consulta.php");
 $_SESSION['msg'] = "<p style = 'color:green'>Dados deletados com sucesso!</p>";
?>