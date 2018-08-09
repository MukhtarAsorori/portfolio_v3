<?php
/*
 * --------------------------------------------------------------------
 * LOAD THE CUSTOM FILE CONFIGURATIONS
 * --------------------------------------------------------------------
 *
 */

/**
 * Configuration for base URL
 */
$BASE_URL = "http://localhost/nazish/portfolio_v3";
// $BASE_URL = "http://192.168.43.35/nazish/portfolio_v3";
$GLOBALS['BASE_URL'] = $BASE_URL;

/**
 * Configuration for database
 */
$database = array(
	'HOSTNAME' 			=> 'localhost',
	'USERNAME' 			=> 'root',
	'PASSWORD' 			=> 'root',
	'DATABASE_NAME' 	=> 'portfolio_v3',
);
$GLOBALS['DATABASE'] = $database;

$GLOBALS['maintenance_mode'] 	= FALSE;
$GLOBALS["ENCRYPTION_KEY"] = "nazish";
?>