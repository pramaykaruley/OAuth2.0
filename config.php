<?php
/*
 * Basic Site Settings and API Configuration
 */

//Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'users');
define('DB_USER_TBL', 'users');

//Google API configuration
define('GOOGLE_CLIENT_ID', '383507144883-cg763qjthfn1ahn1op367f7ojap7j6gk.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'ZD9jFqIKMGlpXwl6GejGCDJM');
define('GOOGLE_REDIRECT_URL', 'http://localhost:8888/project/index.php');


// Include Google API client library
require_once('vendor/autoload.php');

// Call Google API
$gClient = new Google_Client();
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);
$gClient->addScope('email');
$gClient->addScope('profile');

// Start session
session_start();

?>
