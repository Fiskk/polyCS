<?
$website_addons = array("lightbox");
include("../header.php");

function create_image_link($image,$text) {

	if( isset($image) AND file_exists("pix/$image") ) {
		$image_info = getimagesize("pix/$image");
		$height = ($image_info[1] < 300) ? $image_info[1] : 300;
		return "<a href='pix/$image' rel='lightbox' title='$text'><img border=0 src='pix/$image' height=$height></a>\n";
	}
}

$steps[0] = null;
$steps[]['text'] = "<a href='http://www.cs.sunyit.edu/network/downloads/printers/'>Download</a> and install scanner drivers for C128 copier.";
$steps[] = array("image" => "im6scan.jpg", "text" => "Click Start, Go to programs, then go to publishing, then Network ScanGear and click ScanGear Tool,");
$steps[] = array("image" => "im7scan.jpg", "text" => "Configure the ScanGear Tool with the copy machine's IP address (149.15.100.202) and test the connection.");
$steps[] = array("image" => "im1scan.jpg", "text" => "Go to the copier machine and enable the scanning function. Touch scan.");
$steps[] = array("image" => "im2scan.jpg", "text" => "Once at the scan screen touch online.");
$steps[] = array("image" => "im9scan.jpg", "text" => "Open Adobe Acrobat Professional");
$steps[] = array("image" => "im10scan.jpg", "text" => "In Adobe Acrobat Professional Click File, Create PDF, From Scanner.");
$steps[] = array("image" => "im11scan.jpg", "text" => "Make sure Network ScanGear Ver.2.21 is chosen then click Scan.");
$steps[] = array("image" => "im12scan.jpg", "text" => "Name your .pdf file and save.");
$steps[] = array("image" => "im13scan.jpg", "text" => "If you're done then click Cancel.");
$steps[] = array("image" => "im14scan.jpg", "text" => "Choose Scanning complete if you're done then Click Ok.");
$steps[] = array("image" => "im3scan.jpg", "text" => "Go back to the copying machine in C128. Touch offline then touch copy to reset it for the next user.");

?>

<h1>Help: Multipage Scanner</h1>

<div id='content'>

<BR>
<P>Follow these steps to scan a large packet of documents from the C128 copier directly to PDF.</P>

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
