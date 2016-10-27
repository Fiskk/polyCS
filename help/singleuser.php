<?
$website_addons = array("lightbox");
include("../header.php"); 
?>
<h1>Boot into Single-User Mode</h1>

<div id='content'>

<p></p>
<ol>
<!---------------------------------------------------------------------------- 1 ----------------------------------------------------------------------->
<li> Go to <a href="http://xen.cs.sunyit.edu">https://xen.cs.sunyit.edu</a>. Enter your CS Department credentials.
<br><a href="/help/pix/singleuser/singleuser1.png" rel='lightbox' title="Go to https://xen.cs.sunyit.edu. Enter your CS Department Credentials."><img src="/help/pix/singleuser/singleuser1.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 2 ----------------------------------------------------------------------->
<li> You now are now in the XVP control panel.
<br><a href="/help/pix/singleuser/singleuser2.png" rel='lightbox' title="You are now in the XVP control panel"><img src="/help/pix/singleuser/singleuser2.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 3 ------------------------------------------------------------------------>
<li>Right click the power button next to the machine you want to turn on, and click "Boot"
<br><a href="/help/pix/singleuser/singleuser3.png" rel='lightbox' title="Right click the power button next to the machine you want to turn on, and click 'Boot'." ><img src="/help/pix/singleuser/singleuser3.png"></a>
<br><br>
<!---------------------------------------------------------------------------- 4 ------------------------------------------------------------------------->
<li>While booting, right click again and click 'Console'
<br><a href="/help/pix/singleuser/singleuser4.png" rel='lightbox' title="While booting, right click again and click 'Console'"><img src="/help/pix/singleuser/singleuser4.png"></a>
<br><br>
<!---------------------------------------------------------------------------- 5 ------------------------------------------------------------------------->
<li>If this Security Warning pops up, click "Run"
<br><a href="/help/pix/singleuser/singleuser5.png" rel='lightbox' title="If this Security Warning pops up, click 'Run'"><img src="/help/pix/singleuser/singleuser5.png" width=75%></a>
<br><br>
<!--------------------------------------------------------------------------- 6 ----------------------------------------------------------------------------->
<li> While the boot timer is going down, hit any key to enter the GRUB menu
<br><a href="/help/pix/singleuser/singleuser6.png" rel='lightbox' title="While the boot timer is going down, hit any key to enter the GRUB menu"><img src="/help/pix/singleuser/singleuser6.png" width=75%></a>
<br><br>
<!--------------------------------------------------------------------------- 7 ------------------------------------------------------------------------------>
<li>In the GRUB menu, highlight the one you wish to boot (usually the first one by default) and hit 'a'
<br><a href="/help/pix/singleuser/singleuser7.png" rel='lightbox' title="In the GRUB menu, highlight the one you wish to boot and hit 'a'"><img src="/help/pix/singleuser/singleuser7.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 8 ------------------------------------------------------------------------------>
<li> You should now see a screen that looks something like this:
<br><a href="/help/pix/singleuser/singleuser8.png" rel='lightbox' title="You should now see a screen that looks something like this:"><img src="/help/pix/singleuser/singleuser8.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 9 ------------------------------------------------------------------------------>
<li> Move your cursor to the end of the last line after quiet, and type '1' then hit Enter.
<br><a href="/help/pix/singleuser/singleuser9.png" rel='lightbox' title="Move your cursor to the end of the last line after quiet, and type '1' then hit Enter"><img src="/help/pix/singleuser/singleuser9.png"width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 10  ------------------------------------------------------------------------------>
<li> To verify you are in Single User Mode, you should see 'Telling INIT to go into single user mode'
<br><a href="/help/pix/singleuser/singleuser10.png" rel='lightbox' title="To verify you are in Single User Mode, you should see 'Telling INIT to go into single user mode'"><img src="/help/pix/singleuser/singleuser10.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 11  ------------------------------------------------------------------------------>
<li> Once you are finished, to get out of Single User Mode, reboot the machine using the <font color="red">reboot</font> command.
<br><a href="/help/pix/singleuser/singleuser11.png" rel='lightbox' title="Once you are finished, to get out of Single User Mode, reboot the machine using the reboot command."><img src="/help/pix/singleuser/singleuser11.png" width=75%></a>
<br><br>
</ol>


<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
