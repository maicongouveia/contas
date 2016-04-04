<?php 

//Fazendo conexão com o Banco
include "config/conexaoBanco.php";

//Pega variaveis
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$dia = $_POST['dia'];

//Query SQL
$sql = "INSERT INTO contas_agenda (nome,descricao,dia) VALUES ('$nome','$descricao','$dia')";

//Executa a Query
if (!($conn->query($sql) === TRUE)){
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$url = "contaAgendaFormCadastro.php?cadastro=ok";
header("location:$url");

?>