<?php

//Esse script faz a consulta por data no banco de dados da contas a serem consultados.

//Faz verificação de Segunda-Feira
$segunda = false;
if(date("N")==1){

	$segunda = true;

	$domingo = date("d", mktime (0, 0, 0, date("m")  , date("d")-1, date("Y")));
	$sabado  = date("d", mktime (0, 0, 0, date("m")  , date("d")-2, date("Y")));
}

//Dia Atual
$diaAtual = date("d");



//Conexão com o banco
include "config/conexaoBanco.php";

//Cria array com todos os dados recebidos do banco
$contasAgendaDataAtual = array();


//Faz pesquisa de Consulta de Contas da Data Futuras 
//Query
$sql = "SELECT * FROM contas_agenda WHERE dia > '$diaAtual' ORDER BY dia";

//Pega os dados da tabela
$result = $conn->query($sql);

if($result->num_rows > 0){
	//Cria array com todos os dados recebidos do banco
	$contasAgendaDataFuturas = array();

	//Inclui dados no array
	if($segunda){
		while($row = $result->fetch_assoc()) {
			if($row['dia'] == $domingo || $row['dia'] == $sabado){
				array_push($contasAgendaDataAtual, $row);
			}else{
				array_push($contasAgendaDataFuturas, $row);
			}
			
		}
	}
	else{
		while($row = $result->fetch_assoc()) {
			array_push($contasAgendaDataFuturas, $row);
		}
	}

}
else{
	$contasAgendaDataFuturas = false;
}

//Faz pesquisa de Consulta de Contas da Data Inferior
//Query
$sql = "SELECT * FROM contas_agenda WHERE dia < '$diaAtual' ORDER BY dia";

//Pega os dados da tabela
$result = $conn->query($sql);

if($result->num_rows > 0){
	//Cria array com todos os dados recebidos do banco
	$contasAgendaDataAnteriores = array();

	//Inclui dados no array
	if($segunda){
		while($row = $result->fetch_assoc()) {
			if($row['dia'] == $domingo || $row['dia'] == $sabado){
				array_push($contasAgendaDataAtual, $row);
			}else{
				array_push($contasAgendaDataAnteriores, $row);
			}
			
		}
	}
	else{
		while($row = $result->fetch_assoc()) {
			array_push($contasAgendaDataAnteriores, $row);
		}
	}

}
else{
	$contasAgendaDataAnteriores = false;
}

//Faz pesquisa de Consulta de Contas da Data 
//Query
$sql = "SELECT * FROM contas_agenda WHERE dia = '$diaAtual' ORDER BY dia";

//Pega os dados da tabela
$result = $conn->query($sql);

if($result->num_rows > 0){
	
	//Inclui dados no array
	 while($row = $result->fetch_assoc()) {
	 	array_push($contasAgendaDataAtual, $row);
	 }

}
else{
	$contasAgendaDataAtual = false;
}



?>