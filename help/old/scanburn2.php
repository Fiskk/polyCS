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
<B>Authors: </B></TD><TD><A href="mailto:merantn&#64;cs.sunyit.edu">Nick Merante</a> (CLI)<BR><A href="mailto:theinm&#64;cs.sunyit.edu">Myo Thein</a> (GUI)
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
			<LI><a href="#cli_files">Collecting the Files
			<LI><a href="#cli_copy">Copying a CD
			<LI><a href="#cli_audio">Creating an Audio CD
		</OL>
	<LI><a href="#gui_burncd">Graphical User Interface (GUI) Procedures
		<OL type="1">
			<LI><a href="#gui_files">Collecting the Files
			<LI><a href="#gui_mkiso">Creating an ISO image
			<LI><a href="#gui_burnfile">Burning the CD from Files (no image)
			<LI><a href="#gui_burniso">Burning the CD from ISO image
			<LI><a href="#gui_prepare">Checking your Personal Setting for Burner
			<LI><a href="#gui_copy">Copying a CD
			<LI><a href="#gui_audio">Creating an Audio CD
		</OL>
	</OL>

<LI><a href="#scanner">Using the Scanner</a>
	<OL type="A">
	<LI><a href="#cli_scanner">Command Line Interface (CLI) Procedures</a>
		<OL type="1">
			<LI><a href="#cli_">
		</OL>

	<LI><a href="#gui_scanner">Graphical User Interface (GUI) Procedures
		<OL type="1">
			<LI><a href="#gui_xsane">Starting Xsane
			<LI><a href="#gui_preview">Previewing Image
			<LI><a href="#gui_option">Setting Option	
			<LI><a href="#gui_save">Saving Image
			<LI><a href="#gui_scan">Scan Now
			<LI><a href="#gui_advance">Advanced Operation
		</OL>	
	
<LI><a href="#conc">Conclusion</a>
<LI><a href="#info">For More Information</a>
	<OL type="A">
	<LI><a href="#links">Links</a>
	<LI><a href="#man">Man Pages</a>
	</OL>

<BR><BR>
<a name="intro"></a>
<font size="+1"><B>Introduction:</B></font>

<p></p>

<BR><BR>
<a name="software"></a>
<font size="+1"><B>Hardware Used</b></font><BR><BR>
<PRE>
	HP CD Writer 9600 SCSI
 	HP Scanner	
</PRE>
<BR>
<a name="software"></a>
<font size="+1"><B>Software Used for this demonstration:</b></font><BR><BR>
<PRE>
	OS: FreeBSD 4.5-STABLE (zero.cs.sunyit.edu)
	
	CLI Tools:
		cdrecord 1.10
		mkisofs 1.14
	
	GUI Tools:
		gcombust 0.1.45 ( CD burner )
		
		sane-backends-1.0.6 
		sane-frontends-1.0.6 
		xsane-0.82 (Scanner Access Now Easy)


</PRE>
<BR>
<a name="conventions"></a>
<font size="+1"><B>Conventions:</b></font><BR><BR>
<PRE>
	<font color="fuchsia">User input will be in this color.</font>
	<font color="fuchsia"><Mouse Click></font>
	<font color="darkred">Output to the screen will be in this color</font>
</PRE>
<BR>
<a name="burncd"></a>
<font size="+1"><B>Using the CD Burner :</B></font>

<BR><BR>
<a name="gui_burncd"></a>
<B>Graphicial User Interface Procedure </b><BR><BR>

First of all you have to start the GUI program from command line:
<pre>
	$ <font color="fuchsia">gcombust &</font>
</pre>
 
Next you have to choose what you want to do.<br>
[Quick reminder] Click on the image to see the bigger image.
<BR><BR>
<a name="gui_files"></a>
<B>Collecting the Files </b><BR><BR>

To create the ISO image or to directly burn the files to CD, you have to collect the files you want to include in your selection.

Click on <font color="fuchsia"> < Data Files > </font> tag and then <font color="fuchsia"> < Add Directory ></font>, which is hilighted in the following windows.
<BR><BR>
<a href="pix/datafile.png" target=_blank><img src=pix/datafile.png width=400 height=400 ></a>
<BR><BR>


Then, you will see the following windows to add you file.  
You can add or remove the files to customized your collection.
<BR><BR>
<a href="pix/dataopen.png" target=_blank><img src=pix/dataopen.png width=400 height=400 ></a>
<BR><BR>
Now, you are ready to move to next stage with your collection of files.

<BR><BR>
<a name="gui_mkiso"></a>
<B>Creating an ISO Image </b><BR><BR>

Now, it is time to creat an ISO image from your collection of file.  If you want to burn directly to the CD without creating ISO image, skip to next section.

Click on the <font color="fuchsia"> < Burn > </font>tag and in the datasource choose <font color="fuchsia">< ISO 9660 Image ></font>.  Then, in the text box type in your desired location and file name for your ISO file.

I already highlighted the area for you in the following picture.  Make sure you have write permission to the directory.  On this computer, you can
write to <font color="fuchsia">/opt/pub/tmp/yourfilename.iso</font>

<BR><BR>
<a href="pix/isoimage.png" target=_blank><img src=pix/isoimage.png width=400 height=400></a>
<BR><BR>
You are now ready to create the ISO image file.  Click on the <font color="fuchsia">< Create Image From File > </font> button which is just below the text box to start creating the ISO file.


<BR><BR>
<a name="gui_burnfile"></a>
<B>Burning the CD from Files without Image</b><BR><BR>

When you arrive this section, I assume that you already read or knew how to collect the files you want to burn.

To burn directly from files, click on the <font color="fuchsia">< Burn ></font> tag in the top.

And then you need to make sure your data source is selected to <font color="fuchsia">< Data File no image ></font> in the top left corner of the windows. 

<BR><BR>
<a href="pix/burn1.png" target=_blank> <img src=pix/burn1.png width=400 height=400></a>
<BR><BR>
Now you are ready to burn, read the Checking your personal setting for the burner section to follow up the final stage.

<BR><BR>
<a name="gui_burniso"></a>
<B>Burning the CD from ISO Image</b><BR><BR>

When you arrive this section, I assume that you already created your ISO image or had an ISO image to burn.

Click on the <font color="fuchsia">< Burn ></font></a> tag and in the <font color="fuchsia">datasource</font>, choose <font color="fuchsia">ISO 9660 image</font>.  You can type your path or you can choose from the dialogue box by clicking on the <font
color="fuchsia">< Choose Image Location ></font>.


<BR><BR>
<a href="pix/isoimage1.png" target=_blank><img src=pix/isoimage1.png width=400 height=400></a>
<BR><BR>

Now you are ready to burn, read the Checking your personal setting for the burner section to follow up the final stage.


<BR><BR>
<a name="gui_prepare"></a>
<B>Checking Your Personal Setting for Burner</b><BR><BR>

In this section, we are going to make sure you burnner setting are correct.  First of all, all the nessary options are in the <font
color="fuchsia"><Burn></font> tag.<BR>

First of all, make sure you select the correct speed for burning.  Recommended speed is 8X.<BR>
Second, make sure you don't select the <font color="fuchsia"> < Dummy Test Run ></font> unless you want to run the dummy test.<BR>
Third, if you want the CD tray to eject when it is done, you can choose <font color="fuchsia">< Eject when done ></font> <BR>

Finally and most importantly, make sure the SCSI setting for Device is set to <BR> 
<font color="fuchsia">Scsi Bus</font>	: 0 <BR>
<font color="fuchsia">Target</font>	: 1 <BR>
<font color="fuchsia">Lun</font>	: 0 <BR>

You can click on the <font color="fuchsia">< Check SCSI Setting ></font> to make sure you configured the setting correctly.  It should say OK.
<BR><BR>
<a href="pix/burn2.png" target=_blank><img src=pix/burn2.png width=400 height=400></a>
<BR><BR>

After all these steps, you are ready to go.  Click on <font color="fuchsia">< Combust! ></font> to start the burning process.

<BR><BR>
<a name="scanner"></a>
<font size="+1"><B>Using the Scanner :</B></font>
<BR>
<a name="cli_scanner"></a>
<B>Command Line Interface Procedure </b><BR><BR>


<BR><BR>
<a name="gui_scanner"></a>
<B>Graphicial User Interface Procedure </b><BR><BR>

<BR><BR>
<a name="gui_xsane"></a>
<B>Starting Xsane</b><BR>

First of all you have to start the GUI program from command line:
<pre>
        $ <font color="fuchsia">xsane &</font>
</pre>


<BR><BR>
<a name="gui_preview"></a>
<B>Previewing Image </b><BR><BR>
To open the Preview windows, click View in the menu bar in the main window and choose show preview or press Ctl+2.  The following windows
should appear.  Then if you click on < Acquire Preview > , the scanner will get the preview for you.
<BR><BR>
<a href="pix/preview.png" target=_blank > <image src=pix/preview.png width=600 height=400 ></a>
<BR><BR>

<a name="gui_option"></a>
<B>Setting Option </b><BR><BR>
The following section will discuss on some basic option you need the software to work.  Make sure you scanner windows is set to the
following option:<br>
<font color="fuchsia">Xsane Mode</font> to Save<BR>
<font color="fuchsia">Scan Type</font> to Color<BR>
<font color="fuchsia">Scan Mode</font> to Normal<BR>
<font color="fuchsia">Range</font> to Full Range <BR>
The following is the typical setting for Xsane. 
<BR><BR>
<a href="pix/main.png" target=_blank ><image src=pix/main.png width=300 height=400></a>
<BR><BR>

<BR><BR>
<a name="gui_save"></a>
<B>Saving Image </b><BR><BR>
Now it is time to decide with what extension you want to save and where to save.  You can type your path, filename and extention by
choosing image type to <font color="fuchsia">< by ext ></font>.

Another way is type your path and filename and choose the supported type of image from the image type list.
<BR><BR>
<a href="pix/main1.png" target=_blank ><image src=pix/main1.png width=300 height=400></a>
<BR><BR>


<a name="gui_scan"></a>
<B>Scan Now </b><BR><BR>
Now you set up all the basic option you need and if you like the preview, you can start scanning now.  Click on the <font
color="fuchsia">< Start ></font> on the
bottom of the main windows to start scanning.  The image will store in the directory  with the filename you indicated.
<BR><BR>


<a name="gui_advance"></a>
<B>Advanced Operation</b><BR><BR>
This program can make copy, fax and other image operations.  You can set up some options from <font color="fuchsia">< Preference -> Setup ></font> menu. Check out
<a href="http://www.xsane.org> Xsane homepage</a> to learn more about it.
<BR><BR>

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
<LI> <A href="http://www.abo.fi/~jmunsin/gcombust"> Gcombust Producer Site </a>
<LI> <A href="http://www.abo.fi/~jmunsin/gcombust/FAQ.shtml">Gcombust FAQ </a>
<LI> <A href="http://www.xsane.org">Xsane HomePage </a>
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
