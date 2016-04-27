<?php 
	$url ="http://localhost/web_services_php/post-form-page.php";
	$data = array('email' => 'phr.rezende@gmail.com','display_name'=> 'Paulo Humberto' );
	$options = array(
		"http" => array(
			'method' => 'POST',
			'header' => 'Content-Type: application/x-www-form-urlencoded',
			'content' => http_build_query($data)
			) 
	);
	$page = file_get_contents($url, false, stream_context_create($options));
	echo $page;
 ?>	