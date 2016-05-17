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
												
						<!--<dl class="cat">
							<dt><div id="cat_ring" class="cat_img"><img src="assets/img/grupos/ring2_24.png"></div>Anilhas e Freios</dt>
								<dd><?php //$grupo = 'ani'; $file_path = 'assets/normas/anilhas_freios.csv';	include 'assets/normas/update_normas.php';?></dd>
							<dt><div id="cat_buc" class="cat_img"><img src="assets/img/grupos/buc2_24.png"></div>Buchas</dt>
								<dd><?php //$grupo = 'buc'; $file_path = 'assets/normas/buchas.csv';	include 'assets/normas/update_normas.php';?></dd>
							<dt><div id="cat_aab" class="cat_img"><img src="assets/img/grupos/aab2_24.png"></div>Parafusos para Madeira</dt>
								<dd><?php //$grupo = 'pfm'; $file_path = 'assets/normas/parafusos_madeira.csv';	include 'assets/normas/update_normas.php';?></dd>
							<dt><div id="cat_aaa2" class="cat_img"><img src="assets/img/grupos/aaa2_24.png"></div>Parafusos Rosca de Chapa</dt>
								<dd><?php //$grupo = 'prc'; $file_path = 'assets/normas/parafusos_chapa.csv';	include 'assets/normas/update_normas.php';?></dd><
							<dt><div id="cat_cat3" class="cat_img"><img src="assets/img/grupos/cat2_24.png"></div>Parafusos Rosca de Metal</dt>
								<dd><?php//$grupo = 'prm'; $file_path = 'assets/normas/parafusos_metal.csv';	include 'assets/normas/update_normas.php';?></dd>
							<dt><div id="cat_nut2" class="cat_img"><img src="assets/img/grupos/nut2_24.png"></div>Porcas</dt>
								<dd><?php //$grupo = 'por'; $file_path = 'assets/normas/porcas.csv';	include 'assets/normas/update_normas.php';?></dd>
						</dl>
						<!-- END CONCTACT FORM -->
					</div>
					<div class="col-md-3" style="display:none">
						<!-- RIGHT SIDEBAR CONTENT -->
						<div class="widget">
							<h3 class="widget-title">INFORMAÇÃO DE CONTACTO</h3>
							<ul class="contact-info fa-ul">
								<li><i class="fa fa-li fa-building-o"></i> Rua Maria Custódia Pereira da Silva, 24</br>Zona Industrial da Maia I, Sector IV</br>Apartado 6080 Tecmaia</br>4470-461 Maia</br>Portugal</li>
								<li><i class="fa fa-li fa-phone"></i><a href="tel:+351229478710"> (+351) 229 478 710</a></li>
								<li><i class="fa fa-li fa-mobile"></i><a href="tel:+351925901006"> (+351) 925 901 006</a></li>
								<li><i class="fa fa-li fa-fax"></i> (+351) 229 478 719</li>
								<li><i class="fa fa-li fa-envelope-o"></i> <a href="mailto:info@importinox.com">info@importinox.com</a></li>
							</ul>
						</div>
						<div class="widget">
							<h3 class="widget-title">GPS - Coordenadas</h3>
							<a target="_blank" href="http://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=IMPORTINOX %4041.256565,-8.641117&amp;hl=pt-PT&amp;geocode=&amp;mra=mift&amp;sll=41.255968,-8.63888&amp;sspn=0.005033,0.011319&amp;ie=UTF8&amp;t=h&amp;ll=41.256767,-8.641112&amp;spn=0.005033,0.011319&amp;z=17"><i class="fa fa-location-arrow footer-icon"></i>&nbsp;&nbsp;GPS: 41º15'23N & 8º38'27W</a>
						</div>
						<div class="widget">
							<h3 class="widget-title">HORÁRIO LABORAL</h3>
							<ul class="list-unstyled">
								<li><strong>Segunda-Sexta: </strong> 09h00 às 18h00</li>
								<li><strong>Sábado: </strong> Fechado</li>
								<li><strong>Domingo: </strong> Fechado</li>
							</ul>
						</div>
						<!-- END RIGHT SIDEBAR CONTENT -->
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT -->
<?php require_once('footer.php') ?>

