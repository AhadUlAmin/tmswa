<?php
    ob_start();
    session_start(); //Start a session which should always be at the very top of your page as defined here
	define('BASE_PATH','http://localhost/themornstar/');
      //  $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST']."/";
        //define('BASE_PATH',$actual_link);
        define ('hostnameorservername','localhost'); //Your server name or host name goes in here
	define ('serverusername','root'); //Your database username goes in here
	define ('serverpassword',''); //Your database password goes in here
	define ('databasenamed','webagency'); //Your database name goes in here
	
        $conn = mysqli_connect(hostnameorservername,serverusername,serverpassword,databasenamed);
	if(!$conn){
		die("Couldn't Connect to host server : ".mysqli_connect_error());
	}
	else{
		// echo "Successfully connected to host server";
	}

?>