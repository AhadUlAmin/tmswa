
$(document).ready(function(){
    //document.getElementById("defaultOpen").click();
  var nav , content , fetchAndInsert;
  var root = 'http://localhost/themornstar/';
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
    url: 'http://localhost/themornstar/getdata.php',
    data: dataString,
    cache:false,
    success:function(data){
        //alert(data);
        //callmodal() ;
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
  //Manupulate history window.history.pushState(window.location.href, null, 'product/'+data.name+'/'+data.item);
  document.title = title;
  history.pushState(null, null,href);
  //Fetch And Insert Content
  fetchAndInsert(href);

  });


  //User goes back/Forward
  $(window).on('popstate',function(e){
      e.preventDefault();
      document.title = "TheMornStar - Web Development & Digital Marketing Agency";
    fetchAndInsert(window.location.pathname);
     $('#page_content').css("display","block");
          $('#page_contentid').css("display","none");
    

  });
}); 






