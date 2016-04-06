<?php 

//Fazendo conexão com o Banco
include "config/conexaoBanco.php";

//Pega variaveis
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$dataPagamento = $_POST['dataPagamento'];
$dataVencimento = $_POST['dataVencimento'];
$id = $_POST['id'];

//Query SQL
$sql = "UPDATE contas_registro SET "
		."nome = '$nome',"
		."descricao = '$descricao',"
		."valor = '$valor',"
		."dataPagamento = '$dataPagamento',"
		."dataVencimento = '$dataVencimento'"
		."WHERE id = '$id'";

//Executa a Query
if (!($conn->query($sql) === TRUE)){
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$url = "contaRegistro.php?id=$id";
header("location:$url");

?>