<? require("{$_SERVER['DOCUMENT_ROOT']}/php-bin/dog-lib.php") ?>
<? dogmainheader(); ?>

<center><font size="+3"><B>Network Information</B></font></center>
<BR><BR><BR>

<BR>
<a name=""></a>
<font size="+1"><B>Snapshot file recovery example:</b></font><BR><BR>

<BR>
<center><font size="+1"><B>** This will only work on fang. **</b></font></center>
<BR>

<p>The steps below demonstrate how to recover lost data from your home directory using
FreeBSD filesystem snapshots.</p>

<p>For this example, I accidentally deleted a big, complicated function from some important 
source code and would like to get it back.  It is now 5:20pm and I would like to access the 
most recent snapshot available which contains this lost function.</p>

<table><TR><TD width=10>&nbsp;</TD><TD>
<pre>

	First change directory to the recovery area

nick@fang:~> cd /home/recover

	
	Three options are available for how far back you need to go
	to recover your lost data. 

nick@fang:/home/recover> ls -al
total 12
drwxr-xr-x   5 root  wheel  512 Aug 27 17:10 .
drwxr-xr-x  19 root  wheel  512 Aug 27 00:11 ..
drwxr-xr-x   2 root  wheel  512 Aug 27 12:27 daily
drwxr-xr-x   2 root  wheel  512 Aug 27 17:10 hourly
drwxr-xr-x   2 root  wheel  512 Aug 27 17:10 weekly


	It is 5:20pm now, and I would like the most recent version of my lost file.  

nick@fang:/home/recover> cd hourly

nick@fang:/home/recover/hourly> ls -al
total 4
drwxr-xr-x  2 root  wheel  512 Aug 27 17:10 .
drwxr-xr-x  5 root  wheel  512 Aug 27 17:10 ..
lrwxr-xr-x  1 root  wheel   19 Aug 27 16:29 0.4pm -> /snap/home:hourly.0
lrwxr-xr-x  1 root  wheel   19 Aug 27 16:00 1.12pm -> /snap/home:hourly.1
lrwxr-xr-x  1 root  wheel   19 Aug 27 16:00 2.8am -> /snap/home:hourly.2
lrwxr-xr-x  1 root  wheel   19 Aug 27 16:00 3.8pm -> /snap/home:hourly.3


	The most recent time available is 4pm.

nick@fang:/home/recover/hourly> cd 0.4pm


	Now I am in the root of the /home filesystem as it looked at 4pm today.

nick@fang:/home/recover/hourly/0.4pm> ls -al
total 2566
drwxr-xr-x  19 root   wheel          512 Aug 27 00:11 .
drwxrwxrwx   4 root   wheel          512 Aug 27 00:06 ..
drwxrwxr-x   2 root   operator       512 Aug 27 16:00 .snap
drwxr-x---  23 admin  wheel         1024 Aug 27 15:15 admin
drwxr-xr-x   6 root   wheel          512 Sep 23  2002 clubs
drwxr-xr-x  26 root   wheel          512 Jun 28 22:15 f
drwxr-xr-x   2 root   wheel          512 Jun 15 00:50 faculty
drwxr-xr-x  13 root   wheel          512 Aug 25 01:01 g
drwxr-xr-x   3 root   wheel          512 Jun 23 11:32 graduate
drwxr-xr-x  10 root   wheel          512 Jun  7  2002 o
drwxr-xr-x   3 root   wheel          512 Jul 11 16:55 other
-rw-r-----   1 root   operator   2560672 Aug 27 16:00 quota.user
drwxr-xr-x   4 root   wheel          512 Aug 27 00:13 recover
drwxr-xr-x  11 root   wheel          512 Mar  5 13:15 s
drwxr-xr-x   2 root   wheel          512 Aug 26  2003 share
drwxr-xr-x   2 root   wheel          512 Jun 15 00:50 staff
drwxr-xr-x  36 root   wheel         1024 Aug 25 01:49 u
drwxr-xr-x   7 root   wheel          512 Aug 20 12:30 undergrad


	In order to recover my data, I must first enter my home directory.  This
	command will show its location.

nick@fang:/home/recover/hourly/0.4pm> echo $HOME
/home/s/iset/nick


	My home directory is listed in the line above.  To change to the 4pm version of it,
	I need to cd to the following directory.  (The part after '/home/' from the line above.)

nick@fang:/home/recover/hourly/0.4pm> cd s/iset/nick

	
	The timestamp shows that this is the earlier version of the file I am looking for.
	
nick@fang:/home/recover/hourly/0.4pm/s/iset/nick> ls -al ImportantSourceCode.cpp 
-rw-r--r--  1 nick  staff  38037 Aug 27 15:48 ImportantSourceCode.cpp


	I can now access the 4pm version of my file and retrieve the lost data or copy the 
	entire file back to my home directory.

nick@fang:/home/recover/hourly/0.4pm/s/iset/nick> less ImportantSourceCode.cpp 


	After I get what I need from the old file, this will return me to my home directory 
	to continue working on the source code.

nick@fang:/home/recover/hourly/0.4pm/s/iset/nick> cd ~

</pre>
</TD></TR></TABLE>

<BR>
If you have any questions, please stop by our workroom in Kunsela C122 or email 
<a href="/php-bin/form-mail.php?recip=admins">the admins</a>.

<BR><BR>
<? dogmainfooter("Webmaster","webmaster") ?>
