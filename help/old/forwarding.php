<? require("{$_SERVER['DOCUMENT_ROOT']}/php-bin/dog-lib.php") ?>

<? dogmainheader(); ?>

<center><font size="+3"><B>Network Information</B></font></center>
<BR><BR><BR>

<BR>
<a name="forward"></a>
<font size="+1"><B>Forwarding Email:</b></font><BR><BR>

<p>To recieve mail in one place (machine) or forward your email to another account, use a .forward file.
Create a file named .forward in your home directory with the contents:</p>

<font color="fuchsia">username@machinename</font><BR><BR><BR>

<p>For example, to forward all of your email from the IS network (demeter) to the Computer Science network, log into demeter and type:</p>

<font color="darkred">
<pre>   $ <font color="fuchsia"> echo <i>username</i>&#064;cs.sunyit.edu &gt; ~/.forward</font>
</pre>
</font>
where <i>username</i> is your username on the UNIX systems.

<BR><BR><BR>
<B>Over the Web:</b>

<p>Create a .forward file on the web:
<a href="https://accounts.cs.sunyit.edu/dotforward.php">set up email forwarding</a>.</p>
 


<BR><BR>
<a name="sigs"></a>
<font size="+1"><B>Signatures:</b></font><BR><BR>

<p>To add a signature to your mail, use a .signature file (this is a default). 
Create a file named .signature in your home directory with the text that you would like added to the end of your e-mail.</p>
<!--
        If you wish to use a different file name use the autosign variable
in your .mush/.mailrc (see mail/mush).
-->


<BR><BR>

<? dogmainfooter("Webmaster","webmaster") ?>
