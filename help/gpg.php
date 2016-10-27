<!--
SUNY Institute of Technology
Department of Computer Science
DogNET Help Docs
-->
<?php include("../header.php"); ?>
<h1>Help: GPG Encryption</h1>

<div id='content'>
<p>
<!--
<B>Title:</B>  Configuring GPG under Gentoo Linux systems<BR>
<B>Date:</B> 30-OCT-07<BR>
<B>Author:</B> <?= emaillink("hasselg","Greg Hasseler") ?>

</p>
-->
<h3>Outline</h3>

<OL type="I">
<LI><a href="#software">Software Used</a>
<LI><a href="#conventions">Conventions</a>
<LI><a href="#gpgsetup">GPG Setup & Key Management</a>
	<OL type="A">
	<LI><a href="#keygen">Generating your Public & Private keys</a>
	<LI><a href="#keyex">Extracting keys from your keyring</a>
	<LI><a href="#keyadd">Adding Keys to your keyring</a>
	<LI><a href="#keyls">Viewing keys on your keyring</a>
	</OL>
<LI><a href="#encdec">Command Line Encryption/Decryption</a>
	<OL type="A">
	<LI><a href="#gpge">Encrypting Messages</a>
	<LI><a href="#gpgd">Decrypting Messages</a>
	</OL>
</OL>

<BR><BR>

<a name="software"></a>
<h3>Software Used for this demonstration:</h3>
<PRE>
	OS: Gentoo Linux (grey.cs.sunyit.edu)
	gpg (GnuPG) 1.4.7
</PRE>
<BR>
<a name="conventions"></a>
<h3>Conventions:</h3>
<PRE>
	<font color="fuchsia">User input will be in this color.</font>
	<font color="darkred">Output to the screen will be in this color</font>
</PRE>
<BR>
<a name="gpgsetup"></a>
<h3>GPG Setup & Key Management:</h3>
<p>

<a name="keygen"></a>
<B>Generating your Public & Private keys:</b><BR><BR>
<p>
The first step to generating your keys is to run the appropriate command.
<pre>
	$ <font color="fuchsia">gpg --gen-key</font>
</pre>
<p>You will be prompted to choose between the DSA and Elgamal algorithm, the DSA (sign only) algorithm, or the RSA (sign only) algorithm. For most cases, the default of the DSA and Elgamal algorithm will be sufficient.</p>
<font color="darkred">
<pre>

	Please select what kind of key you want:
   	   (1) DSA and Elgamal (default)
           (2) DSA (sign only)
           (5) RSA (sign only)
	Your selection?	<font color="fuchsia">1</font>
</pre>
</font>

<p>Choose a key size depending on the degree of security desired.  Generally, a size
of 2048 will be sufficient.</p>
<font color="darkred">
<pre>
	DSA keypair will have 1024 bits.
	ELG-E keys may be between 1024 and 4096 bits long.
	What keysize do you want? (2048) <font color="fuchsia">2048</font>
</pre>
</font>

<p>You will be prompted for the number of days this key will be valid for.  Enter 0 to
make the key valid forever.</p>
<font color="darkred">
<pre>
	Please specify how long the key should be valid.
	         0 = key does not expire
      	      <n>  = key expires in n days
              <n>w = key expires in n weeks
      	      <n>m = key expires in n months
              <n>y = key expires in n years
	Key is valid for? (0) <font color="fuchsia">0</font>
</pre>
</font>
<p>You will then be prompted to confirm the expiration time of your key.</p>
<font color="darkred">
<pre>
	Key does not expire at all
	Is this correct? (y/N) <font color="fuchsia">y</font>
</pre>
</font>
</p>

<p>You will now be prompted to enter information such as your real name, email address, and any comments.</p>
<font color="darkred">
<pre>
	You need a user ID to identify your key; the software constructs the user ID
	from the Real Name, Comment and Email Address in this form:
    	    "Heinrich Heine (Der Dichter) <heinrichh@duesseldorf.de>"

	Real name: <font color="fuchsia">Greg Hasseler</font>
	Email address: <font color="fuchsia">&#x68;&#x61;&#x73;&#x73;&#x65;&#x6C;&#x67;&#x40;&#99;&#115;&#46;&#115;&#x75;&#110;&#121;&#x69;&#116;&#x2E;&#x65;&#x64;&#117;</font>
	Comment:
</pre>
</font>

<p>You will then be prompted to confirm the information.</p>
<font color="darkred">
<pre>
	You selected this USER-ID:
    	    "Greg Hasseler <hasselg@cs.sunyit.edu>"

	Change (N)ame, (C)omment, (E)mail or (O)kay/(Q)uit? <font color="fuchsia">o</font>
</pre>
</font>

<p>You now must enter a pass phrase to protect your private key.  Your pass phrase can be
any sentence or phrase and may have as many words, spaces, punctuation, or any other
printable characters as you would like.  The longer and more complex this pass phrase is,
the more secure it will be.  Note: The stars are shown only to illustrate input, do not use
them as your passphrase.  When entering your passphrase, nothing will be echoed to the screen.</p>
<font color="darkred">
<pre>
	You need a Passphrase to protect your secret key.

	Enter passphrase: <font color="fuchsia">***************</font>
</pre>
</font>

<p>You will then be prompted to reenter the pass phrase.</p>
<font color="darkred">
<pre>
	Repeat passphrase: <font color="fuchsia">***************</font>
</pre>
</font>

<p>The system will now generate your GPG secret/public keypair. During this process, you may be prompted to perform some more tasks on the machine. This is to provide the key generator with enough entropy such that it may generate a sufficiently secure key.</p>
<font color="darkred">
<pre>
	We need to generate a lot of random bytes. It is a good idea to perform
	some other action (type on the keyboard, move the mouse, utilize the
	disks) during the prime generation; this gives the random number
	generator a better chance to gain enough entropy.
	+++++.++++++++++..++++++++++++++++++++++++++++++.+++++++++++++++.+++++++++++++++.
	      +++++++++++++++++++++++++.+++++.+++++++++++++++.+++++..+++++.+++++...>+++++......
	      ...................>+++++.<+++++..>+++++..+++++
	We need to generate a lot of random bytes. It is a good idea to perform
	some other action (type on the keyboard, move the mouse, utilize the
	disks) during the prime generation; this gives the random number
	generator a better chance to gain enough entropy.
	++++++++++.+++++++++++++++...+++++..+++++++++++++++++++++++++++++++++++....
	      ++++++++++++++++++++++++++++++..+++++++++++++++++++++++++.+++++++++++++++.
	      ++++++++++>++++++++++>+++++.....>+++++.<+++++...........+++++^^^^^
	gpg: key F3A839A5 marked as ultimately trusted
	public and secret key created and signed.

	gpg: checking the trustdb
	gpg: 3 marginal(s) needed, 1 complete(s) needed, PGP trust model
	gpg: depth: 0  valid:   2  signed:   0  trust: 0-, 0q, 0n, 0m, 0f, 2u
	pub   1024D/F3A839A5 2007-11-02
      	      Key fingerprint = 55FC 5A18 F271 FA28 7446  4C47 1E4B 52BB F3A8 39A5
	uid                  Greg Hasseler <hasselg@cs.sunyit.edu>
	sub   2048g/285A8F24 2007-11-02
</pre>
</font>

<p>If all goes well, your secret/public keypair will now be generated and put in the keyrings in the .gnupg directory.</p>

<BR><BR><BR>
<a name="keyex"></a>
<B>Extracting keys from your keyring:</b><BR><BR>

Now that you have your GPG keys created, it's time to distribute your public key for people to send you
encrypted messages.</p>

<font color="darkred">
<pre>
	$ <font color="fuchsia">gpg --armor --export 'Greg Hasseler'</font>
	-----BEGIN PGP PUBLIC KEY BLOCK-----
	Version: GnuPG v1.4.7 (GNU/Linux)

	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
	ynn/sPQp1gJIJADsC/pBRVus
	=/wWQ
	-----END PGP PUBLIC KEY BLOCK-----

</pre>
</font>

<p>The above output is an example of a public key, which should be distributed exactly as displayed.  Your actual key may be much larger, depending upon the algorithm and key size you selected.  The key displayed is for a 2048 bit DSA and Elgamal public key.</p>

<BR><BR><BR>
<a name="keyadd"></a>
<B>Adding Keys to your keyring:</B><BR><BR>

<p>In order to encrypt messages to others, you will need their public key on your keyring.</p>
<pre>
	$ <font color="fuchsia">gpg --import keyfile.txt</font>
</pre>
<p>keyfile.txt contains the public key of someone you would like to send encrypted messages to.  It will be similar to the key above.</p>

<BR><BR><BR>
<a name="keyls"></a>
<B>Viewing keys on your keyring:</B><BR><BR>

<p>The following command may be used to view which public keys you have on your keyring.</p>
<font color="darkred">
<pre>
	$ <font color="fuchsia">gpg --list-keys</font>
	/home/undergrad/hasselg/.gnupg/pubring.gpg
	------------------------------------------
	pub   1024D/945210F0 2007-10-31
	uid                  Greg Hasseler <hasselg@cs.sunyit.edu>
	sub   2048g/95316828 2007-10-31

	pub   1024D/F3A839A5 2007-11-02
	uid                  Greg Hasseler <hasselg@cs.sunyit.edu>
	sub   2048g/285A8F24 2007-11-02

	pub   1024D/320E45A3 2000-04-22
	uid                  Nick Merante <nick.merante@pobox.com>
	uid                  Nick Merante <merantn@cs.sunyit.edu>
	sub   3072g/640C309F 2000-04-22

</pre>
</font>


<a name="encdec"></a>
<h3>Command Line Encryption/Decryption</h3>

<a name="gpge"></a>
<B>Encrypting Messages</b><BR><BR>

<p>Once you have someone else's public key on your keyring, you can encrypt messages or files to securely transmit to that person.
This example will encrypt the text file <I>secrets</I> to hasselg.  The -e option specifies to encrypt the file, the -r option specifies the recipient.  The encrypted output will be saved to <I>secrets.gpg</I>.

<font color="darkred">
<pre>
	$ <font color="fuchsia">gpg -e -r hasselg secrets</font>
</pre>
</font>

<p>The contents of secrets.gpg are now encrypted. One may confirm this by attempting to cat the file.</p>

<p>Our secret message may now be securely transmitted via insecure channels.</p>

<BR><BR><BR>
<a name="gpgd"></a>
<B>Decrypting Messages</b><BR><BR>

<p>Now that you have created your GPG keys, distributed your public key, and have started sending encrypted messages, you may be eager to receive encrypted messages.
Once you have received an encrypted message, it can be viewed with either of the following steps:</p>

<BR><BR>
<p>Option 1: The decrypted message will be saved to the file <I>secrets</i>:</p>
<font color="darkred">
<pre>
	$ <font color="fuchsia">gpg --output secrets --decrypt secrets.gpg</font>

	You need a passphrase to unlock the secret key for
	user: "Greg Hasseler <hasselg@cs.sunyit.edu>"
	2048-bit ELG-E key, ID 95316828, created 2007-10-31 (main key ID 945210F0)

	gpg: encrypted with 2048-bit ELG-E key, ID 95316828, created 2007-10-31
	      "Greg Hasseler <hasselg@cs.sunyit.edu>"
</pre>
</font>

<p>Option 2: The decrypted message will be outputted to the screen (STDOUT):</p>
<font color="darkred">
<pre>

	$ <font color="fuchsia">gpg --decrypt secrets.gpg</font>

	You need a passphrase to unlock the secret key for
	user: "Greg Hasseler <hasselg@cs.sunyit.edu>"
	2048-bit ELG-E key, ID 95316828, created 2007-10-31 (main key ID 945210F0)

	gpg: encrypted with 2048-bit ELG-E key, ID 95316828, created 2007-10-31
	      "Greg Hasseler <hasselg@cs.sunyit.edu>"
	THIS IS OUR SECRET MESSAGE!

	THE YELLOW EAGLE FLIES AT DUSK.
</pre>
</font>


<BR><BR>
<a name="conc"></a>
<h3>Conclusion</h3>
<p>
GPG is a very powerful privacy and security tool.  As the size of the internet and the widespread use
of personal computers grow, so will the need to keep our private information secure, whether it be
bank account information kept on your computer at work or secret messages transmitted within oppressive nations.
The success of a encryption scheme such as GPG depends solely upon its widespread use.
</p>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
