<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="quill.snow.css" rel="stylesheet">
<style>
.boomboom{
	width:680px;
    margin: 0px auto;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.14);
    border-radius: 3px;
    height: auto;
    padding: 5%;
    background: white;
   margin-bottom: 50px;
   
   }
@media (min-width: 320px) and (max-width: 480px){
   .boomboom{
	width: 89%;
    margin: 0px auto;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.14);
    border-radius: 3px;
    height: auto;
    padding: 5%;
    background: white;
   margin-bottom: 50px;
   
   }
   
   }
   
</style>
<?php
include("db.php");
mysqli_set_charset($conn, 'utf8');
$ms_uid = trim(strip_tags($_POST["ms_uid"]));
$ms_uid = substr($ms_uid, -11);
$check_news = mysqli_query($conn,"select * from `article` where `article_unique_id` = '" . mysqli_real_escape_string($conn,$ms_uid) . "'");

if (isset($ms_uid) && !empty($ms_uid) && mysqli_num_rows($check_news) > 0)
{
$get_checked_contents_from_the_database = mysqli_fetch_array(mysqli_query($conn,"select * from `article` where `article_unique_id` = '".mysqli_real_escape_string($conn,$ms_uid)."'"));
$fileunique = $get_checked_contents_from_the_database["article_unique_id"];

?>
	<div class="container">
	      <!--- GET IN TOUCH FORM START --->


<div style="
margin-top:70px;
line-height:20px;
font-weight: 400;
font-size: 20px;color: #000000;text-align:justify;">

		  <div class="boomboom" >
			   <h2 style="font-family: 'ProximaNova-Thin' ,sans-serif;font-weight: bolder;font-size: 
			   40px;line-height: 48px;text-align: left;margin-bottom:20px;"> 
			   <?php echo html_entity_decode($get_checked_contents_from_the_database["article_title"]); ?> </h2>
			   			   <?php 
			     $image_query = mysqli_query($conn,"SELECT * FROM `dropzone` WHERE fileunique = '$fileunique' LIMIT 1");
				 	
			   		 while($get_image_query = mysqli_fetch_array($image_query))
						 {
							 $file = strip_tags($get_image_query["file"]);
							 
							 
							 
							 
							 
			   
			   ?>
			    <img   style="width:100%;height:auto;" src="<?php echo BASE_PATH;?>uploads/<?php echo $file;?>">
				
				<?php }?>
				
				
          <div class="ql-snow">
			   <div class="ql-editor" > 
			   
			   <?php echo html_entity_decode($get_checked_contents_from_the_database["article_description"]); ?>
			 
			 </div>
			   
		  </div> 
		 </div>


</div>



		
	

</div>                           
<?php
}
else{ 

?>

<style>
#page_content{display:block!important;}
</style>

<?php

} 

?>
