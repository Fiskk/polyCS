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
$steps[] = array("image" => "vpn1.JPG", "text" => 'Before beginning you must have an activated CS Department account, to do so follow the steps <a href="http://accounts.cs.sunyit.edu/activate.php"> here</a>.');
$steps[] = array("image" => "vpn2.JPG", "text" => 'Next download the necessary files from <a href="http://www.cs.sunyit.edu/network/files/CS-vpn-netlab.zip">here</a> and save it to an easily accessible location. (Desktop would be the best idea)');
$steps[] = array("image" => "vpn3.JPG", "text" => 'Unzip the downloaded zip folder.');
$steps[] = array("image" => "vpn4.JPG", "text" => 'Double-click the openvpn-client.msi to begin the installer. Click Next to continue.');
$steps[] = array("image" => "vpn5.JPG", "text" => 'Check the box that you accept the License Agreement, and again, click Next.');
$steps[] = array("image" => "vpn6.JPG", "text" => 'If you have a desired location of where to install OpenVPN choose it now. Otherwise, keep it as default and click Next.');
$steps[] = array("image" => "vpn7.JPG", "text" => 'Now click Install. If a box pops up asking if you are sure you want to install OpenVPN, click Yes.');
$steps[] = array("image" => "vpn8.JPG", "text" => 'If this Windows Security box pops up, check the box to always trust software from OpenVPN and click Install');
$steps[] = array("image" => "vpn9.JPG", "text" => 'Congratulations, OpenVPN is now installed! Check the Lauch OpenVPN box and click Finish.');
$steps[] = array("image" => "vpn10.JPG", "text" => 'Once OpenVPN is open, click the plus sign next to Connection Profiles.');
$steps[] = array("image" => "vpn11.JPG", "text" => 'Select Local File and click Import.');
$steps[] = array("image" => "vpn12.JPG", "text" => 'Navigate to the files extracted in Step 2, choose vpn-netlab.ovpn and click Open.');
$steps[] = array("image" => "vpn13.JPG", "text" => 'The Edit Profile box will open. Select the Save option.');
$steps[] = array("image" => "vpn14.JPG", "text" => 'Once your options have saved, the main OpenVPN page will be seen again. Click the vpn-netlab box under the Connection Profiles bar.');
$steps[] = array("image" => "vpn15.JPG", "text" => 'Enter your CS Department credentials, and click Login.');
$steps[] = array("image" => "vpn16.JPG", "text" => 'If you have successfully connected to the VPN, you will see a window displaying your Server IP, Client IP, Traffic data, and Connection time.');


?>

<h1>Connect to Netlab OpenVPN Server</h1>

<div id='content'>

<BR>
<p>A Virtual Private Network (VPN) extends a private network (in this case the CS Department network) over the Internet. Using a VPN allows a user to securely access the necessary information within a private network over the Internet as if they never left the initial network. This is a widely used system in the corporate world for employees who travel but still need to access their companies netowrk.</p>

<?
for($i=1;$i<=count($steps)-1;$i++) {
	if( isset($steps[$i]['image']) ) echo "<BR>" . create_image_link($steps[$i]['image'],htmlentities($steps[$i]['text'],ENT_QUOTES));
	echo "<P>$i. {$steps[$i]['text']}</p>";
	echo "<BR>\n";
}

?>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
