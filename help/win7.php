<?
$website_addons = array("lightbox");
include("{$_SERVER['DOCUMENT_ROOT']}/header.php");

function create_image_link($image,$text) {

	if( isset($image) AND file_exists("pix/$image") ) {
		$image_info = getimagesize("pix/$image");
		$height = ($image_info[1] < 300) ? $image_info[1] : 300;
		return "<a href='pix/$image' rel='lightbox' title='$text'><img border=0 src='pix/$image' height=$height></a>\n";
	}
}

$steps[0] = null;
$steps[] = array("image" => "win7rdp/win7-1.png", "text" => "Open the start menu, and find Remote Desktop Connection. In Windows 7, it is under Programs > Accessories > Remote Desktop Connection.");
$steps[] = array("image" => "win7rdp/win7-2.png", "text" => "In the 'Computer' field, enter 'win7.cs.sunyit.edu'. If you want to attach a local drive, continue to the next step without connecting, otherwise click connect and skip to step 5.");
$steps[] = array("image" => "win7rdp/win7-3.png", "text" => "To connect a local drive, click 'Show Options' on the 'Remote Desktop Connection' window, then navigate to the 'Local Resources' tab. Under the 'Local devices and resources' section, click 'More'.");
$steps[] = array("image" => "win7rdp/win7-4.png", "text" => "Select all drives that you want availible to the remote machine and click 'OK', then connect on the main Window. The drives you selected will be accessible when you log into the machine.");
$steps[] = array("image" => "win7rdp/win7-5.png", "text" => "To log into the Windows 7 machine on the CS Department network, use your CS Department login. If you are having trouble logging in, make sure your account is activated on the CS networking.");
$steps[] = array("image" => "win7rdp/win7-6.png", "text" => "If it is your first time logging in to the server, you will see an error message very similar to the one above. This is normal. Select the 'Don't ask me again' option, then click 'Yes'.");
$steps[] = array("image" => "win7rdp/win7-7.png", "text" => "In 'Computer', you will see the drives that you connected to the remote machine, and you will be able to use them just like you would on your own computer.");  
$steps[] = array("image" => "win7rdp/win7-8.png", "text" => "To leave the session, there are two different options. Closing the window or clicking Disconnect will leave your session active for a limited amount of time, allowing you to swap between computers if you need to, while leaving the remote programs running. Log Out will close all your running programs and close the connection. If you experience a netowork error and are disconnected, then the remote machine will see that as a disconnect and leave everything running until you can log back in.");

?>

<h1>Connect to Windows Remote Desktop</h1>

<div id='content'>

<BR>
<p>The CS Department hosts a Windows Multipoint Server which contains all the tools availible on the Windows workstations, but is accessible remotely. This will explain how to access the server.</p>

<BR>

<h2>Connect from Windows</h2>
<?
for($i=1;$i<=count($steps)-1;$i++) {
	if( isset($steps[$i]['image']) ) echo "<BR>" . create_image_link($steps[$i]['image'],htmlentities($steps[$i]['text'],ENT_QUOTES));
	echo "<P>$i. {$steps[$i]['text']}</p>";
	echo "<BR>\n";
}

?>


</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
