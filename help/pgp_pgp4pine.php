<!--
SUNY Institute of Technology
Department of Computer Science
DogNET Help Docs
-->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Help: PGP Encryption</h1>

<div id='content'>
<p>
<B>Title:</B>  Configuring PGP for use under FreeBSD systems<BR>
<B>Date:</B> 05-JAN-01<BR>
<B>Author:</B> <?= emaillink("merantn","Nick Merante") ?>

</p>
<h3>Outline</h3>

<OL type="I">
<LI><a href="#intro">Introduction</a>
<LI><a href="#whyenc">Why Encryption</a>
<LI><a href="#software">Software Used</a>
<LI><a href="#conventions">Conventions</a>
<LI><a href="#pgpsetup">PGP Setup & Key Management</a>
	<OL type="A">
	<LI><a href="#keygen">Generating your Public & Private keys</a>
	<LI><a href="#keyex">Extracting keys from your keyring</a>
	<LI><a href="#keyadd">Adding Keys to your keyring</a>
	<LI><a href="#keyls">Viewing keys on your keyring</a>
	</OL>
<LI><a href="#encdec">Command Line Encryption/Decryption</a>
	<OL type="A">
	<LI><a href="#pgpe">Encrypting Messages</a>
	<LI><a href="#pgpv">Decrypting Messages</a>
	</OL>
<LI><a href="#pgp4pine">PGP4Pine</a>
	<OL type="A">
	<LI><a href="#p4psetup">Setting up PGP4Pine</a>
	<LI><a href="#p4pout">Sending Messages</a>
	<LI><a href="#p4pin">Receiving Messages</a>
	<LI><a href="#p4pkey">Adding Keys</a>
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
<h3>Introduction:</h3>

<p>With the increased use of shared computer systems and the internet, a greater need exists for the encryption of sensitive information.  Pretty Good Privacy (PGP) has become the most popular tool for everyday encryption. PGP uses public-key encryption to protect email and data files.</p>
<P>In conventional cryptosystems, such as the US Federal Data Encryption Standard (DES), a single key is used for both encryption and decryption.  This means that the key must be initially transmitted via secure channels so that both parties can know it before encrypted messages can be sent over insecure channels.  This may be inconvenient, if not impossible.  If you have a secure channel for exchanging keys, then why do you need cryptography in the first place?</p>
<P>In public key cryptosystems, everyone has two related complementary keys, a publicly revealed key and a secret key.  Each key unlocks the code that the other key makes.  Knowing the public key does not help you deduce the corresponding secret key.  The public key can be published and widely distributed across a communications network.  This protocol provides privacy without the need for the same kind of secure channels that a conventional cryptosystem requires.</p>
<P>Anyone can use a recipient's public key to encrypt a message to that person, and that recipient uses her own corresponding secret key to decrypt that message.  No one but the recipient can decrypt it, because no one else has access to that secret key.  Not even the person who encrypted the message can decrypt it.</p>


<a name="whyenc"></a>
<h3>Why Encryption?:</h3>

<P>Many people new to encryption ask why bother if their messages do not contain material that requires such privacy.
If that is the case, then why do they put their postal mail in envelopes rather then on postcards?  Because it makes your
message less likely to be read by someone other then the desired recipient.  The same holds true for email messages.  Email
passes through several systems before reaching the desired host.  And once it reaches that host, there is no way to know for
sure no one else is reading it or that it is not backed up to a tape that may be left lying about for years to come.</p>


<a name="software"></a>
<h3>Software Used for this demonstration:</h3>
<PRE>
	OS: FreeBSD 4.0-RELEASE (fang.cs.sunyit.edu)
	PGP version 5.0
	pgp4pine version 1.74
	pine version 4.21
</PRE>
<BR>
<a name="conventions"></a>
<h3>Conventions:</h3>
<PRE>
	<font color="fuchsia">User input will be in this color.</font>
	<font color="darkred">Output to the screen will be in this color</font>
</PRE>
<BR>
<a name="pgpsetup"></a>
<h3>PGP Setup & Key Management:</h3>
<p>

<a name="keygen"></a>
<B>Generating your Public & Private keys:</b><BR><BR>

The first step to generating your keys is to create a directory under your home directory named .pgp.  This
is the location where the PGP config file and keyrings will be stored.</p>
<pre>
	$ <font color="fuchsia">mkdir ~/.pgp</font>
</pre>
<p>Next, you must create your secret/public keys:</p>
<pre>
	$ <font color="fuchsia">pgpk -g</font>
</pre>
<p>You will be prompted to choose between the DSS/Diffie-Hellman or the RSA algorithm.
If you will not be communicating with a version of PGP prior to version 5.0, select
DSS/Diffie-Hellman, otherwise select RSA.  If you are concerned with backwards
compatibility, RSA is the algorithm of choice.</p>
<font color="darkred">
<pre>
	Choose the type of your public key:
	  1)  DSS/Diffie-Hellman - New algorithm for 5.0 (default)
	  2)  RSA
	Choose 1 or 2: <font color="fuchsia">2</font>
</pre>
</font>
<p>Choose a key size depending on the degree of security desired.  Generally, a size
of 1024 will be sufficient.</p>
<font color="darkred">
<pre>
	Pick your public/private keypair key size:
	  1)   768 bits- Commercial grade, probably not currently breakable
	  2)  1024 bits- High commercial grade, secure for many years
	  3)  2048 bits- "Military" grade, secure for the foreseeable future
	Choose 1, 2 or 3, or enter desired number of bits
	(768 - 2048): <font color="fuchsia">2</font>
</pre>
</font>
<p>Now your key needs a user ID.  The preferred form for this will be your FULL name
followed by your email address in angle brackets.  If this standard is not followed,
you will lose the benefits of PGP's keyserver and email integration.</p>
<font color="darkred">
<pre>
	Enter a user ID for your public key: <font color="fuchsia">Nick Merante &lt;merantnATcs.sunyit.edu></font>
</pre>
</font>
<p>You will be prompted for the number of days this key will be valid for.  Enter 0 to
make the key valid forever.</p>
<font color="darkred">
<pre>
	0 is forever (and the default): <font color="fuchsia">0</font>
</pre>
</font>
<p>You now must enter a pass phrase to protect your private key.  Your pass phrase can be
any sentence or phrase and may have as many words, spaces, punctuation, or any other
printable characters as you would like.  The longer and more complex this pass phrase is,
the more secure it will be.  Note: The stars are shown only to illustrate input, do not use
them as your passphrase.  When entering your passphrase, nothing will be echoed to the screen.</p>
<font color="darkred">
<pre>
	Enter pass phrase: <font color="fuchsia">***************</font>
</pre>
</font>
<p>You will then be prompted to reenter the pass phrase.</p>
<font color="darkred">
<pre>
	Enter again, for confirmation:
	Enter pass phrase: <font color="fuchsia">***************</font>
</pre>
</font>
<p>The system will now prompt you for random keystrokes to seed the key.

If all goes well, your secret/public keypair will now be generated and put in the keyrings in the .pgp directory.
You will be asked if you would like to send the keypair to a key server.  You may hit enter to bypass this.

<BR><BR><BR>
<a name="keyex"></a>
<B>Extracting keys from your keyring:</b><BR><BR>

Now that you have your PGP keys created, it's time to distribute your public key for people to send you
encrypted messages.</p>

<font color="darkred">
<pre>
	$ <font color="fuchsia">pgpk -x merantn</font>
	-----BEGIN PGP PUBLIC KEY BLOCK-----
	Version: PGPfreeware 5.0i for non-commercial use

	mQCNAzVH9h4AAAEEAL8n1Yc/bjQhOeYPr7+IDKb+8Eec7cqaQXWNCCBxUo7QfDm5
	NlY6iT+wbyKpJAxIfaB2G7JX3492hNScaOgDXAPIRkI5iDvbnNCKzut8scy/n4Qw
	UOjpcfkt+2bVGOXy99pCEpQ1P/JFNqKwlEVxHRkcVBo6X/SOFk4p35A3h1GJAAUR
	tCtOaWNrIE1lcmFudGUgPC09Km5pY2subWVyYW50ZUBwb2JveC5jb20qPS0+iQCV
	AwUQOQH8704p35A3h1GJAQHXUwQAkxEzC4TY/18b05z45juX3UyA/yd1yO3KTKbR
	ddDR3EFEi70rYQRNyApShF7oeEVSKeGe/bHtC+paGaDj8W7oHi3RG9j9wUS9oHgB
	XMkSV9dq+UDwdyDIklGjjilMRUH06RQ36nSr6/DVQaWtsI0sMEWMjpkDtCa6eVE9
	86kq1x60GUh5ZHJveCA8aHlkcm94QG55bS54Zy5udT6JAJUDBRA5kuDPTinfkDeH
	UYkBAWPMBACBTnL3CBd5SrL7WIxcqUWe5ZJXSU7n4OVZ2EhFxT8NZkZo9GldnXN5
	yGXsIsmxP4Um68Xt7cQkr4qUn+k0uZDP15WaLFHfWCjGQKF5nzao+jA5G3PE0jTQ
	NGxMbC3siZFLMG1BEo3l3ttVZz/hi7rAFM+FIZHYr34vUbETL3+ktA==
	=USCh
	-----END PGP PUBLIC KEY BLOCK-----
</pre>
</font>

<p>The above output is an example of a public key, which should be distributed exactly as displayed.  Your actual key may be much larger, depending upon the algorithm and key size you selected.  The key displayed is for a 1024 bit RSA public key.

<BR><BR><BR>
<a name="keyadd"></a>
<B>Adding Keys to your keyring:</B><BR><BR>

In order to encrypt messages to others, you will need their public key on your keyring.</p>
<pre>
	$ <font color="fuchsia">pgpk -a keyfile.txt</font>
</pre>
<p>keyfile.txt contains the public key of someone you would like to send encrypted messages to.  It will be similar to the key above.

<BR><BR><BR>
<a name="keyls"></a>
<B>Viewing keys on your keyring:</B><BR><BR>

The following command may be used to view which public keys you have on your keyring.</p>
<font color="darkred">
<pre>
	$ <font color="fuchsia">pgpk -l</font>
	Type Bits KeyID      Created    Expires    Algorithm       Use
	pub  1024 0x384FFEE8 2000-06-29 ---------- DSS             Sign & Encrypt
	sub  3072 0x24BBC1A5 2000-06-29 ---------- Diffie-Hellman
	uid  Jeff Tyler &lt;tylerjATcs.sunyit.edu>

	pub  1024 0x9AC2D5ED 2000-08-07 ---------- DSS             Sign & Encrypt
	sub  4096 0xF387AAB1 2000-08-07 ---------- Diffie-Hellman
	uid  Mario Dean Augustin &lt;augustmATcs.sunyit.edu>

	sec+ 1024 0x320E45A3 2000-04-22 ---------- DSS             Sign & Encrypt
	sub  3072 0x640C309F 2000-04-22 ---------- Diffie-Hellman
	uid  Nick Merante &lt;merantnATcs.sunyit.edu>

	pub  1024 0x1329B500 2001-04-27 ---------- DSS             Sign & Encrypt
	sub  1024 0xDD117EE2 2001-04-27 ---------- Diffie-Hellman
	uid  Rich Mirch &lt;richATmirch.com>

	4 matching keys found
</PRE>
</font>


<a name="encdec"></a>
<h3>Command Line Encryption/Decryption</h3>
<p>

<a name="pgpe"></a>
<B>Encrypting Messages</b><BR><BR>

Once you have someone else's public key on your keyring, you can encrypt messages or files to securely transmit to that person.
This example will encrypt the text file <I>secrets</I> to merantn.  The -a option specifies ascii output, the -r option specifies the recipient.  The encrypted output will be saved to <I>secrets.asc</I>.  The .asc extension stands for ASCII encrypted file.
<font color="darkred">
<pre>
	$ <font color="fuchsia">pgpe -a -r merantn secrets</font>
	  1024 bits, Key ID 320E45A3, Created 2000-04-22
	   "Nick Merante &lt;merantnATcs.sunyit.edu>"

	  Creating output file secrets.asc
</pre>
</font>

The contents of secrets.asc are:
<font color="darkred">
<pre>
	$ <font color="fuchsia">cat secrets.asc</font>
	-----BEGIN PGP MESSAGE-----
	Version: PGPfreeware 5.0i for non-commercial use
	MessageID: jpfl3lCe5tPhEbMbR2keu5oL4wK0tCkY

	qANQR1DBwk4DSeE8GGQMMJ8QC/4ueFjQTODI7yp1MYow153jSMVdRYjFlhbj7K/G
	7jKtViOth5Zt/qh7DUxzgqf298yPz3WyDFTdk/dHs/wYhRysIG/gsF25VVEiFxZG
	uRnK8w3ELMNslpyfFvji7sOnsD+Cxql9bg8w0JWROtt6pZMFE4j4dzVsGXLRp5y3
	tIa+48Gxy3MM5woQs32MwaOfEfBxwcsQTbwfMXYmOQs0h+LKprfEyZumiYlOGoJn
	6IWJjSvAloToq+y/CL8xr0LEdUvMzIg3jTsrkDJdYlbyqIp7SrjK6rCwA7hQ4NJa
	S4QMbfzEyN6mIpmzZRvtFMb8MuPuDV3xF91A20Mqx4NXd/teQtqcyLiOKRlLO2Y1
	Q4SKXDuirJ4EzFR2fUvxL6m/Ch5Y+2jvgifQsWgOI/a/oP7nUVcgrkXNBF5PscEt
	hePMoIwDu+X5UcMX6lQWyOWPhbwu+5z2H85HmmwKElivxrXsijYapJUFUBGPPTxz
	b0dqhs9vyzBxtamUlvG8mUKtuzUMAK0TQZ4dFNv2D44EUU2suMPay9x5BrU3Y6hG
	Jc1DOgPDwLJR7K7LUiiekTOgsZL513ZcAu3OSao98UDGncudbgv3Y0wzS89Fz3GC
	tumkPBviFy3oD3Ns4gwk6qTnaftNQ/M9xbXdJNgTtQC7njYJ8eNEEUYGQgTfKp0o
	blevaB97XfBJNC8ptEOk9ioIxgeTrD2gaKibM15SNahHvVSTNAQnLUCtNM6Ow9/R
	uFeirwXAQznsKNvabULLviEVtpNKi9DbPchqLmP6TvPAXvfUx+WCjaAZfL07YlGl
	iaUu/GO61DsEKXDge/xmncdNAUbdsGLn/NiuYYY4H/X4yE/518d2ZjHTeaQdlT4p
	5Sj0tYff8UvBem5FCPHIVhQ75T08A38DFFeNn3GyCpUFY8fcNhqF3xt8MjMc6cSD
	quBodzvqWxfE1LjlvLe6rW58ROt9gegkww8rub8us/gkJ7cEbLokGR7N3Xv14enB
	xugTN6GB0UJ+aM8W8re9/RMeXXvFPMlZMULcytS+w11LW6vRZkWJuIcpiRcoeIvf
	GhBBOPu0blKZvsr+QDFzg5lvxQYi8lkRWX6UiWY4OW+Dfl7T/qwcmmXWoypAPTk7
	n0PE/S6Jt4n63+8cucIe7Hk=
	=nQ1t
	-----END PGP MESSAGE-----
</pre>
</font>

Our secret message may now be securely transmitted via insecure channels.

<BR><BR><BR>
<a name="pgpv"></a>
<B>Decrypting Messages</b><BR><BR>

Now that you have created your PGP keys, distributed your public key, and have started sending encrypted messages, you may be eager to receive encrypted messages.
Once you have received an encrypted message, it can be viewed with either of the following steps:

<BR><BR>
Option 1: The decrypted message will be saved to the file <I>secrets</i>:
<font color="darkred">
<pre>
	$ <font color="fuchsia">pgpv secrets.asc</font>
	Message is encrypted.
	Need a pass phrase to decrypt private key:
	  3072 bits, Key ID 640C309F, Created 2000-04-22
	Enter pass phrase:
	Pass phrase is good.
	Opening file "secrets" type binary.
</pre>
</font>

Option 2: The decrypted message will be outputted to the screen (STDOUT):
<font color="darkred">
<pre>
	$ <font color="fuchsia">pgpv -f &lt; secrets.asc</font>
	No files specified.  Using stdin.

	Message is encrypted.
	Need a pass phrase to decrypt private key:
	  3072 bits, Key ID 640C309F, Created 2000-04-22
	Enter pass phrase:
	Pass phrase is good.
	Opening file "stdout" type binary.

	THIS IS OUR SECRET MESSAGE!

	THE YELLOW EAGLE FLIES AT DUSK.
</pre>
</font>

</p>
<a name="pgp4pine"></a>
<h3>PGP4Pine</h3>
<p>
PGP4Pine is a filter for the unix email program pine.  This filter enables the user to encrypt and decrypt messages as they are sent or received from within pine.  Keys can also be added to the proper keyring as they are received via email.

<BR><BR><BR><BR>
<a name="p4psetup"></a>
<B>Setting up PGP4Pine</B><BR><BR>
</p>
<OL type=1>
<LI>	If the file ~/.pgp4pinerc does not exist, run:
<PRE>
	$ <font color="fuchsia">cp /usr/local/share/examples/pgp4pine/pgp4pinerc.example ~/.pgp4pinerc</font>
</PRE>
<LI>	From within pine, go into Setup, then Configuration.
<LI>	Set display-filters (near the bottom) to:
<PRE>
	<font color="fuchsia">_BEGINNING("-----BEGIN PGP")_ /usr/local/bin/pgp4pine -d -i _TMPFILE_</font>
</PRE>
<LI>	Set sending-filters to:
<PRE>
	<font color="fuchsia">/usr/local/bin/pgp4pine -e -i _TMPFILE_ -r _RECIPIENTS_</font>
</PRE>
<LI>	If you would like Pine to offer pgp4pine for sending mail  by default,  go  to  Setup  ->  Configuration, and turn on 'compose-send-offers-first-filter'. Otherwise, you have to use Ctrl-N / Ctrl-P to access the filter.
</OL>

<p>
<a name="p4pout"></a>
<B>Sending Messages</B><BR><BR>

Now, when sending messages with pine, if the recipient's email address matches an email address in your PGP keyring,
the text below will be presented and you will be given the option to sign and encrypt the message, just sign the message,
just encrypt the message, send it unmodified, or abort and return back to pine.</p>

<font color="darkred">
<pre>
	Written by Chris Wiegand &lt;cwiegand@urgentmail.com>
	Current development by Holger Lamm &lt;holger@flatline.de>
	Homepage: http://pgp4pine.flatline.de/
	This program is protected by the GPL v2.

	Loading profiles: pgp5, done.


	Your preset is: none
	Loading public keyring (this may take a couple of seconds)...
	.............
	Loading secret keyring (this may take a couple of seconds)...
	..

	Checking recipients ...

	mirchrATsunyit.edu...  - key 0x3F60FA10 found


	You know all recipient keys. You may:
	a) Sign and encrypt the message
	b) Sign the message
	c) Encrypt the message
	d) Send it unmodified
	q) Abort and Quit

	Make your choice: <font color="fuchsia">c</font>
</pre>
</font>

<p>
<a name="p4pin"></a>
<B>Receiving Messages</B><BR><BR>

Pine will also scan incomming messages for PGP headers.  If an encrypted message is received,
PGP will try to decrypt it.  If you possess the correct key, you will be prompted to enter a
passphrase and the decrypted message will be shown on the screen.</p>

<font color="darkred">
<pre>
	pgp4pine 1.74
	Written by Chris Wiegand &lt;cwiegand@urgentmail.com>
	Current development by Holger Lamm &lt;holger@flatline.de>
	Homepage: http://pgp4pine.flatline.de/
	This program is protected by the GPL v2.

	Loading profiles: pgp5, done.


	Message is encrypted.
	Need a pass phrase to decrypt private key:
	  3072 bits, Key ID 640C309F, Created 2000-04-22
	Enter pass phrase: <font color="fuchsia">***************</font>
	Pass phrase is good.
	Opening file "/home/u/csci2/dogs/merantn/pgp4pine.tmp" type binary.

	Please press Enter / Return a couple times to continue.
	If you want to cancel, press Control-C.
</pre>
</font>

<p>
<a name="p4pkey"></a>
<B>Adding Keys</B><BR><BR>

Pine will also scan for incoming PGP keys.  If a key is received, you will be presented
with the following screen and given the option to add it to your keyring.</p>

<font color="darkred">
<pre>
	pgp4pine 1.74
	Written by Chris Wiegand &lt;cwiegand@urgentmail.com>
	Current development by Holger Lamm &lt;holger@flatline.de>
	Homepage: http://pgp4pine.flatline.de/
	This program is protected by the GPL v2.

	Loading profiles: pgp5, done.


	Opening file "Temporary PGP Keyfile" type binary.
	Copying key file to "/tmp/ptmpQ30672", running pgpk to process it...

	pgpk -a /tmp/ptmpQ30672

	Adding keys:

	Key ring: '/tmp/ptmpQ30672'
	Type Bits KeyID      Created    Expires    Algorithm       Use
	pub  1024 0x3F60FA10 2000-09-29 ---------- DSS             Sign & Encrypt
	sub  3072 0xF08CF6F6 2000-09-29 ---------- Diffie-Hellman
	uid  Rich Mirch &lt;mirchrATsunyit.edu>

	1 matching key found

	Add these keys to your keyring? [Y/n] <font color="fuchsia">Y</font>

	Keys added successfully.

	Please press Enter / Return a couple times to continue.
	If you want to cancel, press Control-C.
</pre>
</font>

<!--
<BR><BR>
<a name="conc"></a>
<h3>tkPGP</h3>
-->


<a name="conc"></a>
<h3>Conclusion</h3>
<p>
PGP is a very powerful privacy and security tool.  As the size of the internet and the widespread use
of personal computers grow, so will the need to keep our private information secure, whether it be
bank account information kept on your computer at work or secret messages transmitted within oppressive nations.
The success of a encryption scheme such as PGP depends solely upon its widespread use.
</p>
<BR><BR>
<a name="info"></a>
<h3>For More Information</h3>
<p>
There is a vast amount of information and tools available to aid in data security and privacy.
</p>
<BR><BR><BR>
<a name="links"></a>
<B>Links</B><BR>
<UL>
<LI><a href="http://web.mit.edu/network/pgp.html">http://web.mit.edu/network/pgp.html - MIT's PGP Resources and Freeware software</a>
<LI><a href="http://www.pgpi.org/">http://www.pgpi.org/ - The international PGP web site</a>
<LI><a href="http://www.gnupg.org/">http://www.gnupg.org/ - A GNU version of PGP</a>
<LI><a href="http://www.openpgp.org/">http://www.openpgp.org/ - Information on the open pgp protocol</a>
<LI><a href="http://www.hushmail.com/">http://www.hushmail.com/ - Free, web based, secure email</a>
</UL>
<BR>
<a name="man"></a>
<B>Man Pages</B><BR>

<UL>
<LI><a href="man/pgp5.html">PGP v5</a>
<LI><a href="man/pgpk.html">Managing PGP Keyrings (pgpk)</a>
<LI><a href="man/pgpe.html">Encrypting Messages (pgpe)</a>
<LI><a href="man/pgpv.html">Decrypting Messages (pgpv)</a>
<LI><a href="man/pgp.cfg.html">PGP Configuration File (pgp.cfg)</a>
<LI><a href="man/pgp4pine.html">PGP4Pine (pgp4pine)</a>
</UL>

<!--
<a name="keys"></a>
<B>My Public Key</B><BR><BR>

<UL>
<LI>To add to your keyring: <font color="fuchsia">pgpk -a finger://bofh.mtnweb.net/hydrox</font>
<LI>To receive a copy via autoresponder, send a blank email to: <font color="fuchsia">pgp-hydroxATbofh.mtnweb.net</font>
<LI>PGP Fingerprint: <font color="darkred">5472 EE12 094B 2667 3B0E  AC88 3C1F D100 320E 45A3</font>
</UL>
-->

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
