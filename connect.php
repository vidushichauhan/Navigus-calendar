<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// Try connecting to the Database
$conn = mysqli_connect('127.0.0.1:3307' ,DB_USERNAME, DB_PASSWORD,DB_NAME);

//Check the connection
if($conn==false)
{
	dir('Error: Unable to connect');
}

?>