<?php include("../header.php"); ?>

<h1>Help: mySQL Database Access</h1>

<div id='content'>
<p>mySQL is an easy to use yet powerful relational database system.

If you do not have an account on the mySQL server, click <a href="https://accounts.cs.sunyit.edu/mysql-request.php">Here</a> to create one.

DogNET runs a mySQL server on the server db.cs.sunyit.edu.  Databases can be accessed two ways:</p>
<pre>
	From Fang:
	fang:~> <font color="fuchsia">mysql -h db -u <i>username</i> -p <i>username</i></font>

	From db:
	db:~> <font color="fuchsia">mysql -u <i>username</i> -p <i>username</i></font>

	You will then be prompted for your password.
</pre>

<p>Alternatively, an alias can be created so that by typing <font color="fuchsia">my</font>, the mysql client will be started and you will be logged in (you will still need to enter your password, however).  To create this alias, append the following line to the .alias file in your home directory.  If you are using the default DogNET .alias file, the alias has already been set up for you.</p>
<pre>
	<font color="fuchsia">alias	my	'mysql -h db -u <i>username</i> -p <i>username</i>'</font>
</pre>

<p>For more information on the mysql command and what the switches mean check the man page.  Also, there is a great deal of information on the <a href="http://www.mysql.com">mySQL Website</a>.</p>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
