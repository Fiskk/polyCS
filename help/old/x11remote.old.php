<? require("{$_SERVER['DOCUMENT_ROOT']}/php-bin/dog-lib.php") ?>

<? dogmainheader(); ?>

<center><font size="+3"><B>Network Information</B></font></center>
<BR><BR><BR>

<BR>
<a name="x11remote"></a>
<font size="+1"><B>Remote X:</b></font><BR><BR>

<p>To have X programs on other computers run on the machine you are at:</p>

<p>On the computer you are at, type:</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ <font color="fuchsia">xhost +remotemachine</font><BR>

<p>Now or ssh to the machine which has the program you wish to run and type: </p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ <font color="fuchsia"> setenv DISPLAY localmachine:0.0</font><BR>

<p>Replace localmachine with the name of the local machine you are at.</p>
<p>Replace remotemachine with the name of the remote machine, the machine you are connecting to.</p>

<BR><BR>

<? dogmainfooter("Webmaster","webmaster") ?>
