<?php
/* ATIVIDADE 2 */
	 $arraysidebar = array(
		
		array(
				'titulo' => 'Cadastro',
				'i-class' => 'fa fa-file-text',
				'submenu' => array(
					'Cliente','Fornecedor','Usuário', 'Produtos','Perfil de acesso'
				)
		),
		array(
			'titulo' => 'Relatório',
			'i-class' => 'fa fa-bar-chart-o',
			'submenu' => array(
				'Cliente','Faturamento','Produtos'
			)
		)

	);
	$arraysidebar_ordenado = $arraysidebar;
	/* Função para deixar em ordem alfabética */
	sort($arraysidebar_ordenado);
	sort($arraysidebar_ordenado[0]['submenu']);
	sort($arraysidebar_ordenado[1]['submenu']);

?>
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active ">
					<a href="index.php">
						<i class="fa fa-home"></i>
						<span class="title">Dashboard</span>
						<span class="selected"></span>
					</a>
				</li>
				<!--Cliente-->
				<!-- ATIVIDADE 2 -->
				<!-- Foreach pegando o ícone e o título do menu -->
				<?php foreach($arraysidebar_ordenado as $item){?>
					<li class="">
						<a href="javascript:;">
						<i class="<?=$item['i-class']?>"></i>
						<span class="title">
							<?=$item['titulo']?>
						</span>
						<span class="arrow ">
						</span>
						</a>
						<ul class="sub-menu">
							<!-- Foreach pegando os submenus -->
							<?php foreach ($item['submenu'] as $subitem) {?>
								<li><a href="#"><?=$subitem?></a></li>
							<?php };?>
						</ul>
					</li>
				<?php };?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->