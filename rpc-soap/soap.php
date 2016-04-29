<?php 

	require('library.php');

	$options = array('uri' => 'http://localhost:8080' );
	$server= new SoapServer(null,$options);
	$server->setClass('Library');
	$server->handle();
 ?>