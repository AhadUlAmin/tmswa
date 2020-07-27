<?php
header('Content-Type: text/html; charset=utf-8');
include("database_connection.php");
//echo  phpinfo();
function themornstar_generate_random_name() 
{
	$length = 6;
	$charactersa = "mRdxIU2r3dxa1B2c3D4e5F6g7H8i9Jqk1L2m13N1oF5P6qW7R1Ls9T20u21V2w3X4y2Z2x6";
	$real_string_legntha = strlen($charactersa) - 1;
	$stringa = rand(12345,98760);
	for ($oluvica = 0; $oluvica < $length; $oluvica++)
	{
		$stringa .= $charactersa[mt_rand(0, $real_string_legntha)];
	}
	return $stringa;
}

$article_unique =  themornstar_generate_random_name();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>
  <?php echo  $_SESSION["USER_ID"]."-".$_SESSION["USER_EMAIL"]."-".$_SESSION["USER_FULLNAME"] ."-".$_SESSION["user_altname"]  ;?> TheMornStar - Web Development & Digital Marketing Agency 
</title>

<meta name="description" content="Web Development & Digital Marketing  - Be a Step Ahead with Custom Website . Make your business stand out from the competition with a high class,custom website.">
<meta name="keywords" content="Local Business Promotional Video (Spoken Person /2D ) ,Ranking Local Business Promotional Video on YT and Google First Page ,Facebook Marketing ,SEO ,Content Writing / Translate ,Custom Web Design,PSD 2 HTML,Web Application using PHP,eCommerce Web development ,News / Blog Site Development ,Landing Page ,UpComming Website timer page,Social Integration ,Apache Rewrite Rules ,Speed Up Website ,Bugs Fixing of Website,Website  Re-development of  frontEnd or BackEnd ,Logo Design,Graphics Design,CMS Software makeing ,More ...">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo BASE_PATH;?>normalize.css" rel="stylesheet" >
<link href="<?php echo BASE_PATH;?>smartstyle.css" rel="stylesheet" >
<link href="<?php echo BASE_PATH;?>quill.snow.css" rel="stylesheet">


<script src="<?php echo BASE_PATH;?>jquery.min.js"></script>



	<link href="<?php echo BASE_PATH;?>dropzone-style.css" rel="stylesheet">
	<style>.fa {font-size: 32px;
    letter-spacing: 0;
    font-weight: 300;
    font-style: normal;
    padding: 10px;
    position: absolute;
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
	function utf8Encode(unicodeString) {
    if (typeof unicodeString != 'string') throw new TypeError('parameter ‘unicodeString’ is not a string');
    const utf8String = unicodeString.replace(
        /[\u0080-\u07ff]/g,  // U+0080 - U+07FF => 2 bytes 110yyyyy, 10zzzzzz
        function(c) {
            var cc = c.charCodeAt(0);
            return String.fromCharCode(0xc0 | cc>>6, 0x80 | cc&0x3f); }
    ).replace(
        /[\u0800-\uffff]/g,  // U+0800 - U+FFFF => 3 bytes 1110xxxx, 10yyyyyy, 10zzzzzz
        function(c) {
            var cc = c.charCodeAt(0);
            return String.fromCharCode(0xe0 | cc>>12, 0x80 | cc>>6&0x3F, 0x80 | cc&0x3f); }
    );
    return utf8String;
}
function utf8Decode(utf8String) {
    if (typeof utf8String != 'string') throw new TypeError('parameter ‘utf8String’ is not a string');
    // note: decode 3-byte chars first as decoded 2-byte strings could appear to be 3-byte char!
    const unicodeString = utf8String.replace(
        /[\u00e0-\u00ef][\u0080-\u00bf][\u0080-\u00bf]/g,  // 3-byte chars
        function(c) {  // (note parentheses for precedence)
            var cc = ((c.charCodeAt(0)&0x0f)<<12) | ((c.charCodeAt(1)&0x3f)<<6) | ( c.charCodeAt(2)&0x3f);
            return String.fromCharCode(cc); }
    ).replace(
        /[\u00c0-\u00df][\u0080-\u00bf]/g,                 // 2-byte chars
        function(c) {  // (note parentheses for precedence)
            var cc = (c.charCodeAt(0)&0x1f)<<6 | c.charCodeAt(1)&0x3f;
            return String.fromCharCode(cc); }
    );
    return unicodeString;
}
	$(document).ready(function() {
	$("#article_title").keyup(function(){
        var Text = $(this).val();
        //Text = Text.toLowerCase();
       //Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
	  // Text = utf8Decode(Text);
	   Text = Text.replace(/[\u00e0-\u00ef][\u0080-\u00bf][\u0080-\u00bf]+/g)
	   Text = Text.replace(/ /g,'-');
	   //source: https://www.tutorialrepublic.com/faq/how-to-replace-character-inside-a-string-in-javascript.php 
	  // Text = Text.replace(/[\u2012\u2013\u2014\u2015]/g,'');
        $("#event_unique").html("<b style='color:green;'>Create Event : </b>" + Text); 
		$("#event_unique_url").val(Text);   
});
});


	


function writeArticle(){

var myEditor = document.querySelector('#editor');


var html = myEditor.children[0].innerHTML;
var htmlencode = encodeURIComponent(html);
var article_title = $("#article_title").val();
var event_unique_url = $("#event_unique_url").val();
var article_unique_id = "<?php echo $article_unique ;?>";
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
	
	  var dataString = 'article_title='+article_title + '&article_unique_id='+article_unique_id+ '&html='+htmlencode + '&event_unique_url='+event_unique_url + '&page=article';
/* 	  var dataString = 'name='+name+ '&email='+email+ '&company='+company+ '&skype_id='+skype_id+ '&help_title='+help_title 
	  +'&find_us='+find_us+ '&budget='+budget+ '&timeline='+timeline+ '&description='+description+ '&page=contact_us';
 */
		
		$.ajax({
			type: "POST",
			url: "write-app.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
			  document.getElementById("articleForm").reset();
			  $(".ql-editor").html(''); 
			  $(".ql-editor").attr("placeholder", "Type here to search"); 
			  $(".uploaded-files-count").html(0);
			 // $("#previews").html("<div id='onyx-dropzone-template'><div class='onyx-dropzone-info'><div class='thumb-container'><img data-dz-thumbnail/></div><div class='details'><div><span data-dz-name></span> <span data-dz-size></span></div><div class='dz-progress'><span class='dz-upload' data-dz-uploadprogress></span></div><div class='dz-error-message'><span data-dz-errormessage></span></div><div class='actions'><a href='#!' data-dz-remove><i class='fa fa-times'></i></a></div></div></div></div>");
			  
			  $("#previews").html("");
			
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
                              Write Article !
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
    outline: none;" type="text" id="article_title" name="NewsTitle" placeholder="article title here..."/>
   <input type="hidden" id="event_unique_url" value="">
		<div style="width:100%;margin:0px auto;">
		
					<!-- Create the toolbar container -->
					<div id="toolbar"></div>
						
								
					<!-- Create the editor container --> 
					<div id="editor" style="min-height:80px;font-size:20px;font-style: normal;font-family: 'ProximaNova-Thin',sans-serif;"></div>
		
		
		</div>

 </form>
		
	      <!--- GET IN TOUCH FORM START --->
		 <div style="width:100%;margin:0px auto;">
							  
							  
					<!-- Files section -->
					<!--h4 class="section-sub-title"><span>Upload</span> Your Files</h4-->

					<form action="file-upload.php" class="dropzone files-container">
					<input type="hidden" name="fileunique" value="<?php echo $article_unique ;?>" />
					
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
					</form>

					<!-- Notes -->
					<span>Only JPG, PNG, PDF, DOC (Word), XLS (Excel), PPT, ODT and RTF files types are supported.</span>
					<span>Maximum file size is 25MB.</span>

					<!-- Uploaded files section -->
					<h4 class="section-sub-title"><span>Uploaded</span> Files (<span class="uploaded-files-count">0</span>)</h4>
					<span class="no-files-uploaded">No files uploaded yet.</span>

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
										<div class="dz-progress" style="height: 5px;background: #6b646499;margin-top: 8px;"><span class="dz-upload" data-dz-uploadprogress></span></div>
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
					  		


					   <br>
		  </div>
		  
		  
		  
	<div  id="astatus">

	
	</div>
					  
					 

		  

    


		
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
	<script src="<?php echo BASE_PATH;?>dropzone.min.js"></script>
	<script src="<?php echo BASE_PATH;?>scripts.js"></script>
	<!-- Include the Quill library -->
<!--script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script-->
<script src="quillup.js"></script>
<!-- Initialize Quill editor -->
<script>
!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.ImageResize=e():t.ImageResize=e()}(this,function(){return function(t){function e(o){if(n[o])return n[o].exports;var r=n[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,e),r.l=!0,r.exports}var n={};return e.m=t,e.c=n,e.i=function(t){return t},e.d=function(t,n,o){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:o})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=38)}([function(t,e){function n(t){var e=typeof t;return null!=t&&("object"==e||"function"==e)}t.exports=n},function(t,e,n){var o=n(22),r="object"==typeof self&&self&&self.Object===Object&&self,i=o||r||Function("return this")();t.exports=i},function(t,e){function n(t){return null!=t&&"object"==typeof t}t.exports=n},function(t,e,n){function o(t){var e=-1,n=null==t?0:t.length;for(this.clear();++e<n;){var o=t[e];this.set(o[0],o[1])}}var r=n(75),i=n(76),a=n(77),s=n(78),u=n(79);o.prototype.clear=r,o.prototype.delete=i,o.prototype.get=a,o.prototype.has=s,o.prototype.set=u,t.exports=o},function(t,e,n){function o(t,e){for(var n=t.length;n--;)if(r(t[n][0],e))return n;return-1}var r=n(8);t.exports=o},function(t,e,n){function o(t){return null==t?void 0===t?u:s:c&&c in Object(t)?i(t):a(t)}var r=n(16),i=n(64),a=n(87),s="[object Null]",u="[object Undefined]",c=r?r.toStringTag:void 0;t.exports=o},function(t,e,n){function o(t,e){var n=t.__data__;return r(e)?n["string"==typeof e?"string":"hash"]:n.map}var r=n(73);t.exports=o},function(t,e,n){var o=n(11),r=o(Object,"create");t.exports=r},function(t,e){function n(t,e){return t===e||t!==t&&e!==e}t.exports=n},function(t,e,n){"use strict";function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}n.d(e,"a",function(){return r});var r=function t(e){o(this,t),this.onCreate=function(){},this.onDestroy=function(){},this.onUpdate=function(){},this.overlay=e.overlay,this.img=e.img,this.options=e.options,this.requestUpdate=e.onUpdate}},function(t,e,n){function o(t,e,n){"__proto__"==e&&r?r(t,e,{configurable:!0,enumerable:!0,value:n,writable:!0}):t[e]=n}var r=n(21);t.exports=o},function(t,e,n){function o(t,e){var n=i(t,e);return r(n)?n:void 0}var r=n(48),i=n(65);t.exports=o},function(t,e,n){function o(t){return null!=t&&i(t.length)&&!r(t)}var r=n(13),i=n(30);t.exports=o},function(t,e,n){function o(t){if(!i(t))return!1;var e=r(t);return e==s||e==u||e==a||e==c}var r=n(5),i=n(0),a="[object AsyncFunction]",s="[object Function]",u="[object GeneratorFunction]",c="[object Proxy]";t.exports=o},function(t,e){t.exports=function(t){return t.webpackPolyfill||(t.deprecate=function(){},t.paths=[],t.children||(t.children=[]),Object.defineProperty(t,"loaded",{enumerable:!0,get:function(){return t.l}}),Object.defineProperty(t,"id",{enumerable:!0,get:function(){return t.i}}),t.webpackPolyfill=1),t}},function(t,e,n){var o=n(11),r=n(1),i=o(r,"Map");t.exports=i},function(t,e,n){var o=n(1),r=o.Symbol;t.exports=r},function(t,e){function n(t,e,n){switch(n.length){case 0:return t.call(e);case 1:return t.call(e,n[0]);case 2:return t.call(e,n[0],n[1]);case 3:return t.call(e,n[0],n[1],n[2])}return t.apply(e,n)}t.exports=n},function(t,e,n){function o(t,e,n){(void 0===n||i(t[e],n))&&(void 0!==n||e in t)||r(t,e,n)}var r=n(10),i=n(8);t.exports=o},function(t,e,n){function o(t,e,n,l,f){t!==e&&a(e,function(a,c){if(u(a))f||(f=new r),s(t,e,c,n,o,l,f);else{var p=l?l(t[c],a,c+"",t,e,f):void 0;void 0===p&&(p=a),i(t,c,p)}},c)}var r=n(41),i=n(18),a=n(46),s=n(51),u=n(0),c=n(32);t.exports=o},function(t,e,n){function o(t,e){return a(i(t,e,r),t+"")}var r=n(26),i=n(89),a=n(90);t.exports=o},function(t,e,n){var o=n(11),r=function(){try{var t=o(Object,"defineProperty");return t({},"",{}),t}catch(t){}}();t.exports=r},function(t,e,n){(function(e){var n="object"==typeof e&&e&&e.Object===Object&&e;t.exports=n}).call(e,n(107))},function(t,e,n){var o=n(88),r=o(Object.getPrototypeOf,Object);t.exports=r},function(t,e){function n(t,e){return!!(e=null==e?o:e)&&("number"==typeof t||r.test(t))&&t>-1&&t%1==0&&t<e}var o=9007199254740991,r=/^(?:0|[1-9]\d*)$/;t.exports=n},function(t,e){function n(t){var e=t&&t.constructor;return t===("function"==typeof e&&e.prototype||o)}var o=Object.prototype;t.exports=n},function(t,e){function n(t){return t}t.exports=n},function(t,e,n){var o=n(47),r=n(2),i=Object.prototype,a=i.hasOwnProperty,s=i.propertyIsEnumerable,u=o(function(){return arguments}())?o:function(t){return r(t)&&a.call(t,"callee")&&!s.call(t,"callee")};t.exports=u},function(t,e){var n=Array.isArray;t.exports=n},function(t,e,n){(function(t){var o=n(1),r=n(102),i="object"==typeof e&&e&&!e.nodeType&&e,a=i&&"object"==typeof t&&t&&!t.nodeType&&t,s=a&&a.exports===i,u=s?o.Buffer:void 0,c=u?u.isBuffer:void 0,l=c||r;t.exports=l}).call(e,n(14)(t))},function(t,e){function n(t){return"number"==typeof t&&t>-1&&t%1==0&&t<=o}var o=9007199254740991;t.exports=n},function(t,e,n){var o=n(49),r=n(54),i=n(86),a=i&&i.isTypedArray,s=a?r(a):o;t.exports=s},function(t,e,n){function o(t){return a(t)?r(t,!0):i(t)}var r=n(43),i=n(50),a=n(12);t.exports=o},function(t,e,n){"use strict";e.a={modules:["DisplaySize","Toolbar","Resize"],overlayStyles:{position:"absolute",boxSizing:"border-box",border:"1px dashed #444"},handleStyles:{position:"absolute",height:"12px",width:"12px",backgroundColor:"white",border:"1px solid #777",boxSizing:"border-box",opacity:"0.80"},displayStyles:{position:"absolute",font:"12px/1.0 Arial, Helvetica, sans-serif",padding:"4px 8px",textAlign:"center",backgroundColor:"white",color:"#333",border:"1px solid #777",boxSizing:"border-box",opacity:"0.80",cursor:"default"},toolbarStyles:{position:"absolute",top:"-12px",right:"0",left:"0",height:"0",minWidth:"100px",font:"12px/1.0 Arial, Helvetica, sans-serif",textAlign:"center",color:"#333",boxSizing:"border-box",cursor:"default"},toolbarButtonStyles:{display:"inline-block",width:"24px",height:"24px",background:"white",border:"1px solid #999",verticalAlign:"middle"},toolbarButtonSvgStyles:{fill:"#444",stroke:"#444",strokeWidth:"2"}}},function(t,e,n){"use strict";function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function r(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e}function i(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}var a=n(9);n.d(e,"a",function(){return s});var s=function(t){function e(){var t,n,i,a;o(this,e);for(var s=arguments.length,u=Array(s),c=0;c<s;c++)u[c]=arguments[c];return n=i=r(this,(t=e.__proto__||Object.getPrototypeOf(e)).call.apply(t,[this].concat(u))),i.onCreate=function(){i.display=document.createElement("div"),Object.assign(i.display.style,i.options.displayStyles),i.overlay.appendChild(i.display)},i.onDestroy=function(){},i.onUpdate=function(){if(i.display&&i.img){var t=i.getCurrentSize();if(i.display.innerHTML=t.join(" &times; "),t[0]>120&&t[1]>30)Object.assign(i.display.style,{right:"4px",bottom:"4px",left:"auto"});else if("right"==i.img.style.float){var e=i.display.getBoundingClientRect();Object.assign(i.display.style,{right:"auto",bottom:"-"+(e.height+4)+"px",left:"-"+(e.width+4)+"px"})}else{var n=i.display.getBoundingClientRect();Object.assign(i.display.style,{right:"-"+(n.width+4)+"px",bottom:"-"+(n.height+4)+"px",left:"auto"})}}},i.getCurrentSize=function(){return[i.img.width,Math.round(i.img.width/i.img.naturalWidth*i.img.naturalHeight)]},a=n,r(i,a)}return i(e,t),e}(a.a)},function(t,e,n){"use strict";function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function r(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e}function i(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}var a=n(9);n.d(e,"a",function(){return s});var s=function(t){function e(){var t,n,i,a;o(this,e);for(var s=arguments.length,u=Array(s),c=0;c<s;c++)u[c]=arguments[c];return n=i=r(this,(t=e.__proto__||Object.getPrototypeOf(e)).call.apply(t,[this].concat(u))),i.onCreate=function(){i.boxes=[],i.addBox("nwse-resize"),i.addBox("nesw-resize"),i.addBox("nwse-resize"),i.addBox("nesw-resize"),i.positionBoxes()},i.onDestroy=function(){i.setCursor("")},i.positionBoxes=function(){var t=-parseFloat(i.options.handleStyles.width)/2+"px",e=-parseFloat(i.options.handleStyles.height)/2+"px";[{left:t,top:e},{right:t,top:e},{right:t,bottom:e},{left:t,bottom:e}].forEach(function(t,e){Object.assign(i.boxes[e].style,t)})},i.addBox=function(t){var e=document.createElement("div");Object.assign(e.style,i.options.handleStyles),e.style.cursor=t,e.style.width=i.options.handleStyles.width+"px",e.style.height=i.options.handleStyles.height+"px",e.addEventListener("mousedown",i.handleMousedown,!1),i.overlay.appendChild(e),i.boxes.push(e)},i.handleMousedown=function(t){i.dragBox=t.target,i.dragStartX=t.clientX,i.preDragWidth=i.img.width||i.img.naturalWidth,i.setCursor(i.dragBox.style.cursor),document.addEventListener("mousemove",i.handleDrag,!1),document.addEventListener("mouseup",i.handleMouseup,!1)},i.handleMouseup=function(){i.setCursor(""),document.removeEventListener("mousemove",i.handleDrag),document.removeEventListener("mouseup",i.handleMouseup)},i.handleDrag=function(t){if(i.img){var e=t.clientX-i.dragStartX;i.dragBox===i.boxes[0]||i.dragBox===i.boxes[3]?i.img.width=Math.round(i.preDragWidth-e):i.img.width=Math.round(i.preDragWidth+e),i.requestUpdate()}},i.setCursor=function(t){[document.body,i.img].forEach(function(e){e.style.cursor=t})},a=n,r(i,a)}return i(e,t),e}(a.a)},function(t,e,n){"use strict";function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function r(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e}function i(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}var a=n(105),s=n.n(a),u=n(104),c=n.n(u),l=n(106),f=n.n(l),p=n(9);n.d(e,"a",function(){return b});var d=window.Quill.imports.parchment,h=new d.Attributor.Style("float","float"),y=new d.Attributor.Style("margin","margin"),v=new d.Attributor.Style("display","display"),b=function(t){function e(){var t,n,i,a;o(this,e);for(var u=arguments.length,l=Array(u),p=0;p<u;p++)l[p]=arguments[p];return n=i=r(this,(t=e.__proto__||Object.getPrototypeOf(e)).call.apply(t,[this].concat(l))),i.onCreate=function(){i.toolbar=document.createElement("div"),Object.assign(i.toolbar.style,i.options.toolbarStyles),i.overlay.appendChild(i.toolbar),i._defineAlignments(),i._addToolbarButtons()},i.onDestroy=function(){},i.onUpdate=function(){},i._defineAlignments=function(){i.alignments=[{icon:s.a,apply:function(){v.add(i.img,"inline"),h.add(i.img,"left"),y.add(i.img,"0 1em 1em 0")},isApplied:function(){return"left"==h.value(i.img)}},{icon:c.a,apply:function(){v.add(i.img,"block"),h.remove(i.img),y.add(i.img,"auto")},isApplied:function(){return"auto"==y.value(i.img)}},{icon:f.a,apply:function(){v.add(i.img,"inline"),h.add(i.img,"right"),y.add(i.img,"0 0 1em 1em")},isApplied:function(){return"right"==h.value(i.img)}}]},i._addToolbarButtons=function(){var t=[];i.alignments.forEach(function(e,n){var o=document.createElement("span");t.push(o),o.innerHTML=e.icon,o.addEventListener("click",function(){t.forEach(function(t){return t.style.filter=""}),e.isApplied()?(h.remove(i.img),y.remove(i.img),v.remove(i.img)):(i._selectButton(o),e.apply()),i.requestUpdate()}),Object.assign(o.style,i.options.toolbarButtonStyles),n>0&&(o.style.borderLeftWidth="0"),Object.assign(o.children[0].style,i.options.toolbarButtonSvgStyles),e.isApplied()&&i._selectButton(o),i.toolbar.appendChild(o)})},i._selectButton=function(t){t.style.filter="invert(20%)"},a=n,r(i,a)}return i(e,t),e}(p.a)},function(t,e,n){var o=n(17),r=n(20),i=n(63),a=n(101),s=r(function(t){return t.push(void 0,i),o(a,void 0,t)});t.exports=s},function(t,e,n){"use strict";function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(e,"__esModule",{value:!0});var r=n(37),i=n.n(r),a=n(33),s=n(34),u=n(36),c=n(35),l={DisplaySize:s.a,Toolbar:u.a,Resize:c.a},f=function t(e){var n=this,r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};o(this,t),this.initializeModules=function(){n.removeModules(),n.modules=n.moduleClasses.map(function(t){return new(l[t]||t)(n)}),n.modules.forEach(function(t){t.onCreate()}),n.onUpdate()},this.onUpdate=function(){n.repositionElements(),n.modules.forEach(function(t){t.onUpdate()})},this.removeModules=function(){n.modules.forEach(function(t){t.onDestroy()}),n.modules=[]},this.handleClick=function(t){if(t.target&&t.target.tagName&&"IMG"===t.target.tagName.toUpperCase()){if(n.img===t.target)return;n.img&&n.hide(),n.show(t.target)}else n.img&&n.hide()},this.show=function(t){n.img=t,n.showOverlay(),n.initializeModules()},this.showOverlay=function(){n.overlay&&n.hideOverlay(),n.quill.setSelection(null),n.setUserSelect("none"),document.addEventListener("keyup",n.checkImage,!0),n.quill.root.addEventListener("input",n.checkImage,!0),n.overlay=document.createElement("div"),Object.assign(n.overlay.style,n.options.overlayStyles),n.quill.root.parentNode.appendChild(n.overlay),n.repositionElements()},this.hideOverlay=function(){n.overlay&&(n.quill.root.parentNode.removeChild(n.overlay),n.overlay=void 0,document.removeEventListener("keyup",n.checkImage),n.quill.root.removeEventListener("input",n.checkImage),n.setUserSelect(""))},this.repositionElements=function(){if(n.overlay&&n.img){var t=n.quill.root.parentNode,e=n.img.getBoundingClientRect(),o=t.getBoundingClientRect();Object.assign(n.overlay.style,{left:e.left-o.left-1+t.scrollLeft+"px",top:e.top-o.top+t.scrollTop+"px",width:e.width+"px",height:e.height+"px"})}},this.hide=function(){n.hideOverlay(),n.removeModules(),n.img=void 0},this.setUserSelect=function(t){["userSelect","mozUserSelect","webkitUserSelect","msUserSelect"].forEach(function(e){n.quill.root.style[e]=t,document.documentElement.style[e]=t})},this.checkImage=function(t){n.img&&(46!=t.keyCode&&8!=t.keyCode||window.Quill.find(n.img).deleteAt(0),n.hide())},this.quill=e;var s=!1;r.modules&&(s=r.modules.slice()),this.options=i()({},r,a.a),s!==!1&&(this.options.modules=s),document.execCommand("enableObjectResizing",!1,"false"),this.quill.root.addEventListener("click",this.handleClick,!1),this.quill.root.parentNode.style.position=this.quill.root.parentNode.style.position||"relative",this.moduleClasses=this.options.modules,console.log("this.options.modules",this.options.modules),this.modules=[]};e.default=f,window.Quill&&window.Quill.register("modules/imageResize",f)},function(t,e,n){function o(t){var e=-1,n=null==t?0:t.length;for(this.clear();++e<n;){var o=t[e];this.set(o[0],o[1])}}var r=n(66),i=n(67),a=n(68),s=n(69),u=n(70);o.prototype.clear=r,o.prototype.delete=i,o.prototype.get=a,o.prototype.has=s,o.prototype.set=u,t.exports=o},function(t,e,n){function o(t){var e=-1,n=null==t?0:t.length;for(this.clear();++e<n;){var o=t[e];this.set(o[0],o[1])}}var r=n(80),i=n(81),a=n(82),s=n(83),u=n(84);o.prototype.clear=r,o.prototype.delete=i,o.prototype.get=a,o.prototype.has=s,o.prototype.set=u,t.exports=o},function(t,e,n){function o(t){var e=this.__data__=new r(t);this.size=e.size}var r=n(3),i=n(92),a=n(93),s=n(94),u=n(95),c=n(96);o.prototype.clear=i,o.prototype.delete=a,o.prototype.get=s,o.prototype.has=u,o.prototype.set=c,t.exports=o},function(t,e,n){var o=n(1),r=o.Uint8Array;t.exports=r},function(t,e,n){function o(t,e){var n=a(t),o=!n&&i(t),l=!n&&!o&&s(t),p=!n&&!o&&!l&&c(t),d=n||o||l||p,h=d?r(t.length,String):[],y=h.length;for(var v in t)!e&&!f.call(t,v)||d&&("length"==v||l&&("offset"==v||"parent"==v)||p&&("buffer"==v||"byteLength"==v||"byteOffset"==v)||u(v,y))||h.push(v);return h}var r=n(53),i=n(27),a=n(28),s=n(29),u=n(24),c=n(31),l=Object.prototype,f=l.hasOwnProperty;t.exports=o},function(t,e,n){function o(t,e,n){var o=t[e];s.call(t,e)&&i(o,n)&&(void 0!==n||e in t)||r(t,e,n)}var r=n(10),i=n(8),a=Object.prototype,s=a.hasOwnProperty;t.exports=o},function(t,e,n){var o=n(0),r=Object.create,i=function(){function t(){}return function(e){if(!o(e))return{};if(r)return r(e);t.prototype=e;var n=new t;return t.prototype=void 0,n}}();t.exports=i},function(t,e,n){var o=n(62),r=o();t.exports=r},function(t,e,n){function o(t){return i(t)&&r(t)==a}var r=n(5),i=n(2),a="[object Arguments]";t.exports=o},function(t,e,n){function o(t){return!(!a(t)||i(t))&&(r(t)?d:u).test(s(t))}var r=n(13),i=n(74),a=n(0),s=n(97),u=/^\[object .+?Constructor\]$/,c=Function.prototype,l=Object.prototype,f=c.toString,p=l.hasOwnProperty,d=RegExp("^"+f.call(p).replace(/[\\^$.*+?()[\]{}|]/g,"\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g,"$1.*?")+"$");t.exports=o},function(t,e,n){function o(t){return a(t)&&i(t.length)&&!!s[r(t)]}var r=n(5),i=n(30),a=n(2),s={};s["[object Float32Array]"]=s["[object Float64Array]"]=s["[object Int8Array]"]=s["[object Int16Array]"]=s["[object Int32Array]"]=s["[object Uint8Array]"]=s["[object Uint8ClampedArray]"]=s["[object Uint16Array]"]=s["[object Uint32Array]"]=!0,s["[object Arguments]"]=s["[object Array]"]=s["[object ArrayBuffer]"]=s["[object Boolean]"]=s["[object DataView]"]=s["[object Date]"]=s["[object Error]"]=s["[object Function]"]=s["[object Map]"]=s["[object Number]"]=s["[object Object]"]=s["[object RegExp]"]=s["[object Set]"]=s["[object String]"]=s["[object WeakMap]"]=!1,t.exports=o},function(t,e,n){function o(t){if(!r(t))return a(t);var e=i(t),n=[];for(var o in t)("constructor"!=o||!e&&u.call(t,o))&&n.push(o);return n}var r=n(0),i=n(25),a=n(85),s=Object.prototype,u=s.hasOwnProperty;t.exports=o},function(t,e,n){function o(t,e,n,o,g,x,m){var _=t[n],j=e[n],w=m.get(j);if(w)return void r(t,n,w);var O=x?x(_,j,n+"",t,e,m):void 0,S=void 0===O;if(S){var E=l(j),A=!E&&p(j),z=!E&&!A&&v(j);O=j,E||A||z?l(_)?O=_:f(_)?O=s(_):A?(S=!1,O=i(j,!0)):z?(S=!1,O=a(j,!0)):O=[]:y(j)||c(j)?(O=_,c(_)?O=b(_):(!h(_)||o&&d(_))&&(O=u(j))):S=!1}S&&(m.set(j,O),g(O,j,o,x,m),m.delete(j)),r(t,n,O)}var r=n(18),i=n(56),a=n(57),s=n(58),u=n(71),c=n(27),l=n(28),f=n(99),p=n(29),d=n(13),h=n(0),y=n(100),v=n(31),b=n(103);t.exports=o},function(t,e,n){var o=n(98),r=n(21),i=n(26),a=r?function(t,e){return r(t,"toString",{configurable:!0,enumerable:!1,value:o(e),writable:!0})}:i;t.exports=a},function(t,e){function n(t,e){for(var n=-1,o=Array(t);++n<t;)o[n]=e(n);return o}t.exports=n},function(t,e){function n(t){return function(e){return t(e)}}t.exports=n},function(t,e,n){function o(t){var e=new t.constructor(t.byteLength);return new r(e).set(new r(t)),e}var r=n(42);t.exports=o},function(t,e,n){(function(t){function o(t,e){if(e)return t.slice();var n=t.length,o=c?c(n):new t.constructor(n);return t.copy(o),o}var r=n(1),i="object"==typeof e&&e&&!e.nodeType&&e,a=i&&"object"==typeof t&&t&&!t.nodeType&&t,s=a&&a.exports===i,u=s?r.Buffer:void 0,c=u?u.allocUnsafe:void 0;t.exports=o}).call(e,n(14)(t))},function(t,e,n){function o(t,e){var n=e?r(t.buffer):t.buffer;return new t.constructor(n,t.byteOffset,t.length)}var r=n(55);t.exports=o},function(t,e){function n(t,e){var n=-1,o=t.length;for(e||(e=Array(o));++n<o;)e[n]=t[n];return e}t.exports=n},function(t,e,n){function o(t,e,n,o){var a=!n;n||(n={});for(var s=-1,u=e.length;++s<u;){var c=e[s],l=o?o(n[c],t[c],c,n,t):void 0;void 0===l&&(l=t[c]),a?i(n,c,l):r(n,c,l)}return n}var r=n(44),i=n(10);t.exports=o},function(t,e,n){var o=n(1),r=o["__core-js_shared__"];t.exports=r},function(t,e,n){function o(t){return r(function(e,n){var o=-1,r=n.length,a=r>1?n[r-1]:void 0,s=r>2?n[2]:void 0;for(a=t.length>3&&"function"==typeof a?(r--,a):void 0,s&&i(n[0],n[1],s)&&(a=r<3?void 0:a,r=1),e=Object(e);++o<r;){var u=n[o];u&&t(e,u,o,a)}return e})}var r=n(20),i=n(72);t.exports=o},function(t,e){function n(t){return function(e,n,o){for(var r=-1,i=Object(e),a=o(e),s=a.length;s--;){var u=a[t?s:++r];if(n(i[u],u,i)===!1)break}return e}}t.exports=n},function(t,e,n){function o(t,e,n,a,s,u){return i(t)&&i(e)&&(u.set(e,t),r(t,e,void 0,o,u),u.delete(e)),t}var r=n(19),i=n(0);t.exports=o},function(t,e,n){function o(t){var e=a.call(t,u),n=t[u];try{t[u]=void 0}catch(t){}var o=s.call(t);return e?t[u]=n:delete t[u],o}var r=n(16),i=Object.prototype,a=i.hasOwnProperty,s=i.toString,u=r?r.toStringTag:void 0;t.exports=o},function(t,e){function n(t,e){return null==t?void 0:t[e]}t.exports=n},function(t,e,n){function o(){this.__data__=r?r(null):{},this.size=0}var r=n(7);t.exports=o},function(t,e){function n(t){var e=this.has(t)&&delete this.__data__[t];return this.size-=e?1:0,e}t.exports=n},function(t,e,n){function o(t){var e=this.__data__;if(r){var n=e[t];return n===i?void 0:n}return s.call(e,t)?e[t]:void 0}var r=n(7),i="__lodash_hash_undefined__",a=Object.prototype,s=a.hasOwnProperty;t.exports=o},function(t,e,n){function o(t){var e=this.__data__;return r?void 0!==e[t]:a.call(e,t)}var r=n(7),i=Object.prototype,a=i.hasOwnProperty;t.exports=o},function(t,e,n){function o(t,e){var n=this.__data__;return this.size+=this.has(t)?0:1,n[t]=r&&void 0===e?i:e,this}var r=n(7),i="__lodash_hash_undefined__";t.exports=o},function(t,e,n){function o(t){return"function"!=typeof t.constructor||a(t)?{}:r(i(t))}var r=n(45),i=n(23),a=n(25);t.exports=o},function(t,e,n){function o(t,e,n){if(!s(n))return!1;var o=typeof e;return!!("number"==o?i(n)&&a(e,n.length):"string"==o&&e in n)&&r(n[e],t)}var r=n(8),i=n(12),a=n(24),s=n(0);t.exports=o},function(t,e){function n(t){var e=typeof t;return"string"==e||"number"==e||"symbol"==e||"boolean"==e?"__proto__"!==t:null===t}t.exports=n},function(t,e,n){function o(t){return!!i&&i in t}var r=n(60),i=function(){var t=/[^.]+$/.exec(r&&r.keys&&r.keys.IE_PROTO||"");return t?"Symbol(src)_1."+t:""}();t.exports=o},function(t,e){function n(){this.__data__=[],this.size=0}t.exports=n},function(t,e,n){function o(t){var e=this.__data__,n=r(e,t);return!(n<0)&&(n==e.length-1?e.pop():a.call(e,n,1),--this.size,!0)}var r=n(4),i=Array.prototype,a=i.splice;t.exports=o},function(t,e,n){function o(t){var e=this.__data__,n=r(e,t);return n<0?void 0:e[n][1]}var r=n(4);t.exports=o},function(t,e,n){function o(t){return r(this.__data__,t)>-1}var r=n(4);t.exports=o},function(t,e,n){function o(t,e){var n=this.__data__,o=r(n,t);return o<0?(++this.size,n.push([t,e])):n[o][1]=e,this}var r=n(4);t.exports=o},function(t,e,n){function o(){this.size=0,this.__data__={hash:new r,map:new(a||i),string:new r}}var r=n(39),i=n(3),a=n(15);t.exports=o},function(t,e,n){function o(t){var e=r(this,t).delete(t);return this.size-=e?1:0,e}var r=n(6);t.exports=o},function(t,e,n){function o(t){return r(this,t).get(t)}var r=n(6);t.exports=o},function(t,e,n){function o(t){return r(this,t).has(t)}var r=n(6);t.exports=o},function(t,e,n){function o(t,e){var n=r(this,t),o=n.size;return n.set(t,e),this.size+=n.size==o?0:1,this}var r=n(6);t.exports=o},function(t,e){function n(t){var e=[];if(null!=t)for(var n in Object(t))e.push(n);return e}t.exports=n},function(t,e,n){(function(t){var o=n(22),r="object"==typeof e&&e&&!e.nodeType&&e,i=r&&"object"==typeof t&&t&&!t.nodeType&&t,a=i&&i.exports===r,s=a&&o.process,u=function(){try{return s&&s.binding&&s.binding("util")}catch(t){}}();t.exports=u}).call(e,n(14)(t))},function(t,e){function n(t){return r.call(t)}var o=Object.prototype,r=o.toString;t.exports=n},function(t,e){function n(t,e){return function(n){return t(e(n))}}t.exports=n},function(t,e,n){function o(t,e,n){return e=i(void 0===e?t.length-1:e,0),function(){for(var o=arguments,a=-1,s=i(o.length-e,0),u=Array(s);++a<s;)u[a]=o[e+a];a=-1;for(var c=Array(e+1);++a<e;)c[a]=o[a];return c[e]=n(u),r(t,this,c)}}var r=n(17),i=Math.max;t.exports=o},function(t,e,n){var o=n(52),r=n(91),i=r(o);t.exports=i},function(t,e){function n(t){var e=0,n=0;return function(){var a=i(),s=r-(a-n);if(n=a,s>0){if(++e>=o)return arguments[0]}else e=0;return t.apply(void 0,arguments)}}var o=800,r=16,i=Date.now;t.exports=n},function(t,e,n){function o(){this.__data__=new r,this.size=0}var r=n(3);t.exports=o},function(t,e){function n(t){var e=this.__data__,n=e.delete(t);return this.size=e.size,n}t.exports=n},function(t,e){function n(t){return this.__data__.get(t)}t.exports=n},function(t,e){function n(t){return this.__data__.has(t)}t.exports=n},function(t,e,n){function o(t,e){var n=this.__data__;if(n instanceof r){var o=n.__data__;if(!i||o.length<s-1)return o.push([t,e]),this.size=++n.size,this;n=this.__data__=new a(o)}return n.set(t,e),this.size=n.size,this}var r=n(3),i=n(15),a=n(40),s=200;t.exports=o},function(t,e){function n(t){if(null!=t){try{return r.call(t)}catch(t){}try{return t+""}catch(t){}}return""}var o=Function.prototype,r=o.toString;t.exports=n},function(t,e){function n(t){return function(){return t}}t.exports=n},function(t,e,n){function o(t){return i(t)&&r(t)}var r=n(12),i=n(2);t.exports=o},function(t,e,n){function o(t){if(!a(t)||r(t)!=s)return!1;var e=i(t);if(null===e)return!0;var n=f.call(e,"constructor")&&e.constructor;return"function"==typeof n&&n instanceof n&&l.call(n)==p}var r=n(5),i=n(23),a=n(2),s="[object Object]",u=Function.prototype,c=Object.prototype,l=u.toString,f=c.hasOwnProperty,p=l.call(Object);t.exports=o},function(t,e,n){var o=n(19),r=n(61),i=r(function(t,e,n,r){o(t,e,n,r)});t.exports=i},function(t,e){function n(){return!1}t.exports=n},function(t,e,n){function o(t){return r(t,i(t))}var r=n(59),i=n(32);t.exports=o},function(t,e){t.exports='<svg viewbox="0 0 18 18">\n  <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line>\n  <line class="ql-stroke" x1="14" x2="4" y1="14" y2="14"></line>\n  <line class="ql-stroke" x1="12" x2="6" y1="4" y2="4"></line>\n</svg>'},function(t,e){t.exports='<svg viewbox="0 0 18 18">\n  <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line>\n  <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line>\n  <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line>\n</svg>'},function(t,e){t.exports='<svg viewbox="0 0 18 18">\n  <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line>\n  <line class="ql-stroke" x1="15" x2="5" y1="14" y2="14"></line>\n  <line class="ql-stroke" x1="15" x2="9" y1="4" y2="4"></line>\n</svg>'},function(t,e){var n;n=function(){return this}();try{n=n||Function("return this")()||(0,eval)("this")}catch(t){"object"==typeof window&&(n=window)}t.exports=n}])});

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
  ['link', 'image'],
  ['video'] 
  // remove formatting button
];

var quill = new Quill('#editor', {
  modules: {
          imageResize: {
          displaySize: true
        },
    toolbar: toolbarOptions
  },
  placeholder: 'article description here...',
  theme: 'snow'
  
  
});


</script>
</body>
</html>