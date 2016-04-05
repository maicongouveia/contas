<?php 

//Fazendo conexão com o Banco
include "config/conexaoBanco.php";

//Pega variaveis
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$dataVencimento = $_POST['dataVencimento'];
$dataPagamento = $_POST['dataPagamento'];


//Query SQL
$sql = "INSERT INTO contas_registro (nome,descricao,valor,dataVencimento,dataPagamento) VALUES ('$nome','$descricao','$valor','$dataVencimento','$dataPagamento')";

//Executa a Query
if (!($conn->query($sql) === TRUE)){
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$url = "contaRegistroFormCadastro.php?cadastro=ok";
header("location:$url");

?>