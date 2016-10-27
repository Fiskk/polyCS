<?
$website_addons = array("lightbox");
include("../header.php"); 
?>
<h1>Setting up the DogNET CentOS Repo</h1>

<div id='content'>

<p>To make the DogNET repositories to work properly, you need to have a properly configured network on your VM. This tutorial is how to setup the repositories for CentOS 6 and CentOS 7.</p>
<ol>
<!---------------------------------------------------------------------------- 1 ----------------------------------------------------------------------->
<li> Go to <a href="http://xen.cs.sunyit.edu">https://xen.cs.sunyit.edu</a>. Enter your CS Department credentials.
<br><a href="/help/pix/centrepo/centrepo1.png" rel='lightbox' title="Go to https://xen.cs.sunyit.edu. Enter your CS Department Credentials."><img src="/help/pix/centrepo/centrepo1.png" height=300px></a>
<br><br>
<!---------------------------------------------------------------------------- 2 ----------------------------------------------------------------------->
<li> You now are now in the XVP control panel.
<br><a href="/help/pix/centrepo/centrepo2.png" rel='lightbox' title="You are now in the XVP control panel"><img src="/help/pix/centrepo/centrepo2.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 3 ------------------------------------------------------------------------>
<li>Right click the button next to your server and click 'Console'
<br><a href="/help/pix/centrepo/centrepo3.png" rel='lightbox' title="Right click the button next to your server and click 'Console'"><img src="/help/pix/centrepo/centrepo3.png"></a>
<br><br>
<!---------------------------------------------------------------------------- 4 ------------------------------------------------------------------------->
<li>If this Security Warning pops up, click "Run"
<br><a href="/help/pix/singleuser/singleuser5.png" rel='lightbox' title="If this Security Warning pops up, click 'Run'"><img src="/help/pix/singleuser/singleuser5.png" width=75%></a>
<br><br>
<!--------------------------------------------------------------------------- 6 ----------------------------------------------------------------------------->
<li> If you are not already, log into your virtual machine with the credentials you have already setup.
<br><a href="/help/pix/centrepo/centrepo4.png" rel='lightbox' title="If you are not already, log into your virtual machine with the credentials you have already setup"><img src="/help/pix/centrepo/centrepo4.png" width=75%></a>
<br><br>
<!--------------------------------------------------------------------------- 7 ------------------------------------------------------------------------------>
<li>To find out which version of CentOS you are running, use the command <font color="red">cat /etc/redhat-release</font>. You will need to know this shortly.
<br><a href="/help/pix/centrepo/centrepo5.png" rel='lightbox' title="To find out which version of CentOS you are running, use the command 'cat /etc/redhat-release'. You will need to know this shortly"><img src="/help/pix/centrepo/centrepo5.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 8 ------------------------------------------------------------------------------>
<li> At your prompt type <font color="red">vi /etc/yum.repos.d/dognet.repo</font> and hit Enter
<br><a href="/help/pix/centrepo/centrepo6.png" rel='lightbox' title="At your prompt type 'vi /etc/yum.repos.d/dognet.repo'"><img src="/help/pix/centrepo/centrepo6.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 9 ------------------------------------------------------------------------------>
<li> To enter 'insert mode' in vi, press <font color="red">i</font>
<br><a href="/help/pix/centrepo/centrepo7.png" rel='lightbox' title="To enter 'insert mode' press 'i'"><img src="/help/pix/centrepo/centrepo7.png"width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 10  ------------------------------------------------------------------------------>
<li> If you are running CentOS 6.5 or 6.6 you will need to enter the following in the dognet.repo file. If not skip to the next step for instructions on CentOS 7.

<font color="red"><p>[DogNET]<br>
name=dognet repo<br>
baseurl=ftp://centrepo/CentOS/6<br>
gpgcheck=1<br>
gpgkey=ftp://centrepo/CentOS/6/os/x86_64/RPM-GPG-KEY-CentOS-6<br>
enabled=1</p> </font>
<br><a href="/help/pix/centrepo/centrepo8.png" rel='lightbox' title="Enter the following information into the dognet.repo file."><img src="/help/pix/centrepo/centrepo8.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 10  ------------------------------------------------------------------------------>
<li> If you are running CentOS 7 you will need to enter the following in the dognet.repo file.
<p><font color="red">
[DogNET]<br>
name=dognet repo<br>
baseurl=ftp://centrepo/CentOS/7<br>
gpgcheck=1<br>
gpgkey=ftp://centrepo/CentOS/7/os/x86_64/RPM-GPG-KEY-CentOS-7<br>
enabled=1</font>
</p>
<br><a href="/help/pix/centrepo/centrepo9.png" rel='lightbox' title="Enter the following information into the dognet.repo file."><img src="/help/pix/centrepo/centrepo9.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 11  ------------------------------------------------------------------------------>
<li> To save your dognet.repo file, press 'Esc' and then <font color="red">:wq</font>. This will write to the file, and then quit back to your command line.
<br><a href="/help/pix/centrepo/centrepo10.png" rel='lightbox' title="To save your dognet.repo file, press 'Esc' and then ':wq' to write to the file, and then exit back to your command line"><img src="/help/pix/centrepo/centrepo10.png" width=75%></a>
<br><br>
<!---------------------------------------------------------------------------- 11  ------------------------------------------------------------------------------>
<li> Now, if you run the 'yum update' command, DogNET should be a mirror that the update is pulling from.
<br><a href="/help/pix/centrepo/centrepo11.png" rel='lightbox' title="Now, if you run the 'yum update' command, DogNET should be a mirror that the update is pulling from."><img src="/help/pix/centrepo/centrepo11.png" width=75%></a>
</ol>


<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
