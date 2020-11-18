<html>
<head>
<title>Foreach</title>
</head>
<body>
<?php 
$alunos = array ('Pedro', 'Helena', 'Ana', 'Rafael', 'João');
foreach ($alunos as $chave => $valor) 
{ echo "$chave: $valor"."<br>";}
?>
</body>
</html>