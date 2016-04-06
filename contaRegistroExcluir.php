<?php

include "config/conexaoBanco.php";

$sql ="DELETE FROM contas_registro WHERE id = '".$_GET['id']."'";

//Executa a Query
if (!($conn->query($sql) === TRUE)){
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$url = "contaRegistroTabelaConsulta.php";
header("location:$url");

?>