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

 	<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class='col-md-10 col-md-offset-1' style='border-bottom: 1px solid black; padding-bottom: 15px;'>
						<div class='col-md-12'>
							<h3 id='titulo'>Usuário - Cadastro</h3>
						</div>

						<form action='usuarioCadastrar.php' method='post'>	
						
						<div class='row'> 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 20px;'>
									Nome do Usuário
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md' type='text' name='nomeUsuario' required>
							</div>
						</div>
						<div class='row'style='margin-top: 10px;' > 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 20px;'>
									Email
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md' type='email' name='emailUsuario' required>
							</div>
						</div>
						<div class='row'>							
							<div class='col-md-8 col-md-offset-2'>
								<input class='btn btn-warning form-control' style='margin-top: 10px;' type='submit' value='Cadastrar' />
							</div>
						</div>	

						</form>

						<?php if(isset($_GET['cadastro']))
								if($_GET['cadastro']){ 
							?>
							<!--Alerta de Cadastro-->
							<div class='alert alert-warning col-md-6 col-md-offset-3' style='text-align:center; margin-top: 20px;'> 
								Usuario cadastrado
								<br />
								Foi enviado um email para cadastro de senha
							</div>
						<?php } ?>
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