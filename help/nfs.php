<?php include("../header.php"); ?>

<h1>Help: Network File System</h1>

<div id='content'>
<a name="nfs"></a>
<h3>NFS:</h3>
<p>The home directories of all users are exported from one machine to all other network machines. This means when you
log onto a machine in the lab, you are able to access the same files as you have on fang.</p>
<p>How NFS works is that one machine (with lots of disk space) is designated as the file server. The file server
exports its file system(s) to other machines (clients). On the clients an image of the file system will be created
(mounted) so that it appears to the average user that the file system is on that machine. How it works on the DogNET
is that the /home directory is on the server 'spuds' and exported to all other DogNET machines.</p>
<p>If you want to see information on the file systems on the computer you are logged into, type the command <font color="fuchsia">df -h</font>. df will show you the size of the partitions on the machine that you are on, including those that are
mounted from other machines.</p>

<p>If you would like to see how much space you are using on the file servers, run
the <font color="fuchsia">quota</font> command.</p>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
