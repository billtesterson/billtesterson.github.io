<?php
	
	//Create Unique Request-ID
	$today = date("YmdHis");
	
	//Get Information
	$API_Endpoint = $_REQUEST['GHostURL'];
	$API_ByPass = $_REQUEST['passPaypalNVP'];
	$API_String = $_REQUEST['strBody'];
	

	$headers[] = "Content-Type: text/namevalue";
	// Set the server timeout value to 45, but notice below in the cURL section, the timeout
	// for cURL is set to 90 seconds.  Make sure the server timeout is less than the connection.
	$headers[] = "X-VPS-CLIENT-TIMEOUT: 45";
	$headers[] = "X-VPS-REQUEST-ID:" . $today;
	$headers[] = "PAYPAL-NVP:" . $API_ByPass;
		
	//setting the curl parameters.
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$API_Endpoint);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);

	//turning off the server and peer verification(TrustManager Concept).
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 90); 
	curl_setopt($ch, CURLOPT_POST, 1);
		
	//NVPRequest for submitting to server
	$nvpreq = $API_String;

	//setting the nvpreq as POST FIELD to curl
	curl_setopt($ch, CURLOPT_POSTFIELDS, $nvpreq);

	//getting response from server
	$response = curl_exec($ch);
	
	//print out the request
	echo "<b>Request:</b>" . $API_String;
	echo "<p></p>";
	
	//print out the response
	echo "<b>Response:</b>" .$response;


?>