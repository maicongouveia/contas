<?php

// Preenche variaveis
$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];

//Cria a palavra a ser cryptografada a partir da primeira e ultima letra do nome
$codigo = substr($nomeUsuario, 0) . $nomeUsuario{strlen($nomeUsuario)-1};
$codigo = crypt($codigo);

//Conexão com o banco
include "config/conexaoBanco.php";

//Query SQL
$sql = "INSERT INTO usuarios (nome,email,desbloqueio) VALUES ('$nomeUsuario','$emailUsuario','$codigo')";

//Executa a Query
if (!($conn->query($sql) === TRUE)){
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

//Enviar email com o link para o desbloqueio

//Assunto do Email
$assunto = "Cadastro de Usuário - $nomeUsuario";

//Mensagem do E-mail
$conteudo = "<html>";
$conteudo .= "<h3>Cadastro de Usuário - $nomeUsuario - Iguatemi Imóveis</h3>";
$conteudo .= "<b> Foi dada a entrada para o cadastro deste email no sistema.<br>";
$conteudo .= "Acesse link abaixo para ser enviado para a pagina de criação de senha</b><br><br>";
$conteudo .= "<a href='http://iguatemiimoveis.com.br/contas/usuarioDesbloqueioForm.php?cod=$codigo'>Desbloquear Usuário</a>";
$conteudo .= "</html>";

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: contato@iguatemiimoveis.com.br \r\n"; // remetente
$headers .= "Return-Path: $emailUsuario \r\n"; // return-path

//enviar e-mail
mail($emailUsuario, $assunto, $conteudo, $headers, "-r"."contato@iguatemiimoveis.com.br") or die("Falha ao enviar e-mail");

$url = 'usuarioFormCadastro.php?cadastro=ok';
header("location:$url");

//echo "http://gomesgb.com.br/agendaprocessos/usuarioDesbloqueioForm.php?cod=$codigo";
//echo "localhost/AgendaProcessos/usuarioDesbloqueioForm.php?cod=$codigo";
?>