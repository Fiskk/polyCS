<?
$website_addons = array("lightbox");
include("../header.php");

$steps[0] = null;
$steps[]['text'] = "This tutorial is for tunneling using PuTTY as well as Portable Firefox. The PuTTY client can be found <a href='http://web.cs.sunyit.edu/network/downloads/#P'>here</a>. And Portable Firefox can be found <a href='http://portableapps.com/apps/internet/firefox_portable'>here</a>";
$steps[] = array("image" => "puttytunnel1.png", "text" => "Once PuTTY is installed, you want to open the client. The desktop icon looks like the above image.");
$steps[] = array("image" => "puttytunnel2.png", "text" => "Click on Session. Enter the details like Host Name. Make sure that fang is the name of the machine you are trying to connect to and that SSH is selected as Connection Type.");
$steps[] = array("image" => "puttytunnel3.png", "text" => "Look under Connection on the left side menu and expand SSH. Then click on Tunnels. ");
$steps[] = array("image" => "puttytunnel4.png", "text" => "Enter the Source Port, it can be almost any number but for this example we are using 4000. Then add the Destination. Enter \"office pc\":3389 as seen in the above picture. Be sure that you replace \"office pc\" with the name of the machine you are trying to tunnel too.");
$steps[] = array("image" => "puttytunnel5.png", "text" => "Click Add and then click on Open.");
$steps[]['text'] = "A new window will come up and ask for a user name and password. Once those are correctly entered, the connection will be complete.";
$steps[] = array("image" => "sshtunnel5.png", "text" => "Next click on Start/Run. Then type mstsc in the text box to start the Remote Desktop Connection client.");
$steps[] = array("image" => "sshtunnel6.png", "text" => "Type localhost:4000 into the text box and click Connect. This will tunnel the connection through PuTTY and Fang to your destination pc.");

?>

<h1>SSH: Tunneling</h1>

<div id='content'>
<a name=""></a>
<h3>Using PuTTY For Tunneling a Connection:</h3>

<BR>
<p><center><img src="pix/sshtunnel.png"></center></p>
<BR>
<b>Windows Setting up PuTTY</b>
<ol>
<li>This tutorial is for using PuTTY on a Windows machine. The PuTTY client can be found <a href='http://web.cs.sunyit.edu/network/downloads/#P'>here.</a>
<br><a href="pix/puttytunnel/1.JPG" rel='lightbox'><img src="pix/puttytunnel/1.JPG"></a>
<li>In the "Host Name" box in PuTTY type 'fang.cs.sunyit.edu'
<br><a href="pix/puttytunnel/putty2.JPG" rel='lightbox'><img src="pix/puttytunnel/putty2.JPG"></a>
<li>Then on the sidebar scroll down, click the plus sign next to SSH, and then click Tunnels.
<br><a href="pix/puttytunnel/putty3.JPG" rel='lightbox'><img src="pix/puttytunnel/putty3.JPG"></a>
<li>In the Source port box type 8118, and in the Destination box type 'localhost:8118'. Then click Add.
<br><a href="pix/puttytunnel/putty4.JPG" rel='lightbox'><img src="pix/puttytunnel/putty4.JPG"></a>
<li>Sign into fang with your CS credentials.
<br><a href="pix/puttytunnel/putty5.JPG" rel='lightbox'><img src="pix/puttytunnel/putty5.JPG"></a>
</ol>

<b>Windows Setting up Portable Firefox </b>
<ol>
<li>Once you have PuTTY configured an connected, now it's time to setup Portable Firefox which can be found <a href='http://portableapps.com/apps/internet/firefox_portable'>here</a>
<li>Extract the Portable Firefox to somewhere easy to find
<br><a href="pix/puttytunnel/firefox1.JPG" rel='lightbox'> <img src="pix/puttytunnel/firefox1.JPG"></a>
<li>Open the Firefox menu and then Options and Options again.
<br><a href="pix/puttytunnel/firefox.JPG" rel='lightbox'><img src="pix/puttytunnel/firefox2.JPG"></a>
<li>Click on the Advanced tab, and then Network
<br><a href="pix/puttytunnel/firefox3.JPG" rel='lightbox'><img src="pix/puttytunnel/firefox3.JPG"></a>
<li>Once the Network tab is chosen, click the settings button.
<li>Choose Manual proxy configuation, and then under HTTP Proxy type 'localhost' and Port: '8118'. Click OK, and OK again.
<br><a href="pix/puttytunnel/firefox.jpg" rel='lightbox'><img src="pix/puttytunnel/firefox4.jpg"></a>
<li>In your URL bar type 'about:config' and hit Enter
<br><a href="pix/puttytunnel/firefox5.JPG" rel='lightbox'><img src="pix/puttytunnel/firefox5.JPG"></a>
<li>In the search bar, search for 'remote_dns'and set "network.proxy.socks_remote_dns" to true (double click it)
<br><a href="pix/puttytunnel/firefox6.JPG" rel='lightbox'><img src="pix/puttytunnel/firefox6.JPG"></a>
<li>Next, open the folder that was extracted with the files for Portable Firefox. Right click New --> Text Document
<br><a href="pix/puttytunnel/firefox7.JPG" rel='lightbox'><img src="pix/puttytunnel/firefox7.JPG"></a>
<li>In the text document type 'AllowMultipleInstances=true' and save the file as 'FirefoxPortable.ini'
<br><a href="pix/puttytunnel/firefox8.JPG" rel='lightbox'><img src="pix/puttytunnel/firefox8.JPG"></a>
<li>Now if your session is still open with fang, you should be able to connect to the internet while going through the tunnel.
<li>To verify you successfully setup your tunnel, you can go to Google and type "What is my IP address" and it should be telling you a SUNYIT IP address.
</ol>

<BR>

<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
