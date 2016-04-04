<?php

//Pega Variaveis
$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$id = $_POST['id'];

//Conexão com o banco
include "config/conexaoBanco.php";

//Query SQL
$sql = "UPDATE usuarios SET nome = '$nomeUsuario', email = '$emailUsuario' WHERE id = ".$id;

//Executa a Query
if (!($conn->query($sql) === TRUE)){
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

$url = 'usuarioTabelaConsulta.php';
header("location:$url");
?>