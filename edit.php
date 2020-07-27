<?php
header('content-type:text/html;charset=utf-8');
include("database_connection.php");

$_SESSION["USER_ID"] = 39;
$_SESSION["ALT_USERNAME"] ="-ahHMqTqQd-yhgPmk";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>
  <?PHP ECHO $_SESSION["ALT_USERNAME"]  ;?> TheMornStar - Web Development & Digital Marketing Agency 
</title>
<meta name="description" content="Web Development & Digital Marketing  - Be a Step Ahead with Custom Website . Make your business stand out from the competition with a high class,custom website.">
<meta name="keywords" content="Local Business Promotional Video (Spoken Person /2D ) ,Ranking Local Business Promotional Video on YT and Google First Page ,Facebook Marketing ,SEO ,Content Writing / Translate ,Custom Web Design,PSD 2 HTML,Web Application using PHP,eCommerce Web development ,News / Blog Site Development ,Landing Page ,UpComming Website timer page,Social Integration ,Apache Rewrite Rules ,Speed Up Website ,Bugs Fixing of Website,Website  Re-development of  frontEnd or BackEnd ,Logo Design,Graphics Design,CMS Software makeing ,More ...">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="normalize.css" rel="stylesheet" >
<link href="smartstyle.css" rel="stylesheet" >
<link href="quill.snow.css" rel="stylesheet">


<script src="jquery.min.js"></script>



	<link href="dropzone-style.css" rel="stylesheet">
	<style>.fa {font-size: 18px;
    color: #a6a6a6;
    letter-spacing: 0;
    font-weight: 300;
    font-style: normal;
    padding: 10px;
    /* position: absolute; */
    top: 0;
    right: 0;
    background: rgba(0,0,0,0);
    border-width: 0;
    z-index: 100;
}
.fa:before {    
    content: 'x';
    font-weight: bold;
    font-family: 'ProximaNova-Thin',Arial, sans-serif;
}
	</style>
<script>

function removeImage(fileid,file){
var fileId = fileid.id;
var file = file;
alert(file);

	  var dataString = 'fileId='+fileId +'&file='+file+'&page=delete';
      $.ajax({
			type: "POST",
			url: "deleteimage.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
			  $("#dstatus").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/images/logo/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
			$("#remove-"+fileId).hide();
			$("#dstatus").html(response);
			
			}
		});
		

}
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
 <script>
 


		$(document).ready(function(){
			
			$('.icon').click(function(){
				
		if ( $('header').hasClass('fixed-header') ) {
			  				$('.icon').toggleClass('active');
				$('.nav-inactive').toggleClass('nav-active');
                 	$('.header_menu').toggleClass('header_menusaba');
                   //$('.logo').toggleClass('logonew');
				   $('.logo').addClass('logonew');
			
		}
  else{ $('header').addClass('fixed-header');
  				$('.icon').toggleClass('active');
				$('.nav-inactive').toggleClass('nav-active');
                 	$('.header_menu').toggleClass('header_menusaba');
                   $('.logo').toggleClass('logonew');
  
  }
	  
				

				
			});
			    $('.footer-links-holder h3').click(function() {
            $(this).parent().toggleClass('activee');
    });
		
		
		});



  
	  
	  
/* Scroll Function */
$(window).scroll(function() {
  /* Fixed Navigation */
  if ($('header').offset().top > 0) {
	    if ( $('header').hasClass('fixed-header') ) {
 
  }
  else{
	  $('header').addClass('fixed-header');}
	$('.header_menu').addClass('header_menusaba');
$('.logo').addClass('logonew');
	
  } else {
    $('header').removeClass('fixed-header');
	$('.header_menu').removeClass('header_menusaba');
	$('.logo').removeClass('logonew');
	$('.icon').removeClass('active');
	$('.nav-inactive').removeClass('nav-active');
  }
  

    if ($('header').offset().top > 500) {
           document.getElementById("myVideo").pause();
		document.getElementById('canvasarea').style.display = "block";
	
  } 
  
  
  
  
});
	  
	  
	  
	  
 </script>
 	


 <style>
	
	
	.col-custom-small ul li img{width:30px;text-align:center;padding:2px;}
	.foolink{width:100%;float:left;}
	.foolinkul{width:20.6%;float:left;border-left: 0.5px solid #0099cc;}
    .foolink ul:last-child{border-right: 0.5px solid #0099cc;}
	
		.foolinkul li{display: block;color:white;width:80%;}
		.foolinkul h1{display: block;color:white;font-size:22px;text-align:right;padding:5px 40px;font-family: 'ProximaNova-Thin';font-weight: bold;}
	.foolinkul li a{display: block;color:white;width:100%;font-family: 'ProximaNova-Thin';font-size:15px;    text-align: right;}
		.containerFooter{width:1024px;margin:0px auto;}
	.HalfofContainer{width:50%;float:left;}
		.aboutinc{font-size:14px;text-align:right;}
		.aboutincinfo{font-size:12px;text-align:right;float:right;margin-left:10%;}
		
	@media only screen and (max-width:641px){
		.containerFooter{width:99%;}


/* #id-one,#id-two,#id-three,#id-four{display:none;} */
.foolinkul div {display:none;}
.foolinkul{width:100%;float:left;border-left: 0.5px solid #0099cc;}
.foolinkul h1{display: block;color:white;font-size:22px;text-align:left;padding:5px 5px;font-family: 'ProximaNova-Thin';font-weight: bold;}
.foolinkul li a{display: block;color:white;width:100%;font-family: 'ProximaNova-Thin';font-size:15px;    text-align: left;}
	.HalfofContainer{width:100%;float:left;
	}
	
	.aboutinc{font-size:14px;text-align:center;width:100%;}
	.aboutincinfo{font-size:12px;text-align:justify;width:95%;padding:2.5%;}
}

	
	</style>
<script>
	  	$(document).ready(function(){
			   if ($(window).width() < 900) {
     

	           $('.foolinkul').click(function(e) {
                var selected = $(this).attr('id');

				$('#'+selected).css("font-size", "10px");
				$(".foolinkul div").hide();
                  $('#id-'+selected).show();
				  
				 // $('.foolinkul div').hide();
           // alert('You clicked on div: ' + selected);
    
});    }  
	});

</script> 

	<script>
	

	$(document).ready(function() {
	$("#article_title").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#event_unique").html("<b style='color:green;'>Create Event : </b>" + Text); 
		$("#event_unique_url").val(Text);   
});
});


	


function writeArticle(){

var myEditor = document.querySelector('#editor');

var upid= "<?php echo $_GET['article_identify'] ;?>";
var html = myEditor.children[0].innerHTML;
var htmlencode = encodeURIComponent(html);
var article_title = $("#article_title").val();
var event_unique_url = $("#event_unique_url").val();
var event_unique_url = $("#event_unique_url").val();
	if(article_title == "")
	{
		$("#status").html('<div class="info"> Fullname is required</div>'); 
		$("#article_title").focus();
	}
	else if(html == "<p><br></p>"){
	     $("#status").html('<div class="info"> Description is required</div>'); 
		$(".ql-editor").focus();
	}
	
	else{
	
	  var dataString = 'article_title='+article_title + '&html='+htmlencode + '&event_unique_url='+event_unique_url  + '&upid='+upid + '&page=article';
/* 	  var dataString = 'name='+name+ '&email='+email+ '&company='+company+ '&skype_id='+skype_id+ '&help_title='+help_title 
	  +'&find_us='+find_us+ '&budget='+budget+ '&timeline='+timeline+ '&description='+description+ '&page=contact_us';
 */
		
		$.ajax({
			type: "POST",
			url: "write-app-update.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
			  document.getElementById("articleForm").reset();
			  
				//$("#reset_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/images/logo/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
               $("#astatus").append(response);

			}
		});
	 
	
	
	}


}
</script>
<script>
$(document).ready(function(){


});

function contactUs(){

	var name = $("#fullname").val();
	var email = $("#email_address").val();
	var company = $("#company_name").val();
	var skype_id = $("#skype_id").val();
	var help_title = $("#help_title").val();
	var find_us = $("#find_us").val();
	var budget = $("#range_weight").val();
	var timeline = $("#range_weights").val();
	var description = $("#contact_description").val();
	
	//alert("value="+description);
	if(name == "")
	{
		$("#status").html('<div class="info"> Fullname is required</div>'); 
		$("#fullname").focus();
	}
	else if(email == ""){
	     $("#status").html('<div class="info"> Email is required</div>'); 
		$("#email_address").focus();
	}

	else if(company == ""){
	     $("#status").html('<div class="info"> Comapay name is required</div>'); 
		$("#company_name").focus();
	}

	else if(skype_id == ""){
	     $("#status").html('<div class="info"> Skype Id is required</div>'); 
		$("#skype_id").focus();
	}	
	
	else if(description == ""){
	     $("#status").html('<div class="info"> Description is required</div>'); 
		$("#contact_description").focus();
	}
	
	else{
	  var dataString = 'name='+name+ '&email='+email+ '&company='+company+ '&skype_id='+skype_id+ '&help_title='+help_title 
	  +'&find_us='+find_us+ '&budget='+budget+ '&timeline='+timeline+ '&description='+description+ '&page=contact_us';
	//var dataString = 'newpass='+ newpass + '&altname=' + altname +'&md5oldpass=' + md5oldpass  + '&page=reset_password';
		
		$.ajax({
			type: "POST",
			url: "contact_us_app.php",
			
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
			  document.getElementById("contactForm").reset();
				//$("#reset_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/images/logo/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
               $("#status").html(response);

			}
		});
	 
	
	
	}


}
</script>

 </head>
 <body>

<header  class="myheader">
	<div class="header-area">
	<div><a href="<?php echo BASE_PATH ;?>"><div class="logo"><div class="logo1"></div></div></a></div>
	<a href="#" onClick="return false;">
				<div class="icon">
					<div class="hamburger"></div>
				</div>
	</a>
	
	<nav id="main" class="nav-inactive">
		 <ul>
		    <li> <a class="header_menu" href="about-us.php"> Who We Are  </a> </li>
			<li> <a class="header_menu" href="services.php"> What We Do  </a>
                             <ul id="submenu">
								<li><a href="#">Local Business  Video  </a></li>
								<li><a href="#">Ranking Local Business Video   </a></li>
								<li><a href="#">Social Marketing </a></li>
								<li><a href="#">Social Ads </a></li>
								<li><a href="#">SEO </a></li>
								<li><a href="#">Content Writing </a></li>
								<li><a href="#">Content Translate </a></li>
								<li><a href="#">Custom Web Design</a></li>
								<li><a href="#">PSD 2 HTML</a></li>
								<li><a href="#">PHP Web Application </a></li>
								<li><a href="#">eCommerce Web development </a></li>
								<li><a href="#">News Site Development </a></li>
								<li><a href="#">Landing Page </a></li>
								<li><a href="#">Social Integration </a></li>
								<li><a href="#">Apache Rewrite Rules </a></li>
								<li><a href="#">SpeedUp & Bugs Fixing </a></li>
								<li><a href="#">Logo Design</a></li>
								<li><a href="#">Graphics Design</a></li>

							</ul>

							</li>
			<li> <a class="header_menu" href="portfolios.php"> Portfolio </a> </li>
		
			<li> <a class="header_menu" href="blog.php">  Blog  </a> </li>
					<li><a class="header_menu" href="career.php">Career  </a>
							<ul id="submenu">
								  <li><a href="#">Full-time </a></li>
								  <li><a href="#">Remote</a></li>
								  <li><a href="#">Intern</a></li>
							</ul>
					  </li>
			<li> <a class="header_menu" href="contact-us.php">  Contact Us </a> </li>
				 <button style="float:right;margin: 20px;" class="btn_hairline_inverse" id="disa" onclick="writeArticle();return false;" >Write an article!</button><br><br>	  
		  </ul>
	</nav>

	<div class="cart" id="vCart" style="display:none;"></div>
	
   </div>
</header>


<section style="width:100%;background:#bbbbbb;margin-top: -14px;">

<div class="container">
  <article class="slide-text-article" style="margin-top: 80px;z-index:1;"> 
                           <div  style="text-align:center;padding: 20px;
    font-size:40px;
    font-family: 'ProximaNova-Thin';
    sans-serif: ;
    color: #FFF;
    text-shadow: 1px 2px #000000;">
                              Edit Article !
                           </div>
                           <div class="slide-text-article-subheading" style="text-align:center;padding: 0px 20px 0px 20px;font-size:18px;font-family: 'ProximaNova-Thin',sans-serif;color: #f1f1f1;text-shadow: 1px 1px #000000;"> Dropzone , Richtextarea ,Tags , Category , Time  </div>
                           <div style="padding:10px 20px 10px 20px;font-family:ForoSans-ExtraLight;sans-sarif;">
                             
                           </div>
     </article>
</div>
						
</section>

    <div id="page_content">


            <div class="hrefarea">

            </div>

            <div id="information">

            </div>

    </div>

    <div id="page_contentid">

    </div>

<?php
//$ms_uid = "KRMBMgKR";
$ms_uid = trim(strip_tags($_GET["article_identify"]));
$check_news = mysqli_query($conn,"select * from `article` where `article_unique_id` = '" . mysqli_real_escape_string($conn,$ms_uid) . "'");
//mysqli_set_charset($conn,"utf8");
if (isset($ms_uid) && !empty($ms_uid) && mysqli_num_rows($check_news) > 0)
{
$get_checked_contents_from_the_database = mysqli_fetch_array(mysqli_query($conn,"select * from `article` where `article_unique_id` = '".mysqli_real_escape_string($conn,$ms_uid)."'"));
$article_title = $get_checked_contents_from_the_database["article_title"];
$article_unique = $get_checked_contents_from_the_database["article_unique_id"];
//htmlspecialchars($_POST['html'], ENT_NOQUOTES, "UTF-8");
$article_description = html_entity_decode($get_checked_contents_from_the_database["article_description"]); 


?>

		<div style="width:680px;margin:0px auto;margin-top:10px;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.14);
    border-radius: 3px;
    height: auto;
    padding: 20px;
    background: white;
    margin-bottom:50px;">

	
 <form method="post" id="articleForm">
 
  <div id="event_unique"></div>
  
<input style="font-family: inherit;
		font-size: 25px;
    background: #ffffff;
    color: black;
    height: 40px;
    width: 100%;float:left;
    box-sizing: border-box;
    border-radius: 3px;
    padding: 4px 9px;
    border-style: none;
    border-color: Transparent;
    overflow: auto;
    outline: none;" type="text" id="article_title" name="NewsTitle" value="<?php echo $article_title ;?>"/>
   <input type="hidden" id="event_unique_url" value="">
		<div style="width:100%;margin:0px auto;">
		
					<!-- Create the toolbar container -->
					<div id="toolbar"></div>
						
								
					<!-- Create the editor container --> 
					<div id="editor" style="min-height:80px;font-size:20px;font-style: normal;font-family: 'ProximaNova-Thin',sans-serif;">
					 <?php echo $article_description ;?>
					</div>
					

					
					
					
		
		
		</div>

 </form>
		

		
	      <!--- GET IN TOUCH FORM START --->
		 <div style="width:100%;margin:0px auto;">
							  
							  
					<!-- Files section -->
					<!--h4 class="section-sub-title"><span>Upload</span> Your Files</h4-->

					<form action="file-upload-edit.php" class="dropzone files-container">
					<input type="hidden" name="fileunique" value="<?php echo $article_unique ;?>" />
						<div class="fallback">
							<input name="file" type="file" multiple />
							
						</div>
					</form>

					<!-- Notes -->
					<span>Only JPG, PNG, PDF, DOC (Word), XLS (Excel), PPT, ODT and RTF files types are supported.</span>
					<span>Maximum file size is 25MB.</span>

					
										<!--Old images section here-->
					
								<?php 
			     $image_query = mysqli_query($conn,"SELECT * FROM `dropzone` WHERE fileunique = '$article_unique' LIMIT 10");
				 $count_image = mysqli_num_rows($image_query);
				 	?>
					
										<!-- Uploaded files section -->
					<h4 class="section-sub-title"><span>Uploaded</span> Files (<span class="uploaded-files-count"><?php echo $count_image ;?></span>)</h4>
					<?php if($count_image == 0){
					  echo "<span class='no-files-uploaded'>No files uploaded yet.</span>";
					}?>
					<div id="previews-old">

					<?php
			   		 while($get_image_query = mysqli_fetch_array($image_query))
						 {
							 $fileid = strip_tags($get_image_query["id"]);
							 $file = strip_tags($get_image_query["file"]);
							 $filename = strip_tags($get_image_query["filename"]);
							 
							 
							 
							 
							 
			   
			   ?>

					
					
					<div id="remove-<?php echo $fileid ;?>" style="width:98%; display: flex;margin:10px 5px;" class="type-jpeg dz-processing dz-image-preview dz-success dz-complete">
					<div style="flex: 0 0 50px;max-width: 50px;border-radius: 10px;overflow: hidden;margin-right: 17px;"><img style="width:50px;height:50px;" src="uploads/<?php echo  $file ;?>"></div>
					<div style="position: relative;flex: 0 0 calc(99% - 50px);max-width: calc(100% - 50px);">
							<span style="color: #3c763d;font-size: 14px;"><?php echo  $filename; ?> </span>
							<div class="" style="height: 5px;background: #6b6464;margin-top: 8px;width: 95%;">
							<span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;"></span>
							</div>
							<div style="position: absolute;right: 0;top: 48%;line-height: 1;transform: translateY(-50%);">
											<a href="#!" data-dz-remove="" id="<?php echo $fileid ;?>" onclick="removeImage(this,'<?php echo $file;?>')"><i class="fa fa-times"></i></a>
										</div>
							</div>
					</div>
				
				<?php }?>
					</div>
					
					
					<!--Old Images section end -->
					

					
					
					<!-- Preview collection of uploaded documents -->
					<div class="preview-container dz-preview uploaded-files">
						<div id="previews">
							<div id="onyx-dropzone-template">
								<div class="onyx-dropzone-info">
									<div class="thumb-container">
										<img data-dz-thumbnail />
									</div>
									<div class="details">
										<div>
											<span data-dz-name></span> <span data-dz-size></span>
										</div>
										<div class="dz-progress" style="height: 5px;background: #6b6464;margin-top: 8px;"><span class="dz-upload" data-dz-uploadprogress></span></div>
										<div class="dz-error-message"><span data-dz-errormessage></span></div>
										<div class="actions">
											<a href="#!" data-dz-remove><i class="fa fa-times"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<!-- Files section ends -->
					

			 </div>
			 
			 <div id="dstatus"> dstatus</div>
		    <br>
		  </div>
		  
		    <?php
}
else{ echo "Post not found!";} 

?> 
		  
		  
		  

    


		
		<footer class="footeri"  style="width:100%;float:left;background:#3575d3;color:white;font-family: 'ProximaNova-Light';padding:21px 0px 10px 0px;">
  <div class="containerFooter">
  <div class="foolink">

    <ul class="foolinkul" id="one">
	  <h1 onclick="#"> SERVICES </h1>
	  <div id="id-one">
	  <li> <a href="#">Web Design & Development</a></li> 
	  <li> <a href="#">Logo & Graphics </a></li> 
	  <li> <a href="#">Digital Marketing & SEO</a></li>
	  <li> <a href="#">Content Writing & Translate</a></li>
	  </div>
	</ul>
	
    <ul class="foolinkul" id="two">
	  <h1 onclick="#"> Support </h1>
	  <div id="id-two">
	  <li> <a href="#">Help & Support </a></li> 
	  <li> <a href="#">Trust & Safety </a></li> 
	  <li> <a href="#">Resources</a></li>
	  <li> <a href="#">Hiring </a></li>
	  </div>
	</ul>
	
    <ul class="foolinkul" id="three">
	  <h1 onclick="#"> ABOUT US </h1>
	  <div id="id-three">
	  <li> <a href="#">Our Company </a></li> 
	  <li> <a href="#">Articles  </a></li>
	  <li> <a href="#">Career  </a></li> 
	  <li> <a href="#">Term & Privacy</a></li>
	  </div>
	</ul>
	
    <ul class="foolinkul" id="four">
	  <h1 onclick="#"> CONTACT  </h1>
	  <div id="id-four">
	  <li> <a href="#">BD:+880 1521 257 123</a></li> 
	  <li> <a href="#">info@themornstar.com </a></li> 
	  <li> <a href="#" style="line-height:18px;">3rd Floor ,207 Regent Street ,London ,W1B 3HH , UK</a></li>
	  </div>
	</ul>
	
	
  </div>
  </div>
    <div style="width:100%;float:left;border-top: 1px solid rgba(255,255,255,0.1);">
	  <div class="containerFooter">
  
    <div class="HalfofContainer">
	<div class="col-custom-small">
        <ul class="list-inline social-icon">
          <li>
            <a href="https://www.facebook.com/" target="_blank" title="facebook" rel="noopener">
              <img src="<?php echo BASE_PATH ;?>assets/logo/facebook.svg" class="svg_icon" alt="facebook">
            </a>
          </li>
          <li>
            <a href="https://twitter.com/" target="_blank" title="twitter" rel="noopener">
              <img src="<?php echo BASE_PATH ;?>assets/logo/twitter.svg" class="svg_icon" alt="twitter">
            </a>
          </li>
          <li>
            <a href="https://plus.google.com/" target="_blank" title="google" rel="noopener">
                <img src="<?php echo BASE_PATH ;?>assets/logo/gplus.svg" class="svg_icon" alt="linkedin">
            </a>
          </li>
          <li>
            <a href="http://www.youtube.com/user/" target="_blank" title="youtube" rel="noopener">
                <img src="<?php echo BASE_PATH ;?>assets/logo/youtube.svg" class="svg_icon" alt="youtube">
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/company/" target="_blank" title="linkedin" rel="noopener">
              <img src="<?php echo BASE_PATH ;?>assets/logo/linkedin.svg" class="svg_icon" alt="linkedin">
            </a>
          </li>
          <li>
            <a href="http://www.pinterest.com/" target="_blank" title="pinterest" rel="noopener">
              <img src="<?php echo BASE_PATH ;?>assets/logo/pinterest.svg" class="svg_icon" alt="pinterest">
            </a>
          </li>
          <li>
            <a href="http://instagram.com/" target="_blank" title="instagram" rel="noopener">
              <img src="<?php echo BASE_PATH ;?>assets/logo/instagram.svg" class="svg_icon" alt="instagram">
            </a>
          </li>
        </ul>
        <div id="teconsent-container" class="cookie-prefs-btn"><script async="" defer="" src="https://consent.trustarc.com/notice?domain=bluehost.com&amp;c=teconsent&amp;gtm=1"></script><div id="teconsent"></div></div>
      </div>
	 
	</div>
	    <div class="HalfofContainer"> <p style="float: right;padding: 25px 0px;font-family: 'ProximaNova-Thin',sans-serif;font-size: 14px;"> &copy; TheMornstar 2019 , All right reserved .</p></div> 

  </div>
  </div>
</footer>
	
	<script>
		
		  $(".mouse-animation.mouse-hero").click(function(e) {
	      e.stopPropagation();
	  });
	  $(".calltoaction").click(function(e) {
	      e.stopPropagation();
	  });
	  
	  
	  /*Custom Popup modal */
	  function callmodal() {
	      $('#blackwall').fadeIn("fast", function() {
	          $('#modal').css({
	              'transform': 'scale(1,1)'
	          });
			  $('body').css({
	              'overflow': 'hidden'
	          });
			  
	      });
	  }

	  $('.button-close').on('click', function() {
	      $('#modal').css({
	          'transform': 'scale(0,0)'
	      });
		  $('body').css({
	              'overflow': 'auto'
	          });
	      setTimeout(function() {
	          $('#blackwall').fadeOut(50);
	      }, 1);
		  
	  });

	  $("#modal").click(function(e) {
	      e.stopPropagation();
	  });


	  $('#blackwall').on('click', function() {
	      $('#modal').css({
	          'transform': 'scale(0,0)'
	      });
		  $('body').css({
	              'overflow': 'auto'
	          });
	      setTimeout(function() {
	          $('#blackwall').fadeOut(50);
	      }, 1);
	  });

	  function myFunction() {
	      callmodal();
	  }
	  
	  

	  

	</script>
	<script>
	
	  
	  
/* Scroll Function */
$(window).scroll(function() {
  /* Fixed Navigation */
  if ($('header').offset().top > 0) {
	    if ( $('header').hasClass('fixed-header') ) {
 
  }
  else{
	  $('header').addClass('fixed-header');}
	$('.header_menu').addClass('header_menusaba');
$('.logo').addClass('logonew');
	
  } else {
    $('header').removeClass('fixed-header');
	$('.header_menu').removeClass('header_menusaba');
	$('.logo').removeClass('logonew');
	$('.icon').removeClass('active');
	$('.nav-inactive').removeClass('nav-active');
  }
  

    if ($('header').offset().top > 500) {
           document.getElementById("myVideo").pause();
		document.getElementById('canvasarea').style.display = "block";
	
  } 
  
  
  
  
});
	  
	  
$(function() {
	  
	  
	  
$('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).fadeIn();
    $group.animate({
      left: animateLeft
    }, 10,function() {
      $slides.eq(currentIndex).fadeOut();
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});
	  
	  });
	  
	  
	  
	  
	  
	  
	  
	</script>
	<script src="dropzone.min.js"></script>
	<script src="scripts-edit.js"></script>
	<!-- Include the Quill library -->
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Initialize Quill editor -->
<script>

var toolbarOptions = [
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],        // heading here
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons /'strike'
   ['blockquote', 'code-block'],                    // BlockQuote

  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  // [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction

  //[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown


  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
 [{ 'font': [] }],
  [{ 'align': [] }],

  ['clean'] ,
  ['link'] ,
  ['video'] 
  // remove formatting button
];

var quill = new Quill('#editor', {
  modules: {
    toolbar: toolbarOptions
  },
  placeholder: 'article description here...',
  theme: 'snow'
  
  
});


</script>
</body>
</html>