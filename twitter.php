<?php

	session_start();

	require "twitteroauth/autoload.php";

	use Abraham\TwitterOAuth\TwitterOAuth;

	$apikey="z85ZiL0vAB7Why8nCl7CuKOJg";
	$apisecret="7iSDXkbCRTzY7ETnU9uNEfRXmXLh9yT3BUe1OVkQhkjt6dqcDt";
	$accesstoken="23765722-sQQEnqFXONXouyq1zyc3C9SrLSlOKb1aMnTew53KL";
	$accesssecret="Zqff61AEEMly7DQy4LBLBR6x5f4G4oleD0IKFPuYjAQ2n";

	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);
	

	$content = $connection->get("account/verify_credentials");
	
	//$statuses = $connection->get("search/tweets", array("q" => "leebz"));

	$tweets = $connection->get("search/tweets", array("q"=>"#imadeit", "count"=>"25", "result_type" => "recent"));



	//$statuses = $connection->post("statuses/update", array("status" => "hello world"));

	//$statuses = $connection->post("statuses/destroy", array("id" => "628871232276967424"));

	//$tweets = $connection->get("statuses/user_timeline", array("screen_name"=>"billgates", "count" => 25, "exclude_replies" => true));

	//$statuses = $connection->get("search/tweets", array("q" => "leebz"));

	//print_r($tweets);

	foreach($tweets->statuses as $tweet) {

	
		echo "\n" . " [" . $tweet->created_at . "] " . $tweet->user->screen_name . ": " . $tweet->text . "\n";

		
		

	}

	//print_r($tweets);
	//echo json_encode($tweets);


?>