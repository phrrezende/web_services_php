<?php 

	$url ="http://localhost:8080/web_services_php/rpc-soap/rpc.php";
	$data= array("action" => "greetUser", "name" => "Paulo Humberto");
	$get_addr= $url.'?'.http_build_query($data);
	$ch = curl_init($get_addr);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$page= curl_exec($ch);
	echo $page
 ?>