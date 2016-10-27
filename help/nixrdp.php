<? 
$website_addons = array("lightbox");
include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); 
?>
<h1>Remote Desktop: Linux and Mac</h1>

<div id='content'>

<p>The Computer Science department has a MultiPoint Server that allows those with CS credentials to log into a Windows environment. To access this environment from a Linux or Mac follow the steps below.</p>

<h3>Using Remote Desktop on a Mac</h3>

<ol>
<!---------------------------------------------------------------------------- 1 ----------------------------------------------------------------------->
<li>This tutorial uses the Microsoft Remote Desktop client found in the Apple App Store. To download this client follow this <a href='https://itunes.apple.com/us/app/microsoft-remote-desktop/id715768417'>link.</a>
<br><a href="/help/pix/nixrdp/macrdp1.png" rel='lightbox' title=""><img src="/help/pix/nixrdp/macrdp1.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 2 ----------------------------------------------------------------------->
<li>Click "New" in the top left corner. 
<br><a href="/help/pix/nixrdp/macrdp2.png" rel='lightbox' title="Click 'New' in the top left corner."><img src="/help/pix/nixrdp/macrdp2.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 3 ------------------------------------------------------------------------>
<li>Fill in the 'Connection Name' field with a memorable name. Under 'PC Name' enter <font color='red'>win7.cs.sunyit.edu</font>. Next enter your Computer Science credentials in the appropriate sections. To save the information you have entered, close the window.   
<br><a href="/help/pix/nixrdp/macrdp3.png" rel='lightbox' title="Fill in the 'Connection Name' field with a memorable name. Under 'PC Name' enter <font color='red'>win7.cs.sunyit.edu</font>. Next enter your Computer Science credentials in the appropriate sections. To save the information you have entered, close the window." ><img src="/help/pix/nixrdp/macrdp3.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 4 ------------------------------------------------------------------------->
<li>Once back on the main window, double click the connection and that will initiate the remote desktop connection.
<br><a href="/help/pix/nixrdp/macrdp4.png" rel='lightbox' title="Once back on the main window, double click the connection and that will initiate the remote desktop connection"><img src="/help/pix/nixrdp/macrdp4.png" height=300px></a>
<br><br>
</ol>

<h3>Using Remote Desktop on a Linux machine</h3>

<p>For this tutorial we will be going over how to install and use the remote desktop client for CentOS 6, CentOS 7, Ubuntu, and Arch Linux.  

<ol>

<li>Open the terminal on your Linux machine.
<br><a href="/help/pix/nixrdp/centrdp1.png" rel='lightbox' title="Open the terminal on your Linux machine."> <img src="/help/pix/nixrdp/centrdp1.png" height=300px></a>
<br><br>
<li>You will need to be root to install the remote desktop client.
<br><a href="/help/pix/nixrdp/centrdp2.png" rel='lightbox' title="You will need t o be root to install the remote desktop client"><img src="/help/pix/nixrdp/centrdp2.png" height=300px></a>
<br><br>
<li>Depending on what distro of Linux you are using, there install the remote desktop client.<br>
	<p>For CentOS 6 &nbsp;&nbsp; -- &nbsp;<font color=red>yum install rdesktop</font><br>
	   For CentOS 7 &nbsp;&nbsp;&nbsp;-- &nbsp;<font color=red>yum install xfreerdp</font><br>
	   For Ubuntu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- &nbsp;<font color=red>apt-get isntall rdesktop</font><br>
	   For archlinux &nbsp;&nbsp;&nbsp;&nbsp;-- &nbsp;<font color=red>pacman freerdp</font> 

<br><a href="/help/pix/nixrdp/centrdp3.png" rel='lightbox' title="Install the remote desktop client respective to the distro of Linux you are using"><img src="/help/pix/nixrdp/centrdp3.png" width=100% height=300px></a> </p>

<li>Accept that you want to install to happen by pressing <font color=red>y</font>.
<br><a href="/help/pix/nixrdp/centrdp4.png" rel='lightbox' title="Accept that you want the client to be installed."><img src="/help/pix/nixrdp/centrdp4.png" height=300px></a>
<br><br>
<li>Once the client is installed, from your command line enter the command <font color=red>xfreerdp -u your_username win7.cs.sunyit.edu</font>. Do note that the 'xfreerdp' should be changed depending on what client you installed. 
<br><a href="/help/pix/nixrdp/centrdp5.png" rel='lightbox' title="Using the appropriate command (xfreerdp, rdesktop, freerdp), you can note remote desktop into the machine you are trying to hit using the command <font color=red>xfreerdp -u your_username win7.cs.sunyit.edu</font>"><img src="/help/pix/nixrdp/centrdp5.png" width=90% ></a>
<BR>

<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
