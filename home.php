<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Administração - Iguatemi Imóveis</title>

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
	<?php include "agenda.php"; ?>

	<div id="page-wrapper" style='height:auto; overflow:hidden;'>
		<div id="page-inner"style='height:auto; overflow:hidden;'>

			<h4> Agenda <?php echo date("d/m/Y"); ?></h4>

			<div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation">
						<a href="#ontem" aria-controls="ontem" role="tab" data-toggle="tab">
							Anteriores
							<?php

							if($contasAgendaDataAnteriores != false){
								
								echo "<span class='badge'>".count($contasAgendaDataAnteriores)."</span>";
							}

							?>

						</a>
					</li>
					<li role="presentation" class="active">
						<a href="#hoje" aria-controls="hoje" role="tab" data-toggle="tab">
							Hoje

							<?php

							if($contasAgendaDataAtual != false){
								
								echo "<span class='badge'>".count($contasAgendaDataAtual)."</span>";
							}

							?>
						</a>
					</li>
					<li role="presentation">
						<a href="#amanha" aria-controls="amanha" role="tab" data-toggle="tab">
							Futuras
							<?php

							if($contasAgendaDataFuturas != false){
								
								echo "<span class='badge'>".count($contasAgendaDataFuturas)."</span>";
							}

							?>
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">

					<div role="tabpanel" class="tab-pane " id="ontem">
						<?php

						if($contasAgendaDataAnteriores != false){
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
									."Dia"
									."</td>"
									."</tr>"
									."</thead>";
							for($i = 0; $i < count($contasAgendaDataAnteriores); $i++){

								echo "<tr>"
									."<td>"
									."<a href='contaAgenda.php?id=".$contasAgendaDataAnteriores[$i]['id']."'>"
									.$contasAgendaDataAnteriores[$i]['nome']
									."</a>"
									."</td>"
									."<td>"
									.$contasAgendaDataAnteriores[$i]['descricao']
									."</td>"
									."<td>"
									.$contasAgendaDataAnteriores[$i]['dia']
									."</td>"
									."</tr>";
								}
								echo "</table>";
								echo "</div>";
							}

						else{
							echo "<div class='alert alert-warning col-md-6 col-md-offset-3 text-center' style='margin-top: 30px;'> Não existem contas cadastradas na Agenda</div>";
						}

						?>
					</div>

					<div role="tabpanel" class="tab-pane active" id="hoje">

						<?php

						if($contasAgendaDataAtual != false){
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
									."Dia"
									."</td>"
									."</tr>"
									."</thead>";

							for($i = 0; $i < count($contasAgendaDataAtual); $i++){

								echo "<tr ";
								if($segunda){
									if($contasAgendaDataAtual[$i]['dia'] == $domingo || $contasAgendaDataAtual[$i]['dia'] == $sabado){
										echo "style='background-color: rgba(217, 83, 79, 0.3);'";
									}
								}
								

								echo ">"
									."<td>"
									."<a href='contaAgenda.php?id=".$contasAgendaDataAtual[$i]['id']."'>"
									.$contasAgendaDataAtual[$i]['nome']
									."</a>"
									."</td>"
									."<td>"
									.$contasAgendaDataAtual[$i]['descricao']
									."</td>"
									."<td>"
									.$contasAgendaDataAtual[$i]['dia'];
								if($segunda){
									if($contasAgendaDataAtual[$i]['dia'] == $domingo){
										echo " - Domingo";
									}
									else if($contasAgendaDataAtual[$i]['dia'] == $sabado){
										echo " - Sábado";
									}
								}

								echo "</td>"
									."</tr>";
								}
								
								echo "</table>";

								if(date("N")==7 && count($contasAgendaDataAtual) != 0){
									echo "<div class='alert alert-danger text-center col-md-4 col-md-offset-4'>Hoje é Domingo <br> <b> As contas serão realocadas para Segunda</b></div>";
								}
								else if(date("N")==6 && count($contasAgendaDataAtual) != 0){
									echo "<div class='alert alert-danger text-center col-md-4 col-md-offset-4'>Hoje é Sábado <br> <b> As contas serão realocadas para Segunda</b></div>";
								}



								echo "</div>";
							}

						else{
							echo "<div class='alert alert-warning col-md-6 col-md-offset-3 text-center' style='margin-top: 30px;'> Não existem contas cadastradas na Agenda</div>";
						}
						?>
					</div>

					<div role="tabpanel" class="tab-pane" id="amanha">

						<?php

						if($contasAgendaDataFuturas != false){
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
									."Dia"
									."</td>"
									."</tr>"
									."</thead>";
							for($i = 0; $i < count($contasAgendaDataFuturas); $i++){

								echo "<tr>"
									."<td>"
									."<a href='contaAgenda.php?id=".$contasAgendaDataFuturas[$i]['id']."'>"
									.$contasAgendaDataFuturas[$i]['nome']
									."</a>"
									."</td>"
									."<td>"
									.$contasAgendaDataFuturas[$i]['descricao']
									."</td>"
									."<td>"
									.$contasAgendaDataFuturas[$i]['dia']
									."</td>"
									."</tr>";
								}
								
								echo "</table>";
								echo "</div>";
							}

						else{
							echo "<div class='alert alert-warning col-md-6 col-md-offset-3 text-center' style='margin-top: 30px;'> Não existem contas cadastradas na Agenda</div>";
						}

						?>
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