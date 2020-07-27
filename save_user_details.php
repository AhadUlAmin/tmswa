<?php
include 'database_connection.php';
include("mail/index.php");
function anotherRandomIDGenerator($length = 11) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

}


if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	//Sign-up Page Starts here
	if($_POST["page"] == "users_registration")
	{
		$email = trim(strip_tags(strtolower($_POST['email'])));
		$username = trim(strip_tags($_POST['username']));
		$fullname = $_POST['fullname'];
		$password = trim(strip_tags($_POST['password']));
		$encrypted_md5_password = md5($password);
		$UserJoinDate = date('d-m-Y');
		$UserType = "Normal";
		$UserPublicity = "Public";
		$UserActivation = "No";
		$user_altname = anotherRandomIDGenerator();
		
		$check_for_duplicates_email = mysqli_query($conn,"select * from `users` where `user_email` = '".mysqli_real_escape_string($conn,$email)."'");		
		$check_for_duplicates_user = mysqli_query($conn,"select * from `users` where `username` = '".mysqli_real_escape_string($conn,$username)."'");
		if($email == "" || $username == "" || $password == "" )
		{
			echo '<br><div class="info">Sorry, all fields are required to create a new account. Thanks.</div><br>';
		}
		elseif(!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/", $email))
		{
			echo '<br><div class="info">Sorry, Your email address is invalid, please enter a valid email address to proceed. Thanks.</div><br>';
		}	
		else if(!preg_match("/^[a-zA-Z0-9_.-]+$/", $username))
		{
			echo '<br><div class="info">Sorry, Your username address is invalid, please enter a valid email address to proceed. Thanks.</div><br>';
		}
		else if(mysqli_num_rows($check_for_duplicates_email) > 0)
		{
			echo '<br><div class="info">Sorry, your email address already exist in our database and duplicate email addresses are not allowed for security reasons.<br>Please enter a different email address to proceed or login with your existing account. Thanks.</div><br>';
		}	
		else if(mysqli_num_rows($check_for_duplicates_user) > 0)
		{
			echo '<br><div class="info">Sorry, your username in our database and duplicate email addresses are not allowed for security reasons.<br>Please enter a different email address to proceed or login with your existing account. Thanks.</div><br>';
		}
		else
		{
			
		
			if(mysqli_query($conn,"INSERT INTO `users`(`user_id`, `username`, `user_email`, `user_password`, `join_date`, `user_type`, `user_publicity`, `user_activation`, `user_altname`,`user_fullname`) 
			VALUES ('NULL','$username','$email','$encrypted_md5_password','$UserJoinDate','$UserType','$UserPublicity','$UserActivation','$user_altname','$fullname')"))
			{
			
			$sql_in= mysqli_query($conn,"SELECT * FROM `users` where `user_email` = '".mysqli_real_escape_string($conn,$email)."'");
            $r = mysqli_fetch_array($sql_in);

			    $_SESSION["USER_ID"] = $r['user_id'];
			 	$_SESSION["USER_EMAIL"] = $r['user_email'];
				$_SESSION["USER_FULLNAME"] = strip_tags($r['username']);
				$_SESSION["user_altname"] = strip_tags($r['user_altname']);
				echo 'index.php?account='.$_SESSION["USER_FULLNAME"].'&';
				echo 'confirm=yes';
				
				
			
			//Sending mails with php mailer 
		      $to = $email;

      $subject  =   " Welcome to TheMornStar.Com";
      $message  =   "<h1>You are a member of TheMornStar </h1>
					<br> Email :".$email."
					<br>Password :".$password."
					<p style='font-size:18px;font-align:justify;'>TheMornStar enables to express your report to change  the world .You can become and make consciousness. It dreams to see the world in the way that everyone can express opinion freely to make the best  decision  .</p>

						<br><h1>A few of the BENEFITS TO YOU </h1>
						 
						<br><br>
						
					<ul style='font-size:18px;font-align:justify;'>

					<li>	You  can read , write and publish news after signup .</li>
					<li>	You  also ask question , give opinion ,
						read reasons , like , comment and delete news/article .</li>
					<li>	Smart Exploring and searching  news is awesome .</li>
					<li>	You can make a news board and upgraded to a professional reporter and work with us .
					</li>
					   </ul> 
						<br>
						We are still working to improve the new platform - if you do notice any rough edges,
						please do let us know, via info@themornstar.com or use our Contact Us page. 
					<br>
					Thank you
					<br>

				
					<br><br>
					TheMornStar<br>
					Contacts:<br>
					+8801521257123 | info@themornstar.com| https://www.themornstar.com <br>
					Mirpur,Dhaka,Bangladesh<br>";
      $name     =   "Muhammad Ahad Aminul";
      $mailsend =   sendmail($to,$message,$subject);
				
			}
			else
			{
				echo '<br><div class="info">Sorry, your account could not be created at the moment. Please try again or contact the site admin to report this error if the problem persist. Thanks.</div><br>';
			}
		}
	}
	//Sign-up Page Ends here
	
	
	
	//Login Page Starts here
	elseif($_POST["page"] == "users_login") 
	{
		$email = trim(strip_tags($_POST['email']));
		$password = trim(strip_tags($_POST['password']));
		$encrypted_md5_password = md5($password);
		
		$validate_user_information = mysqli_query($conn,"select * from `users` where `user_email` = '".mysqli_real_escape_string($conn,$email)."' and `user_password` = '".mysqli_real_escape_string($conn,$encrypted_md5_password)."'");
		
		if(mysqli_num_rows($validate_user_information) == 1)
		{
			$get_user_information = mysqli_fetch_array($validate_user_information);
			$_SESSION["USER_EMAIL"] = $email;
			$_SESSION["USER_FULLNAME"] = strip_tags($get_user_information["username"]);
			$_SESSION["user_altname"] = strip_tags($get_user_information['user_altname']);
			$_SESSION["USER_ID"] = strip_tags($get_user_information["user_id"]);
			
			echo 'index.php?account='.$_SESSION["USER_FULLNAME"].'&';
			echo 'login=yes';
			
			
			
			
			//Sending mails with php mailer 
	 		       $to = $email;

      $subject  =   "You have logged successfully ".date('m/d/Y h:i:s a', time());
      $message  =   "<h1>Media United - WELCOME to Media United </h1>
					 <br> Email :".$email."
					<br>Password :".$encrypted_md5_password."
					<p style='font-size:18px;font-align:justify;'>TheMornStar enables to express your report to change  the world .You can become and make consciousness. It dreams to see the world in the way that everyone can express opinion freely to make the best  decision  .</p>

						<br><h1>A few of the BENEFITS TO YOU </h1>
						 
						<br><br>
						
					<ul style='font-size:18px;font-align:justify;'>

					<li>	You  can read , write and publish news after signup .</li>
					<li>	You  also ask question , give opinion ,
						read reasons , like , comment and delete news/article .</li>
					<li>	Smart Exploring and searching  news is awesome .</li>
					<li>	You can make a news board and upgraded to a professional reporter and work with us .
					</li>
					   </ul> 
						<br>
						We are still working to improve the new platform - if you do notice any rough edges,
						please do let us know, via info@themornstar.com or use our Contact Us page. 
					<br>
					Thank you
					<br>

				
					<br><br>
					TheMornStar<br>
					Contacts:<br>
					+8801521257123 | info@themornstar.com| https://www.themornstar.com <br>
					Mirpur,Dhaka,Bangladesh<br>";
      $name     =   "Muhammad Ahad Aminul";
      $mailsend =   sendmail($to,$message,$subject);
     /*if($mailsend==1){
        echo '<h2>email sent.</h2>';
      }
      else{
        echo '<h2>There are some issue.</h2>';
      }  
		*/	

			
			
			
		}
		else
		{
			echo '<br><div class="info">Sorry, you have provided incorrect information. Please enter correct user information to proceed. Thanks.</div><br>';
		}
	}
	
	
}
?>