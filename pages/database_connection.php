<?php
    //session_start(); //Start a session which should always be at the very top of your page as defined here
	define('BASE_PATH','https://www.themornstar.com/en-us/');
	define ('hostnameorservername','10.169.0.233'); //Your server name or host name goes in here
	define ('serverusername','themorns_user'); //Your database username goes in here
	define ('serverpassword','t123m123s'); //Your database password goes in here
	define ('databasenamed','themorns_tar'); //Your database name goes in here
	
	global $connection; 
	$connection = @mysql_connect(hostnameorservername,serverusername,serverpassword) or die('Connection could not be made to the SQL Server. Please report this system error at <font color="blue">info@servername.com</font>');
	@mysql_select_db(databasenamed,$connection) or die('Connection could not be made to the database. Please report this system error at <font color="blue">info@servername.com</font>');	

  
?>