<?php require 'header.php';?>
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
			//$("#reset_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/images/logo/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
               $("#status").html(response);
			   
			   //  document.getElementById("contactForm").reset();

			}
		});
	 
	
	
	}


}
</script>


    <div id="page_content">


            <div class="hrefarea">

            </div>

            <div id="information">

			</div>

			<section style="width:100%;background:#e3e3f3;margin-top: -14px;">

<div class="container">
  <article class="slide-text-article" style="margin-top: 80px;z-index:1;"> 
                           <div class="slide-text-article-heading">
                              CONTACT US!
                           </div>
                           <div class="slide-text-article-subheading"> Do you want to deliver big for your company? </div>
                           <div style="padding:10px 20px 10px 20px;font-family:ForoSans-ExtraLight;sans-sarif;">
                              <a href="#" class="btn_hairline">Let's Get Started!</a>
                           </div>
     </article>
</div>
						
</section>


			<div class="container">
	      <!--- GET IN TOUCH FORM START --->

		  <div style="background:#fbfbfb;padding: 20px 40px;margin: 20px 0px 20px;border: 0.2px solid rgba(0, 0, 128, 0.09);" class="simpleform">
		              <h1 style="font-weight: bold;font-size: 28px;font-family: 'ProximaNova-Regular' ,Open Sans;text-align: center;color:#3575D3;line-height:28px;padding:5px;">REQUEST A FREE QUOTE</h1>
					   <h3 style="font-size: 20px;font-family: 'ProximaNova-Regular' ,Open Sans;text-align: center;line-height:20px;padding:5px;">Tell us about Your Project details below, and we will contact you right away</h3>
		              
					  
					  <form method="post"   name="frmMain" id="contactForm" style="display:block;">
						  <div class="form_item">
							<label class="desc" id="title" for="First Name">FIRST NAME & LAST NAME <span class="red">*</span>: </label>
							<input id="fullname" type="text"  placeholder="First Name & Last Name">
						  </div>
						  
						  <div class="form_item">
							<label class="desc" id="title" for="Last Name"> EMAIL ADDRESS<span class="red">*</span>: </label>
							<input id="email_address" type="text"  placeholder="Email Address">
						  </div>
						  
						  <div class="form_item">
							<label class="desc" id="title" for="Last Name"> COMPANY NAME <span class="red">*</span>: </label>
							<input id="company_name" type="text" placeholder="Company Name">
						  </div>
						  
						  
				

						  
						 <div class="form_item">
							<label class="desc" id="title" for="Last Name"> SKYPE/WHAT'S APP NO. <span class="red">*</span>: </label>
							<input id="skype_id" type="text"  placeholder="Skype/What's app number." >
						  </div>
						  
						  						  
						  
						  
						  <div class="form_item">
							<label class="desc" id="title" for="Last Name"> I NEED HELP WITH <span class="red">*</span>: </label>
								<select id="help_title"  class="form-control">
									<optgroup label="SELECT SERVICE NAME">
									            <option value="local-business-promotional-video">Local Business Promotional Video (Spoken Person /2D )</option>
												<option value="ranking-local-business-promotional-video">Ranking Local Business Promotional Video on YT and Google First Page </option>
												<option value="social-marketing">Social Marketing : Facebook Marketing </option>
												<option value="seo">SEO </option>
												<option value="content-writing-translate">Content Writing / Translate [in English and Bangla ]</option>
												<option value="custom-web-design">Custom Web Design</option>
												<option value="psd-2-html">PSD 2 HTML</option>
												<option value="web-application-using-php">Web Application using PHP</option>
												<option value="ecommerce-web-development">eCommerce Web development </option>
												<option value="news-bloq-site-development">News / Blog Site Development </option>
												<option value="landing-page">Landing Page </option>
												<option value="upcoming-website-timer-page">UpComing Website timer page</option>
												<option value="social-integration">Social Integration </option>
												<option value="apache-rewrite-rules">Apache Rewrite Rules </option>
												<option value="speed-up-website">Speed Up Website </option>
												<option value="bugs-fixing-of-website">Bugs Fixing of Website</option>
												<option value="website-re-development-of-frontend-or-backend">Website  Re-development of  frontEnd or BackEnd </option>
												<option value="logo-design">Logo Design</option>
												<option value="graphics-design">Graphics Design</option>
									</optgroup>
							  </select>
						  </div>
						  <div class="form_item">
							<label class="desc" id="title" for="Last Name"> HOW DID YOU FIND US ? <span class="red">*</span>: </label>
								<select id="find_us" class="form-control">
									<optgroup label="SELECT A SOURCE">
									            <option value="Google">Google</option>
												<option value="Youtube">Youtube</option>
												<option value="Facebook">Facebook</option>
												<option value="People-and-Friend">People and Friend</option>
												<option value="Company">From a Company </option>
												<option value="Parents">Parents </option>
									</optgroup>
							  </select>
						  </div>
						  
				 <div class="form_item">
                    <label class="desc" id="title1" for="Field1">BUDGET RANG: <span style="color:#4da64d;"> [<output  id="range_weight_disp">1000</output> &nbsp;USD] </span></label>
                    <div style="float:left;">
                        <div style="display: flex;
                            flex-grow: 2; padding: 12px 0px 12px 0px;
                            justify-content: flex-start;
                            align-items: center;
                            flex-direction: row;">
                            <input name="budget" class="rslider" style="float:left;-webkit-appearance: none;width:93%;height:3px;background: #000000;outline: none;opacity: 0.7;-webkit-transition: .2s;transition: opacity .2s;" type="range" id="range_weight" step="100" min="100" max="10000" value="1000" oninput="range_weight_disp.value = range_weight.value">
                            
                        </div>
                    </div>
                </div>
				
                <div class="form_item">
                    <label class="desc" id="title2" for="Field1">TIMELINE:<span style="color:#4da64d;">[  <output  id="range_weights_disp">90</output> &nbsp;Days] </span> </label>
                    <div style="float:left;">
                        <div style="display: flex;
                            flex-grow: 2;padding: 12px 0px 12px 0px;
                            justify-content: flex-start;
                            align-items: center;
                            flex-direction: row;">
                            <input name="timeline" class="rslider" style="-webkit-appearance: none;width:93%;height:3px;background: #000000;outline: none;opacity: 0.7;-webkit-transition: .2s;transition: opacity .2s;" type="range"  id="range_weights" step="1" min="1" max="365" value="90" oninput="range_weights_disp.value = range_weights.value">
                          
                        </div>
                    </div>
                </div>
										  <div style="width:100%;">
							<label class="desc" id="title" for="Last Name"> PLEASE DESCRIBE WHAT YOU'RE LOOKING FOR   <span class="red">*</span>: </label>

							<textarea id="contact_description" placeholder="What are you hoping to build? Briefly describe the solution and it's intended audience and impact."></textarea>
						  </div>
				

								<button class="btn_hairline" onclick="contactUs();return false;">Schedule a Consultation / Sent Query !</button><br><br>
<div id="status"></div>
</form>
		  </div>
		  
	
	   </div>

           <!--- GET IN TOUCH FORM End --->

	  
    


    </div>

    <div id="page_contentid">

    </div>



		
    <?php require 'footer.php';?>