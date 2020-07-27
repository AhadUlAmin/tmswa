<?php
/***********************************************************************************************************
* Facebook Style Auto Scroll Pagination using jQuery and PHP
* Written by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info

**********************************Copyright Information*****************************************************
* This script has been released with the aim that it will be useful.
* Please, do not remove this copyright information from the top of this page.
* This script must not be sold.
* All Copy Rights Reserved by Vasplus Programming Blog
*************************************************************************************************************/
include "config.php";

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
			$check_data = mysqli_query($conn,"select * from `pagination_posts` order by `id` asc limit ".$vpb_total." offset ".$vpb_start);
			
			if(mysqli_num_rows($check_data) > 0)
			{
				while($row = mysqli_fetch_array($check_data))
				{
					$content = strip_tags($row['message']);
					echo '<h2>'.$row['name'].'</h2>';
					echo '<p>'.$content.'...</p><hr /><br />';
				}
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