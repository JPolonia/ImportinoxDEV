<?php $page ='artigo'; 
/* 
$nm = $_GET['nm']; */
include 'assets/php/safe_encode.php';
$nm ="DIN 571";
if(isset($_GET['nm']) && isset($_GET['equi']) && isset($_GET['desc']) && isset($_GET['img'])){
	$nm = decode($_GET['nm']);
	$equi = decode($_GET['equi']);
	$desc = decode($_GET['desc']);
	$img = decode($_GET['img']);
	list($width_img,$height_img) = getimagesize('assets/img/normas/' .$img);
	//echo "<script type='text/javascript'>alert('$width_img');</script>";

} 

//echo "<script type='text/javascript'>alert('$nm');</script>";

?>
<?php //require_once('header.php') ?>
		<!-- BREADCRUMBS -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">Fixação</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php">Catálogo</a></li>
					<li class="active">Fixação</li>
				</ol>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container animated fadeInUp notransition fixwidth">
				<div class="row">
					<!-- SIDEBAR -->
		            <aside class="col-md-1 anime" >
						<i class="fa fa-building-o"></i>
					</aside>  
					<div id="main-produto" class="col-md-11 anime" style="">
					</div>		
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT -->
<?php //require_once('footer.php') ?>
<!-- MODAL TABLE-->
<?php include 'art_5_modaltable.php';?>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<?php include 'photoswipe.html';?>
<script src="assets/js/photoswipe/photoswipe.min.js"></script>
<script src="assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="assets/js/artigo.js"></script>

<script src="assets/js/bootstrap-table/bootstrap-table.js"></script>
<script src="assets/js/bootstrap-table/bootstrap-table-pt-PT.js"></script>
<script type="text/javascript" src="assets/js/tableExport.js"></script>
<script type="text/javascript" src="assets/js/FileSaver.js"></script>
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

