<?php
// 1 - Local
// 2 - NeepHost
// 3 - LocalWEB
$conexao = 3;
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
$servername = "controlecontas.mysql.dbaas.com.br";
$username = "controlecontas";
$password = "predio5037";
$dbname = "controlecontas";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>