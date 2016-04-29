<?php 

	include("library.php");

	$lib = new Library();

	if(isset($_GET['action'])){
		switch ($_GET['action']) {
			case 'getDwarves':
				$data= $lib->getDwarves();
				break;
			case 'greetUser':
				$data= $lib->greetUser(
						filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING)
					);
				break;
			default:
				http_response_code(400);
				$data= array("error"=>" bad request");
				break;
		}

		header("Content-Type: application/json");
		echo json_encode($data);
	}
	
 ?>