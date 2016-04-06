<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Administração - Cadastro de Conta</title>

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
	<?php include "contaRegistroConsultar.php"; ?>
	
 	<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class='col-md-10 col-md-offset-1' style='border-bottom: 1px solid black; padding-bottom: 15px;'>
						<div class='col-md-12'>
							<h3 id='titulo'>Conta - Registro - Editar</h3>
						</div>

						<form action='contaRegistroEditar.php' method='post'>	
						
						<div class='row' style='margin-top: 10px;'> 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 25px;	'>
									Nome
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md' type='text' name='nome' maxlength='25' autofocus="autofocus" value='<?php echo $contasRegistro[0]['nome']; ?>' disabled>
							</div>
						</div>
						<div class='row'style='margin-top: 10px;' > 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 24px;'>
									Descrição
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md' type='text' name='descricao' value='<?php echo $contasRegistro[0]['descricao']; ?>' disabled>
							</div>
						</div>
						<div class='row'style='margin-top: 10px;' > 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold;margin-top: 6px;font-size: 20px; display:block;'>
									Valor
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md col-md-1' type='decimal' name='valor' value='<?php echo $contasRegistro[0]['valor']; ?>' disabled >
							</div>
						</div>
						<div class='row'style='margin-top: 10px;' > 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold;margin-top: 7px;font-size: 18px; display:block;'>
									Data de Vencimento
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md col-md-1' type='date' name='dataVencimento' value='<?php echo $contasRegistro[0]['dataVencimento']; ?>' disabled >
							</div>
						</div>
						<div class='row'style='margin-top: 10px;' > 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold;margin-top: 2px;font-size: 20px; display:block;'>
									Data de Pagamento
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md col-md-1' type='date' name='dataPagamento' value='<?php echo $contasRegistro[0]['dataPagamento']; ?>' disabled >
							</div>
						</div>
						<div class='row' style="margin-top: 10px;">							
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
				location.href = "contaRegistroExcluir.php?id=<?php echo $_GET['id']; ?>";
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