<?
$website_addons = array("lightbox");
include("{$_SERVER['DOCUMENT_ROOT']}/header.php");

function create_image_link($image,$text) {

	if( isset($image) AND file_exists("../pix/$image") ) {
		$image_info = getimagesize("../pix/$image");
		$height = ($image_info[1] < 300) ? $image_info[1] : 300;
		return "<a href='../pix/$image' rel='lightbox' title='$text'><img border=0 src='../pix/$image' height=$height></a>\n";
	}
}

$steps[0] = null;
$steps[] = array("image" => "macrdp/macrdp1.png", "text" => "Open the Microsoft Remote Desktop app and click <font color='red'>New</font>");
$steps[] = array("image" => "macrdp/macrdp2.png", "text" => "Enter the credentials for the server you are connecting to. Fill in the fields and credentials as necessary. You may also want to change the <font color='blue'>Colors</font> to something higher if you want a nice-looking display.");
$steps[] = array("image" => "macrdp/macrdp3.png", "text" => "To redirect folders to the remote machine, change to the <font color='blue'>Redirection</font> tab and click the plus sign in the lower left corner. Add the folders you want to connect and return to the main menu.");
$steps[] = array("image" => "macrdp/macrdp4.png", "text" => "Now double click on the connection and the connection to the server will start.");

?>

<h1>Connect to Windows Remote Desktop on OSX</h1>

<div id='content'>

<BR>
<p>Starting with <font color='blue'>OSX Snow Leopard</font>, the <a href="https://itunes.apple.com/us/app/microsoft-remote-desktop/id715768417">Microsoft Remote Desktop</a> app is available in the Mac App Store. This app can be found in modified form for iOS devices as well. Most of the same steps apply there as well.</p>

<BR>

<h2>Using the App</h2>
<?
for($i=1;$i<=count($steps)-1;$i++) {
	if( isset($steps[$i]['image']) ) echo "<BR>" . create_image_link($steps[$i]['image'],htmlentities($steps[$i]['text'],ENT_QUOTES));
	echo "<P>$i. {$steps[$i]['text']}</p>";
	echo "<BR>\n";
}

?>


</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
