<html>
<head>
<title>Função Estática</title>
</head>
<body>
<?php function incremento() { 
static $x = 1;
echo $x; 
$x ++;
}
incremento();
incremento();
incremento(); ?>
</body>
</html>
