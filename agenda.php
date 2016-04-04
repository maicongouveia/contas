<?php

//Esse script faz a consulta por data no banco de dados da contas a serem consultados.

//Pega a data atual
$dataAtual = date("d-m-Y");

//Dia Atual
$diaAtual = date("d");

//Faz pesquisa de Consulta de Contas da Data Inferior

//Conexão com o banco
include "config/conexaoBanco.php";

//Query
$sql = "SELECT * FROM contas_agenda WHERE dia < '$diaAtual'";

//Pega os dados da tabela
$result = $conn->query($sql);

if($result->num_rows > 0){
	//Cria array com todos os dados recebidos do banco
	$contasAgendaDataAnteriores = array();

	//Inclui dados no array
	 while($row = $result->fetch_assoc()) {
	 	array_push($contasAgendaDataAnteriores, $row);
	 }

}
else{
	$contasAgendaDataAnteriores = false;
}

//Faz pesquisa de Consulta de Contas da Data 
//Query
$sql = "SELECT * FROM contas_agenda WHERE dia = '$diaAtual'";

//Pega os dados da tabela
$result = $conn->query($sql);

if($result->num_rows > 0){
	//Cria array com todos os dados recebidos do banco
	$contasAgendaDataAtual = array();

	//Inclui dados no array
	 while($row = $result->fetch_assoc()) {
	 	array_push($contasAgendaDataAtual, $row);
	 }

}
else{
	$contasAgendaDataAtual = false;
}

//Faz pesquisa de Consulta de Contas da Data Futuras 
//Query
$sql = "SELECT * FROM contas_agenda WHERE dia > '$diaAtual'";

//Pega os dados da tabela
$result = $conn->query($sql);

if($result->num_rows > 0){
	//Cria array com todos os dados recebidos do banco
	$contasAgendaDataFuturas = array();

	//Inclui dados no array
	 while($row = $result->fetch_assoc()) {
	 	array_push($contasAgendaDataFuturas, $row);
	 }

}
else{
	$contasAgendaDataFuturas = false;
}

?>