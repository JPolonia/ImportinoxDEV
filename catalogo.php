<?php $page ='fix'; 
include 'php/safe_encode.php';

?>
<?php require_once('header.php') ?>

		<!-- BREADCRUMBS -->
		<?php require_once('breadcrumb.html') ?>
		<!-- END BREADCRUMBS -->

		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<div class="row">
					<!--Left Side -->
					<div class="col-md-3">

						<!-- Search Form -
						<div class="widget">
							<form action="#" class="form-search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="pesquisar normas">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="button" data-target="#pesquisa_box" data-toggle="pill">Procura Avançada</button>
									</span>
								</div>
							</form>
						</div>
						<!-- End Search Form -->
						<!-- Side Catalogue -->
						<ul id="sidebar-nav" class="sidebar-nav margin-bottom-30px" role="tablist">
							<li class="list-group-item has-submenu" id="cp">
								<a href="#Chapa-perfurada" class="submenu-toggle " data-toggle="collapse" data-parent="sidebar-nav">CHAPA PERFURADA</a>
								<ul id="Chapa-perfurada" class="list-unstyled collapse submenu">
									<li role="presentation" id="cp2"><a href="#furo-red"  data-target="#furo-red,#furo-red_crumb,#cp_crumb" aria-controls="furo-red" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Furo Redondo</a></li>
									<li role="presentation"><a href="#furo-quad" data-target="#furo-quad,#furo-quad_crumb,#cp_crumb" aria-controls="furo-quad" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Furo Quadrado</a></li>
								</ul>
							</li>
							</br>
							<li class="list-group-item has-submenu" id="fix">
								<a href="#Fixacao" class="submenu-toggle " data-toggle="collapse" data-parent="sidebar-nav">FIXAÇÃO</a>
								<ul id="Fixacao" class="list-unstyled collapse submenu">
									<li role="presentation"id="fix2"><a href="#anilhas" data-target="#anilhas,#anilhas_crumb,#fix_crumb" aria-controls="anilhas" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Anilhas e Freios</a></li>
									<li role="presentation"><a href="#buchas" data-target="#buchas,#buchas_crumb,#fix_crumb" aria-controls="buchas" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Buchas</a></li>
									<li role="presentation"><a href="#paraf-madeira" data-target="#paraf-madeira,#paraf-madeira_crumb,#fix_crumb" aria-controls="paraf-madeira" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Parafusos para Madeira</a></li>
									<li role="presentation"><a href="#paraf-chapa" data-target="#paraf-chapa,#paraf-chapa_crumb,#fix_crumb" aria-controls="paraf-chapa" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Parafusos Rosca de Chapa</a></li>
									<li role="presentation"><a href="#paraf-metal" data-target="#paraf-metal,#paraf-metal_crumb,#fix_crumb" aria-controls="paraf-metal" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Parafusos Rosca de Metal</a></li>
									<li role="presentation"><a href="#porcas" data-target="#porcas,#porcas_crumb,#fix_crumb" aria-controls="porcas" role="tab" data-toggle="pill"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Porcas</a></li>
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
									<li role="presentation"><a href="#furo-red" aria-controlsexe="furo-red" role="tab" data-toggle="pill">Furo Redondo RT</a></li>
									<li role="presentation"><a href="#furo-red" aria-controls="furo-red" role="tab" data-toggle="pill">Furo Quadrado CU</a></li>
								</ul>
							</li>
						</ul>
						<!-- END Side Catalogue -->	
					</div>
					<!-- END Left Side -->
					
					<!-- SHOW CATALOGO -->
					<div class="col-md-9">	
					  <div class="tab-content">

					  	<div role="tabpanel" class="tab-pane fade" id="furo-red"><?php $grupo = 'ani'; $file_path = 'assets/files/normas/furo-redondo.csv';	include 'php/update_normas.php';?></div>
					  	<div role="tabpanel" class="tab-pane fade" id="furo-quad"><?php $grupo = 'ani'; $file_path = 'assets/files/normas/furo-redondo.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="anilhas"><?php $grupo = 'ani'; $file_path = 'assets/files/normas/anilhas_freios.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="buchas"><?php $grupo = 'buc'; $file_path = 'assets/files/normas/buchas.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="paraf-madeira"><?php $grupo = 'pfm'; $file_path = 'assets/files/normas/parafusos_madeira.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="paraf-chapa"><?php $grupo = 'prc'; $file_path = 'assets/files/normas/parafusos_chapa.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="paraf-metal"><?php $grupo = 'prm'; $file_path = 'assets/files/normas/parafusos_metal.csv';	include 'php/update_normas.php';?></div>
					    <div role="tabpanel" class="tab-pane fade" id="porcas"><?php $grupo = 'por'; $file_path = 'assets/files/normas/porcas.csv';	include 'php/update_normas.php';?></div> 
					 
					 	<!-- Produtos da norma - Catalogo -->
						<div  role="tabpanel" class="tab-pane fade" id ="artigo_box">
							<div class="row" style="border: 0px solid; ">
								<div class="col-xs-8" style="border: 0px solid; margin:0px -10px 0px 10px;">
									<h3 style="margin-top:0px;"><span class="artigo_norma">&nbsp;</span><span class="barra_vertical" style="font-size:30px;">&nbsp;|&nbsp;</span><span class="catitemeq"></span></h3>
									<h5 id="artigo_desc"></h5><br>
									<img src="assets/img/green.svg" align="middle" width="20" height="20">&nbsp;&nbsp;Disponibilidade imediata<br>
									<img src="assets/img/yellow.svg" align="middle" width="20" height="20">&nbsp;&nbsp;Disponível em aprox. 1 semana<br>
									<img src="assets/img/grey.svg" align="middle" width="20" height="20">&nbsp;&nbsp;Sob consulta 
								</div>
								<div class="col-xs-4" style="border: 0px solid; padding:0px;">
									<!-- GALLERY - Photoswipe -->
									<?php include 'content/art_2_gallery.php';?>
								</div>
							</div>
							<div class="row" style="margin-top:10px;border: 0px solid; margin-left:20px;">
								<!--TABLE -->
								<?php include 'content/art_3_table.php';?>
								<!--<div style="float:right;margin-bottom:20px;">
									<button id="buttonAddCart" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
									<button id="buttonModal" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalTable"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
								</div>-->
							</div>
						</div>
						<!-- Produtos - Pesquisa Avançada -->
						<div  role="tabpanel" class="tab-pane fade" id ="pesquisa_box">
							<div class="row" style="margin-top:10px;border: 0px solid; margin-left:20px;">
								<!--TABLE -->
								<?php include 'content/art_3_table.php';?>
								<div style="float:right;margin-bottom:20px;">
									<button id="buttonAddCart" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
									<button id="buttonModal" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalTable"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
								</div>
							</div>
						</div>

					  </div>								
					</div>

					<!--END  SHOW CATALOGO -->

				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT -->
		
		<!-- MODAL TABLE-->
	<?php include 'content/art_5_modaltable.php';?>

<?php require_once('footer.php') ?>
	<?php //include 'photoswipe.html';?>
<script src="assets/js/plugins/photoswipe/photoswipe.min.js"></script>
<script src="assets/js/plugins/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="assets/js/catalogo/artigo.js"></script>
<script src="assets/js/catalogo/shop_cart.js"></script>
<script src="assets/js/catalogo/table_artigo.js"></script>

<script src="assets/js/bootstrap-table/bootstrap-table.js"></script>
<script src="assets/js/bootstrap-table/bootstrap-table-pt-PT.js"></script>
<script type="text/javascript" src="assets/js/tableExport.js"></script>
<script type="text/javascript" src="assets/js/FileSaver.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-table/extensions/bootstrap-table-export.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-table/extensions/bootstrap-table-filter/bootstrap-table-filter.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-table/extensions/bootstrap-table-filter/bootstrap-table-filter.pt-BR.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-table/extensions/bootstrap-table-filter/bs-table.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-table-filter.js"></script>
<script>
    function operateFormatter(value, row, index) {
        return [
            '<a class="remove ml10" href="javascript:void(0)" title="Remove" style="color:#D43F3A; font-size: 16px;" >',
                '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    window.operateEvents = {
        'click .remove': function (e, value, row, index) {
            $('#modalTable-table').bootstrapTable('remove', {
		        field: 'ref',
		        values: [row.ref]
		    });
        }
    };
</script>

