<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Gomes GB - Desbloqueio Usuario - Cadastro de Senha</title>

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


	<script type="text/javascript">
		
		fuction validaSenha(){
			if(document.getElementById('senha').value != document.getElementById('senha2').value){
				alert("Senha não estão iguais");
				return false;
			}
			return true;
			
		}
		fuction mostreAlert(){
			alert("Clicou");
		}


	</script>
	
 </head>

 <body>

 	<?php include "assets/interface/menu.php"; ?>

 	<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class='col-md-10 col-md-offset-1' style='border-bottom: 1px solid black; padding-bottom: 15px;'>
						<div class='col-md-12'>
							<h3 id='titulo'>Desbloqueio Usuario - Cadastro de Senha</h3>
						</div>

						<form action='usuarioDesbloquear.php' method='post' onsubmit="return validaSenha(this);">

						<?php

							if(isset($_GET['cod'])){

								//Conexão com o banco
								include "config/conexaoBanco.php";

								//Query SQL
								$sql = "SELECT * FROM usuarios WHERE desbloqueio = '".$_GET['cod']."'";

								//Pega os dados da tabela
								$result = $conn->query($sql);

								if($result->num_rows > 0){

									//Cria array com todos os dados
									$usuario = array();
									

									//Inclui dados no array
									 while($row = $result->fetch_assoc()) {
									 	array_push($usuario, $row);
									 }
								}								
							}
						?>
						<div class='row'> 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 24px;'>
									Nome
								</font>
							</div>
							<div class='col-md-5'>
								<p style='padding: 0px;'><?php echo $usuario[0]['nome'];?></p>
							</div>
						</div>
						<div class='row'> 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 24px;'>
									Email
								</font>
							</div>
							<div class='col-md-5'>
								<p style='padding: 0px;'><?php echo $usuario[0]['email'];?></p>
							</div>
						</div>
						
						<div class='row'> 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 24px;'>
									Senha
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md' type='password' id='senha' name='senha' required>
							</div>
						</div>
						<!--<div class='row'style='margin-top: 10px;' > 
							<div class='col-md-3 col-md-offset-2'>
								<font style='font-weight: bold; padding-top: 35px; font-size: 24px;'>
									Digitar senha novamente
								</font>
							</div>
							<div class='col-md-5'>
								<input class='form-control input-md' type='password' id='senha2' name='senha2' required>
							</div>
						</div>-->
						<div class='row'>							
							<div class='col-md-8 col-md-offset-2'>
								<input class='btn btn-warning form-control' style='margin-top: 10px;' onclick="mostreAlert()" type='submit' value='Cadastrar' />
							</div>
						</div>	
						<input type='hidden' name='id' value='<?php echo $usuario[0]['id']; ?>'/>
						</form>
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