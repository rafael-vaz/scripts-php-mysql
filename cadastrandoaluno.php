<?php
//CRIAÇÃO DAS VARIÁVEIS QUE IRÃO RECEBER OS DADOS DO FORMULÁRIO
$nome = $_POST['nome']; 
$cpf = $_POST['cpf'];
$nota = $_POST['nota'];
//CONEXÃO COM O SERVIDOR BRTEC
$conn = mysqli_connect("localhost","root", "", "brtec");
//QUERY PARA INSERIR OS DADOS NA TABELA CADALUNO DO BANCO BRTEC
$result = "INSERT INTO cadaluno (nome, cpf, nota) values ('$nome', '$cpf', '$nota')";
$result_final = mysqli_query($conn, $result);
?>
 