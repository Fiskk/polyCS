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
$steps[] = array("image" => "remmina/remmina0.png", "text" => "The fastest way to connect is to use the quick-connect bar to RDP directly to a system with default settings.Make sure that the RDP protocol is selected, as the Multipoint server only has RDP services. Once you have your destination in, click Connect.");
$steps[] = array("image" => "remmina/remmina1.png", "text" => "The quick connect will open up the login system for RDP. Enter your username, password, and the domain that that user is a part of. On the CS Department, that domain is <font color='fuchsia'>cs.sunyit.edu</font>. If you are connecting to a home computer, leave the domain blank. The domain is used by the Active Directory service to locate the username and password.");  
$steps[] = array("image" => "remmina/remmina2.png", "text" => "If you would like to have access to your local hard drive on the remote machine, you will need to use the advanced options. When opening Remmina, instead of using the quick-connect system, you will have to use the <font color='red'>New</font> button to create a profile in Remmina.");
$steps[] = array("image" => "remmina/remmina3.png", "text" => "Sharing a folder is simple. At the bottom of the screen, enable the <font color='red'>Share Folder</font> checkbox. You may also want to consider changing the color depth to something higher than 8-bit if you want a nicer remote display. Finally, either click Connect, or, if you plan on using this profile again, click <font color='red'>Save</font>."); 
$steps[] = array("image" => "remmina/remmina4.png", "text" => "Now you should see your local computer's shared folder on the remote computer. You can freely transfer files between the two.");

?>

<h1>Connect to Windows Remote Desktop using Remmina</h1>

<div id='content'>

<BR>
<p>Remmina is a Linux GUI program used for connecting to various remote protocols, such as RDP, VNC, and SSH. Remmina can be installed from most distributions' package manager. It also requires a GTK+ 3 compatible GUI, like MATE, Gnome 3, or KDE. If your GUI is not compatible, Remmina will install the GUI extensions as well.</p> 

<h3>Debian-Based systems</h3>

<p>Remmina can be installed using apt, with the command <font color='fuchsia'>apt-get install remmina</font>.</p> 

<h3>Red Hat-Based systems</h3>
<p>Remmina can be installed using yum, with the command <font color='fuchsia'>yum install remmina</font>. Remmina may not be availible in the base CentOS 6 packages, so the use of the EPEL packages may be required. These can be installed by running <font color='fuchsia'>yum install epel-release</font></p>

<h3>From Source</h3>
<p>The FreeRDP Project maintains Remmina both on <a href="https://github.com/FreeRDP/Remmina">Github</a> and on <a href="http://www.remmina.org/wp/">Remmina's Official Website</a>. Follow the instructions there for building Remmina from source. Remember that a GTK+ 3 GUI is needed to run Remmina.</p>

<BR><BR>

<h2>Using Remmina</h2>

<?
for($i=1;$i<=count($steps)-1;$i++) {
	if( isset($steps[$i]['image']) ) echo "<BR>" . create_image_link($steps[$i]['image'],htmlentities($steps[$i]['text'],ENT_QUOTES));
	echo "<P>$i. {$steps[$i]['text']}</p>";
	echo "<BR>\n";
}

?>


</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
