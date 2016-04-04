<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Gomes GB - Cadastrar Usuário</title>

    <!-- Importando BootStrap -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <!-- Mobile First -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />

	<!-- CSS PROPRIO-->
	<link href="assets/css/estilo.css" rel="stylesheet" />

	<!--Caracteres Estranhos-->
	<meta charset="utf-8">
 </head>

 <body>

 	<?php include "assets/interface/menu.php"; ?>
 	<?php include "usuarioConsultarPerfil.php"; ?>

 	<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class='col-md-10 col-md-offset-1' style='border-bottom: 1px solid black; padding-bottom: 15px;'>
						<div class='col-md-12'>
							<h3 id='titulo'>Perfil do Usuário</h3>
						</div>
						<div class='row'> 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 21px;'>
									Nome do Usuário
								</font>
							</div>
							<div class='col-md-5'>
								<p style='padding: 0px;'><?php echo $usuario[0]['nome'];?></p>
							</div>
						</div>
						<div class='row'style='margin-top: 10px;' > 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 21px;'>
									Email
								</font>
							</div>
							<div class='col-md-5'>
								<p style='padding: 0px;'><?php echo $usuario[0]['email'];?></p>
							</div>
						</div>
						<div class='row'>							
							<div class='col-md-12'>
								<a href='redefinirSenhaUsuario.php?emailUsuario=<?php echo $usuario[0]['email'];?>&nomeUsuario=<?php echo $usuario[0]['nome'];?>&idUsuario=<?php echo $usuario[0]['id'];?>' class='btn btn-warning col-md-3'>
									<span class='glyphicon glyphicon-refresh' aria-hidden='true'></span>
								 		Redifinir Senha
								</a>
								<a href='usuarioFormEditar.php?operacao=consultaUnica&id=<?php echo $usuario[0]['id'];?>' class='btn btn-warning col-md-3 col-md-offset-1'>
									<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
								 		Editar
								</a>
								<a href='verificarExcluirUsuario.php?url=usuarioDeletar&idUsuario=<?php echo $usuario[0]['id'];?> ' class='btn btn-warning col-md-3 col-md-offset-1'>
									<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
								 		Excluir
								</a>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>

 	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- MORRIS CHART SCRIPTS -->
	<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
	<script src="assets/js/morris/morris.js"></script>

 </body>


 </html>