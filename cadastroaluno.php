<html lang = "pt-br";>
<!-- INÍCIO DO CÓDIGO HTML -->
<head>
<meta charset = "utf8">
<!-- TÍTULO DA PÁGINA -->
<title>Cadastro do Aluno</title>
</head>
<body>
<!-- TÍTULO DO FORMULÁRIO -->
<h1>Cadastro do Aluno Brasiltec</h1>
<!-- CRIAÇÃO DO FORMULÁRIO CONECTANDO-SE AO SCRIPT PHP DE CADASTRO-->
<form action = "cadastrandoaluno.php" method = "post">
<label>Nome:</label>
<input type = "text" name = "nome" placeholder = "Digite o nome do aluno"><br><br>
<label>CPF:</label>
<input type = "text" name = "cpf" placeholder = "Digite o CPF do aluno"><br><br>
<label>Nota:</label>
<input type = "text" name = "nota" placeholder = "Digite a nota do aluno"><br><br>
<input type = "submit" name = "submite" value ="Cadastrar"><br><br>
</form>
</body> 
</html>