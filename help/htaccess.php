<?php include("../header.php"); ?>

<h1>Help: Apache .htaccess</h1>

<div id='content'>
<a name="htaccess"></a>
<h3>Restricting access to web pages:</h3>

<p>It is possible to restrict part or all of your personal web pages
so only certain people will have access to it.</p>

<p>Start at the root of the directory tree you wish to secure and create
a file called .htaccess similar to the one below.</p>

<p>For example, if I want to create a private area under my web site
http://www.cs.sunyit.edu/~merantn/private/, I would edit this file by typing:

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="fuchsia">vi ~/www/private/.htaccess</font>

<BR><BR>
And then cut and paste the following text into the file:</p>
<blockquote>
<pre>
AuthUserFile /home/u/csci/merantn/www/.htpasswd
AuthName "My Site"
AuthType Basic
&lt;Limit GET POST&gt;
   order allow,deny
   allow from all

   require valid-user
   require user merantn mirchr
&lt;/Limit&gt;
</pre>
</blockquote>

<p>You only need one of the <i>require</i> lines above to either require any valid user,
or to list out the usernames of those who are allowed to access the site.
This is useful if you want to set up multiple secured areas allowing different users
access to each while maintaining only one password file.
Usernames and passwords for this example
are stored in the file /home/u/csci/merantn/www/.htpasswd.  Be sure to change
this to the path of your file.</p>

<p>For this example, the .htpasswd file can be created with the
<font color="fuchsia">htpasswd</font> command.  This command can be found on fang and spike.</p>
<pre>
	<font color="fuchsia">htpasswd -c /home/u/csci/merantn/www/.htpasswd merantn</font>
	<font color="fuchsia">htpasswd /home/u/csci/merantn/www/.htpasswd mirchr</font>
</pre>

<p>The -c option on the first line above instructs htpasswd to create a new file.
Only use this option if the password file does not exist.  You will be prompted
to enter passwords for each user.  Typing htpasswd on the command line with no arguments will show a list of valid options.</p>

<p>NOTE: Passwords used are sent over the network in cleartext.  Do NOT use your login passwords for web access!</p>

<p>Permissions on the files must be set so the web server is able to read the .htaccess and .htpasswd files:</p>
<pre>
	<font color="fuchsia">chmod 644 ~/www/private/.htaccess ~/www/.htpasswd</font>
</pre>


<p>
More information is listed on the
<a href="http://httpd.apache.org/docs/howto/auth.html#basic">Apache Site</a>
</p>
</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
