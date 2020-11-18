<html>
<head>
<title>Função Global</title>
</head>
<body> 
<?php 
$x = 9;
$y = 4;
function soma() {
global $z, $x, $y; //escopo global: irá mostrar o resultado fora da função.
$z = $x + $y;}
soma();
 echo $z; ?>
</body>
</html>

