<?php 
	$idUsuario = $_GET['idUsuario'];
	$url = $_GET['url'];
 ?>

<script>
			var idUsuario = "<?php echo $idUsuario; ?>";
			var url = "<?php echo $url; ?>";

			var excluir = confirm("Clique em Ok para excluir este Usuário!");

			if (excluir == true) 
			{
				location.href = url+ ".php?idUsuario=" + idUsuario + "&excluir=1" ;
			}	
			else
			{
				location.href = "usuarioTabelaConsulta.php";
			}
		
</script>