<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Contas da Registro</title>


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
 	<?php include "contaRegistroConsultar.php"; ?>

 	<div id="page-wrapper" style='height:auto; overflow:hidden;'>
		<div id="page-inner"style='height:auto; overflow:hidden;'>
			<form action="contaRegistroTabelaConsulta.php" method='POST'>
			<div class='panel panel-warning'>
				<div class='panel-heading'>Pesquisar</div>
				<div class='panel-body'>

					<div class='row'>
						<div class='col-md-4'>
							Nome: <input type='text' class='input-sm' name='nome'>
						</div>
						<div class='col-md-4'>
							Descrição: <input type='text' class='input-sm' name='descricao' >
						</div>
						<div class='col-md-4'>
							Valor: <input class='input-sm' type='decimal' name='valor'>
						</div>				
					</div>
					<div class='row' style='margin-top: 10px;'>
						<div class='col-md-6'>
							Data de Pagamento: <input type='date' class='input-sm' name='dataPagamento'>
						</div>
						<div class='col-md-6'>
							Data de Vencimento: <input type='date' class='input-sm' name='dataVencimento'>
						</div>			
					</div>

				<br>
				<input type='submit' value='Pesquisar' class='btn btn-warning col-md-12'>

				</div>
			</div>
			</form>

			<?php


				if($contasRegistro != false){									 
					echo "<div class='col-md-12'>"
									."<table class='table table-striped table-condensed table-hover'>"
									."<thead>"
									."<tr style='font-weight: bold;'>"
									."<td>"
									."Nome"
									."</td>"
									."<td>"
									."Descrição"
									."</td>"
									."<td>"
									."Valor"
									."</td>"
									."<td style='text-align:center;'>"
									."Data de Pagamento"
									."</td>"
									."<td style='text-align:center;'>"
									."Data de Vencimento"
									."</td>"
									."</tr>"
									."</thead>";
					for($i = 0; $i < count($contasRegistro); $i++){

								echo "<tr>"
									."<td>"
									."<a href='contaRegistro.php?id=".$contasRegistro[$i]['id']."'>"
									.$contasRegistro[$i]['nome']
									."</a>"
									."</td>"
									."<td>"
									.$contasRegistro[$i]['descricao']
									."</td>"
									."<td>R$ "
									.$contasRegistro[$i]['valor']
									."</td>"
									."<td style='text-align:center;'>";
									$dataPagamento = explode("-",$contasRegistro[$i]['dataPagamento']);
									echo $dataPagamento[2]."-".$dataPagamento[1]."-".$dataPagamento[0];
									echo"</td>"
									."<td style='text-align:center;'>";
									$dataVencimento = explode("-",$contasRegistro[$i]['dataVencimento']);
									echo $dataVencimento[2]."-".$dataVencimento[1]."-".$dataVencimento[0];
									echo"</td>"
									."</tr>";
								}
								echo "</div>";
								echo "</table>";

				}else{
					echo "<div class='alert alert-warning col-md-6 col-md-offset-3 text-center'> Não existem contas cadastradas no registro </div>";
				}


			?>
			
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