<?php 

	$url = "http://localhost/web_services_php/get-form-page.php";
	$data = array('category' =>"sport" , 'rows'=> '20');

	$get_addr= $url."?".http_build_query($data);
	$page= file_get_contents($get_addr);
	echo $page;


 ?>