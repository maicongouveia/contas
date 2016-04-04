<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

 <body>

 	<?php 

 		$idUsuario = $_GET['idUsuario'] ;
 		$nomeUsuario = $_GET['nomeUsuario'] ;
 		$emailUsuario = $_GET['emailUsuario'] ;

 		//Cria a palavra a ser cryptografada a partir da primeira e ultima letra do nome
		$codigo = substr($nomeUsuario, 0) . $nomeUsuario{strlen($nomeUsuario)-1};
		$codigo = crypt($codigo);

		//Conexão com o banco
		include "config/conexaoBanco.php";

		//Query SQL
		$sql = "UPDATE usuarios SET desbloqueio ='$codigo' WHERE id =".$idUsuario;
		//Executa a Query
		if (!($conn->query($sql) === TRUE)){
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();

		$url = 'usuarioTabelaConsulta.php?email='.$emailUsuario;
		header("location:$url");

 		//Enviar email com o link para o desbloqueio

		//Assunto do Email
		$assunto = "Redefenir senha de Usuário - $nomeUsuario";

		//Mensagem do E-mail
		$conteudo = "<html>";
		$conteudo .= "<h3>Redefenir senha de Usuário - $nomeUsuario - Iguatemi Imóveis</h3>";
		$conteudo .= "<br>";
		$conteudo .= "Acesse o link abaixo para ser enviado para a pagina de modificação de senha</b><br><br>";
		$conteudo .= "<a href='http://iguatemiimoveis.com.br/contas/usuarioRedefenirSenhaDesbloqueioForm.php?cod=$codigo'>Redefenir senha do usuário</a>";
		$conteudo .= "</html>";

		$headers = "MIME-Version: 1.1\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n";
		$headers .= "From: contato@iguatemiimoveis.com.br \r\n"; // remetente
		$headers .= "Return-Path: $emailUsuario \r\n"; // return-path

		//enviar e-mail
		mail($emailUsuario, $assunto, $conteudo, $headers, "-r"."contato@iguatemiimoveis.com.br") or die("Falha ao enviar e-mail"); 
	?>
 </body>
</html>	