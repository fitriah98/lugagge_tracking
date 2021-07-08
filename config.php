<?php 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'id17096049_luggagetracking'); 
define('DB_PASSWORD', 'iV|4xLd8e}$Z*ic<'); 
define('DB_NAME', 'id17096049_luggagetracker');

define('GOOGLE_MAP_API_KEY', '');

//ESP32_API_KEY is the exact duplicate of, ESP32_API_KEY in ESP32 sketch file
//Both values must be same
define('ESP32_API_KEY', 'Ad5F10jkBM0');

//http://www.example.com/gpsdata.php
define('POST_DATA_URL', 'http://nurul-fitriah.000webhostapp.com/gpsdata.php');

date_default_timezone_set('Asia/Kuala_Lumpur');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}