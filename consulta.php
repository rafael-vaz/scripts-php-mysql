<?php 
session_start();
include_once("conexao.php"); 

$result = "SELECT * FROM dados";
$result_final = mysqli_query($conn, $result);
?>

<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "utf8">
<title>Consulta de Dados</title>
</head>
<body>
<?php if (isset($_SESSION['msg'])) 
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
?>
<h2>Dados Consultados:</h2>
<table>
<tr>
<th>Nome do Aluno</th>
<th>Disciplina</th>
<th>Nota 01</th>
<th>Nota 02</th>
<th>Nota 03</th>
</tr>
<?php 
while ($linha = mysqli_fetch_array($result_final)) { ?>
<tr>
<td><?=$linha['nome']?> </td>
<td><?=$linha['disciplina']?></td>
<td><?=$linha['nota1']?></td>
<td><?=$linha['nota2']?></td>
<td><?=$linha['nota3']?></td>
<td><a href = "alteracao.php?id=<?=$linha['id'] ?>">Alterar</td>
<td><a href = "excluir.php?id=<?=$linha['id']?>">Excluir</td>
<td><a href = "criarpdf.php?id=<?=$linha['id']?>">Gerar Boletim</td>
</td>
</tr>
<?php } ?>
 </table>
</body>
</html>