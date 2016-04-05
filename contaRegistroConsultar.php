<?php

include "config/conexaoBanco.php";

//Query
if(isset($_GET['id'])){
	$sql = "SELECT * FROM contas_registro WHERE id = '".$_GET['id']."'";
}
else{
	$sql = "SELECT * FROM contas_registro ORDER BY id DESC, nome ASC";
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