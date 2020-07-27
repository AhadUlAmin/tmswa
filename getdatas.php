
<?php
include("db.php");
?>
<script src="<?php echo BASE_PATH;?>index.js"></script>
<style>
#vpb_loading_box {
	width: 100%;
    float: left;
    padding: 10px 0px;
    display: block;
    text-align: center;
    box-shadow: inset 0px -20px 7px -13px rgba(0, 0, 0, 0.05);
    /* border-radius: 5px; */
    margin: 20px 0;
    font-size: 18px;
    border: 1px solid #ddd;
    font-weight: bold;
    cursor: pointer;
 
 
}
</style>
<?php
$vpb_start = isset($_POST['vpb_start']) && is_numeric($_POST['vpb_start']) ? strip_tags($_POST['vpb_start']) : 'vpb_is_finished';
$vpb_total =  isset($_POST['vpb_total']) && is_numeric($_POST['vpb_total']) ? strip_tags($_POST['vpb_total']) : 'vpb_is_finished';


if($_POST['page'] && !empty($_POST['page']))
{
	if($_POST['page'] == "laod-more-post")
	{
		if( $vpb_start == "vpb_is_finished" || $vpb_total == "vpb_is_finished" )
		{
			echo "vpb_is_finished";
		}
		else {
			$check_data = mysqli_query($conn,"select * from `article` order by `article_id` asc limit ".$vpb_total." offset ".$vpb_start);
			
			if(mysqli_num_rows($check_data) > 0)
			{
				while($get_article = mysqli_fetch_array($check_data))
				{
					
					 $article_id = strip_tags($get_article["article_id"]);
			 $fileunique = strip_tags($get_article["article_unique_id"]);
			 $fileunique = strip_tags($get_article["article_unique_id"]);

			 ?>
                   <div class="publisher_article">
						<div style="margin: 0 10px 10px;">
							<div class="grid_news_element">
								<div class="grid_news_img_area">
								
								   <?php 
									 $image_query = mysqli_query($conn,"SELECT * FROM `dropzone` WHERE fileunique = '$fileunique' LIMIT 1");
										
										 while($get_image_query = mysqli_fetch_array($image_query))
											 {
												 $thumbnail = strip_tags($get_image_query["thumbnail"]);
												
								   ?>
									<img   style="width:100%;height:260px;" src="uploads/<?php echo $thumbnail;?>">
									<?php }?>
									<div class="grid_news_hovered">
											<div class="grid_news_title">
												<a style="display:block;font-size:18px;line-height: 22px;padding:10px;color: white;text-shadow: -1px -1px rebeccapurple;"
												title="<?php echo $get_article["article_title"];?>" href="<?php echo BASE_PATH;?><?php echo $get_article["article_identify"] ;?>-<?php echo $get_article["article_unique_id"] ;?>" >
														<?php echo $get_article["article_title"] ;?>
												</a>
								
											</div>
											<br>
											
									<!--div style="padding: 5px; text-align: center; position: relative;  bottom: -15px; font-size: 11px;color:white;"> From <a style="text-decoration:none;color:#3676BD;" href="#">TheMornStar </a>by <a style="text-decoration:none;color:#3676BD;" href="#">MuhammadAminul Islam</a-->
									
									
									</div>
									  <div style="height:40px;padding: 3px;"></div>
									</div>
									
									
					 
								</div>
								

							</div>
						</div>
					</div>
				<?php }
			}
			else
			{
				echo "vpb_is_finished";
			}
		}
	}
	else
	{
		echo 'vpb_loading_error';
	}
}

?>
