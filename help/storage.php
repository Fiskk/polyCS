<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Help: Disk Storage</h1>

<div id='content'>
<a name="print"></a>
<h3>Disk Storage:</h3>

<p>There are two main disk storage areas on the Computer Science department network.</p>

<uL>
<p>
<LI>Disk space available for home directories is stored on a 206gb raid-5 array. 
This area is <a href="dumps.php">backed up to tape</a> nightly, but is restricted 
to academic use only. 
This includes both unix home directories and the H: drive on windows machines.
When you log in to a MS Windows machine in one of the CS labs with your 
<a href="activate.php">username and password</a>,
your UNIX home directory is mounted as the H: drive.
</p>

<p>
<LI>There is also an area for temporary/general storage consisting of 520gb on a 
raid-5 array.  This area is mounted on most unix machines as <nobr>/opt/pub</nobr> and the 
Windows lab machines as the T: drive. This area is not backed up, 
nor is it actively monitored.  Please read the <a href="text/README.1st.txt">#README.1st.txt</a> 
file for more information on how this area is maintained and guidelines for its use.
</p>

</UL>

<!--
<h3>Monitoring your disk usage:</h3>
<p>

</p>

<h3>Linking files on /opt/pub/ to your web site:</h3>
<p>

</p>
-->

<BR>Direct questions regarding disk usage to <?= emaillink("admins","the admins") ?>.

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
