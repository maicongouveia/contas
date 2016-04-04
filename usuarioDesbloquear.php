<?php
// Inicia a sessão
session_start();

// Preenche variaveis
$senha = $_POST['senha'];
$id = $_POST['id'];

//Encriptando a senha
$senha = crypt($senha);

//Conexão com o banco
include "config/conexaoBanco.php";

//Query SQL
$sql = "UPDATE usuarios SET senha = '$senha' , desbloqueio = NULL WHERE id = $id";

//Executa a Query
if (!($conn->query($sql) === TRUE)){
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

$_SESSION['loginErro'] = "Senha cadastrada com sucesso";

$url = 'login.php';
header("location:$url");

?>