<?php 

//Fazendo conexão com o Banco
include "config/conexaoBanco.php";

//Pega variaveis
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$dia = $_POST['dia'];
$id = $_POST['id'];

//Query SQL
$sql = "UPDATE contas_agenda SET "
		."nome = '$nome',"
		."descricao = '$descricao',"
		."dia = '$dia'"
		."WHERE id = '$id'";

//Executa a Query
if (!($conn->query($sql) === TRUE)){
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$url = "contaAgenda.php?id=$id";
header("location:$url");

?>