<?php

//Conexão com o banco
include "config/conexaoBanco.php";

//Query SQL
if(isset($_POST['nomeUsuario']) && $_POST['nomeUsuario'] != "" || isset($_POST['emailUsuario']) && $_POST['emailUsuario'] != "")
{
	$sql = "SELECT * FROM usuarios WHERE id > 0";

	if(isset($_POST['nomeUsuario']) && $_POST['nomeUsuario'] != "")
	{
		$sql .= " AND nome LIKE '%".$_POST['nomeUsuario']."%'";
	}
	if(isset($_POST['emailUsuario']) && $_POST['emailUsuario'] != "")
	{
		$sql .= " AND email LIKE '%".$_POST['emailUsuario']."%'";
	}
}
else if(isset($_GET['operacao']))
{
	if($_GET['operacao'] == "consultar"){
		$sql = "SELECT * FROM usuarios WHERE nome LIKE '%".$_POST['nome']."%'";
	}
	else if($_GET['operacao'] == "consultaUnica"){
		$sql = "SELECT * FROM usuarios WHERE id = ". $_GET['id'];
	}
	else if($_GET['operacao'] == "editar"){
		$sql = "SELECT * FROM usuarios WHERE id > 1 ORDER BY id DESC";
	}
}
else if(isset($operacao)){
	if($operacao == "consultaResponsaveis"){
		$sql = "SELECT
				processos_usuarios.idusuario,
				usuarios.nome,	
				usuarios.email
				FROM processos_usuarios
				INNER JOIN usuarios
				ON processos_usuarios.idusuario = usuarios.id
				WHERE processos_usuarios.idprocesso = ".$processo[0]['id'];
	}
}

else
{
	$sql = "SELECT * FROM usuarios WHERE id > 1 ORDER BY id DESC";	
}

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