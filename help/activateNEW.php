<!--  include("{$_SERVER['DOCUMENT_ROOT']}/header.php");  -->
<? include("../header.php"); ?>
<? require_once("../php-bin/dog-lib.php") ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>SUNYIT Computer Science Department (DogNET)</title>
<?
	if( is_array($website_addons) && in_array("greybox",$website_addons) ) {
		echo "<script type='text/javascript' src='/inc/greybox/AJS.js'></script>\n";
		echo "<script type='text/javascript' src='/inc/greybox/AJS_fx.js'></script>\n";
		echo "<script type='text/javascript' src='/inc/greybox/gb_scripts.js'></script>\n";
		echo "<link href='/inc/greybox/gb_styles.css' rel='stylesheet' type='text/css' />\n";
	}
	if( is_array($website_addons) && in_array("lightbox",$website_addons) ) {
		echo "<script type='text/javascript' src='/inc/lightbox/lightbox.js'></script>\n";
		echo "<link href='/inc/lightbox/lightbox.css' rel='stylesheet' type='text/css' />\n";
	}
	if( is_array($website_addons) && in_array("thickbox",$website_addons) ) {
		echo "<script type='text/javascript' src='/inc/thickbox/jquery.js'></script>\n";
		echo "<script type='text/javascript' src='/inc/thickbox/thickbox.js'></script>\n";
		echo "<link rel='stylesheet' href='/inc/thickbox/thickbox.css' type='text/css' media='screen' />\n";
	}
	if( is_array($website_addons) && in_array("form_focus",$website_addons) ) {
		$form_focus_field = isset($website_addons['form_focus_field']) ? $website_addons['form_focus_field'] : "username";
		echo "<SCRIPT LANGUAGE='JavaScript'>\n";
		echo "function setfocus() { document.focus.$form_focus_field.focus(); }\n";
		echo "</SCRIPT>\n";
		$on_load = "onload=setfocus()";
	}
?>
<link href='/style.css' rel='stylesheet' type='text/css' media='screen'>
<link href='/print.css' rel='stylesheet' type='text/css' media='print' >
</head>

<body>
<BR>
<center>
	<div id='page'>

		<div id='banner'>
			<a target="_blank" href="http://www.sunypoly.edu">
				<img style="margin-top:30px; margin-left:20px;" border=0 src="../img/sunypoly.png" id='logo' align=left>
			</a>
		</div>

		<div id='heading'>
			<span id='topnav'><a href='http://www.cs.sunyit.edu/#/help'>Help</a> | <a href='http://www.cs.sunyit.edu/#/classes'>Schedules</a> | <a href='http://www.cs.sunyit.edu/#/accounts'>Accounts</a> | <a href='http://accounts.cs.sunyit.edu/webmail/'>Webmail</a> </span>
		</div>

		<div id='nav'>
			<a href='/'>Home</a>
			<a href='http://www.cs.sunyit.edu/#/degrees'>Degree Programs</a>
			<a href='http://www.cs.sunyit.edu/#/faculty'>Faculty</a>
			<a href='http://www.cs.sunyit.edu/#/network'>Network</a>
			<a href='http://www.cs.sunyit.edu/#/labs'>Labs</a>
			<a href='http://www.cs.sunyit.edu/#/contact'>Contact</a>
		</div>

		<div id='main'>


<h1>Help: Activate your account</h1>

<div id='content'>
<h3>Account Activation Procedure</h3>
<p>Activated Computer Science accounts are required in order to log in to CS labs and services.  CS accounts
are available to anyone on campus, regardless of major.
</p>

<p>All new users must activate their Computer Science Department accounts
by connecting to <a href="https://accounts.cs.sunyit.edu/">https://accounts.cs.sunyit.edu/</a> and selecting Activate a Login Account.
After following these steps your account is typically available within 5 minutes.</p>

<h3>Passwords</h3>
<p>
Once activated, your CS and campus login accounts will be maintained separately.
A password change or reset to one will not result in a change to the other.
</p>

</div>

</body>
