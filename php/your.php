<?php 
	include 'database/db_utf8.php';
	include 'database/db_var.php';
	include 'database/db_connec.php';

	/*Set more memory so it can can read whole database*/
	//ini_set('memory_limit', '256M'); // or you could use 1G

	//simple query and binding with results
	$stmt = $conn->prepare(" SELECT ref, design, material, acabamento, diametro, comprimento, qtdcx, peso, uni, stock, qtd, qttcli, qttfor,classe FROM artigos WHERE norma = :norma");
	//$stmt = $conn->prepare(" SELECT ref, design, material, acabamento, diametro, comprimento, qtdcx, peso, uni, stock, qtd, qttcli, qttfor,classe FROM artigos");

	$nm = (isset($_GET['nm']) === true) ? $_GET['nm'] : 0 ;
	//echo "<script type='text/javascript'>alert('$nm');</script>";
	
	// bind parameters - avoids SQL injection
	$stmt->bindValue(':norma', $nm);

	//if(!$nm) $stmt = $conn->prepare(" SELECT ref, design, material, acabamento, diametro, comprimento, qtdcx, peso, uni, stock, qtd, qttcli, qttfor,classe FROM artigos");
	
	try {
		// prepare sql and bind parameters
		$stmt->execute();

		// set the resulting array to associative
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($results as $k => $produto) {
			//Remove spaces
			$results[$k]= array_map('trim',$produto);

			//Change real stock and join qttcli and qttfor
			$val=$produto['stock'] - $produto['qttcli'];
			if($val > 1){$results[$k]['stock']='A';}
			elseif($val + $produto['qttfor'] > 0){$results[$k]['stock']='B';}
			else{$results[$k]['stock']='C';}

			//Join Material + Classe
			$results[$k]['material'] = trim((trim($produto['classe']) != '-')? trim($produto['material']).' '.trim($produto['classe']) :  trim($produto['material']));			

		}

		//Remove extra columns
		foreach ($results as &$element) {
			$element = array_slice($element, 0, 11);
		}

		//var_dump($results);

		//Send data in json
		echo json_encode($results);
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
		return 0;
	}
	$conn = null;

?>