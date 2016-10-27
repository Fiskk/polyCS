<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>
<? $step = 1; ?>

<h1>Help: Enable hibernation on office PC</h1>
<div id='content'>

<BR>
<p>Enable hibernation on office PCs to save power.  Your computer will return to the state you last left it within approximately 30 seconds.  Hibernation consumes less power then standby and will survive a power outage. </p>

<BR><BR>

<P><?= $step++ ?>. Open Control Panel and select Power Options.</p>
<BR>

<BR>
<img border=0 src="pix/hibernate1.jpg">
<P><?= $step++ ?>. Enable Hibernation</p>

<BR>
<img border=0 src="pix/hibernate2.jpg">
<P><?= $step++ ?>. Set the PC to hibernate when the power button is pressed.  The system can be powered off by holding the power button down for 3-5 seconds.</p>

<BR>
<img border=0 src="pix/hibernate3.jpg">
<P><?= $step++ ?>. Set the PC to automatically hibernate after 2 hours of inactivity.</p>


</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
