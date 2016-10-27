<?
$website_addons = array("lightbox");
include("../header.php"); 
?>
<h1>Boot DVD in Xen</h1>

<div id='content'>

<ol>
<!---------------------------------------------------------------------------- 1 ----------------------------------------------------------------------->
<li> Go to <a href="http://xen.cs.sunyit.edu">https://xen.cs.sunyit.edu</a>. Enter your CS Department credentials.
<br><a href="/help/pix/bootdvd/bootdvd1.png" rel='lightbox' title="Go to https://xen.cs.sunyit.edu. Enter your CS Department Credentials."><img src="/help/pix/bootdvd/bootdvd1.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 2 ----------------------------------------------------------------------->
<li> You now are now in the XVP control panel.
<br><a href="/help/pix/bootdvd/bootdvd2.png" rel='lightbox' title="You are now in the XVP control panel"><img src="/help/pix/bootdvd/bootdvd2.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 3 ------------------------------------------------------------------------>
<li>Right click the power button next to the desired virtual machine, and choose "Properties"
<br><a href="/help/pix/bootdvd/bootdvd3.png" rel='lightbox' title="Right click the power button next to the desired virtual machine, and choose 'Properties'." ><img src="/help/pix/bootdvd/bootdvd3.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 4 ------------------------------------------------------------------------->
<a name="step4"></a>
<li>When the Properties screen opens, click the dropdown box for the DVD drive, and choose the DVD you wish to boot. Close the Properties window, and return back to the XVP control panel.
<br><a href="/help/pix/bootdvd/bootdvdp4.png" rel='lightbox' title="When the Properties screen opens, click the dropdown box for the DVD drive, and choose the DVD you wish to boot. Close the Properties window, and return back to the XVP control panel"><img src="/help/pix/bootdvd/bootdvd4.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 5 ------------------------------------------------------------------------->
<li>Right click again on the power button next to the desired virtual machine, and click "Boot"
<br><a href="/help/pix/bootdvd/bootdvd5.png" rel='lightbox' title="Right click again on the power button next to the desired virtual machine, and click 'Boot'"><img src="/help/pix/bootdvd/bootdvd5.png" width=75%></a>
<br><br>
<!--------------------------------------------------------------------------- 6 ----------------------------------------------------------------------------->
<li> Once booted, right click again and choose "Console"
<br><a href="/help/pix/bootdvd/bootdvd6.png" rel='lightbox' title="Once booted, right click again and choose 'Console'"><img src="/help/pix/bootdvd/bootdvd6.png" width=75%></a>
<br><br>
<!--------------------------------------------------------------------------- 7 ------------------------------------------------------------------------------>
<li>Your VM console should now be open to the DVD screen, from here you can follow the instructions on the screen for your desired task.
<br><a href="/help/pix/bootdvd/bootdvd7.png" rel='lightbox' title="Your VM console should now be open to the DVD screen, from here you can follow the instructions on the screen for your desired task."><img src="/help/pix/bootdvd/bootdvd7.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 8 ------------------------------------------------------------------------------>
<li>Once you are done with the DVD, go back to the Properties window from <a href="#step4">Step 4</a>, and choose empty.
</ol>


<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
