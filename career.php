<?php require 'header.php';?>

<?php 
function career_uniqueidf() {
    $len = 16;
    $base='_-ABCDEFGHKLMNOPQRSTWXYZabcdefghjkmnpqrstwxyz';
    $max=strlen($base)-1;
    $activatecode='';
    mt_srand((double)microtime()*10000);
    while (strlen($activatecode)<$len+1)
    return $activatecode;
}
$career_uniqueid =  career_uniqueidf();
?>


<script>
/* Script written by Adam Khoury @ DevelopPHP.com */
/* Modified by Philip Graf */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
/* Edit Thread: https://teamtreehouse.com/forum/i-want-to-upload-video-file-with-progress-bar*/



function _(el){
    return document.getElementById(el);
}
function uploadFile(){
    var file = _("file1").files[0];
		var appid = _("appid").value;
	
    if(typeof file === "undefined") {

    _("status").innerHTML = "ERROR: Please browse for a file before clicking the upload button";
    _("progressBar").value = 0;

    } else {
        $.get('upload.php?getsize', function(sizelimit) {
            if(sizelimit > file.size) {

                var formdata = new FormData();
                formdata.append("file1", file);
			
                formdata.append("size", file.size);
                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                ajax.open("POST", "upload.php?appid="+appid); 
                ajax.send(formdata);
				document.getElementById("upload_form").reset();
				
            } else {
                var sizewarn = "ERROR: The File is too big! The maximum file size is ";
                sizewarn += sizelimit/(1024*1024);
                sizewarn += "MB";
                _("status").innerHTML = sizewarn;
                _("progressBar").value = 0;

            }
        });
    }
}
function progressHandler(event){
   // _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
    var percent = (event.loaded / event.total) * 100;
	_("progressBar").style.display = "block";
    _("progressBar").value = Math.round(percent);
    _("status").innerHTML = Math.round(percent)+"% uploaded [plese wait]";

}
function completeHandler(event){

    _("status").innerHTML = event.target.responseText;
	
    _("progressBar").value = 0;
	document.getElementById("submit_button").disabled = false;
}
function errorHandler(event){
    _("status").innerHTML = "Upload Failed";  
	
}
function abortHandler(event){
    _("status").innerHTML = "Upload Aborted"; 
}


</script>

<script>


function CareerSubmit(){

	var first_last = $("#first_last").val();
	var email_address = $("#email_address").val();
	var phone_number = $("#phone_number").val();
	var portfolio_link = $("#portfolio_link").val();
	var cover_latter = $("#cover_latter").val();
	var career_name ='<?php echo $_GET['career_name'];?>';
	var career_string ='<?php echo $_GET['team'];?>';
	var career_unique ='<?php echo $_GET['location'];?>';
	var career_uniqueid ='<?php echo $career_uniqueid;?>';
	
	//var abc = $('#radio_1').attr('checked','checked');

//alert(abc+first_last+email_address+phone_number+portfolio_link+cover_latter);

	if(first_last == "")
	{
		$("#cstatus").html('<div class="info"> Fullname is required</div>'); 
		$("#first_last").focus();
	}
	else if(email_address == ""){
	     $("#cstatus").html('<div class="info"> Email is required</div>'); 
		$("#email_address").focus();
	}

	else if(phone_number == ""){
	     $("#cstatus").html('<div class="info"> Comapay name is required</div>'); 
		$("#phone_number").focus();
	}

	else if(portfolio_link == ""){
	     $("#cstatus").html('<div class="info"> Skype Id is required</div>'); 
		$("#portfolio_link").focus();
	}	
	else{

	
	
	  var dataString = 'first_last='+first_last+ '&email_address='+email_address+'&career_uniqueid='+career_uniqueid+'&career_unique='+career_unique+'&career_string='+career_string+'&career_name='+career_name+ '&phone_number='+phone_number+ '&portfolio_link='+portfolio_link+ '&cover_latter='+cover_latter 
	  + '&page=careerSubmit';
	//var dataString = 'newpass='+ newpass + '&altname=' + altname +'&md5oldpass=' + md5oldpass  + '&page=reset_password';
		
		$.ajax({
			type: "POST",
			url: "career_app.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
			  document.getElementById("contactForm").reset();
				//$("#reset_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/images/logo/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
               $("#cstatus").html(response);
			   $("#status").html("");
			   

			}
		});
	 
	
	
	}


}

</script>
    
    <div id="page_content">
        <?php require 'layout/sliders.php';?>

            <div class="hrefarea">

            </div>

            <div id="information">

            </div>

    </div>

    <div id="page_contentid">

    </div>


<style>
.simpletable{
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;

}
.simpletable tr td a{
	text-decoration: none;
    color: #337990;
    font-weight: 700;
}


.simpletable th, .simpletable td {
    text-align: center;
    padding: 10px 5px 10px 5px;
}

.simpletable th:first-child, .simpletable td:first-child {
  text-align: left;

}
.simpletable tr:nth-child(even) {
    background: rgba(216, 212, 212, 0.43);
}

.fa-check {
  color: green;
}

.fa-remove {
  color: red;
}
</style>
	
	
		<section style="background:#ffffff;width:100%;margin-top:20px;">
				  <h1 style="text-align:center;font-weight: bold;font-size: 28px;font-family: 'ProximaNova-Regular' ,Open Sans;text-align: center;color:#888;line-height:28px;padding:5px;">WANT TO JOIN OUR TEAM?</h1><br>
		<div class="container">

			<table class="simpletable">
			  <tr>
				<th style="width:50%">Current openings</th>
				<th>Location</th>
				<th>Job Type</th>
			  </tr>
			  <tr>
				<td> <a href="?career_name=PHP-WEB-DEVELOPER&career_type=fulltime&team=ahHMqT&location=Dhaka,Bangladesh">PHP WEB DEVELOPER</a></td>
				<td>Dhaka , Bangladesh </td>
				<td>Fulltime</td>
			  </tr>	

			  <tr>
				<td> <a href="?career_name=DIGITAL-MARKETER">DIGITAL MARKETER</a></td>
				<td>Dhaka , Bangladesh </td>
				<td>Fulltime</td>
			  </tr>		

			  <tr>
				<td> <a href="?career_name=LOGO-AND-GRAPHICS-DESIGNER">LOGO AND GRAPHICS DESIGNER (UX,UI)</a></td>
				<td>Dhaka , Bangladesh </td>
				<td>Fulltime</td>
			  </tr>		

			  <tr>
				<td> <a href="?career_name=PROFESSIONAL-VIDEO-EDITOR"> PROFESSIONAL VIDEO EDITOR </a></td>
				<td>Dhaka , Bangladesh </td>
				<td>Fulltime</td>
			  </tr>
			  
			  <tr>
				<td> <a href="?career_name=SEO_EXPERTS">SEO EXPERTS</a></td>
				<td>Dhaka , Bangladesh </td>
				<td>Fulltime</td>
			  </tr>
			 			  
			  <tr>
				<td> <a href="?career_name=FRONTEND-DEVELOPER">FRONT END DEVELOPER </a></td>
				<td>Dhaka , Bangladesh </td>
				<td>Fulltime</td>
			  </tr>
			 			
			<tr>
				<td> <a href="?career_name=CONSULTANT">CONSULTANT </a></td>
				<td>Dhaka , Bangladesh </td>
				<td>Fulltime</td>
			  </tr>
			 
			</table>
					
					
					
		
		
		
		
		
		

		 
		 
		</div>
		</section>
		
		
		<section style="background:#f1f1f1;width:100%;">
		<div class="container">
	      <!--- GET IN TOUCH FORM START --->

		  <div style="background:#fbfbfb;padding: 20px 40px;margin: 20px 0px 20px;border: 0.2px solid rgba(0, 0, 128, 0.09);" class="simpleform">
		              <h1 style="font-weight: bold;font-size: 28px;font-family: 'ProximaNova-Regular' ,Open Sans;text-align: center;color:#3575D3;line-height:28px;padding:5px;">WANT TO JOIN OUR TEAM?</h1>
					   <h3 style="font-size: 20px;font-family: 'ProximaNova-Thin' ,Open Sans;text-align: center;line-height:20px;padding:5px;">Our team is made up of developers, designers, project managers, marketers, and strategists, but we all come to work for the culture of learning and to create great software for our clients. </h3>
		              <form method="post"   name="frmMain" id="contactForm" style="display:block;">
						  <div class="form_item">
							<label class="desc" id="title" for="First Name">FIRST NAME & LAST NAME<span class="red">*</span>: </label>
							<input id="first_last" type="text" name="first_last" placeholder="FIRST NAME & LAST NAME"  >
						  </div>
						  
						  <div class="form_item">
							<label class="desc" id="title" for="Last Name"> EMAIL ADDRESS<span class="red">*</span>: </label>
							<input id="email_address" type="text" name="email_address" placeholder="Email Address" >
						  </div>
						  
						  <div class="form_item">
							<label class="desc" id="title" for="Last Name"> PHONE NUMBER <span class="red">*</span>: </label>
							<input id="phone_number" type="text" name="phone_number" placeholder="Mobile Number" >
						  </div>
						  
						  <div class="form_item">
							<label class="desc" id="title" for="First Name"> PORTFOLIO SITE /LINKEDIN PROFILE <span class="red">*</span>: </label>
							<input id="portfolio_link" type="text" name="portfolio_link" placeholder="https://www.jhondoe.com/" maxlength="40" required>
						  </div>
						  <div class="form_item" style="clear:both;width:100%;font-family: 'ProximaNova-Regular' ,Open Sans;">
						  <label class="desc" id="title" for="First Name"> JOB TYPES <span class="red">*</span>: </label>
							  <div style="width:33%;"> <input  type="radio" id="radio_1" name="jobtype" value="full-time"> Full-time </div>
							  <div style="width:33%;"><input  type="radio" id="radio_1" name="jobtype" value="remote"> Remote </div>
							  <div style="width:33%;"><input  type="radio" id="radio_1" name="jobtype" value="intern"> Intern </div>
						 </div>

						<div style="width:100%;">
							<label class="desc" id="title" for="Last Name"> COVER LATTER  <span class="red">*</span>: </label>

							<textarea id="cover_latter" placeholder="What are you hoping to build? Briefly describe the solution and it's intended audience and impact."></textarea>
						  </div>
						  
				    <form class="form_item" id="upload_form" enctype="multipart/form-data" method="post">

						<label class="desc" id="title" for="First Name" style="font-weight:bold;">RESUME<span class="red">*</span>: </label><input type="file" name="file1" id="file1" onchange="uploadFile()"><br>
						<input type="hidden" name="appid" id="appid" value="<?php echo $career_uniqueid;?>">
						  <progress style="height: 25px;width: 98%;margin: 10px 0px 10px;float: left;display:none;" id="progressBar" value="0" max="100"></progress>
						  <span id="status"></span>
						  <p id="loaded_n_total"></p>
					</form>
						
				<br><br>
							<div class="form_item">
					
<h1 id="cstatus"></h1>
<button class="btn_hairline" id="submit_button" onclick="CareerSubmit();return false;" disabled>Schedule a Consultation / Sent Query !</button><br><br>

							</div>
                        <br>

</form>

		  </div>
		  
	
	   </div>
	   </section>
           <!--- GET IN TOUCH FORM START --->

	  
	  
	  
	  
	  

        <!--Try to make popup modal -->
        <div id="blackwall">
            <div id="modal">
                <button class="button-close" data-action="overlay-close">�</button>
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


    
    <?php require 'footer.php';?>