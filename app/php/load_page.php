<?php

if(!$_POST['page']) die("0");

$page = $_POST['page'];

echo file_get_contents($page);


?>
