<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Administração - Conta - Agenda</title>

    <!-- Importando BootStrap -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <!-- Mobile First -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />

	<!--Caracteres Estranhos-->
	<meta charset="utf-8">
 </head>

 <body>

 	<?php include "assets/interface/menu.php"; ?>
 	<?php include "contaAgendaConsultar.php"; ?>

 	<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class='col-md-10 col-md-offset-1' style='border-bottom: 1px solid black; padding-bottom: 15px;'>
						<div class='col-md-12'>
							<h3 id='titulo'>Conta - Agenda </h3>
						</div>

						<form action='contaAgendaCadastrar.php' method='post'>	
						
						<div class='row' style='margin-top: 10px;'> 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 25px;	'>
									Nome
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md' type='text' name='nome' maxlength='25' value='<?php echo $contasAgenda[0]['nome'] ?>'disabled>
							</div>
						</div>
						<div class='row'style='margin-top: 10px;' > 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 24px;'>
									Descrição
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md' type='text' name='descricao'  value='<?php echo $contasAgenda[0]['descricao'] ?>'disabled>
							</div>
						</div>
						<div class='row'style='margin-top: 10px;' > 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold;margin-top: 2px;font-size: 20px; display:block;'>
									Dia de Vencimento
								</font>
							</div>
							<div class='col-md-2'>
								<input class='form-control input-md col-md-1' type='number' name='dia' min='1' max='31' maxlength='2' width='2'  value='<?php echo $contasAgenda[0]['dia'] ?>'disabled>
							</div>
						</div>
						<div class='row'>							
							<div class='col-md-3 col-md-offset-2'>
								<a href='contaAgendaFormEditar.php?id=<?php echo $_GET['id']; ?>' class='btn btn-warning form-control'>Editar<a/>
							</div>
							<div class='col-md-3 col-md-offset-2'>
								<a href='#' class='btn btn-warning form-control' onclick='confirmarExclusao()'>Excluir<a/>
							</div>
						</div>	

						</form>
				</div>
			</div>
			</div>
	</div>

	<script>

		function confirmarExclusao(){

			var excluir = confirm("Deseja excluir esse processo ?");

			if(excluir == true){
				location.href = "contaAgendaExcluir.php?id=<?php echo $_GET['id']; ?>";
			}
		}

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