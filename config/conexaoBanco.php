<?php
// 1 - Local
// 2 - NeepHost
// 3 - LocalWEB
$conexao = 1;
if($conexao == 1){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "controledecontas";
}
else if($conexao == 2){
$servername = "maicongouveia.com.br";
$username = "maicongo_gomes";
$password = "AgendaProcessos2016";
$dbname = "maicongo_agendaprocessos";
}
else if($conexao == 3){
$servername = "mysql01.gomesgb2.hospedagemdesites.ws";
$username = "gomesgb2";
$password = "gomesGB2016";
$dbname = "gomesgb2";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>