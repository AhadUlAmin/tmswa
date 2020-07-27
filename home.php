<?php require 'header.php';?>
<?php // Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
	?>

	
<script>

/* $( document ).ready(function() {
	SetCookies('<?php echo get_client_ip() ;?>');
}); */

function SetCookies(ip){

	  var dataString = 'ip='+ip +'&page=ip';
      $.ajax({
			type: "POST",
			url: "ip.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
			  $("#status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/images/logo/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
               $("#status").html(response);

			}
		});
	 
	
	
	


}
</script>
	
<?php 

$ip = get_client_ip();

$check_ip = mysqli_query($conn,"select * from `ipaddress` where `ip_number` = '".mysqli_real_escape_string($conn,$ip)."' ");
if(mysqli_num_rows($check_ip) > 0){
         $xyzabc = mysqli_fetch_array($check_ip);
            $abc =  $xyzabc['ip_id']; 
			$xyz =  $xyzabc['ip_altusername']; 

		$_SESSION["USER_ID"] =  $abc;
		$_SESSION["ALT_USERNAME"] =  $xyz;
	//	echo "Session :".$_SESSION["USER_ID"].$_SESSION["ALT_USERNAME"];
		
		
 }
 
 else{
 ?>
 	<section  id="accept_cookies_area" style="background-color: rgb(214, 214, 214);width:100%;height:120px;float:left;position:fixed;bottom:0px;z-index:100;"> 
	<div class="container">
		<div style="width:90%;float:left;font-size:18px;text-align:justify;">
				<p style="padding:20px;">
				

				 We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with <a href=""> Privacy policy </a>
				</p>
		</div>
		<div style="width:10%;float:left;">
			
			 <button id="accept_cookies" onclick="SetCookies('<?php echo get_client_ip() ;?>');return false;" class="btn_hairline">Accept </button>
		 </div>
	</div>
</section>
 
 <?php
 
 }

?>

	



<div id="page_contentid">

</div>
<div id="homepage">
        <?php require 'layout/sliders.php';?>
		 <?php require 'layout/service-list.php';?>
		<?php require 'layout/featured-work.php'?>
        <?php require 'layout/our-clients.php'?>

</div>
<div id="page_content">


            <div class="hrefarea">

            </div>

            <div id="information">

            </div>

</div>

	  
	  

	  

		  
	  
	  











<section style="width:100%;height:65px;float:left;border-top: 1px solid #C3CCD7;">
	<div class="container">
		<div style="width:60px;height:50px;border-right: 1px solid #C3CCD7;float:left;">
			<a href="#"><img style="width:20px;height: 20px;margin:15px 15px;" src="<?php echo BASE_PATH ?>assets/logo/phoneicon.png"></a>
		</div>
		<div style="width:60px;height:50px;border-right: 1px solid #C3CCD7;float:left;">
			<a href="JavaScript:newPopup('http://www.themornstar.com');"><img style="width:20px;height: 20px;margin:15px 15px;" src="<?php echo BASE_PATH ?>assets/logo/bubbleicon.png"></a>
		</div>

		<div style="height:50px;border-right: 1px solid #C3CCD7;float:right;margin-right: 10px;">
			<span class="sent-query">
					Schedule a Consultation <button href="" class="btn_hairline_inverse">Sent Query </button>
			</span>

		</div>
	</div>
</section>



        <!--Try to make popup modal -->
        <div id="blackwall">
            <div id="modal">
                <button class="button-close" data-action="overlay-close">×</button>
                <div class="modal-body">
                    <!--Login start from here..-->
                    <div class="signup-box">
                        <div class="signup-header">
                            Login to TheMornStar Account!
                        </div>
                        <div style="padding: 10px 20px;">
                            <a href="" class="social-facebook">
                                <i class="udi udi-facebook-f social-icon">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" version="1.1" width="32" height="32">
								<g id="surface1">
									<path style=" fill:#3F51B5;" d="M 42 37 C 42 39.761719 39.761719 42 37 42 L 11 42 C 8.238281 42 6 39.761719 6 37 L 6 11 C 6 8.238281 8.238281 6 11 6 L 37 6 C 39.761719 6 42 8.238281 42 11 Z "/>
									<path style=" fill:#FFFFFF;" d="M 34.367188 25 L 31 25 L 31 38 L 26 38 L 26 25 L 23 25 L 23 21 L 26 21 L 26 18.589844 C 26.003906 15.082031 27.460938 13 31.59375 13 L 35 13 L 35 17 L 32.714844 17 C 31.105469 17 31 17.601563 31 18.722656 L 31 21 L 35 21 Z "/>
								</g>
							</svg>
						</i> &nbsp;&nbsp; Continue with Facebook

                                <span class="udi udi-circle-loader udi-small dn-force"></span>
                            </a>
                            <a href="" class="social-googleplus">
                                <i class="udi udi-google-plus social-icon">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" version="1.1" width="24" height="24">
								<g id="surface1">
									<path style=" fill:#FFC107;" d="M 43.609375 20.082031 L 42 20.082031 L 42 20 L 24 20 L 24 28 L 35.304688 28 C 33.652344 32.65625 29.222656 36 24 36 C 17.371094 36 12 30.628906 12 24 C 12 17.371094 17.371094 12 24 12 C 27.058594 12 29.84375 13.152344 31.960938 15.039063 L 37.617188 9.382813 C 34.046875 6.054688 29.269531 4 24 4 C 12.953125 4 4 12.953125 4 24 C 4 35.046875 12.953125 44 24 44 C 35.046875 44 44 35.046875 44 24 C 44 22.660156 43.863281 21.351563 43.609375 20.082031 Z "/>
									<path style=" fill:#FF3D00;" d="M 6.304688 14.691406 L 12.878906 19.511719 C 14.65625 15.109375 18.960938 12 24 12 C 27.058594 12 29.84375 13.152344 31.960938 15.039063 L 37.617188 9.382813 C 34.046875 6.054688 29.269531 4 24 4 C 16.316406 4 9.65625 8.335938 6.304688 14.691406 Z "/>
									<path style=" fill:#4CAF50;" d="M 24 44 C 29.164063 44 33.859375 42.023438 37.410156 38.808594 L 31.21875 33.570313 C 29.210938 35.089844 26.714844 36 24 36 C 18.796875 36 14.382813 32.683594 12.71875 28.054688 L 6.195313 33.078125 C 9.503906 39.554688 16.226563 44 24 44 Z "/>
									<path style=" fill:#1976D2;" d="M 43.609375 20.082031 L 42 20.082031 L 42 20 L 24 20 L 24 28 L 35.304688 28 C 34.511719 30.238281 33.070313 32.164063 31.214844 33.570313 C 31.21875 33.570313 31.21875 33.570313 31.21875 33.570313 L 37.410156 38.808594 C 36.972656 39.203125 44 34 44 24 C 44 22.660156 43.863281 21.351563 43.609375 20.082031 Z "/>
								</g>
							</svg>
						</i> &nbsp;&nbsp; Continue with Google

                                <span class="udi udi-circle-loader udi-small dn-force"></span>
                            </a>
                            <div class="loginbox-v4__separator-container">
                                <div class="loginbox-v4__separator"></div>
                                <div class="loginbox-v4__separator-text">OR</div>
                                <div class="loginbox-v4__separator"></div>
                            </div>
                            <form id="loginform" class="form-account" method="post">
                                <input class="" style="" type="text" id="uemail" name="myemail" placeholder="Email" />
                                <input style="" type="password" id="upassword" name="mypassword" placeholder="Password" />
                                <div>
                                    <br>
                                    <label for="checkbox"></label>
                                    <p style="text-align:left;">
                                        <input type="checkbox" id="chk1"> Remmember me
                                    </p>
                                    <button class="signup-button" onclick="users_login();return false;">Login now!</button>
                                </div>
                                <span id="login_status"></span>
                                <div class="loginbox-v4__separator"></div>
                                <div class="loginbox-v4__footer">
                                    Don't have an account?
                                    <a href="" id="register-link">Register</a>
                                </div>
                            </form>
                            <form style="display:none;" id="signupform" class="form-account" method="post">
                                <input type="text" id="username" name="myusername" placeholder="Username">
                                <span id="status"></span>
                                <input type="text" id="email" name="myemail" placeholder="Email">
                                <br>
                                <input type="password" id="password" name="mypassword" placeholder="Password">
                                <div class="test">
                                    <input type="checkbox" class="term">I agree to
                                    <a target="_blank" href="#">terms of service</a> and
                                    <a target="_blank" href="#">the privacy </a>
                                </div>
                                <br>
                                <button class="signup-button" onclick="users_registration();return false;" class="btn_hairline">Signup now!</button>
                                <span id="signup_status"></span>
                                <div class="loginbox-v4__separator"></div>
                                <div class="loginbox-v4__footer">
                                    Already have an account?
                                    <a href="" id="signup-link">login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		


<script>

//This is the function to load more tutorials or content when clicked on the View More Tutorials button
function Vasplus_Programming_Blog_Load_More_Contents()
{
	var last_loaded_id = $("#last_loaded_id").val();
	var dataString = "last_loaded_id="+ last_loaded_id;
	
	$.ajax({
		type: "POST",
		url: "vpb_load_more_contents.php",
		data: dataString, 
		cache: false,
		beforeSend: function() 
		{
			$("#more_contents_loading").html('<center><div align="center"><img src="images/loadings.gif" align="absabsmiddle" title="Loading more..." /></div></center>');
		},
		success: function(response) 
		{
			$("#more_tutorials_loaded").append($(response).fadeIn(2000));
			$("#more_contents_loading").html('View More Tutorials');
		}
	});
}
</script>


<script>
$(document).ready(function(){

$("#accept_cookies").click(function(){
    $("#accept_cookies_area").hide();
});

});
</script>
    
    <?php require 'footer.php';?>