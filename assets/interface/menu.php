<nav class='navbar navbar-default navbar-cls-top ' role='navigation' style='margin-bottom: 0'>
	<div class='navbar-header'>
		<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.sidebar-collapse'>
			<span class='sr-only'>Toggle navigation</span> 
			<span class='icon-bar'></span> 
			<span class='icon-bar'></span> 
			<span class='icon-bar'></span>
		</button>
		<a class='navbar-brand' href='#'>Administração</a>
	</div>
	<div style='color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;'>
		<a href='logout.php' class='btn btn-warning square-btn-adjust hidden-xs hidden-sm' style='background-color:#fac545; font-color: white;'> 
			<span class='glyphicon glyphicon-off' ></span> 
			Logout
		</a>
	</div>
</nav>
<!-- /. NAV TOP  -->
<nav class='navbar-default navbar-side' role='navigation'>
	<div class='sidebar-collapse'>
		<ul class='nav' id='main-menu'  style='font-size: 20px;'>
			<li>
				<a href='home.php'>
					<i class='glyphicon glyphicon-calendar'></i>Agenda
				</a>
			</li>
			<li>
				<a href='#'>
					<span class='glyphicon glyphicon-list-alt'></span>
					&nbsp Contas - Agenda							
				</a>
				<ul class='nav nav-second-level'>
					<li>
						<a href='contaAgendaFormCadastro.php'>
							<span class='glyphicon glyphicon-plus'></span>
							Cadastrar Conta
						</a>
					</li>
					<li>
						<a href='contaAgendaTabelaConsulta.php'>
							<span class='glyphicon glyphicon-search'></span>
							Consultar Contas
						</a>
					</li>
				</ul>
			</li>
			<li>
			<a href='#'>
			<span class='glyphicon glyphicon-list-alt'></span>
			&nbsp Contas - Registro							
			</a>
			<ul class='nav nav-second-level'>
			<li><a href='contaRegistroFormCadastro.php'><span class='glyphicon glyphicon-plus'></span>Cadastrar Conta</a></li>
			<li><a href='contaRegistroTabelaConsulta.php'><span class='glyphicon glyphicon-search'></span>Consultar Contas</a></li>
			</ul>
			</li>
			<li>
			<a href='#'>
			<i class='glyphicon glyphicon-user'></i>Usuários
			</a>
			<ul class='nav nav-second-level'>
			<li><a href='usuarioFormCadastro.php'><span class='glyphicon glyphicon-plus'></span> Cadastrar Usuário</a></li>
			<li><a href='usuarioTabelaConsulta.php'><span class='glyphicon glyphicon-search'></span> Consultar Usuário</a></li>
			<li><a href='usuarioPerfil.php?id=0'><span class='glyphicon glyphicon-search'></span> Perfil do Usuário</a></li>
			</ul>
			</li>
			<li class='visible-xs visible-sm'>
			<a href='logout.php'>
			<i class='glyphicon glyphicon-off'></i> Logout
			</a>
			</li>				
		</ul>
	</div>
</nav>