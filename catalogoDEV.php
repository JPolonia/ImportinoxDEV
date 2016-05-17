<?php $page ='fix'; 
include 'assets/php/safe_encode.php';
?>
<?php require_once('header.php') ?>
		<!-- BREADCRUMBS -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">Catálogo</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li ><a >Fixação</a></li>
					<li class="active"><a >Anilhas e Freios</a></li>
				</ol>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<!-- Search Form -->
						<div class="widget">
							<form action="#" class="form-search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="pesquisar normas">
									<span class="input-group-btn">
									<button class="btn btn-primary" type="button">Procurar</button>
								</span>
								</div>
							</form>
						</div>
						<!-- End Search Form -->
						<ul id="sidebar-nav" class="sidebar-nav margin-bottom-30px" role="tablist">
							<li class="list-group-item has-submenu">
								<a href="#Chapa-perfurada" class="submenu-toggle " data-toggle="collapse" data-parent="sidebar-nav">CHAPA PERFURADA</a>
								<ul id="Chapa-perfurada" class="list-unstyled collapse submenu ">
									<li role="presentation"><a href="#furo-red" aria-controls="furo-red" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Furo Redondo</a></li>
									<li role="presentation"><a href="#furo-quad" aria-controls="furo-quad" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Furo Quadrado</a></li>
								</ul>
							</li>
							</br>
							<li class="list-group-item has-submenu active">
								<a href="#Fixacao" class="submenu-toggle " data-toggle="collapse" data-parent="sidebar-nav">FIXAÇÃO</a>
								<ul id="Fixacao" class="list-unstyled collapse submenu in">
									<li role="presentation" class = "active"><a href="#anilhas" aria-controls="anilhas" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Anilhas e Freios</a></li>
									<li role="presentation"><a href="#buchas" aria-controls="buchas" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Buchas</a></li>
									<li role="presentation"><a href="#paraf-madeira" aria-controls="paraf-madeira" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Parafusos para Madeira</a></li>
									<li role="presentation"><a href="#paraf-chapa" aria-controls="paraf-chapa" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Parafusos Rosca de Chapa</a></li>
									<li role="presentation"><a href="#paraf-metal" aria-controls="paraf-metal" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Parafusos Rosca de Metal</a></li>
									<li role="presentation"><a href="#porcas" aria-controls="porcas" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Porcas</a></li>
								</ul>
							</li>
							</br>
							<li class="list-group-item has-submenu">
								<a href="#Gradil" class="submenu-toggle " data-toggle="collapse" data-parent="sidebar-nav">GRADIL</a>
								<ul id="Gradil" class="list-unstyled collapse submenu ">
									<li role="presentation"><a href="#furo-red" aria-controls="furo-red" role="tab" data-toggle="pill">Furo Redondo RT</a></li>
									<li role="presentation"><a href="#furo-red" aria-controls="furo-red" role="tab" data-toggle="pill">Furo Quadrado CU</a></li>
								</ul>
							</li>
							</br>
							<li class="list-group-item has-submenu">
								<a href="#Metal-distendido" class="submenu-toggle " data-toggle="collapse" data-parent="sidebar-nav">METAL DISTENDIDO</a>
								<ul id="Metal-distendido" class="list-unstyled collapse submenu ">
									<li role="presentation"><a href="#furo-red" aria-controls="furo-red" role="tab" data-toggle="pill">Furo Redondo RT</a></li>
									<li role="presentation"><a href="#furo-red" aria-controls="furo-red" role="tab" data-toggle="pill">Furo Quadrado CU</a></li>
								</ul>
							</li>
						</ul>
					
							
							
					</div>
					<div class="col-md-9" id="ajax-content">	
						<!-- Tab panes -->
					  <div class="tab-content">
					  	<div role="tabpanel" class="tab-pane fade" id="furo-red"><?php $grupo = 'ani'; $file_path = 'assets/files/normas/furo-redondo.csv';	include 'php/update_normas.php';?></div>
					  	<div role="tabpanel" class="tab-pane fade" id="furo-quad"><?php $grupo = 'ani'; $file_path = 'assets/files/normas/furo-redondo.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade in active" id="anilhas"><?php $grupo = 'ani'; $file_path = 'assets/files/normas/anilhas_freios.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="buchas"><?php $grupo = 'buc'; $file_path = 'assets/files/normas/buchas.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="paraf-madeira"><?php $grupo = 'pfm'; $file_path = 'assets/files/normas/parafusos_madeira.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="paraf-chapa"><?php $grupo = 'prc'; $file_path = 'assets/files/normas/parafusos_chapa.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="paraf-metal"><?php $grupo = 'prm'; $file_path = 'assets/files/normas/parafusos_metal.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="porcas"><?php $grupo = 'por'; $file_path = 'assets/files/normas/porcas.csv';	include 'php/update_normas.php';?></div> 
					  </div>
						
						<!-- END CONCTACT FORM -->
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT -->
<?php require_once('footer.php') ?>

