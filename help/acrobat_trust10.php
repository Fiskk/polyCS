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
$steps[]['text'] = "Be sure you are running Acrobat Reader X.  If not, <a href='http://get.adobe.com/reader/'>download it</a>.";
$steps[]['text'] = "Download the <a href='http://www.cs.sunyit.edu/network/files/ca-staff.crt'>Computer Science Dept. signing certificate</a> to your desktop. You may have to use right click to select Save As.";
$steps[] = array("image" => "trust1.jpg", "text" => "You will see this warning after clicking on a digital signature embedded in a PDF document if you do not follow these steps to establish trust.  This warning means we cannot be sure the person who signed a PDF is who they say they are.  Do not accept a signed PDF if you see this warning after clicking on a signature.");
$steps[] = array("image" => "trust2-X.JPG", "text" => "Open Acrobat Reader and click Edit / Protection / Manage Trusted Identities.");
$steps[] = array("image" => "trust3.jpg", "text" => "Click Add Contacts.");
$steps[] = array("image" => "trust4.jpg", "text" => "Click Browse.");
$steps[] = array("image" => "trust5.jpg", "text" => "Select the ca-staff.crt file you just downloaded.");
$steps[] = array("image" => "trust11.jpg", "text" => "Click on Computer Science Dept. CA in the top box, select Computer Science Dept. in the bottom box, then click Details.");
$steps[] = array("image" => "trust10.jpg", "text" => "Ensure the value of SHA1 digest matches the value displayed in this image (click to enlarge).");
$steps[] = array("image" => "trust6.jpg", "text" => "Click Trust.");
$steps[] = array("image" => "trust7.jpg", "text" => "Check the two boxes shown, click ok.");
$steps[] = array("image" => "trust8.jpg", "text" => "Click Import.");
$steps[] = array("image" => "trust9.jpg", "text" => "Trust has been established.  Now when clicking on a digital signature, it will show as valid.");
$steps[] = array("image" => "cert12.jpg", "text" => "When trust is established Acrobat will report all signatures as valid.  Do not accept a timesheet with invalid signatures.");
$steps[]['text'] = "The ca-staff.crt file you downloaded can be deleted after all above steps have been completed.";

?>

<h1>Network Information</h1>

<div id='content'>
<a name=""></a>
<h3>Establishing Trust in Adobe Acrobat:</h3>

<BR>
<p>All Acrobat signing certificates are created and stamped by a trusted third party to show that they belong to the person named in the certificate.  Following the steps below will allow your system to recognize trusted certificates and identify certificates which may be forged.</p>

<BR>
<?
for($i=1;$i<=count($steps)-1;$i++) {
	if( isset($steps[$i]['image']) ) echo "<BR>" . create_image_link($steps[$i]['image'],htmlentities($steps[$i]['text'],ENT_QUOTES));
	echo "<P>$i. {$steps[$i]['text']}</p>";
	echo "<BR>\n";
}

?>
<BR>

<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
