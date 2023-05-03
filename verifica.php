<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

$nome 		= $_POST['nome'];
$cpf 		 = $_POST['cpf'];
$telefone  	 = $_POST['telefone'];
$email 		= $_POST['email'];
$curso 	 	 = $_POST['curso'];

$erro 			 = 0;

//Verifica se o campo nome não está em branco
if (empty($nome) OR strstr($nome, ' ')==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}


//Verifica se o campo cpf está em branco
if (empty($cpf)) {
	echo "Favor digitar seu cpf.<br>";
	$erro = 1;
}


if (empty($telefone)) {
	echo "Favor digitar o seu telefone corretamente.<br>";
	$erro = 1;
}

//Verifica se o campo email está preenchido corretamente
if (strlen($email)< 8 || strstr($email, '@')==false) {
	echo "Favor digitar o seu email corretamente.<br>";
	$erro = 1;
}

if (empty($curso)) {
	echo "Favor digitar o nome do curso corretamente.<br>";
	$erro = 1;
}


if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include 'insere.inc';
}

 ?>
</body>
</html>