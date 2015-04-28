<?php 
	require_once(__DIR__ . "/controller/login-verify.php");
	require_once(__DIR__ . "/view/index.php");
	if(authenticateUser()){
		require_once(__DIR__ . "/view/navigation.php");

	}
	require_once(__DIR__ . "/controller/create-dg.php")
	require_once(__DIR__ . "/view/footer.php")
?>