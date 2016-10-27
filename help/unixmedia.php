<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Help: Removable Media</h1>

<div id='content'>
<h3>Removable Media for Linux:</h3>

<P>The C012 Linux lab supports floppy disks, CDs, CD burning, and USB thumb drives on all machines.</p>

<B>Floppy Disks and USB Thumb Drives:</B><BR>
<UL>
<LI><b>Accessing: </b>Whenever a floppy disk or USB drive is inserted into the computer, an icon on the desktop will be created for the device. Double clicking the icon will open a window in which you can explore the contents of the device.
<LI><b>Writing: </b>To write to your media, copy or create files in the window as you normally would in any other directory. Keep in mind the changes may not be written to the disc until it is unmounted.
<LI><b>Removing: </b>Before removing the device be sure to <b>unmount it;</b> this is an important step to prevent data loss. To unmount a device, right click the icon on the desktop and click "Unmount Volume"
</UL>

<BR>
<B>CD-ROMs</B><BR>
<UL>
<LI><b>Accessing: </b>To access the files on a CD-ROM, click the desktop icon that is created when the CD-ROM is inserted. You can browse the contents of the CD-ROM inside of this window. <i>Note</i>: If the CD contains anything that can be automatically run, a prompt will open asking if you would like to run it.
<LI><b>Writing: </b>When a blank CD-ROM is inserted into the CD-ROM drive, a window should automatically open up showing the (currently empty) contents of the CD. Drag any files to be written to the CD into this window, and click the "Burn" button to begin burning.
<LI><b>Burning an ISO: </b>To burn an ISO to disc, right click the target ISO and click "Write to Disc"
<LI><b>Creating an ISO to Burn: </b>Create a directory to collect all the files for ISO creation. Open a terminal and cd to the directory. Once in the directory, type <font color="fuchsia">mkisofs -RrlJV "My CD" -o /opt/pub/spool/examplecd.iso</font>, where My CD is a descriptive name of the CD, and examplecd.iso is the name for your ISO image.
</UL>

<BR>
<B>Advanced Information</B><BR>
<UL>
<LI><b>Mount Point: </b>Devices are mounted in the /media folder by their name. For example, if you mount the CD "MyCD", the device will be mounted at /media/MyCD/
</UL>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
