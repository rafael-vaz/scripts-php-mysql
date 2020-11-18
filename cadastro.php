<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset = "utf-8"> 
<title>Cadastro de Dados</title>
</head>
<body>
<?php 
if (isset($_SESSION['msg'])) 
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);

?>
<h1>Cadastrar Dados:</h1>
<form action = "cadastrando.php" method = "post">		

<label>Nome:</label>
<input type = "text" name = "nome" placeholder = "Digite o seu nome"><br><br>

<label>Disciplina:</label>
<input type = "text" name = "disciplina" placeholder = "Digite o nome da disciplina"><br><br>

<label>Nota 01:</label>
<input type = "text" name = "nota1" placeholder = "Digita a primeira nota"><br><br>

<label>Nota 02:</label>
<input type = "text" name = "nota2" placeholder = "Digite a segunda nota"><br><br>

<label>Nota 03:</label>
<input type = "text" name = "nota3" placeholder = "Digite a terceira nota"><br><br>
<input type = "submit" name = "submit" value = "Cadastrar">
</form>
</body>
</html>