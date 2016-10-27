<?php include("../header.php"); ?>

<h1>Help: Secure Mail Access</h1>

<div id='content'>
<p>The CS Department does not yet possess a signed SSL certificate.  Additional steps must be
taken in order to initiate a SSL encrypted connection.</p>


<a name="eudora"></a>
<h3>Secure Pop with Eudora:</h3>

<OL type=A>
<LI>From within Eudora, click on Tools/Options, then select Checking Mail.  Enter the information as follows, replacing the username listed with yours.
<BR><img src="/pix/spop/eudora01.jpg"><BR><BR>
<LI>Try to check your mail.  You should see the same error as below:
<BR><img src="/pix/spop/eudora02.jpg"><BR><BR>
<LI>Return to the Tools/Options/Checking Mail settings from the first image.  Click on the Last SSL Info button.  You should see the CS Dept certificate in the window like below.  Click on Add to Trusted.
<BR><img src="/pix/spop/eudora03.jpg"><BR><BR>
<LI>After clicking on Add to Trusted, the certificate window should appear as follows:
<BR><img src="/pix/spop/eudora04.jpg"><BR><BR>
<LI>You should now be able to check your mail over a SSL encrypted connection.
<BR><img src="/pix/spop/eudora05.jpg"><BR><BR>
</OL>



<a name="outlook"></a>
<h3>Secure Pop with Outlook:</h3>

<OL type=A>
<LI>You must first <a href="/network/files/mailbox.cs.sunyit.edu.crt">download the SSL certificate</a> for the CS Dept mail server.  If you are using Internet Explorer, click Open when prompted.  For other browsers, you may have to right click on the link and select Save to Disk.  After saving the certificate file to disk, double click on it.  Place the certificate in the Trusted Root Certificates Store.
<BR><img src="/pix/spop/outlook01.jpg"><BR><BR>
<LI>Open Outlook.  Click on Tools/Accounts.  Click on the Add button and select Mail.  Enter your username and email address in the next two screens, on the third, enter the settings as shown below:
<BR><img src="/pix/spop/outlook02.jpg"><BR><BR>
<LI>Return to the Tools/Accounts menu and click on the Mail tab.  Select your CS account then click on Properties.
<BR><img src="/pix/spop/outlook03.jpg"><BR><BR>
<LI>Click on the Advanced tab, then click on the checkbox shown below:
<BR><img src="/pix/spop/outlook04.jpg"><BR><BR>
<LI>You should now be able to check your mail over a SSL encrypted connection.
</OL>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
