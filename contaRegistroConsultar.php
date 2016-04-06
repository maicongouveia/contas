<?php

include "config/conexaoBanco.php";

//Query
if(isset($_GET['id'])){
	$sql = "SELECT * FROM contas_registro WHERE id = '".$_GET['id']."'";
}
else if(!empty($_POST)){

	$sql = "SELECT * FROM contas_registro";

	if($_POST['nome'] != ""){
		$sql .= " WHERE nome LIKE '%".$_POST['nome']."%'";
	}
	if($_POST['descricao'] != ""){
		$sql .= " WHERE descricao LIKE '%".$_POST['descricao']."%'";
	}
	if($_POST['valor'] != ""){
		$sql .= " WHERE valor LIKE '%".$_POST['valor']."%'";
	}
	if($_POST['dataPagamento'] != ""){
		$sql .= " WHERE dataPagamento = '".$_POST['dataPagamento']."'";
	}
	if($_POST['dataVencimento'] != ""){
		$sql .= " WHERE dataVencimento = '".$_POST['dataVencimento']."'";
	}

	$sql .= " ORDER BY dataPagamento DESC";
}
else{
	$sql = "SELECT * FROM contas_registro ORDER BY dataPagamento ASC";
}
//Pega os dados da tabela
$result = $conn->query($sql);

if($result->num_rows > 0){

	//Cria array com todos os dados
	$contasRegistro = array();
	
	//Inclui dados no array
	 while($row = $result->fetch_assoc()) {
	 	array_push($contasRegistro, $row);
	 }
}
else{
	$contasRegistro = false;
}

?>