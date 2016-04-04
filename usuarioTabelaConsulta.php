<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Gomes GB - Consultar Usuário</title>

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

 	<?php 
 		include "assets/interface/menu.php"; 
 		//Faz a consulta no banco de dados
		include "usuarioConsultar.php";
 	?>

 	<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class='col-md-10 col-md-offset-1' style='border-bottom: 1px solid black; padding-bottom: 15px;'>
						<div class='col-md-12'>
							<h3 id='titulo'>Usuário</h3>
						</div>

						<form action='usuarioTabelaConsulta.php' method='post'>
						
						<div class='row'> 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 24px;'>
									Nome
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-sm' type='text' name='nomeUsuario'>
							</div>
						</div>
						<div class='row'> 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 24px;'>
									Email
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-sm' type='text' name='emailUsuario'>
							</div>
						</div>
					
						<input class='btn btn-warning col-md-8 col-md-offset-2' type='submit' value='Procurar' style='margin-top: 10px; margin-bottom: 10px';/>
					
						<input type='hidden' id='operacao' name='operacao' value='consultar'/>

						</form>

						<?php

							if(isset($_GET['email']))
							{
								$email = $_GET['email'];
							}

							if($usuario != false){
								echo "<table class='table table-striped table-bordered table-responsive table-condensed' style='margin-top: 20px;'>"
									."<thead>"
									."<tr style='font-weight: bold;'>"
									."<td class='col-md-5'>"
									."Nome do Usuário"
									."</td>"
									."<td class='col-md-5'>"
									."Email"
									."</td>"
									."<td colspan='3' style='text-align: center;'class='col-md-2'>"
									."Ações"
									."</td>"
									."</tr>"
									."</thead>";

								for($i = 0; $i < count($usuario); $i++){
									echo "<tr>"
										."<td>"
										.$usuario[$i]['nome']
										."</td>"
										."<td>"
										.$usuario[$i]['email']
										."</td>"
										."<td>"
										."<a href='usuarioRedefinirSenha.php?nomeUsuario=".$usuario[$i]['nome']."&emailUsuario=".$usuario[$i]['email']."&idUsuario=".$usuario[$i]['id']." ' class='btn btn-warning center-block'>"
										."<span class='glyphicon glyphicon-refresh' aria-hidden='true'></span>"
										." Redifinir Senha"
										."</a>"
										."</td>"
	 									."<td>"
										."<a href='usuarioFormEditar.php?operacao=consultaUnica&id=".$usuario[$i]['id']."' class='btn btn-warning center-block'>"
										."<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>"
										." Editar"
										."</a>"
										."</td>"
										."<td>"
										."<a href='verificarExcluirUsuario.php?url=usuarioDeletar&idUsuario=".$usuario[$i]['id']."' class='btn btn-warning center-block'>"
										."<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>"
										." Excluir"
										."</a>"
										."</td>"
										."</tr>";
								}
								
								echo "</table>";
							}
							else{
								echo "<div class='alert alert-danger col-md-6 col-md-offset-3' style='text-align:center; margin-top: 20px;'>Não há usuario cadastrado</div>";
							}
						?>
				</div>
			</div>
	</div>

	<script type="text/javascript">
		var email = "<?php echo "$email" ?>";
		alert("Acesse o email " + email +" para redefinir a senha.");
		location.href = "usuarioTabelaConsulta.php";
	</script>

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