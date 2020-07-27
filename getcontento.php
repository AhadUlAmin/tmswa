<?php
require "db.php";
?>
<html>
<head>
<link rel="stylesheet"  href="style.css">
 <script src="<?php echo BASE_PATH ;?>jquery-3.4.1.min.js"></script>
</head>
<body>



<?php
//$ms_uid = "KRMBMgKR";
$ms_uid = trim(strip_tags($_POST["ms_uid"]));
$check_news = mysqli_query($conn,"select * from `portfolios` where `portfolio_unique` = '" . mysqli_real_escape_string($conn,$ms_uid) . "'");
$get_checked_contents_from_the_database = mysqli_fetch_array(mysqli_query($conn,"select * from `portfolios` where `portfolio_unique` = '".mysqli_real_escape_string($conn,$ms_uid)."'"));

if (isset($ms_uid) && !empty($ms_uid) && mysqli_num_rows($check_news) > 0)
{


?>





   
   
   
<div style="width:98%;
border-radius: 3px;
margin-bottom: 10px;
margin:0px auto;
background: #fff;
letter-spacing: 0;
line-height:20px;
font-weight: 400;
font-size: 20px;color: #000000;text-align:justify;">


	      <!--- GET IN TOUCH FORM START --->

		  <div class="content_simple" style="">
		 <h1 style="font-size: 50px;"> <?php echo $get_checked_contents_from_the_database["portfolio_company_name"]; ?></h1>
		 <span style="position: relative;
    top: 0px;
    right: -400px;
    font-size: 14px;
    font-weight: 700;
    color: #21499f;">[<?php echo $get_checked_contents_from_the_database["portfolio_country"]; ?>]</span>
			   <h3 style="text-align:center;"><?php echo $get_checked_contents_from_the_database["portfolio_company_slogan"]; ?> </h3>
			   <a target="_blank" href="<?php echo $get_checked_contents_from_the_database["portfolio_link"]; ?>"><img style="width:100%;" src="https://www.themornstar.com/assets/img/banners/about-us-banner.jpg"> </a>
			
			   <!--?php echo $get_checked_contents_from_the_database["portfolio_company_logo"]; ?-->
			   <br>
 <script>
 var result;
 result = "<?php echo $get_checked_contents_from_the_database["portfolio_technologies"]; ?>".split(","); 

for (i = 0; i < result.length; i++)
  //document.writeln((i+1) + ": " + result[i]);
  document.getElementById("used_tech").innerHTML += "<div style='padding:5px 10px;background:#a6a6a6;color:#f1f1f1;display:inline-block;border-radius: 20px;'>"+(i+1) + "." + result[i]+"</div> ";
  
</script>
			   <div style='padding:5px 10px;margin-bottom:5px;background:#f1f1f1;color:#a6a6a6;display:inline-block;border-radius: 20px;'>
			  Technologies: </div><br>
			   <div id="used_tech" style="font-size: 16px; font-weight: 700;">
	
			   </div>
			   
			   <div style='padding:5px 10px;margin-bottom:5px;color:#a6a6a6;display:inline-block;border-radius: 20px;'>
			  Developers: <a href="#"><?php echo $get_checked_contents_from_the_database["portfolio_leader"]; ?></a></div><br>
			  
			   <p style="padding:5px;"> 
			   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			   </p>
			   
	
			   
		  </div>
		  
	


           <!--- GET IN TOUCH FORM End --->
</div>

   
   
   
   <?php
} 
else{
	
	?>
	
<script>

$(document).ready(function() {
	 // $('.button-close').on('click', function() {
	      $('#modal').css({
	          'transform': 'scale(1,0)'
	      });
	      setTimeout(function() {
	          $('#blackwall').fadeOut(50);
			  
			   $('#blackwall').css({
	          'display': 'none'
	      });
		  $('#page_content').css("display","block");
	      }, 1);
	 // });
});



</script>


<?php

}

?>

</body>
</html>
