<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Help: Data Backups</h1>

<div id='content'>
Data stored in your home directory is protected from loss by two separate mechanisms:

<ul type=circle>
<!-- <LI><a href="#snapshots">Periodic filesystem snapshots</a>  -->
<LI><a href="#backups">Tape backups</a>
<LI><a href="#raid5">Hardware RAID</a>
</ul>

<!-- <p>Each of these three data recovery methods serve a unique purpose:</p> -->
<UL type=circle>
<!-- <LI>Snapshots allow users to recover lost data themselves, without having to track down an administrator. -->
<LI>Tape backups provide long term backup and archival and protect against multiple disk failure.
<LI>RAID-5 protects against single disk failure without downtime and the loss of data since the most recent
tape backup.
</UL>

<BR><BR>
<a name="snapshots"></a>
<h3>Filesystem snapshots:</h3>

<p>Filesystem snapshots are a new addition to the FreeBSD operating system running on
our file server.  By taking periodic snapshots of the live filesystem your files are 
stored on, we can easily recover old states of files.</p>

<p>Three levels of snapshots are available, hourly, daily, and weekly.  Three hourly snapshots 
are kept onhand, taken at 10am, 5pm, and 9pm.  Four daily snapshots, taken every morning 
at 1:15am, are available as well as three weekly snapshots which are taken every Sunday morning 
at 1:30am.
</p>

<p>The best part about filesystem snapshots is the ability for each user to recover their lost
data without the need for administrative assistance.  Snapshots for home directories are 
accessible on fang by following the directory structure under /opt/recover/.</p>

To recover your lost data:
<OL>
<LI><a href="ssh.php">ssh to fang.cs.sunyit.edu</a> 
<LI>Type: <font color="fuchsia">cd /opt/recover</font>
<LI>If you type <font color="fuchsia">ls</font>, you will see directories corresponding to the snapshot date.
<font color="fuchsia">cd</font> to the appropriate directory for how far back in time you would like to go.
<LI>You are now in the /home filesystem as it was captured at the point in time you selected.  Browse the
directory structure to locate the file you lost.
<LI>A <a href="snapshot-sample.php">step by step example</a> of using snapshot data recovery is available.
</OL>

<p>If you have any questions, please stop by our workroom in Kunsela C122 or email 
<?= emaillink("admins","the admins") ?>.</p>


<BR>
<a name="backups"></a>
<h3>Tape Backups:</h3>

<!--
<p>Ideally, if a file is accidentally deleted it will be discovered within the 2 week snapshot period.
Incase more time elapses, files can be recovered from tape.</p> 
-->

<p>
The CS department uses an <a href="http://www.exabyte.com/products/products/get_products.cfm?prod_id=621">Exabyte VXA-3</a> 
tape drive with a 10 tape changer for backups.  8 of the 10 tapes are devoted to home directory backups.  
These 8 tapes are in a 2 month rotation with 1 week's worth of backups saved to a tape.
</p>

<p>Home directory tape backups are performed nightly. 
Full dumps (a copy of all files) are run every Sunday morning. 
Incremental dumps (copy only those files that have changed since the last backup) 
are done every other night of the week.</P>


<p>Should you need files restored from backup tape, email 
<? emaillink("admins","the admins") ?>.</p>


<BR>
<a name="raid5"></a>
<h3>RAID Level 5:</h3>

<p>The 3 primary CS file storage areas are on RAID-5 arrays to help prevent data loss due to disk 
failure.
</p>

<p>Home directories are stored on 4
<a href="http://www.seagate.com/cda/products/discsales/marketing/detail/0,1081,657,00.html">Seagate Cheetah 15K.4</a>
73gb Ultra320 SCSI, 15,000 RPM disks attached to a 
<a href="http://www.adaptec.com/worldwide/product/proddetail.html?sess=no&language=English+US&prodkey=ASR-2200S&cat=%2fTechnology%2fSCSI%2fUltra320+SCSI+PCI+RAID">Adaptec 2200S SCSI RAID card</a>.

<p>The /opt/pub/ filesystem is stored on 4 
<a href="http://www.westerndigital.com/en/products/Products.asp?DriveID=59">250gb Western Digital SATA</a>
disks attached to a 
<a href="http://www.adaptec.com/worldwide/product/proddetail.html?sess=no&language=English+US&prodkey=AAR-2410SA_ENCL&cat=%2fTechnology%2fSerial+ATA%2fRAID+Controllers">Adaptec 2410SA RAID card and enclosure kit</a>.




<p>With RAID-5, a filesystem is stored across multiple disks along with parity information.  If any 
one of these disks fails, the others will be able to function based on what data and parity information
is still available.  A more detailed description is 
<a href="http://en.wikipedia.org/wiki/Redundant_array_of_independent_disks#RAID_5">available here.</a>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
