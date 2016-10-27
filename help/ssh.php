<?
$website_addons = array("lightbox");
include("../header.php");

function create_image_link($image,$text) {

	if( isset($image) AND file_exists("pix/putty/$image") ) {
		$image_info = getimagesize("pix/putty/$image");
		$height = ($image_info[1] < 300) ? $image_info[1] : 300;
		return "<a href='pix/putty/$image' rel='lightbox' title='$text'><img border=0 src='pix/putty/$image' height=$height></a>\n";
	}
}

$steps[0] = null;
$steps[] = array("image" => "putty1s.png", "text" => "Opening PuTTY will launch you directly into the SSH connection page.");
$steps[] = array("image" => "putty2s.png", "text" => "Enter the name of the remote machine that you wish to connect to. Make sure that the 'SSH' protocol is selected. You can either only put in the hosname, or you can use the format 'username@hostname' to explicitly define a username. Also, if you wish to save the connection, you can now name the session in the 'Saved Sessions' area and click save.");
$steps[] = array("image" => "putty3s.png", "text" => "If it is your first time accessing the server, then you may be greeted by this error message. This is normal, as the keys used for securing the SSH session haven't been exchanged yet. Click yes to continue the connection.");
$steps[] = array("image" => "putty4s.png", "text" => "If you didn't enter a username in step 2, then enter it now.");
$steps[] = array("image" => "putty5s.png", "text" => "You will now pe prompted for your password. When you are typing your password, the line will remain blank, but your password is being recorded.");
$steps[] = array("image" => "putty6s.png", "text" => "You will now be placed on the terminal of the remote machine.");
$steps[] = array("image" => "putty7s.png", "text" => "PuTTY contains many customizable options and features. The full selection can be seen on the PuTTY Webpage, or in the PuTTY Manual. These control everything from color, text, and window size to specifics for tunneling through SSH sessions, which is covered in another help doc.");

?>

<h1>Help: Connect with SSH using PuTTY</h1>

<div id='content'>

<BR>
<p>Follow the steps below to connect to remote machines through PuTTY using the SSH Protocol. By default, most Unix and Linux distributions have their SSH Servers enables, allowing for remote terminal access. This is not limited to Unix and Linux though, as PuTTY can also be used to connect to any device with an SSH Session, such as Cisco or third-party Windows SSH servers. PuTTY is a free implementation of Telnet and SSH for Windows and Unix platforms, along with an xterm terminal emulator.</p>

<p>PuTTY's official webpage can be found <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html">here</a>.</p>
<BR>

<?
for($i=1;$i<=count($steps)-1;$i++) {
	if( isset($steps[$i]['image']) ) echo "<BR>" . create_image_link($steps[$i]['image'],htmlentities($steps[$i]['text'],ENT_QUOTES));
	echo "<P>$i. {$steps[$i]['text']}</p>";
	echo "<BR>\n";
}

?>

<BR><BR><BR>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
