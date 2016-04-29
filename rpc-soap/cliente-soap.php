<?php 

	$options = array('location' => 'http://localhost:8080/web_services_php/rpc-soap/soap.php', 'uri' => 'http://localhost:8080' );

	try {
		$client = new SoapClient(null, $options);
		$dwarves = $client->getDwarves();
		var_dump($dwarves);
	} catch (SoapFault $e) {
		var_dump($e);
	}

 ?>