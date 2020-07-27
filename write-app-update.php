<?php
include("database_connection.php");
if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	//Sign-up Page Starts here
	if($_POST["page"] == "article")
	{	
	    $article_title = strip_tags($_POST["article_title"]);
		$html = htmlspecialchars($_POST['html']);
		$article_identify = $_POST['event_unique_url'];
		$article_unique_id = $_POST['upid'];
		?>
		

		<?php


		if($article_title == "")
		{
			echo '<br><div class="info">Article title is  mandatory !</div><br>';
		}

		else
		{
		$query  = "UPDATE `article` SET 
		`article_title`='".mysqli_real_escape_string($conn,$article_title)."',
		`article_description`= '".mysqli_real_escape_string($conn,$html)."',
		`article_identify`= '$article_identify'
		
		WHERE `article_unique_id`= '$article_unique_id'
		";
			 		
					/* 
					$query  = "INSERT INTO `article`(`article_id`, `article_title`, `article_description`, `article_category`, `article_date`, `article_unique`, `article_approval`, `article_identify`, `article_writer`, `article_publicity`, `article_circle`, `article_unique_id`) 
			VALUES (NULL,'".mysql_real_escape_string($article_title)."','".mysql_real_escape_string($html)."','$article_category','$article_date','$article_unique','$article_approval','$article_identify','$article_writer','$article_publicity','$article_circle','$article_unique_id') ";
			  */
			if(mysqli_query($conn,$query))
			{
			
			

			?>
			
				<div class="" style="width:680px;margin:0px auto;margin-top:5px;
						box-shadow: 0 2px 4px 0 rgba(0,0,0,0.14);
						border-radius: 3px;
						height: auto;
						padding: 0px 20px;
						background: white;
						margin-bottom:5px;">
                 <div style="overflow:hidden;height:auto;">

			   
			   	<div style="width:560px;float: left;">
			    <div style="text-align: justify;font-size: 18px;line-height: 25px; padding: 15px;">
				
			       	<?php echo "Updated Article! ";?>
					
					<a href="edit.php?article_identify=<?php echo $article_unique_id ; ?>"> Edit Article now !</a>
			  	</div>
			   </div>
			   
			   
			   
			   </div>
			   
			   
			</div>
			  
			
			<?php


			}
			else
			{
				echo '<br><div class="info">Sorry, Please try again or contact the site admin to report this error if the problem persist. Thanks.</div><br>';
			}
		}
	}
	//Sign-up Page Ends here
	
	}
	
?>
<!--link href="quill.snow.css" rel="stylesheet"-->