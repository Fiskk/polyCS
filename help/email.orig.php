<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Help: Email</h1>

<div id='content'>
<a name="checking"></a>
<h3>Email:</h3>

<OL type=I>
<LI><a href="#check">Checking Email</a>
<LI><a href="#send">Sending email</a>
<LI><a href="#forward">Forwarding Email</a>
<LI><a href="#signature">Signature</a>
<LI><a href="#disposable">Temporary Disposable email addresses</a>
<LI><a href="#filter">Virus/Spam filtering</a>
</OL>

<BR>
<a name="check"></a>
<h3>Checking Email:</h3>
<p>Checking your Computer Science Department email (<i>username</i>@cs.sunyit.edu) can be done any of the following ways: </p>

<OL type="A">
<LI>From the unix command line:
<BR><a href="ssh.php">SSH to fang.cs.sunyit.edu</a> and type '<font color="fuchsia">pine</font>'.  A free ssh client 
for windows can be <a href="/network/downloads/SSHClient.exe">downloaded here</a>

<LI>Over the web:
<BR>Use the CS Department Webmail at <a href="http://webmail.cs.sunyit.edu/">https://webmail.cs.sunyit.edu</a>.

<LI>From your home machine over SPOP (encrypted):
<BR>Directions are available for <a href="spop.php#eudora">Eudora</a> and <a href="spop.php#outlook">Outlook</a>.  If you require directions for an additional mail client, email us.

<LI>From your home machine over POP (not encrypted):
<BR>Using your email client (ie: Eudora, Netscape mail, etc), set the pop server to mailbox.cs.sunyit.edu and use your <BR>
CS Dept. username and password to connect.  To send mail, use either Authenticated SMTP or POP before SMTP below.
</OL>

<BR>
<HR width="75%" align=center>
<BR>
<a name="send"></a>
<h3>Sending Email:</h3>
<p>Sending mail using your CS address is similar to checking mail, and can be done any of the following ways:

<OL type="A">
<LI>From the unix command line:
<BR>SSH to fang.cs.sunyit.edu and type '<font color="fuchsia">pine</font>'.  Select Compose message.  
Use the key combinations at the bottom of the screen to navigate.<BR>  The ^ symbol means to hold down the CTRL key while
pressing the letter next to it.
A free ssh client for windows can be <a href="/network/downloads/SSHClient.exe">downloaded here</a>

<LI>Over the web:
<BR>Use the CS Department Webmail at <a href="http://webmail.cs.sunyit.edu/">https://webmail.cs.sunyit.edu</a>.

<LI>From your home machine using Authenticated SMTP over SSL (encrypted):
<BR>Directions are available for <a href="asmtp.php#eudora">Eudora</a> and <a href="asmtp.php#outlook">Outlook</a>.  
If you require directions for an additional mail client, email us.

<LI>From your home machine using POP before SMTP:
<BR>Using your email client (ie: Eudora, Netscape mail, etc), set the smtp server to mailbox.cs.sunyit.edu.  You must check
your CS mail before you will be permitted to send mail.

<LI>From your home machine using your ISP's SMTP server:
<BR>Using your email client (ie: Eudora, Netscape mail, etc), set the smtp server to your ISP's smtp server.

</OL>

<BR>
<HR width="75%" align=center>
<BR>
<a name="forward"></a>
<h3>Forwarding Email:</h3>

<p>To receive mail in one place (machine) or forward your email to another account, use a .forward file.</p>

<OL type="A">
<LI>From the command line:
<p>Create a file named .forward in your home directory with the contents:</p>

<font color="fuchsia">username@machinename</font><BR><BR>

<p>For example, to forward all of your email from the IS network (demeter) to the Computer Science network, log into demeter and type:</p>

<font color="darkred">
<pre>   $ <font color="fuchsia"> echo <i>username</i>&#064;cs.sunyit.edu &gt; ~/.forward</font>
</pre>
</font>
where <i>username</i> is your username on the UNIX systems.

<BR><BR><BR>
<LI>Over the Web:

<p>Create a .forward file on the web:
<a href="https://accounts.cs.sunyit.edu/dotforward.php">set up email forwarding</a>.</p>

</OL>
 
<BR>
<HR width="75%" align=center>
<BR>
<a name="signature"></a>
<h3>Signatures:</h3>

<p>To add a signature to your mail, use a .signature file (this is a default). 
Create a file named .signature in your home directory with the text that you would like added to the end of your e-mail.</p>
<!--
        If you wish to use a different file name use the autosign variable
in your .mush/.mailrc (see mail/mush).
-->

<BR>
<HR width="75%" align=center>
<BR>
<a name="disposable"></a>
<h3>Disposable email addresses:</h3>
<P>Protect your main email address from spam harvesters when posting to mailing
lists or online forums by creating a
<a href="http://accounts.cs.sunyit.edu/disposable.php">disposable email address</A>.  
Mail directed to your disposable address will be forwarded to your main address
for the amount of time you choose.</p>

<BR>
<HR width="75%" align=center>
<BR>
<a name="filter"></a>
<h3>Filters:</h3>

<p>Incoming email is being filtered for Malware, Viruses and Spam.</p>

<OL type="A">
<LI>Malware
<P>Due to the increasing volume of malware circulating, email containing an 
attachment with one the following potentially dangerous extensions will be 
rejected and returned to the sender.  
Extensions: scr, vbs, bat, lnk, pif, exe, com</p>

<BR>
<LI>Viruses
<p>Incoming email is scanned for viruses with <a href="http://www.clamav.net/">Clam AntiVirus</a>. 
The virus definition database is updated nightly so new viruses are detected immediately.  Email 
containing a virus will be rejected by the server and returned to the sender.</p>

<BR>
<LI>Spam
<p>Incoming email is screened for spam by utilizing realtime block lists from Spamhous 
(<a href="http://www.spamhaus.org/">www.spamhaus.org</a>) and email filters from
Spamassassin (<a href="http://www.spamassassin.org/">www.spamassassin.org</a>).
Incoming email is given points by spamassassin for matching 
<a href="http://www.spamassassin.org/tests.html">rules</a> corresponding to the 
probability that it is spam.  Mail will be rejected if the sender's IP address is
listed in a block list, otherwise an action will be taken depending upon the spamassassin 
score below:</p>

</OL>

<center>
<table width="60%">
<TR><TH width=75>Score</TH><TH>Action</TH></TR>
<TR><TD align=center>0 - 3.9</TD>
<TD>
	The spam score will be recorded in the headers of the message in the X-Spam-Score field.  
	The message will then be delivered.
</TD></TR>
<TR><TD align=center>4 - 9.9</TD>
<TD>
	<BR>
	The spam score will be recorded as above.  An analysis of the rules which were matched 
	will also be recorded in the headers.  The subject field will be prepended with the tag 
	*SPAM* followed by the spam score in brackets, such as *SPAM* [7.0].  The message will 
	then be delivered.  The user can filter the message in the chosen email client by
	the *SPAM* subject tag.
	<BR><BR>
</TD></TR>
<TR><TD align=center>10+ </TD>
<TD>
	The message has scored enough points to be certain it is spam and will be returned to the 
	sender.
</TD></TR>
</TABLE>
</center>

<p>If you are receiving messages incorrectly tagged as spam, please forward the headers of the message
to spam@cs.sunyit.edu so that our filters may be adjusted.</p>
	
</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
