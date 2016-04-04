<?php

//Conexão com o banco
include "config/conexaoBanco.php";

$nomeUsuarioLogado = $_SESSION['nome'] ;
$idUsuarioLogado = $_SESSION['userID'];

//Query SQL

$sql = "SELECT * FROM usuarios WHERE id = ". $idUsuarioLogado;

//Pega os dados da tabela
$result = $conn->query($sql);

if($result->num_rows > 0){

	//Cria array com todos os dados
	$usuario = array();
	

	//Inclui dados no array
	 while($row = $result->fetch_assoc()) {
	 	array_push($usuario, $row);
	 }

}
else{
	$usuario = false;
}
?>