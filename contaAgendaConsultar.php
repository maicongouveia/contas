<?php

include "config/conexaoBanco.php";

//Query
if(isset($_GET['id'])){
	$sql = "SELECT * FROM contas_agenda WHERE id = '".$_GET['id']."'";
}
else if(!empty($_POST)){

	$sql = "SELECT * FROM contas_agenda";

	if($_POST['nome'] != ""){
		$sql .= " WHERE nome LIKE '%".$_POST['nome']."%'";
	}
	if($_POST['descricao'] != ""){
		$sql .= " WHERE descricao LIKE '%".$_POST['descricao']."%'";
	}
	if($_POST['dia'] != ""){
		$sql .= " WHERE dia = '".$_POST['dia']."'";
	}

	$sql .= " ORDER BY dia ASC";
}
else{
	$sql = "SELECT * FROM contas_agenda ORDER BY dia ASC";
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