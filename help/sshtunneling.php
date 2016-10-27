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
$steps[]['text'] = "This tutorial is for tunneling using the SSH Secure Shell Client for Windows. The client can be found <a href='http://web.cs.sunyit.edu/network/downloads/#S'>here</a>.";
$steps[] = array("image" => "sshtunnel1.png", "text" => "Once you have SSH Secure Shell Client installed, you want to open the client. The desktop icon looks like the above image.");
$steps[] = array("image" => "sshtunnel2.png", "text" => "Once you have the client open, click Edit/Settings");
$steps[] = array("image" => "sshtunnel3.png", "text" => "The Settings window will pop up. From here you want to click on Tunneling found under Profile Settings. In the Tunneling options, click Add.");
$steps[] = array("image" => "sshtunnel4.png", "text" => "Another window will pop up. Here you enter the required information. For Listening Port, enter what local port you wish to have your home pc listen from. This can be just about any number, here we are using 4000 in the example. Next enter the Destination Host, which is the office pc you want to connect to. Be sure you replace officepc with the name of the machine you want to connect to. After that, you enter the Destination Port. The port you want to enter is 3389."); 
$steps[] = array("image" => "sshtunnel7.png", "text" => "In the settings window, click on Connections and make sure that you are connecting through Fang. Also, don't forget to enter your cs username in the username space. Once you check this, you can click OK to save the settings.");
$steps[] = array("image" => "sshtunnel5.png", "text" => "Next click on Start/Run. Then type mstsc in the text box to start the Remote Desktop Connection client.");
$steps[] = array("image" => "sshtunnel6.png", "text" => "Type localhost:4000 into the text box and click Connect. This will tunnel the connection through SSH to your pc.");

?>

<h1>SSH Help: Tunneling</h1>

<div id='content'>
<a name=""></a>
<h3>Tunneling Through SSH Secure Shell Client on Windows:</h3>

<BR>
<p>SSH can be used to forward traffic to an intermediate machine and 
send it to a remote machine. Let's say you have an office pc you wish to access from home. You would use SSH to send traffic from a designated port on your home pc to a specific port on the pc you wish to remotely access. Fang is our machine in DogNET that is open to the world, so to connect to any other machine, you must use Fang as your intermediate machine. What the tunnel does is set up your local machine to forward data from it's designated listening port through Fang which then sends the data to the designated machine you want to connect to.</p>

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
