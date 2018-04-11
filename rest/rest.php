<?php 
	require 'functions.php';
	
	if(!empty($_GET['name'])) {
		$name = $_GET['name'];
		$obj = new ServicesLibrary();
		$price = $obj->get_price($name);
		
		if(!empty($price)) {
			// respond the price
			deliver_response(200, 'Book Found', $price);
		} else {
			// book not found
			deliver_response(400, 'Book Not Found', NULL);
		}
	} else {
			// Throw error message
			deliver_response(400, 'Invalid Request', NULL);
	}
	
	function deliver_response($status, $status_message, $data) {
		header("HTTP/1.1 $status $status_message");
		$response['status'] = $status;
		$response['status_message'] = $status_message;
		$response['data'] = $data;
		
		$json_response = json_encode($response);
		echo $json_response;
	}
?>