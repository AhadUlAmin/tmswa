

		
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
	    <div class="HalfofContainer">
         <p style="padding: 25px 0px;font-family: 'ProximaNova-Thin',sans-serif;font-size: 14px;text-align: center;">
          &copy; TheMornstar 2019 , All right reserved .</p></div> 

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
</body>
</html>