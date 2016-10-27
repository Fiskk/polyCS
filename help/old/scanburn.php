<!--
SUNY Institute of Technology
Department of Computer Science
DogNET Help Docs
-->

<? require("{$_SERVER['DOCUMENT_ROOT']}/php-bin/dog-lib.php") ?>

<? dogmainheader(); ?>

<center><font size="+3"><B>Help Docs</B></font></center>
<BR><BR><BR>


<B>Title:</B>  Tutorial for the C012 Scanner & Burner Station<BR>
<B>Date:</B> 30-JAN-02<BR>
<table cellpadding=0 cellspacing=0 border=0>
<TR><TD valign=top>
<B>Authors: </B></TD><TD><A href="/php-bin/form-mail.php?recip=merantn">Nick Merante</a> (CLI)<BR><A href="/php-bin/form-mail.php?recip=theinm">Myo Thein</a> (GUI)
</TD></TR>
</TABLE>

<BR><BR>
<font size="+1"><B>Outline</B></font><BR>

<OL type="I">
<LI><a href="#intro">Introduction</a>
<LI><a href="#hardware">Hardware Used</a>
<LI><a href="#software">Software Used</a>
<LI><a href="#conventions">Conventions</a>
<LI><a href="#burncd">Using the CD Burner</a>
	<OL type="A">
	<LI><a href="#cli_burncd">Command Line Interface (CLI) Procedures
		<OL type="1">
			<LI><a href="#cli_files">Collecting the Files
			<LI><a href="#cli_mkiso">Creating an ISO image
			<LI><a href="#cli_burnit">Burning the CD
			<LI><a href="#cli_cleanup">Cleanup
			<LI><a href="#cli_copy">Copying a CD
			<LI><a href="#cli_audio">Creating an Audio CD
		</OL>
	<LI><a href="#gui_burncd">Graphical User Interface (GUI) Procedures

	</OL>

<LI><a href="#scanner">Using the Scanner</a>
	<OL type="A">
	<LI><a href="#cli_scanner">Command Line Interface (CLI) Procedures</a>
		<OL type="1">
			<LI><a href="#cli_">
		</OL>

	<LI><a href="#gui_scanner">Graphical User Interface (GUI) Procedures
	</OL>

<LI><a href="#conc">Conclusion</a>
<LI><a href="#info">For More Information</a>
	<OL type="A">
	<LI><a href="#links">Links</a>
	<LI><a href="#man">Man Pages</a>
	<LI><a href="#keys">My Key Info</a>
	</OL>
</OL>

<BR><BR>
<a name="intro"></a>
<font size="+1"><B>Introduction:</B></font>

<p></p>

<BR><BR>
<a name="software"></a>
<font size="+1"><B>Software Used for this demonstration:</b></font><BR><BR>
<PRE>
	OS: FreeBSD 4.5-STABLE (zero.cs.sunyit.edu)
	
	CLI Tools:
		cdrecord 1.10
		mkisofs 1.14
	
	GUI Tools:
</PRE>
<BR>
<a name="conventions"></a>
<font size="+1"><B>Conventions:</b></font><BR><BR>
<PRE>
	<font color="fuchsia">User input will be in this color.</font>
	<font color="darkred">Output to the screen will be in this color</font>
</PRE>
<BR>
<a name="cli_files"></a>
<font size="+1"><B>Collecting the Files</B></font><BR><BR>

<P>When burning a CD from files on your hard drive, the first step is to assemble the files in one place.  There is ample disk space available on zero in /opt/pub for doing so.  Please be sure to read the #README.1st file and follow the conventions listed to keep the directory neat.</p>

<p>For this demonstration, these are the files I will be burning to the CD.</p>

<PRE>
<font color="darkred">
	merantn@zero:/opt/pub/merantn/example> <font color="fuchsia">ls</font>
	demarc-1.05-stable.tar.gz       make-3.79.tar.gz
	djvulibre-3.5.4.tar.gz          pop-before-smtp-1.28.tar.gz
	epasswd-2.0.tar.gz              psad-0.9.4.tar.gz
	freev_v320_freebsd.tar.gz       qpopper4.0.3.tar.gz
</pre>
</font>

<BR>
<a name="cli_mkiso"></a>
<font size="+1"><B>Creating the CD Image</B></font><BR><BR>

<p>After the files are collected, the next step is to create the CD image.  This image is what will actually be burned to the CD.</p>

<PRE>
<font color="darkred">
	merantn@zero:/opt/pub/merantn/example> <font color="fuchsia">mkisofs -R -r -l -J -V "My CD" -o /opt/pub/spool/examplecd.iso *</font>
	Total translation table size: 0
	Total rockridge attributes bytes: 914
	Total directory bytes: 0
	Path table size(bytes): 10
	Max brk space used cfe4
	3520 extents written (6 Mb)
</PRE>
</font>

<P>Explaination of the options passed to the mkisofs command are as follows: </p>
-R : Rock Ridge Support, useful for creating cds which will be read on UNIX machines.<BR>
-r : Sets unix file ownerships and modes to useful values<BR>
-l : Allow for long file names (up to 31 characters)<BR>
-J : Create Joliet directory records, useful for cds which will be read on Windows machines<BR>
-V : Volume ID<BR>
-o : Output filename, the file to same the image as.<BR>
*  : Add all of the files (*) to the CD image


<BR><BR><BR>
<a name="cli_burnit"></a>
<font size="+1"><B>Buring the Image to CD</B></font><BR><BR>
<P>Now that we have our CD image created, we are ready to send our files to the CD burner.</P>

<font color="darkred">
<PRE>
	merantn@zero:/opt/pub/merantn/example> <font color="fuchsia">cd /opt/pub/spool/ </font>
	merantn@zero:/opt/pub/spool> <font color=fuchsia>ls</font>
	examplecd.iso

	merantn@zero:/opt/pub/spool> <font color=fuchsia>cdrecord speed=8 dev=0,1,0 examplecd.iso</font>
	Cdrecord 1.10 (i386-unknown-freebsd4.4) Copyright (C) 1995-2001 Jörg Schilling
	scsidev: '0,1,0'
	scsibus: 0 target: 1 lun: 0
	Using libscg version 'schily-0.5'
	Device type    : Removable CD-ROM
	Version        : 4
	Response Format: 2
	Capabilities   : SYNC 
	Vendor_info    : 'HP      '
	Identifikation : 'CD-Writer+ 9600 '
	Revision       : '1.0a'
	Device seems to be: Generic mmc CD-RW.
	Using generic SCSI-3/mmc CD-R driver (mmc_cdr).
	Driver flags   : SWABAUDIO
	Starting to write CD/DVD at speed 8 for single session.
	Last chance to quit, starting write in 0 seconds. Operation starts.
	Track 01: Total bytes read/written: 7208960/7208960 (3520 sectors).
</pre>
</font>

<P>Now to check our CD and make sure the files were written.  Note:  Be sure to umount (umount) the CD before taking it out of the drive!</p>

<font color="darkred">
<pre>
	
	merantn@zero:/opt/pub/spool> <font color=fuchsia>mkdir ~/mnt</font>
	merantn@zero:/opt/pub/spool> <font color=fuchsia>mount -t cd9660 /dev/cd0a ~/mnt</font>
	merantn@zero:/opt/pub/spool> <font color=fuchsia>ls ~/mnt</font>
	demarc-1.05-stable.tar.gz       make-3.79.tar.gz
	djvulibre-3.5.4.tar.gz          pop-before-smtp-1.28.tar.gz
	epasswd-2.0.tar.gz              psad-0.9.4.tar.gz
	freev_v320_freebsd.tar.gz       qpopper4.0.3.tar.gz

	merantn@zero:/opt/pub/spool> <font color=fuchsia>umount ~/mnt</font>
</pre>
</font>

<BR>
<a name="cli_cleanup"></a>
<font size="+1"><B>Cleaning up the files</B></font><BR><BR>
<p>With our CD successfully created, we can remove some of the files we no longer need.</p>

<font color="darkred">
<pre>
        merantn@zero:/opt/pub/spool> <font color=fuchsia>cd /opt/pub/spool</font>
        merantn@zero:/opt/pub/spool> <font color=fuchsia>rm examplecd.iso</font>
        merantn@zero:/opt/pub/spool> <font color=fuchsia>cd /opt/pub/merantn</font>
        merantn@zero:/opt/pub/merantn> <font color=fuchsia>rm -rf example</font>
	





<BR><BR><BR><BR><BR><BR>
<a name="keygen"></a>
<B>Generating your Public & Private keys:</b><BR><BR>

The first step to generating your keys is to create a directory under your home directory named .pgp.  This
is the location where the PGP config file and keyrings will be stored.
<pre>
	$ <font color="fuchsia">mkdir ~/.pgp</font>
</pre>
Next, you must create your secret/public keys:
<pre>
	$ <font color="fuchsia">pgpk -g</font>
</pre>







<BR><BR>
<a name="conc"></a>
<font size="+1"><B>Conclusion</B></font><BR><BR>



<BR><BR><BR><BR>
<a name="info"></a>
<font size="+1"><B>For More Information</B></font><BR><BR>


<BR><BR>
<a name="links"></a>
<B>Links</B><BR><BR>
<UL>
<LI>
</UL>

<a name="man"></a>
<B>Man Pages</B><BR><BR>

<UL>
<LI><a href="man/pgp5.html">PGP v5</a>
<LI><a href="man/pgpk.html">Managing PGP Keyrings (pgpk)</a>
<LI><a href="man/pgpe.html">Encrypting Messages (pgpe)</a>
<LI><a href="man/pgpv.html">Decrypting Messages (pgpv)</a>
<LI><a href="man/pgp.cfg.html">PGP Configuration File (pgp.cfg)</a>
<LI><a href="man/pgp4pine.html">PGP4Pine (pgp4pine)</a>
</UL>





<BR><BR>

<? dogmainfooter("Nick Merante","merantn") ?>
