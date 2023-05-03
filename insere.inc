<?php 

include 'conecta_mysql.inc';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$curso = $_POST['curso'];

$sql = "INSERT INTO formulario VALUES";
$sql .= "('$nome', '$cpf', '$telefone', '$email', '$curso')";


if ($conexao->query($sql) === TRUE) {
	echo  "Inscrição realizada com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();