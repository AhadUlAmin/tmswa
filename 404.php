<?php 
header('refresh: 10; url=index.php'); // redirect the user after 10 seconds if javascipt isn't enabled
ini_set("display_errors", false );
require 'database_connection.php';
require 'header.php';?>

<section class="container">
<div style="width:80%;margin-top:150px ;margin-bottom:150px;">
<h1> Oops! You ran out of oxyzen.</h1>
<h2>It's just a 404 Error! </h2>
<h4>What you’re looking for is  now beyond our reach.</h4>


Let's get you ...

<p>Back Home in <span id="counter">10</span> second(s).</p>
<a href="https://www.themornstar.com">Homepage</a>
<img style="position: relative;
    top: -80px;
    width: 320px;
    right: -400px;"
	src="404.png">

</div>

<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.php';
    }
if (parseInt(i.innerHTML)!=0) {
    i.innerHTML = parseInt(i.innerHTML)-1;
}
}
setInterval(function(){
	countdown(); 
},1000);
</script>



</section>
<?php
 require 'footer.php';
 ?>