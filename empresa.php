<?php 
   	require_once("header.php");

	$page = isset($_GET['page']) ? $_GET['page'] : "importinox";
	$page_url = "content/empresa/".$page.".html";
	require_once($page_url);

	require_once("footer.php");
?>
	