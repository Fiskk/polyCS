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
$steps[] = array("image" => "vdi1.png", "text" => "Click Start, Programs, Accessories, select Remote Desktop Connection");
$steps[] = array("image" => "vdi2-spss.png", "text" => "Connect to spss.cs.sunyit.edu.  To access files on your home PC, click on Options.  Otherwise, click on Connect and skip to step 6");
$steps[] = array("image" => "vdi3.png", "text" => "Go to the Local Resources tab and click More");
$steps[] = array("image" => "vdi4b.png", "text" => "Select which drives you would like to share from your home PC");
$steps[] = array("image" => "vdi6.png", "text" => "You will be presented with a login screen after clicking connect.  Enter your Computer Science username & password.  Be sure the Log on to box is set to cs.sunyit.edu.");
$steps[] = array("image" => "vdi5.png", "text" => "After you connect to the SPSS remotes, the shared drive will be visible in My Computer.");
$steps[] = array("image" => "vdi7-spss.png", "text" => "The SPSS software can be found in the programs menu");
$steps[] = array("image" => "vdi8.png", "text" => "Click Start/Log Off when you are finished with your session.  If you do not log off properly, noone else will be able to connect.");

?>

<h1>Help: Accessing the SPSS Software</h1>

<div id='content'>

<BR>
<P>Follow the steps below to connect to the SPSS desktops.  Click on an image for a larger view.</p>

<BR>
<?
for($i=1;$i<=count($steps)-1;$i++) {
	if( isset($steps[$i]['image']) ) echo "<BR>" . create_image_link($steps[$i]['image'],htmlentities($steps[$i]['text'],ENT_QUOTES));
	echo "<P>$i. {$steps[$i]['text']}</p>";
	echo "<BR>\n";
}

?>

<BR><font size="+1"><B>Note:</B></font> &nbsp;&nbsp;Be sure to save your work often!  Your session will be lost if the network connection is interrupted.
<BR><BR><BR>

<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
