<?
$website_addons = array("lightbox");
include("../header.php");
?>
<h1>Configuring an IP address on CentOS</h1>

<div id='content'>

<ol>
<!---------------------------------------------------------------------------- 1 ----------------------------------------------------------------------->
<li>Go to <a href="http://xen.cs.sunyit.edu">https://xen.cs.sunyit.edu</a>. Enter your CS Department credentials.
<br><a href="/help/pix/centip/centip1.png" rel='lightbox' title="Go to https://xen.cs.sunyit.edu. Enter your CS Department Credentials."><img src="/help/pix/centip/centip1.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 2 ----------------------------------------------------------------------->
<li> You now are now in the XVP control panel.
<br><a href="/help/pix/centip/centip2.png" rel='lightbox' title="You are now in the XVP control panel"><img src="/help/pix/centip/centip2.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 3 ------------------------------------------------------------------------>
<li>Right click the button next to your server and click 'Console'
<br><a href="/help/pix/centip/centip3.png" rel='lightbox' title="Right click the button next to your server and click 'Console'"><img src="/help/pix/centip/centip3.png"></a>
<br><br>
<!---------------------------------------------------------------------------- 4 ------------------------------------------------------------------------->
<li>Login to your virtual machine
<br><a href="/help/pix/centip/centip4.png" rel='lightbox' title="Login to your virtual machine"><img src="/help/pix/centip/centip4.png" width=75%></a>
<br><br>
<!--------------------------------------------------------------------------- 5 ----------------------------------------------------------------------------->
<li>To start, we need to edit our eth0 configuration. Enter the following command and press Enter: <font color="red">"vi /etc/sysconfig/network-scripts/ifcfg-eth0"</font>
<br><a href="/help/pix/centip/centip5.png" rel='lightbox' title="To start, we need to edit our eth0 configuration. Enter the following command and press Enter: 'vi /etc/sysconfig/network-scripts/ifcfg-eth0' "><img src="/help/pix/centip/centip5.png" width=75%></a>
<br><br>
<!--------------------------------------------------------------------------- 6 ------------------------------------------------------------------------------>
<li>In the ifcfg-eth0 file we will need to edit a few lines.
	<ul>
	 <li>Make sure HWADDR is commented out.
	 <li>Change ONBOOT from no to <font color="red">'yes'</font>
	 <li>Change BOOTPROTO from dhcp to <font color='red'>'static'</font>
 	 <li>Add the lines: <font color='red'>IPADDR=x.x.x.x</font> and <font color='red'>NETMASK=x.x.x.x</font> entering the assigned IP address and netmask in the respective positions.
	</ul>
<br><a href="/help/pix/centip/centip6.png" rel='lightbox' title="Change the ONBOOT and BOOTPROTO settings, and add the lines IPADDR and NETMASK"><img src="/help/pix/centip/centip6.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 7 ------------------------------------------------------------------------------>
<li>To save the configuration and exit vi, press Esc, and then '<font color="red">:wq</font>'
<br><a href="/help/pix/centip/centip7.png" rel='lightbox' title="Save and exit your configuration file"><img src="/help/pix/centip/centip7.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 8 ------------------------------------------------------------------------------>
<li>Next run the command, '<font color="red">vi /etc/sysconfig/network</font>'. Change HOSTNAME to your hostname, and add the line '<font color="red">GATEWAY=x.x.x.x</font>' replacing x.x.x.x with your gateway.
<br><a href="/help/pix/centip/centip8.png" rel='lightbox' title="Edit the /etc/sysconfig/network file"><img src="/help/pix/centip/centip8.png"width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 9  ------------------------------------------------------------------------------>
<li>To save the configuration and exit vi, press Esc, and then '<font color="red">:wq</font>
<br><a href="/help/pix/centip/centip9.png" rel='lightbox' title="Save and exit your configuration file"><img src="/help/pix/centip/centip9.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 10  ------------------------------------------------------------------------------>
<li>Run the command '<font color="red">/etc/init.d/network restart</font>' to restart your networking and use the new configurations you just set
<br><a href="/help/pix/centip/centip10.png" rel='lightbox' title="Restart your networking"><img src="/help/pix/centip/centip10.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 11  ------------------------------------------------------------------------------>
<li>To test you have correct networking setup, try to ping cs.sunyit.edu. If you get a successful ping your networking is setup correctly.
<br><a href="/help/pix/centip/centip11.png" rel='lightbox' title="Try to ping cs.sunyit.edu, if you get a successful ping your networking is correct"><img src="/help/pix/centip/centip11.png" width=75%></a>
</ol>


<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
