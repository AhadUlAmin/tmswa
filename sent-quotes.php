 <?php require 'database_connection.php';?>
 <!Doctype html>
 <html>
 <head>
   <link rel="stylesheet" type="text/css" href="form.css">
 <script src="jquery.min.js"></script>
 </head>
 <body>


<div class="container">
    <div class="contact-us">
        <div class="simpleform">
		
		                <h1 style="text-align:center;padding:10px;" class="signup-header">Get in touch </h1>
						<div id="information"></div><div id="loading"></div>
						<div id="help"></div>
                <h4 style="text-align:center;padding:5px">Let's build something together! Or email me if you have any other questions. </h4>
				 <!--div class="a-divider a-divider-break"> 
                    <h5> <a href="" id="register-link" >Sent quotes</a> </h5> 
					<h5><a href="" id="signup-link" >Sent Message</a></h5> 
                </div-->
				
				


				
            <form method="post"  id="signupforme" name="frmMain" style="display:block;">

                <div>
                    <label class="desc" id="title1" for="Field1"> Full Name: </label>
                    <div>
                        <input id="fullname" type="text" name="fullname" maxlength="40" required>
                    </div>
                </div>
                <div>
                    <label class="desc" id="title1" for="Field1"> Email: </label>
                    <div>
                        <input id="email" type="text" name="email" maxlength="40" required>
                    </div>
                </div>
				
				
				

                <div>
                    <label class="desc" id="title1" for="Field1"> Company Name: </label>
                    <div>
                        <input id="company" type="text" name="company" maxlength="40" required>
                    </div>
                </div>
                <div>
                    <label class="desc" id="title1" for="Field1"> Subject: </label>
                    <div>
                        <input id="subject" type="text" name="subject" maxlength="40" required>
                    </div>
                </div>
                <div>
                    <label class="desc" id="title1" for="Field1"> Budget: </label>
                    <div style="float:left;">
                        <div style="display: flex;
                            flex-grow: 2; padding:5px 1px 5px 1px;
                            justify-content: flex-start;
                            align-items: center;
                            flex-direction: row;">
                            <input name="budget" class="slider" style="float:left;-webkit-appearance: none;width:75%;height: 1px;background: #000000;outline: none;opacity: 0.7;-webkit-transition: .2s;transition: opacity .2s;" type="range" id="range_weight" step="100" min="100" max="10000" value="1000" oninput="range_weight_disp.value = range_weight.value">
                            <output  id="range_weight_disp">1000</output> &nbsp;USD
                        </div>
                    </div>
                </div>
                <div>
                    <label class="desc" id="title1" for="Field1">Timeline: </label>
                    <div style="float:left;">
                        <div style="display: flex;
                            flex-grow: 2;padding:5px 1px 5px 1px;
                            justify-content: flex-start;
                            align-items: center;
                            flex-direction: row;">
                            <input name="timeline" class="slider" style="-webkit-appearance: none;width:75%;height: 1px;background: #000000;outline: none;opacity: 0.7;-webkit-transition: .2s;transition: opacity .2s;" type="range"  id="range_weights" step="1" min="1" max="365" value="90" oninput="range_weights_disp.value = range_weights.value">
                            <output  id="range_weights_disp">90</output> &nbsp;Days
                        </div>
                    </div>
                </div>
                <div>
                    <label class="desc" id="title3" for="Field3">
                    Type of Project :
                    </label>
                    <div>
                        <select id="reason" name="reason" class="form-control">
                            <optgroup label="type of project">
                                <option value="BkashPersonal">Web development</option>
                                <option value="Skrill">Web Designing</option>
                                <option value="Neteller">Bugs fixing</option>
                                <option value="Payoneer">htaccess</option>
                                <option value="PayPal">Others</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
				
	
				
                <div>
                    <label class="desc" id="title3" for="Field3">
                    Message:
                    </label>
                    <div>
                        <textarea name="message" id="message" style="height:85px!important;" type="text"> </textarea>
                    </div>
                </div>       

				<div>
                    <label class="desc" id="title3" for="Field3">
                    recaptcha:
                    </label>
                    <div>
                        <!--div class="g-recaptcha" data-sitekey="6Lfg9F0UAAAAAL0Xnfr382Wixe3LD7rCI-BYcbIE" data-callback="recaptcha_callback"></div-->
                    </div>
                </div>
				
                <div>
                    <div>       
                        <input type="submit" class="clr" id="send" onclick="sentmessage();return false;" name="send" value="Send"> 
                    </div>
                </div>


            </form>
			               
        </div>
    </div>
</div>


<script>


function sentmessage () 
{
	
//var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var fullname = $("#fullname").val();
	var email = $("#email").val();
	var company = $("#company").val();
	var subject = $("#subject").val();
	var budget = $("#range_weight").val();
	var timeline = $("#range_weights").val();
	var reason = $("#reason").val();
	var message = $("#message").val();
	var captcha = grecaptcha.getResponse();
/*    if(captcha == "")
	{
		$("#help").html('<div class="info">Call Recapcha </div>');
        $(".g-recaptcha").css("background-color", "yellow");
	}
	
	else */ 
	
	if(email == "")
	{
		$("#help").html('<div class="info"> enter your email </div>');
		$("#email").focus();
	}	
	
	else if(fullname == "")
	{
		$("#help").html('<div class="info"> enter your email </div>');
		$("#fullname").focus();
	}	
	else if(company == "")
	{
		$("#help").html('<div class="info"> enter your email </div>');
		$("#company").focus();
	}	
	else if(subject == "")
	{
		$("#help").html('<div class="info"> enter your email </div>');
		$("#subject").focus();
	}

	else if(message == "")
	{
		$("#help").html('<div class="info">Please Sellect Diffrent Type of  Sending Account And Receiving  Account</div>');
		$("#message").focus();
	}
	else
	{
		var dataString = 'fullname='+ fullname + '&email=' + email + '&company=' + company + '&subject=' + subject +'&budget=' + budget + '&timeline=' + timeline + '&reason=' + reason + '&message=' + message + '&captcha=' + captcha +'&page=sentmessage';

		$.ajax({
			type: "POST",
			url: "sentmessage.php",
			data: dataString,
			cache: false,
			beforeSend: function()  
			{
				$("#loading").html('<br clear="all"><div align="left"> <img src="assets/loads.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
				$("#loading").fadeOut(1000);
				 $("#information").fadeIn(1000).html(response);
				 //$("#completeform").fadeOut(1000); 

			}
		});
	}
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<script>

$(document).ready(function()
{    
        // Calling Register Form
		$("#register-link").click(function() {
				$("#signupforme2").hide();
				$("#signupforme").show();
				$(".signup-header").text('Send Quote!');
				return false;
		});		

		// Calling Register Form
		$("#signup-link").click(function() {
				$("#signupforme").hide();
				$("#signupforme2").show();
				$(".signup-header").text('Send Message!');
				return false;
		});  
	
});
</script> 

<script>
function recaptcha_callback(){
	var send = document.querySelector('#send')
	send.removeAttribute('disabled');
}
</script>
</body>
</html>

