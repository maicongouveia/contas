<?php

include "config/conexaoBanco.php";

//Query
if(isset($_GET['id'])){
	$sql = "SELECT * FROM contas_agenda WHERE id = '".$_GET['id']."'";
}
else{
	$sql = "SELECT * FROM contas_agenda ORDER BY id DESC, nome ASC";
}


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