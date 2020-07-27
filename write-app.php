<?php
header('content-type:text/html;charset=utf-8');
include("database_connection.php");
if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	//Sign-up Page Starts here
	if($_POST["page"] == "article")
	{	
	
	
	    $user_id = $_SESSION["USER_ID"];
		$article_writer = $_SESSION["ALT_USERNAME"] ;
		
	    $article_title = strip_tags($_POST["article_title"]);
		$html =  htmlspecialchars($_POST['html'], ENT_NOQUOTES, "UTF-8");
		$article_category = "Technology";
		$article_date = date("Y-m-d H:i:s");

		
		$article_identify = $_POST['event_unique_url'];
		$article_approval = 1;
		$article_publicity = "Yes";
		$article_circle = "All";
		$article_unique_id = $_POST["article_unique_id"] ;
		?>
		

		<?php


		if($article_title == "")
		{
			echo '<br><div class="info">Article title is  mandatory !</div><br>';
		}

		else
		{
			$query  = "INSERT INTO `article`(`article_id`, `article_title`, `article_description`, `article_category`, `article_date`, `article_approval`, `article_identify`, `article_writer`, `article_publicity`, `article_circle`, `article_unique_id`) 
			VALUES (NULL,'".mysqli_real_escape_string($conn,$article_title)."','".mysqli_real_escape_string($conn,$html)."','$article_category','$article_date','$article_approval','$article_identify','$article_writer','$article_publicity','$article_circle','$article_unique_id') ";
			mysqli_set_charset($conn,"utf8");
			
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
			   <div style="width:120px;float: left;padding: 20px 0px;">
			   			 <?php 
							 $image_query = mysqli_query($conn,"SELECT * FROM `dropzone` WHERE fileunique = '$article_unique_id' LIMIT 1");
								
								 while($get_image_query = mysqli_fetch_array($image_query))
									 {
										 $file = strip_tags($get_image_query["file"]);
										 
						   
						   ?>
							<img   style="width:120px;" src="<?php echo BASE_PATH;?>uploads/<?php echo $file;?>">
							
					<?php }?>
			   </div>
			   
			   	<div style="width:560px;float: left;">
			    <div style="text-align: justify;font-size: 18px;line-height: 25px; padding: 15px;">
				
			       	<?php echo $article_title ;?>
					<?php echo $html ;?>
					<a href="edit.php?article_identify=<?php echo $article_unique_id ; ?>"> Edit Article now !
					
						
	   <?php echo $_SESSION["USER_ID"];
		echo  $_SESSION["ALT_USERNAME"] ;?>
					</a>
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