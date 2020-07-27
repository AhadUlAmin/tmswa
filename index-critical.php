<?php 
ini_set("display_errors", false );
require 'database_connection.php';
	$user  = $_GET["user"];
	$publishers = $_GET["publisher"];
	$community = $_GET["community"];
	$collection = $_GET["collection"];
	$userAltName = $_SESSION["userAltName"];
	$userName = $_SESSION["userName"];
	$userEmail = $_SESSION["userEmail"];
	$userId = $_SESSION["userId"];

			
// Check  page,collection,community,user from database 
	$check_users = mysqli_query($conn,"select * from `users` where `username` = '" . mysqli_real_escape_string($conn,$user) . "'");
	$check_publishers = mysqli_query($conn,"select * from `publishers` where `publisher_name` = '" . mysqli_real_escape_string($conn,$publishers) . "'");
	$check_community = mysqli_query($conn,"select * from `communities` where `community_name` = '" . mysqli_real_escape_string($conn,trim($community)) . "'");
	$check_collection = mysqli_query($conn,"select * from `collection` where `collection_name` = '" . mysqli_real_escape_string($conn,$collection) . "'");
	
//conditional page 
	if (isset($user) && !empty($user) && mysqli_num_rows($check_users) > 0){
		$getUser = mysqli_fetch_array($check_users);
		require 'index_user.php';
		 

	}
	else if(isset($publishers) && !empty($publishers)){
		$ms_uid = trim(strip_tags($publishers));
		$ms_uid = substr($ms_uid, -11);
		$check_news = mysqli_query($conn,"select * from `article` where `article_unique_id` = '" . mysqli_real_escape_string($conn,$ms_uid) . "'");
		if (isset($ms_uid) && !empty($ms_uid) && mysqli_num_rows($check_news) > 0)
		{
		 
		 require 'getdataforone.php';
		 
		}else if(mysqli_num_rows($check_publishers) > 0){
			 echo "Publisher:".$publishers;
		}

		
		 // index-- Publisher or page , article , topics etc

		 //require 'index_publisher.php';
	}
	else if(isset($community) && !empty($community) && mysqli_num_rows($check_community) > 0){
		echo "Group:".$community;
	}
	else if(isset($collection) && !empty($collection) && mysqli_num_rows($check_collection) > 0){
		echo "Collection:".$collection;
	}			
	else if((isset($user) or isset($publishers) or isset($community) or isset($collection)) && (mysqli_num_rows($check_users) == 0 or mysqli_num_rows($check_publishers) == 0 or mysqli_num_rows($check_communities) == 0 or mysqli_num_rows($check_collection) == 0)){
		require 'error_page.php';
	}
	else if (!isset($user) && empty($user) && !isset($publishers) && empty($publishers) && !isset($community) && empty($community) && !isset($collection) && empty($collection) ){
		if(isset($userAltName)){
			require 'index_session.php';
		}
		else{
			require 'home.php';
		}
	}

	
	?>