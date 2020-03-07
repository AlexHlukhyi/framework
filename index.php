<?php
	require_once 'data/config.php';
	require 'controller/autorun.php';
	$controller = new \Controller\GroupListApp(Config::$modelType, Config::$viewType);
	$controller->run();
?>