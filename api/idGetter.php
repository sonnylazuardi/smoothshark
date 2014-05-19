<?php

	require_once 'tinysong.php';
	
	$api_key = 'c8fc7be5c21257619d8c833541219f02';
	
	$query = $_GET['query'];
	
	$tinysong = new Tinysong($api_key);
	
	$result = $tinysong
	            ->single_tinysong_metadata($query)
	            ->execute();
	
	echo $_GET['callback'] . "(" . json_encode($result) . ");";

?>