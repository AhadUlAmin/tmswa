<?php
include("database_connection.php");
// include("../mail/subdirectory-sentmail.php");
if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	//Sign-up Page Starts here
	if($_POST["page"] == "careerSubmit")
	{
	
	echo "Hello ";
		$career_fullname = $_POST['first_last'];
		$career_email = trim(strip_tags(strtolower($_POST['email_address'])));
		$career_phone =  $_POST['phone_number'];
		$career_portfolio =  $_POST['portfolio_link'];
		$career_cover =  $_POST['cover_latter'];
		$career_date = date("Y-m-d H:i:s");
		$career_name = $_POST['career_name'];
		$career_type ="fulltime";
        $career_string = $_POST['career_string'];
		$career_unique = $_POST['career_unique'];
		$career_uniqueid = $_POST['career_uniqueid'];
	    $career_approval ="Yes";
			

		if($career_email == "" || $career_fullname == "")
		{
			echo '<br><div class="info">Name and Email are mandatory !</div><br>';
		}
		elseif(!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/", $career_email))
		{
			echo '<br><div class="info">Sorry, Your email address is invalid, please enter a valid email address to proceed !</div><br>';
		}
		else
		{
			
			
			if(mysqli_query($conn,"INSERT INTO `careers`(`career_id`, `career_name`, `career_type`, `career_fullname`, `career_email`,`career_phone`, `career_portfolio`, `career_cover`, `career_string`, `career_unique`, `career_approval`, `career_date`,`career_uniqueid`) 
			VALUES(NULL,'$career_name','$career_type','$career_fullname','$career_email','$career_phone','$career_portfolio','$career_cover','$career_string','$career_unique','$career_approval','$career_date','$career_uniqueid')"))
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
                                                                                               <p style='font-align:left;'> Hello , " .$career_fullname. "
                                                    <br> Please confirm your account by clicking confirm now button .
                                                    <br> <b>career name </b> : " .$career_name. "
                                                    <br> <b>career type </b> :" .$career_type. "
													
                                                    <br> <b>career_email</b> :" .$career_email. "
													<br> <b>career phone</b> :" .$career_phone. " 
													
													<br> <b>career portfolio</b> :" .$career_portfolio. "
													<br> <b>career cover</b> :" .$career_cover. "
													<br> <b>career string</b> :" .$career_string. "
													<br> <b>career unique</b> :" .$career_unique. "	
													<br> <b>career date</b> :" .$career_date. "
													<br> <b>careerm uniqueid</b> :" .$career_uniqueid. "
													
                                                    <br> </p>
                                               
                                     
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr>
		  <!-- end tr --><!--Slogan End from here-->
		  ";	
					
/*
		$to = $career_email; 
		$DocumentText =  $messagebody ;
		$DocumentTitle = "New Career mail  !" ;
		SendEmail( $to,  $DocumentText, $DocumentTitle ); 
*/
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