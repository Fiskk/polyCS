<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Network Information</h1>

<div id='content'>
<a name="xwin32"></a>
<h3>Remote X11 on MS Windows:</h3>

<p>To display Unix X11 programs on your MS Windows machine.</p>

<p><B>X-Win32 Configuration:</B></p>
<p>Start X-Win32.  You should see a blue X in your system tray:<BR /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="pix/xwin32-01.png">

<P>Right click on the X, and select XConfig.  Under the Security tab, 
add localhost to the X-Host list and check the boxes for Access control
and Use XAuth: <br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="pix/xwin32-02.png">

<BR /><BR />
<p><B>SSH Client Configuration:</B></p>

<OL>
<LI>Start the SSH Secure Shell Client.  <a href="/network/downloads/SSHClient.exe">Download Here</a>
<LI>Select Settings from the Edit menu.  
<LI>Under profile settings, select Tunneling.  
<LI>Check the box for Tunnel X11 connections.
<LI>Click OK.  
<LI>Under the file menu, select save settings.
</OL>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="pix/xwin32-03.png">

<OL start=7>
<LI>Click on Quick Connect
<LI>Enter the hostname to connect to and your username
<LI>Click Connect
</OL>

<BR>
<B>When Connected:</B></p>

<p>Once you are connected, type:<BR /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ <font color="fuchsia">echo $DISPLAY</font>
<br /><br />
to verify that the X11 connections are being forwarded over SSH back to your workstation.
<BR>Then run your X11 programs as you normally would:
<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="pix/xwin32-04.png">

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
