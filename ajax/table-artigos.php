<div class="row" style="border: 0px solid; ">
	<div class="col-xs-8" style="border: 0px solid; margin:0px -10px 0px 10px;">
		<h3 style="margin-top:0px;"><?php echo $nm; if(!empty($equi)){?><span class="barra_vertical" style="font-size:30px;">&nbsp;|&nbsp;</span><?php } ?><span class="catitemeq"><?php echo $equi; ?></span></h3>
		<h5><?php echo $desc; ?></h5><br>
		<img src="assets/img/green.svg" align="middle" width="20" height="20">&nbsp;&nbsp;Disponibilidade imediata<br>
		<img src="assets/img/yellow.svg" align="middle" width="20" height="20">&nbsp;&nbsp;Disponível em aprox. 1 semana<br>
		<img src="assets/img/grey.svg" align="middle" width="20" height="20">&nbsp;&nbsp;Sob consulta 
	</div>
	<div class="col-xs-4" style="border: 0px solid; padding:0px;">
		<!-- GALLERY - Photoswipe -->
		<!-- END GALLERY - Photoswipe -->
	</div>
</div>
<div class="row" style="margin-top:10px;border: 0px solid; margin-left:20px;">
	<!--TABLE -->
	<div id="filter-bar"></div>
	<!--<button id="buttonModal" class="btn btn-default">getSelections</button>-->
	<table id="gridTable" data-toggle="table"
		data-classes="table table-hover table-no-bordered"
		data-url="assets/php/your.php?nm=<?php echo $nm; ?>" 
		
		data-sort-name="ref"	
		data-sort-order="ref"

		data-show-toggle="true"
		data-show-columns="true"
		data-checkbox-header="false"
		data-click-to-select="true"
		data-maintain-selected="true"
		

		data-show-filter="true"
		data-toolbar="#filter-bar"	
		
		data-pagination="true"
		data-page-size="10"
		data-show-pagination-switch="true"

		data-show-export="true"
	    data-export-data-type="all"

		data-detail-view="true"
		data-detail-formatter="detailFormatter"
		data-id-field="ref"

		data-search="true"
		data-trim-on-search="false"
		>
		<thead>
			<tr>
				<th data-field="state" data-sortable="true" data-visible='true' data-checkbox="true" data-formatter="stateFormatter"></th>
				<th data-field="ref" data-sortable="true" data-visible='false' >Referência</th>
				<th data-field="design" data-sortable="true" data-visible='true' >Descrição</th>
				<th data-field="material" data-sortable="true" data-visible='true' >Material</th>
				<th data-field="acabamento" data-sortable="true" data-visible='true'>Acabamento</th>
				<th data-field="diametro" data-sortable="true" data-visible='false'>Dia</th>
				<th data-field="comprimento" data-sortable="true" data-visible='false'>Com</th>
				<th data-field="qtdcx" data-sortable="true" data-visible='true'>Qtd/cx</th>
				<th data-field="peso" data-sortable="true" data-visible='false'>Peso</th>
				<th data-field="uni" data-sortable="true" data-visible='false'>Uni</th>
				<th data-field="stock" data-sortable="true" data-visible='true' data-formatter="stockFormatter" >Stock</th>
			</tr>
		</thead>
	</table>
	<!--END TABLE -->
	<div style="float:right;margin-bottom:20px;">
		<button id="buttonAddCart" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
		<button id="buttonModal" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalTable"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
	</div>
</div>
