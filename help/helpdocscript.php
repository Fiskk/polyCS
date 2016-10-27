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
$steps[] = array("image" => "IMAGE", "text" => "TEXT");

?>

<h1>HEADER</h1>

<div id='content'>

<BR>
<p>FREE TEXT</p>

<BR>
<h3>SUBSECTION HEADER</h3>

<BR>
<?
for($i=1;$i<=count($steps)-1;$i++) {
	if( isset($steps[$i]['image']) ) echo "<BR>" . create_image_link($steps[$i]['image'],htmlentities($steps[$i]['text'],ENT_QUOTES));
	echo "<P>$i. {$steps[$i]['text']}</p>";
	echo "<BR>\n";
}

?>

<BR><BR><BR>

<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
