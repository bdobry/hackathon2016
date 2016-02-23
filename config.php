<?php

// Database Details
define('SERVERNAME','mysql15.unoeuro.com');
define('SERVERPORT','3306');
define('DBUSERNAME','classmate_dk');  // Replace root with your database username. If unsure, leave as is.
define('DBPASSWORD','classmate2016');	// Replace root with your database user password.
define('DBNAME','classmate_dk_db'); 	//Create a new database qwench on your server and replace YOUR_DB with it's name

Define('ANSWERS_PER_PAGE','10');
define('QUESTIONS_PER_PAGE','10');

//if you want to enable production mode vs debug mode (useful for error reporting)
//Possible values 1 = true or 0 = false
define('DEBUG_MODE','1');

// If you want only logged in users to view the site
define('ALLOW_VISITORS','1');

// Do not change salt after users have registered
define('SALT','yoursecurestringoverhere');

// Set default timezone if you want or comment the line below
date_default_timezone_set("Asia/Calcutta");

// No trailing slash
// Path to the Qwench folder
// If you have installed Qwench in your
// root folder then set
// define('BASE_DIR','');
define('BASE_DIR','');

// If URL-Rewriting does not work then set
// define('BASE_PATH',BASE_DIR.'/index.php');
// If URL-Rewriting works, then leave the line below as is
define('BASE_PATH',BASE_DIR);