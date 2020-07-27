<style>


/*
SLIDER DESIGN START ...



*/

.slider { 
    margin: 0 auto;
    max-width: 100%;
}
.slide_viewer {
    height: 490px;
    position: relative;
    overflow: hidden;
}
.slide_group {
    height: 100%;
    position: relative;
    width: 100%;
    overflow: hidden;
}
.slide {
  display: none;
  height: 100%;
  position: absolute;
  width: 100%;
}
.slide:first-child {
    display: block;
}
.slide:nth-of-type(1) {
    background: url("https://www.themornstar.com/en-us/assets/img/banners/b8.jpg") center center no-repeat #837978;
    background-size: 100% 700px;
}
.slide:nth-of-type(2) {
    background: url("https://www.themornstar.com/en-us/assets/img/banners/b7.jpg") center center no-repeat #837978;
    background-size: 100% 700px;
}
.slide:nth-of-type(3) {
    background: url("https://www.themornstar.com/en-us/assets/img/banners/b6.jpg") center center no-repeat #837978;
    background-size: 100% 700px;
}

.slide:nth-of-type(4) {
    background: url("https://www.themornstar.com/en-us/assets/img/banners/b4.jpg") center center no-repeat #837978;
    background-size: 100% 700px;
}

.slide_buttons {
    left: 0;
    position: absolute;
    right: 0;
    text-align: center;
    /* z-index: 1000; */
    top: 410px;
}
a.slide_btn {
    color: #474544;
    font-size: 42px;
    margin: 0 0.175em;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}
.slide_btn.active,
.slide_btn:hover {
    color: #428CC6;
    cursor: pointer;
}
.directional_nav {
    margin: 0 auto;
    position: relative;
    top: -250px;
}
.previous_btn {
    bottom: 0;
    left: 150px;
    margin: auto;
    position: absolute;
    top: 0;
}
.next_btn {
    bottom: 0;
    margin: auto;
    position: absolute;
    right: 150px;
    top: 0;
}
.previous_btn,
.next_btn {
    cursor: pointer;
    height: 65px;
    opacity: 0.5;
    -webkit-transition: opacity 0.4s ease-in-out;
    -moz-transition: opacity 0.4s ease-in-out;
    -ms-transition: opacity 0.4s ease-in-out;
    -o-transition: opacity 0.4s ease-in-out;
    transition: opacity 0.4s ease-in-out;
    width: 65px;
}
.previous_btn:hover,
.next_btn:hover {
    opacity: 1;
}
.slide-text-info {
    width: 900px;
    margin: 0px auto;
}

.banner-color-text-clear{
	width:100%;
	height:100%;
   /*  background-image: url('assets/logo/cff.gif'); */
	background-color:rgba(29, 56, 104, 0.38);

}




.slide-text-article {
    width: 95%;
    float: right;
    z-index: 100;
    margin-top: 130px;
}
.slide-text-article-heading {
    padding: 20px;
    font-size: 65px;
    font-family:'ProximaNova-Thin';
    sans-sarif;
    color: #FFF;
    text-shadow: 1px 2px #000000;
}
.slide-text-article-subheading {
    padding: 0px 20px 0px 20px;
    font-size: 25px;
    font-family: 'ProximaNova-Thin';
    sans-sarif;
    color: #3575D3;
    text-shadow: 1px 1px #000000;
}
/*SLIDER MEDIA QUERY*/

@media only screen and (max-width: 640px) {
    .slide_viewer {
        height: 220px;
        position: relative;
    }
    .slide-text-info {
        width: 80%;
        margin: 0px auto;
    }
    .slide-text-article {
        width: 95%;
        float: right;
        z-index: 1000;
        margin-top: 40px;
    }
    .slide-text-article-heading {
    padding: 10px;
    font-size: 19px;
    margin-top: 15px;
    font-family: 'ProximaNova-Thin';
    color: white;
    text-shadow: 1px 1px #000000;
    }
    .slide-text-article-subheading {
        padding: 0px 10px 0px 10px;
        font-size: 16px;
        font-family: 'ProximaNova-Thin';
        sans-sarif;
        color: #3575D3;
        text-shadow: 1px 1px #000000;
    }
    .slide_buttons {
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
        top: 184px;
    }
	
	.afda{    padding: 10px;
    font-size: 19px;
    margin-top: 15px;
    font-family: 'ProximaNova-Light';
    color: white;
    text-shadow: 1px 1px #000000;
	}
}



/*
SLIDER DESIGN End ...


*/

</style>
<?php require '../layout/sliders.php';?>
<?php require '../layout/service-list.php';?>
<script>

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
</script>