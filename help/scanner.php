<!--
SUNY Institute of Technology
Department of Computer Science
DogNET Help Docs
-->
<?php include("../header.php"); ?>

<h1>Help: Scanning Documents</h1>

<div id='content'>
<p>
<B>Title:</B>  Tutorial for the C012 Scanner Station<BR>
<B>Date:</B> 30-JAN-02<BR>
<B>Author:</B> <A href="http://www.myothein.net">Myo Min Thein</a> (GUI)

<BR><BR><BR>
<a name="gui_xsane"></a>
<B>Starting Xsane</b><BR>

First of all you have to start the GUI program from command line:</p>
<pre>
        $ <font color="fuchsia">xsane &</font>
</pre>


<p>
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
</p>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
