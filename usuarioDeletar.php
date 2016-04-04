<?php

//Pega variaveis
$idUsuario = $_GET['idUsuario'];
$excluir = $_GET['excluir'];

if($excluir == 1)
{
	//Conexão com o banco
	include "config/conexaoBanco.php";

	//Query SQL
	$sql = "DELETE FROM usuarios WHERE id = ".$idUsuario;

	//Executa a Query
	if (!($conn->query($sql) === TRUE)){
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
$url = 'usuarioTabelaConsulta.php';
header("location:$url");

?>