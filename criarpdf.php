<?php

require 'fpdf/fpdf.php';

$pdf = new fpdf ('P', 'pt', 'A4');
$pdf -> AddPage();
$pdf -> Image ('imagens/logo.jpg');
$pdf -> SetFont ('arial', '', 12);
$pdf -> Cell (0, 30, "BOLETIM DE NOTAS", 0, 1, 'L');
$pdf -> Cell (0, 1, '', "B", 1, 'C');
$pdf -> ln (20);  


include_once("conexao.php");

$id = $_GET['id'];

$result = "SELECT * FROM dados WHERE id = $id";
$result_final = mysqli_query($conn, $result);
while ($linha = mysqli_fetch_array($result_final)) {
	
	$pdf -> SetFont('arial', 'B', 12);
	$pdf -> Cell(30, 20, "ID: ", 0, 0, 'L');
	$pdf -> setFont('arial', '', 12);
	$pdf -> Cell(0, 20, $linha['id'], 0, 1, 'L');
	
	$pdf -> SetFont('arial', 'B', 12);
	$pdf -> Cell(100, 20, "Nome do Aluno: ", 0, 0, 'L');
	$pdf -> setFont ('arial', '', 12);
	$pdf -> Cell(0, 20, $linha['nome'], 0, 1, 'L');
	
	$pdf -> SetFont('arial', 'B', 12);
	$pdf -> Cell(100, 20, "Disciplina: ", 0, 0, 'L');
	$pdf -> setFont('arial', '', 12);
	$pdf -> Cell(0, 20, $linha['disciplina'], 0, 1, 'L');
	
	$pdf -> Ln(20);
	
	$pdf -> SetFont ('arial', 'B', 12);
	$pdf -> Cell (100, 20, "NOTA 01: ", 0, 0, 'L');
    $pdf -> setFont ('arial', '', 12);
    $pdf -> Cell(0, 20, $linha['nota1'], 0, 1, 'L');
	
	$pdf -> SetFont ('arial', 'B', 12);
	$pdf -> Cell (100, 20, "NOTA 02: ", 0, 0, 'L');
    $pdf -> setFont ('arial', '', 12);
    $pdf -> Cell(0, 20, $linha['nota2'], 0, 1, 'L');
	
	$pdf -> SetFont ('arial', 'B', 12);
	$pdf -> Cell (100, 20, "NOTA 03: ", 0, 0, 'L');
    $pdf -> setFont ('arial', '', 12);
    $pdf -> Cell(0, 20, $linha['nota3'], 0, 1, 'L');
	
	$pdf ->Output('boletim.pdf', 'I');
}
	?>