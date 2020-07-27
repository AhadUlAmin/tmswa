<?php
include("database_connection.php");

	$query_article = mysqli_query($conn,"select * from `article`");
	
	if(mysqli_num_rows($query_article) > 0)
	{
		 while($get_article = mysqli_fetch_array($query_article))
		 {
			 $article_id = strip_tags($get_article["article_id"]);
			 ?>
             <center>
              
			 <?php echo  $article_id.strip_tags($get_article["article_title"]); ?>
             <br clear="all" />

             </center>
			 <?php
		 }

	}
	else
	{
		 ?>


		 No  article


		 <?php
		 exit;
	}

?>