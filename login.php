<?php require 'header.php';?>

<link rel="stylesheet" href="style.css">

<script src="jquery.min.js"></script>
<script src="signup_login_apps.js"></script>
<script>
$(document).ready(function()
{    // Calling Register Form
		$("#register-link").click(function() {
				$("#loginform").hide();
				$("#lost-password").hide();
				$("#signupform").show();
				$(".signup-header").text('Signup to TheMornStar!');
				return false;
		});		

		// Calling Register Form
		$("#signup-link").click(function() {
				$("#signupform").hide();
				$("#lost-password").hide();
				$("#loginform").show();
				$(".signup-header").text('Login to TheMornStar Account!');
				return false;
		});
		
				// Calling Lost Password
		$("#lostpassword-link").click(function() {
				$("#signupform").hide();
				$("#loginform").hide();
				$("#lost-password").show();
				$(".signup-header").text('Login to Lost Password!');
				return false;
		});
		
	
	
	
	
});

</script>
		
		

<div class="container">
						<!--Login start from here..-->
		<div class="signup-box">
			<br><br>
				<div class="signup-header">  
				  Login to TheMornStar Account! 
			   </div>
				<div style="padding: 10px 20px;">


					
					
					
					<div class="loginbox-v4__separator-container">
						<div class="loginbox-v4__separator"></div>
						<div class="loginbox-v4__separator-text">OR</div>
						<div class="loginbox-v4__separator"></div>
					</div>
					<form id="loginform" class="form-account" method="post">
						<input class="" style="" type="text" id="uemail" name="myemail" placeholder="Email" />
						<input  style=""type="password" id="upassword" name="mypassword" placeholder="Password" />
						<div>
							<br>
								<label for="checkbox"></label>
								<p style="text-align:left;">
									<input type="checkbox" id="chk1"> Remmember me 
									. <a href="" id="lostpassword-link" >Lost Password ?</a>
									</p>
									<button class="signup-button" onclick="users_login();return false;" >Login now!</button>
								</div>
								<span id="login_status"></span>
								<div class="loginbox-v4__separator"></div>
								<div class="loginbox-v4__footer"> 
						Don't have an account? 
									<a href="" id="register-link" >Register</a>
									
								</div>
					</form>
					<form  style="display:none;" id="signupform" class="form-account" method="post">
								<input type="text" id="username" name="myusername" placeholder="Username">
									
									<span id="status"></span>
									<input type="text" id="fullname" name="fullname" placeholder="Fullname">
									<input type="text" id="email" name="myemail" placeholder="Email">
										<br>
											<input type="password" id="password" name="mypassword" placeholder="Password">
												<div class="test">
													<input type="checkbox" class="term">I agree to 
														<a target="_blank" href="#">terms of service</a> and  
														<a target="_blank"  href="#">the privacy </a>
													</div>
													<br>
														<button class="signup-button"  onclick="users_registration();return false;" class="btn_hairline">Signup now!</button>
														<span id="signup_status"></span>
														<div class="loginbox-v4__separator"></div>
														<div class="loginbox-v4__footer"> 
						Already have an account? 
															<a href="" id="signup-link" >login</a>
														</div>
					</form>
					<form style="display:none;" id="lost-password" class="form-account" method="post">
						<input class="" style="" type="text" id="lostemail" name="lostemail" placeholder="Email" />
						<div>
                         <button class="signup-button" onclick="lostpassword();return false;" >Submit!</button>
						</div>
								<span id="login_status"></span>
								<div class="loginbox-v4__separator"></div>
								<div class="loginbox-v4__footer"> 
								Submit and check your Inbox mail !
								</div>
					</form>
				</div>
		</div>
		</div>
		

	

<?php require 'footer.php';?>