<?php
include("database_connection.php");
?>
<!Doctype html>
<html lang="en">
<head>
<title>
   TheMornStar - Web Development & Digital Marketing Agency 
</title>
<meta name="description" content="Web Development & Digital Marketing  - Be a Step Ahead with Custom Website . Make your business stand out from the competition with a high class,custom website.">
<meta name="keywords" content="Local Business Promotional Video (Spoken Person /2D ) ,Ranking Local Business Promotional Video on YT and Google First Page ,Facebook Marketing ,SEO ,Content Writing / Translate ,Custom Web Design,PSD 2 HTML,Web Application using PHP,eCommerce Web development ,News / Blog Site Development ,Landing Page ,UpComming Website timer page,Social Integration ,Apache Rewrite Rules ,Speed Up Website ,Bugs Fixing of Website,Website  Re-development of  frontEnd or BackEnd ,Logo Design,Graphics Design,CMS Software makeing ,More ...">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">

<link rel="stylesheet"  href="<?php echo BASE_PATH;?>styles.css">
<script src="<?php echo BASE_PATH;?>jquery-3.4.1.min.js"></script>
<script src="<?php echo BASE_PATH;?>load.js"></script>
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
			if(href.split('/').pop().includes(".php") && href.split('/').pop()!= "index.php"){
				//alert(href.split('/').pop());
				$('#homepage').css("display","none");
				$('#page_content').css("display","block");
			      page_content.html(data);
			}else if(href.split('/').pop().includes("index.php") || href.split('/').pop().includes("")){
				$('#homepage').css("display","block");
				$('#page_content').css("display","none");
				
			}
			
			
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
		  $('#homepage').css("display","none");
		  
		fetchAndInsertPage(location.pathname);

	  });



	});
	</script>
	
	<script>
// Function for getting single element for whole page and url
	$(document).ready(function(){
 		
		//document.getElementById("defaultOpen").click();
		
	  var nav , content , fetchAndInsert;
	  var root = '<?php echo BASE_PATH;?>';
	  //Fetch And Insert Content
	  fetchAndInsert = function(href){
		  if(href.length < 30){
			 $('#homepage').css("display","block");
			  $('#page_contentid').css("display","none");
			 
		  }
		  else{
			  
		  
	  var ms_uid = href.split('/').pop();
	 // $('#content').show();
	  var dataString = 'ms_uid=' + ms_uid ;
	  $.ajax({
	  	type: "POST",
		url: '<?php echo BASE_PATH;?>getdata.php',
		data: dataString,
		cache:false,
		success:function(data){
			$('#homepage').css("display","none");
			$('#page_contentid').css("display","block");
		    $('#page_contentid').html(data);
		  //testing modal 
		    
			
		  

			}
		});
		}
		
	  };

	  nav = $('div.grid_news_title');
	  content = $('#contentc');
	  nav.find('a').on('click',function(e){
	  e.preventDefault();
	  var href = $(this).attr('href');
	   var title = $(this).attr('title');
	   document.title = title;
	  //Manupulate history
	  history.pushState(null, null,href);
	  //Fetch And Insert Content
	  fetchAndInsert(href);

	  });


	  //User goes back/Forward
	  $(window).on('popstate',function(e){
		  e.preventDefault();
		   document.title = "TheMornStar - Web Development & Digital Marketing Agency";
		fetchAndInsert(location.pathname);
		
		 $('#homepage').css("display","none");
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
		//	alert(href.split('/').pop());
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
 
function addnew() 
{
	
//var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var name = $("#cname").val();
	var email = $("#cemail").val();

	
	//alert("We're going to send email and approve this on this proccess"+approvetxt+approvemail+approveid +approvename); 
	if(email == "")
	{
		alert("Mail is mising ...");
	}

	else
	{
		var dataString = 'name='+ name + '&email=' + email ;
		$.ajax({
			type: "POST",
			url: "addnew.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#loading").html('<br clear="all"><div align="left"> <img src="loads.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
				$("#loading").fadeOut(1000);
				 $("#information").fadeIn(1000).html(response);
				 $('#addnew').trigger("reset");

			}
		});
	}
}

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
 
 <script type="text/javascript">
$(document).ready(function() {


	$('#loaded_data').vasplus_post_scroller({

		vpb_total_per_load  : 12, // Total number of posts per scroll to be loaded on the page
		vpb_start           : 0, // Default - loading start at 0 offset
		vpb_no_more         : 'No more posts', // This is the message shown to the user when the post is finished
		vpb_load_more       : 'Load more posts', // This is the message shown to the user when set auto scroll to false to load more data    
		vpb_delay           : 600, // Wait after this time when a user scrolls down to start again
		vpb_auto_load       : true, // Set to true for auto scroll and set to false to scroll manually
		vpb_page_identifier : 'laod-more-post', // Not really necessary unless you need it otherwise leave it alone
		vpb_url             : 'getdatas.php', // This is the URL to the page that gets content from the database
		vpb_loading_div_id  : 'vpb_loading_box' // This is the ID of the div where the loaded contents will be displayed
		
	});
	
});

</script>
 
 <style>


	
	</style>
<script>
	  	$(document).ready(function(){
			
			$("nav ul li a").click(function(){
			  $('.icon').removeClass('active');
	            $('.nav-inactive').removeClass('nav-active');
			});
			


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
		    <li> <a class="header_menu" href="<?php echo BASE_PATH;?>about-us.php"> Who We Are  </a> </li>
			<li> <a class="header_menu" href="<?php echo BASE_PATH;?>services.php"> What We Do  </a>
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
			<li> <a class="header_menu" href="<?php echo BASE_PATH;?>portfolios.php"> Portfolio </a> </li>
		
			<li> <a class="header_menu" href="<?php echo BASE_PATH;?>support.php"> Support  </a> </li>
			<li> <a class="header_menu" href="<?php echo BASE_PATH;?>resources.php"> Resources  </a> </li>
			<li> <a class="header_menu" href="<?php echo BASE_PATH;?>blog.php">  Blog  </a> </li>
					<li><a class="header_menu" href="career.php">Career  </a>
							<ul id="submenu">
								  <li><a href="#">Full-time </a></li>
								  <li><a href="#">Remote</a></li>
								  <li><a href="#">Intern</a></li>
							</ul>
					  </li>
			<li> <a class="header_menu" href="<?php echo BASE_PATH;?>contact-us.php">  Contact Us </a> </li>
					  
		  </ul>
	</nav>

	<div class="cart" id="vCart" style="display:none;"></div>
	
   </div>
</header>