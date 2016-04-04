<?php

include "config/conexaoBanco.php";

//Query
$sql = "SELECT * FROM contas_agenda ORDER BY id DESC";

//Pega os dados da tabela
$result = $conn->query($sql);

if($result->num_rows > 0){

	//Cria array com todos os dados
	$contasAgenda = array();
	
	//Inclui dados no array
	 while($row = $result->fetch_assoc()) {
	 	array_push($contasAgenda, $row);
	 }
}
else{
	$contasAgenda = false;
}

?>