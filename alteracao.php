<?php 
include_once("conexao.php");
$id = $_GET['id'];
$result =  "SELECT * FROM dados WHERE id = '$id'";
$result_final= mysqli_query($conn, $result);
$linha = mysqli_fetch_array($result_final);
?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "utf8">
<title>Alteração de Dados</title>
</head>
<body>
<h2>Alteração dos Dados:</h2>
<form method = "post" action = "alterando.php">
<label>Nome do Aluno:</label>
<input type = "text" name = "nome" value ="<?= $linha['nome']?>"><br><br>
<label>Disciplina:</label>
<input type = "text" name = "disciplina" value ="<?=$linha['disciplina']?>"><br><br>
<label>Nota 01:</label>
<input type = "text" name = "nota1" value ="<?=$linha['nota1']?>"><br><br>
<label>Nota 02:</label>
<input type = "text" name = "nota2" value ="<?=$linha['nota2']?>"><br><br>
<label>Nota 03:</label>
<input type = "text" name = "nota3" value ="<?=$linha['nota3']?>"><br><br>
<input type = "hidden" name = "id" value = "<?= $linha['id']?>">
<input type = "submit" name = "submit" value = "Alterar">
</form>
</body>
</html>

