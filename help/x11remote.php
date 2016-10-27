<?php include("../header.php"); ?>

<h1>Help: Remote Xwindows</h1>

<div id='content'>
<a name="x11remote"></a>
<h3>Remote X:</h3>

<p>The supported method to have X programs on other machines run on the machine you are at is using SSH tunneling. SSH tunnelling is a newer method to allow access to
remote X applications. SSH tunnelling offers a number of benefits over the traditional method of exporting the display, such as the encryption of all data and the lack
of a need for advance setup.</p>

<p><br /><b>Using ssh tunnelling</b></p>

<p>On the computer you are at, type:</p>

<PRE>
	$ <font color="fuchsia">ssh -X remotemachine</font>
</PRE>

<p>Once connected to the remote machine, simply type in the name of the X application
that you wish to run.  The graphical display will automatically be forwarded to your
local machine.</p>

<p>Replace remotemachine with the name of the remote machine, the machine you are connecting to.</p>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
