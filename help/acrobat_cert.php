<? 
$website_addons = array("greybox");
include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); 

function create_image_link($file) {
	$image_info = getimagesize("pix/$file");
	$img_w = $image_info[0] + 25;
	$img_h = $image_info[1] + 25;
	echo "<a href='pix/$file' onclick='return GB_showCenter(\"Adobe Acrobat: Adding your certificate\", this.href, $img_h, $img_w )'>";
	$height = ($image_info[1] < 300) ? $image_info[1] : 300;
	echo "<img border=0 src='pix/$file' height=$height></a>\n";
}
$step = 1;
?>

<h1>Network Information</h1>

<div id='content'>
<a name=""></a>
<h3>Adding your signing certificate to Adobe Acrobat:</h3>

<BR>
<p>A signing certificate is used to identify yourself electronically.  The certificate is locked with a password that only you know.  When applied to a document it will show that you approve of its contents much like a ink-based signature would.  The mathematical properties of digital signatures can also ensure a document has not been tampered with once signed.</p>


<BR>
<P><?= $step++ ?>. Be sure you are running the most recent version of Acrobat Reader.  If not, <a TARGET="_BLANK" href="http://get.adobe.com/reader/">download it</a>.</p>
<BR>

<P><?= $step++ ?>. Obtain an <a href="http://accounts.cs.sunyit.edu/createcert.php">Adobe Acrobat signing certificate</a>.  Save it to a permanent location on your hard drive.</p>
<BR>

<BR>
<? create_image_link("cert1v10.jpg"); ?>
<P><?= $step++ ?>. Open Acrobat and click Document / Security Settings.</p>
<BR>

<BR>
<? create_image_link("cert2.jpg"); ?>
<P><?= $step++ ?>. Click Add ID.</p>
<BR>

<BR>
<? create_image_link("cert3.jpg"); ?>
<P><?= $step++ ?>.  Import your existing ID from a file.</p>
<BR>

<BR>
<? create_image_link("cert4.jpg"); ?>
<P><?= $step++ ?>. Browse to the location where you stored your .pfx certificate file and select it.</p>
<BR>

<BR>
<? create_image_link("cert5.jpg"); ?>
<P><?= $step++ ?>. Enter your passphrase and click Next.</P>
<BR>

<BR>
<? create_image_link("cert6.jpg"); ?>
<P><?= $step++ ?>. Click Finish.</P>
<BR>

<BR>
<? create_image_link("cert7.jpg"); ?>
<P><?= $step++ ?>. You should see your certificate in the top windows.  You can now close this window.</P>
<BR>

<BR>
<? create_image_link("cert8.jpg"); ?>
<P><?= $step++ ?>. Click on a signature field in your PDF file.</P>
<BR>

<BR>
<? create_image_link("cert9.jpg"); ?>
<P><?= $step++ ?>. A window will pop up to prompt you to select a signing key and enter your passphrase.</P>
<BR>

<BR>
<? create_image_link("cert10.jpg"); ?>
<P><?= $step++ ?>. You must now save your signed PDF document.</P>
<BR>

<BR>
<? create_image_link("cert11.jpg"); ?>
<P><?= $step++ ?>. If you see the warning in the blue box above, you must follow the steps to <a href="acrobat_trust.php">establish trust</a>.</P>
<BR>

<BR>
<? create_image_link("cert12.jpg"); ?>
<P><?= $step++ ?>. If you see the notification in the blue box above, all is well and you are done.</p>
<BR>



<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
