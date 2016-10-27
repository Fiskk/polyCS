<?php include("../header.php"); ?>

<h1>Help: Websites</h1>

<div id='content'>
<a name="www"></a>
<h3>Setting up your Web Page:</h3>

<p>On the unix command line while in your home directory, type the following:</p>
<font color="darkred">
<pre>
	$ <font color="fuchsia">chmod 711 ~</font>
	$ <font color="fuchsia">mkdir www</font>
	$ <font color="fuchsia">chmod 711 www</font>
	$ <font color="fuchsia">cd www</font>
	$ <font color="fuchsia">touch index.html</font>
	$ <font color="fuchsia">chmod 644 index.html</font>

	<font color="black">Note:  The</font> $ <font color="black">symbol above signifies the shell prompt.  Do not type this character.</font>

</pre>
</font>

<p>Now edit the index.html and put in the material you would like your web page to contain.
<br /><br />
Once finished, it can be accessed as http://www.cs.sunyit.edu/~youruserid

<br /><br />
Your home directory can be accessed via a Secure Shell or Secure FTP
connection to fang.cs.sunyit.edu.
<br /><br />
</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
