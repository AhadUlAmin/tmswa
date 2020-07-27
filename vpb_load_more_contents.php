<script src="<?php echo BASE_PATH;?>jquery.min.js"></script>
<script>
	$(document).ready(function(){
	  var pagelink , page_content , fetchAndInsertPage;
	  //Fetch And Insert page_content
	  fetchAndInsertPage = function(href){
	  $.ajax({
		url:'pages/'+href.split('/').pop(),
		method:'GET',
		cache:false,
		success:function(data){
			$('#page_content').css("display","block");
			page_content.html(data);
			}
		});
	  };

	  pagelink = $('nav#main');
	  page_content = $('#page_content');
	  pagelink.find('a').on('click',function(e){
	  e.preventDefault();
	  var href = $(this).attr('href');
	   var title = $(this).attr('title');
	  //Manupulate history
	  history.pushState(null, title,href);
	  document.title;
	  //Fetch And Insert  page_content
	  fetchAndInsertPage(href);
	  
	  });


	  //User goes back/Forward
	  $(window).on('popstate',function(e){
		  e.preventDefault();
		  $('#page_content').css("display","block");
		fetchAndInsertPage(location.pathname);

	  });



	});
	</script>
	
	<script>

	$(document).ready(function(){
 		
		//document.getElementById("defaultOpen").click();
		
	  var nav , content , fetchAndInsert;
	  var root = '<?php echo BASE_PATH;?>';
	  //Fetch And Insert Content
	  fetchAndInsert = function(href){
		  if(href.length < 30){
			 $('#page_content').css("display","block");
			  $('#page_contentid').css("display","none");
			 
		  }
		  else{
			  
		  
	  var ms_uid = href.split('/').pop();
	 // $('#content').show();
	  var dataString = 'ms_uid=' + ms_uid ;
	  $.ajax({
	  	type: "POST",
		url: '<?php echo BASE_PATH;?>getcontent.php',
		data: dataString,
		cache:false,
		success:function(data){
			//alert(data);
			//callmodal() ;
			$('#page_content').css("display","none");
			$('#page_contentid').css("display","block");
		 $('#page_contentid').html(data);
		  //testing modal 
		    
			
		  

			}
		});
		}
		
	  };

	  nav = $('div.grid_news_hovered');
	  content = $('#contentc');
	  nav.find('a').on('click',function(e){
	  e.preventDefault();
	  var href = $(this).attr('href');
	  //Manupulate history
	  history.pushState(null, null,href);
	  //Fetch And Insert Content
	  fetchAndInsert(href);

	  });


	  //User goes back/Forward
	  $(window).on('popstate',function(e){
		  e.preventDefault();
		fetchAndInsert(location.pathname);
		 $('#page_content').css("display","block");
			  $('#page_contentid').css("display","none");
		

	  });
	}); 

</script>


	<script>

 	$(document).ready(function(){

	 // var nav , content , fetchAndInsert;
	   var navo , contento , fetchAndInserto;
	  var root = '<?php echo BASE_PATH;?>';
	  
	  //Fetch And Insert Content
	  fetchAndInserto = function(href){
		  
		  		var str = href;
		
var str1 = str.slice(-11);     // returns 'us.'
var str3 = str1.length ;
var str2 =  str.length ;
var str4 =  str2 - str3;

var str5 = str.substring(0, str4);

var str7 = str.includes("__X");
var str6 = str.includes("R__");
if(str6 == true && str7 == true)
{
      var ms_uid = str5.split('/').pop();
	 // $('#content').show();
	  var dataString = 'ms_uid=' + ms_uid ;
	  $.ajax({
	  	type: "POST",
		url: '<?php echo BASE_PATH;?>getcontento.php',
		data: dataString,
		cache:false,
		success:function(data){
			callmodal() ;
		  $('.modal-body').html(data);
		//  $('#page_content').css("display","block");
	//	$('#page_contentid').css("display","none");

		  //testing modal 
			}
			
		});
	  }
	  else{
			  $('#modal').css({
	          'transform': 'scale(1,0)'
	      });
		  
		  $('body').css({
	              'overflow': 'auto'
	          });
		    
			
	      setTimeout(function() {
		  		
	          $('#blackwall').fadeOut(50);
			   $('#blackwall').css({
	          'display': 'none'
	      });
		 // $('#page_content').css("display","block");
	      }, 1); 
	  }
	  };



	
	  
	  navo = $('nav#mainpop');
	  contento = $('#contentid');

	   navo.on('click', 'a', function (e) {
        e.preventDefault();
	  var href = $(this).attr('href');
	  //Manupulate history
	  history.pushState(null, null,href);
	  //Fetch And Insert Content
	  fetchAndInserto(href);

	  

	  });
	  
	  
	  	  $('.button-close').click(function(event){
	  event.preventDefault();
	  history.pushState(null, 'index',root + '');
	 // $('#content').hide();
	 		  //$('#page_content').css("display","block");
			  
	  });
	  
	  	  $('#blackwall').click(function(event){
	  event.preventDefault();
	  history.pushState(null, 'index',root + '');
	 // history.replaceState(null,null, window.location.pathname + "your thing here")
	  
	 // $('#content').hide();
	 		 // $('#page_content').css("display","block");
	  });

	  //User goes back/Forward
	  $(window).on('popstate',function(e){
		  e.preventDefault();
		fetchAndInserto(window.location.pathname);


	  });


	}); 

</script>

<?php
include "database_connection.php";

if(isset($_POST["last_loaded_id"]) && !empty($_POST["last_loaded_id"]))
{
	$check_contents_from_the_database = mysqli_query($conn,"select * from `article` where `article_id` > '".mysqli_real_escape_string($conn, strip_tags($_POST['last_loaded_id']))."' order by `article_id` asc limit 6");
	
	if(mysqli_num_rows($check_contents_from_the_database) > 0)
	{
		 while($get_article = mysqli_fetch_array($check_contents_from_the_database))
		 {
			 $last_loaded_id = strip_tags($get_article["article_id"]);
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
												<a style="display:block;font-size:18px;line-height: 22px;padding:10px;color: white;text-shadow: -1px -1px rebeccapurple;" href="<?php echo BASE_PATH;?><?php echo $get_article["article_identify"] ;?>" title="Test News for me.">
														<?php echo $get_article["article_title"] ;?>
												</a>
								
											</div>
											<br>
											
									<div style="padding: 5px; text-align: center; position: relative;  bottom: -15px; font-size: 11px;color:white;"> From <a style="text-decoration:none;color:#3676BD;" href="#">TheMornStar </a>by <a style="text-decoration:none;color:#3676BD;" href="#">MuhammadAminul Islam</a>
									
									</div>
									  <div style="height:40px;padding: 3px;"></div>
									</div>
									
									
					 
								</div>
								<div class="grid_news_description">
								<?php// echo $get_article["article_description"] ;?>
								</div>

							</div>
						</div>
					</div>
			 
			 
			 <?php
		 }
		 ?>
        <script type="text/javascript"> $(document).ready(function(){ $("#last_loaded_id").val(parseInt('<?php echo $last_loaded_id; ?>'));  }); </script>
        <?php
	}
	else
	{
		 ?>
         <script type="text/javascript"> $(document).ready(function(){ $("#vpb_more_button").remove(); });</script>
         
		 <center>
         <div class="vpb_show_more_or_the_ends" style="width:100%;float:left;"  align="center"><center><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:gray;">No more Tutorials</font></center></div>
         </center>
		 <br clear="all" />
		 <?php
		 exit;
	}
}
else
{
	echo "Sorry, data could not be passed at the moment. Please try again or contact this website admin to report this error message if the problem persist. Thanks...";
}

?>