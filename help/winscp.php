<a name="top"></a>
<?php include("../header.php"); ?>
<h1>Help: Secure File Transfer </h1>

<div id='content'>

<ul>
<li><a href="#pscp">Secure File Transfer with Windows CLI and PuTTY SCP tool</a>
<li><a href="#winscp">Secure File Transfer with Windows GUI and WinSCP </a>
</ul>

<BR>
<a name="pscp"></a>
<h3>Secure File Transfer with PuTTY SCP tool on Windows CLI:</h3>

<P>To connect to your unix account from home, we recommend using the PuTTY SCP (PSCP) client available with PuTTY.

<p>After you download PuTTY's all-in-one installer, or the pscp executable, follow the steps below to transfer files securely.</p>

<p align="center">
<TABLE width=600>
<TR>
<TD valign="top"><p>Text</p></TD>
<TD><img src="pix/sft0.png"></TD>
</TR>

</TR>
</TABLE>
</p>

<a href="#top"> Top </a>
</div>

<div id='content'>
<a name="winscp"></a>
<h3>Secure File Transfer with WinSCP:</h3>

<center>
<p>
<a href="http://winscp.net/eng/download.php">Click here to download WinSCP</a>
<!--
<a href="http://www.cs.sunyit.edu/network/downloads/files/winscp406.exe">Click here to download WinSCP - Program Only</a>
<br> <a href="http://www.cs.sunyit.edu/network/downloads/files/winscp406setup.exe">Click here to download WinSCP - Installer</a>
-->
</p>
</center>


<P>The Computer Science department has phased out use of insecure telnet
and FTP protocols, replacing them with secure alternatives.</P>

<p>WinSCP is a free, open source SFTP client for Windows. Legacy SCP protocol is also supported.
Its main function is safe copying of files between a local and a remote computer.
</p>
<p>After installing WinSCP, follow the steps below to connect to your files securely</p>

<p align="center">
<TABLE width=600>
<TR>
<TD valign="top"><p>Double click on the WinSCP icon on your desktop.</p></TD>
<TD><img src="pix/winscp0.png"></TD>
</TR>

<TR>
<TD valign="top"><p>The program will look like this when it starts: </p></TD>
<TD><a href="pix/winscp1s.png"><img src="pix/winscp1.png"></a></TD>
</TR>

<TR>
<TD valign="top"><p>Enter the hostname of the machine you would like to connect to and enter your username and password. You can also select your file protocol. It is recommended that you use SFTP!</p></TD>
<TD><a href="pix/winscp2s.png"><img src="pix/winscp2.png"></a></TD>
</TR>

<TR>
<TD valign="top"><p>You will most likely be prompted to accept a certificate if it is your first time accessing that machine.</p></TD>
<TD><a href="pix/winscp3s.png"><img src="pix/winscp3.png"></a></TD>
</TR>

<TR>
<TD valign="top"><p>When you are connected, the screen will look like this.
The left side of the split-screen is your local computer and the right side is the remote computer.
Files can be copied by dragging from one side to the other.
</p></TD>
<TD><a href="pix/winscp4s.png"><img src="pix/winscp4.png"></a></TD>
</TR>
</TABLE>
</p>

<a href="#top"> Top </a>
</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>