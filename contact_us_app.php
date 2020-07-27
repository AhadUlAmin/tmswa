<?php
include("database_connection.php");
include("mail/index.php");
if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	//Sign-up Page Starts here
	if($_POST["page"] == "contact_us")
	{	
	
		$name = $_POST['name'];
		$email = trim(strip_tags(strtolower($_POST['email'])));
		$company =  $_POST['company'];
		$skype_id =  $_POST['skype_id'];
		$help_title =  $_POST['help_title'];
		$find_us =  $_POST['find_us'];
		$budget =  $_POST['budget'];
		$timeline =  $_POST['timeline'];
		$description =  trim(strtolower($_POST['description'])) ;
        $approval = 1;
		$unique = 1;
		$date = date("Y-m-d H:i:s");
		
		

		if($email == "" || $name == "")
		{
			echo '<br><div class="info">Name and Email are mandatory !</div><br>';
		}
		elseif(!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/", $email))
		{
			echo '<br><div class="info">Sorry, Your email address is invalid, please enter a valid email address to proceed !</div><br>';
		}
		else
		{
			
			
			
		


			
			if(mysqli_query($conn,"INSERT INTO `quotes`(`quote_id`, `quote_fullname`, `quote_email`, `quote_company`, `quote_skype`, `quote_type`, `quote_source`, `quote_budget`, `quote_timeline`, `quote_description`, `quote_unique`, `quote_approval`, `quote_date`) VALUES(NULL,'$name','$email','$company','$skype_id','$help_title','$find_us','$budget','$timeline','$description','$unique','$approval','$date')"))
			{
			
			 echo "SUCCESSFULLY SUBMITTED";

			
	
			
			$messagebody = "<!--Slogan Start from here-->
		<tr>
          <td valign='middle' class='hero bg_white' style='color:black;background:white; background-size: cover; height: 400px;'>
          	<div style='position: absolute;top: 0;left: 0;right: 0;bottom: 0;content: '';width: 100%;background: #000000;z-index: -1;opacity: .7;'></div>
							<table>
            	<tr>
            		<td>
            			<div class='text' style='padding: 0 3em; text-align: center;'>
						 		
                                                <h2>Activate your Account now !</h2>
                                                <p> Hello , " .$name. "
                                                    <br> Please confirm your account by clicking confirm now button .
                                                    <br> <b>company </b> : " .$company. "
                                                    <br> <b>skype_id </b> :" .$skype_id. "
													
                                                    <br> <b>budget</b> :" .$budget. "
													<br> <b>timeline</b> :" .$timeline. " 
													
													<br> <b>help title</b> :" .$help_title. "
													<br> <b>find us</b> :" .$find_us. "
													<br> <b>find us</b> :" .$date. "
													<br> <b>budget</b> :" .$description. "
													
                                                    <br> </p>
                                               

            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr>
		  <!-- end tr --><!--Slogan End from here-->
		  ";	
					

		$to = $email; 
		$DocumentText =  $messagebody ;
		$DocumentTitle = "New Contact From TheMornStar!" ;
		sendmail( $to,  $DocumentText, $DocumentTitle ); 

			}
			else
			{
				echo '<br><div class="info">Sorry, your account could not be created at the moment. Please try again or contact the site admin to report this error if the problem persist. Thanks.</div><br>';
			}
		}
	}
	//Sign-up Page Ends here
	
	}
	
?>