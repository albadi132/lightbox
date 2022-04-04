<?php 

if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "en";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		else if ($_GET['lang'] == "ar")
			$_SESSION['lang'] = "ar";
	}

	require_once "languages/" . $_SESSION['lang'] . ".php";

?>