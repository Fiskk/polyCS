<?php include("../header.php"); ?>

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







<h2>Checking and Sending Email</h2>


<br>To Check or Send Mail You can use the following Methods:</br>


<br><u><h3>Checking/Sending email at a command Line:</br></h3></u>

<br>To Check Email - Follow Step 1</br>
<br>To Send Email - Follow Steps 1-3</br>

<br><b>Step 1.</b></br>
<br><a href="ssh.php">SSH to fang.cs.sunyit.edu</a> and type '<font color="fuchsia">pine</font>'</br>

<br><b>Step 2.</b></br>

<p>Select Compose message. use the key combinations at the bottom of
of the screen to navigate.</p>

<b><br>Step 3.</b></br>The ^ symbol means to hold down the CTRL key while pressing the letter next to it. </br>

<br><u><h3>
Checking/Sending over the web:
</br></h3></u><br>Use the CS Department Webmail at <a href="http://webmail.cs.sunyit.edu/">https://webmail.cs.sunyit.edu</a></br>

<u><h3><br>Checking Mail at Home:</h3></br></u>

<br>Checking Mail at home can done using a Mail Client such as Eudora or Outlook.</br>



<br>From your home machine over SPOP (encrypted):</br>

<u><h3><br>Configuring Eudora:</h3></br></u>

<b>Step 1:</b>

<p>
Launch Eudora mail client. From within Eudora, click on Tools/Options,
then select Checking Mail. Enter the mail server information provided below, also
replacing the username listed with yours. Finally click ok.
</p>

<br>Mail Server: mailbox.cs.sunyit.edu</br>


<br><b>Step 2:</b></br>

<br>
Try checking your mail. You should be prompted with the message "No New Email"
</br>

<br><b>Step 3:</b></br>

<br>Return to the Tools/Options/Checking Mail settings from step 1. Click on the "Last SSL Info" button.
You should see the CS Dept certificate in the window like below. Click on Add to Trusted.</br>


<b><br>Step 4:</b></br>

<br>After clicking on Add to Trusted, the certificate window should appear.
You should now be able to check your mail over a SSL encrypted connection.</br>


<u><h3><br>Configuring Outlook:</br></h3></u>






<br><b>Step 1:</b></br>
<br>
Open Outlook. Click on Tools/Accounts. Click on the Add button and select Mail.
Enter your username and email address in the next two screens, on the third,
enter the settings as shown below: </br>

<br>My Incoming mail server is a 'POP3' server.</br>

<br>Incoming mail (PoP3,IMAP) server:</br>

<br>mailbox.cs.sunyit.edu</br>

<br>Outgoing mail (STMP) server:</br>

<br>mailbox.cs.sunyit.edu</br>

<br><b>Step 2:</br></b>
<br>After configuring the settings as descbribed above click next and
return to the Internet Accounts Menu. click on the Mail tab. Select your CS account
then click on Properties. </br>


<br><b>Step 3:</b></br>
<p>Click on the Advanced tab, then click on checkbox next to "This server
requires a secure connection(SSL)", Then click ok. You should now be able to
check your mail over a SSL encrypted connection.</p>


<br>Visual directions available at <a href="spop.php">Eudora and Outlook</a></br>

<br>If you have any further questions please email us</br>






<BR>
<a name="forward"></a>






<h3>Forwarding Email:</h3>

<p>To receive mail in one place (machine) or forward your email to another account, use a .forward file.</p>

<OL type="A">
<LI>From the command line:
<p>Create a file named .forward in your home directory with the contents:</p>

<font color="fuchsia">username@machinename</font><BR><BR>

<p>For example, to forward all of your email from the CS network to your campus account, log into fang and type:</p>

<font color="darkred">
<pre>   $ <font color="fuchsia"> echo <i>username</i>&#064;sunyit.edu &gt; ~/.forward</font>
</pre>
</font>
where <i>username</i> is your username on the UNIX systems.

<BR><BR><BR>
<LI>Over the Web:

<p>Create a .forward file on the web:
<a href="https://accounts.cs.sunyit.edu/dotforward.php">set up email forwarding</a>.</p>
<BR><BR>
<LI>Forwarding your @sunyit.edu email elsewhere:
<P>Log into your @sunyit email by going to <a href="http://gmail.sunyit.edu">gmail.sunyit.edu</a> and follow the instructions <a href="https://support.google.com/mail/answer/10957?hl=en">here</a></p>

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
