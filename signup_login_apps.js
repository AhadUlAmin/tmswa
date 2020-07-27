$(document).ready(function()
{    
	$("#username").keyup(function()
	{		
		var username = $("#username").val();	
		var ucheck = /^([A-Za-z0-9_\-\.]+)$/;
		if (!username.match(ucheck) ){   
		 $("#status").html('<i>Sorry Alpha Numaric Charecter </i>');
	   }
		else if(username.length > 3)
		{
			$("#status").html('checking...');
			$.ajax({
				type : 'POST',
				url  : 'check.php',
				data : "username="+ username,
				success : function(data)
						  {
					         $("#status").html(data);
					      }
				});
				return false;
			
		}
		else
		{
			$("#status").html('');
		}
	});
	
});





function lostpassword() {
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var lostemail = $("#lostemail").val();
		if(lostemail == "")
	{
		$("#lost_status").html('<div class="info">Please enter your firstname in the required field to proceed.</div>');
		$("#lostemail").focus();
	}
	else if(reg.test(lostemail) == false)
	{
		$("#lost_status").html('<div class="info">Please enter a valid email address to proceed.</div>');
		$("#lostemail").focus();
	}
	else
	{
		var dataString = 'lostemail='+ lostemail + '&page=lostemail';
		$.ajax({
			type: "POST",
			url: "save_user_details.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#lost_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/images/logo/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
               $("#lost_status").html(response);

			}
		});
	}
	

}


function users_registration() 
{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var email = $("#email").val();
	var username = $("#username").val();
	var fullname = $("#fullname").val();
	var password = $("#password").val();
	var confirmpassword = $("#confirmpassword").val();
	if(email == "")
	{
		$("#signup_status").html('<div class="info">Please enter your firstname in the required field to proceed.</div>');
		$("#email").focus();
	}
	else if(username == "")
	{
		$("#signup_status").html('<div class="info">Please enter your lastname to proceed.</div>');
		$("#username").focus();
	}
	else if(password == "")
	{
		$("#signup_status").html('<div class="info">Please enter your email address to proceed.</div>');
		$("#password").focus();
	}
	else if(reg.test(email) == false)
	{
		$("#signup_status").html('<div class="info">Please enter a valid email address to proceed.</div>');
		$("#email").focus();
	}
 	else if(fullname == "")
	{
		$("#fullname").html('<div class="info">Please</div>');
		$("#fullname").focus();
	} 
	else
	{
		var dataString = 'email='+ email + '&username=' + username +'&fullname=' + fullname + '&password=' + password + '&page=users_registration';
		$.ajax({
			type: "POST",
			url: "save_user_details.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#signup_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/images/logo/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
				var response_brought = response.indexOf('confirm=yes');
				if (response_brought != -1) 
				{
					$("#signup_status").html('');
					window.location.replace(response);
				}
				else
				{
					$("#signup_status").fadeIn(1000).html(response);
				}
			}
		});
	}
}

function users_login() 
{
	var email = $("#uemail").val();
	var password = $("#upassword").val();
	
	if(email == "")
	{
		$("#login_status").html('<div class="info">Please enter your account email address to proceed.</div>');
		$("#uemail").focus();
	}
	else if(password == "")
	{
		$("#login_status").html('<div class="info">Please enter your account password to go.</div>');
		$("#upassword").focus();
	}
	else
	{
		var dataString = 'email=' + email + '&password=' + password + '&page=users_login';
		$.ajax({
			type: "POST",
			url: "save_user_details.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#login_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/images/logo/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
				var response_brought = response.indexOf('login=yes');
				if (response_brought != -1) 
				{
					$("#login_status").html('');
					window.location.replace(response);
				}
				else
				{
					$("#login_status").fadeIn(1000).html(response);
				}
			}
		});
	}
}