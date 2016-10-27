<? include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Network Information</h1>

<div id='content'>

<BR>
<font size="+1"><B>Snapshot file recovery example:</b></font><BR><BR>

<BR>
<center><font size="+1"><B>** This will only work on fang. **</b></font></center>
<BR>

<p>The steps below demonstrate how to recover lost data from your home directory using
FreeBSD filesystem snapshots.</p>

<p>For this example, I accidentally deleted a big, complicated function from some important 
source code and would like to get it back.  It is now 7:20pm and I would like to access the 
most recent snapshot available which contains this lost function.</p>

<pre>

	Here's my source code with the missing function:

nick@fang:~> <font color="fuchsia">ls -l ImportantSourceCode.cpp </font>
-rw-r--r--  1 nick  staff  38037 Jan 20 19:20 ImportantSourceCode.cpp


	First change directory to the recovery area

nick@fang:~> <font color="fuchsia">cd /opt/recover</font>

	
	List the available snapshot times.  Snapshots run with an interval of hourly, daily, and 
	weekly.  Select the time most likely to have the missing data you need to recover.

nick@fang:/opt/recover> <font color="fuchsia">ls -l</font>
lrwxr-xr-x  1 root  wheel  14 Jan 20 17:29 Dec18-1721.hourly.2 -> /snap/hourly.2
lrwxr-xr-x  1 root  wheel  14 Jan 20 17:29 Dec18-2120.hourly.1 -> /snap/hourly.1
lrwxr-xr-x  1 root  wheel  14 Jan 18 01:34 Jan04-0130.weekly.2 -> /snap/weekly.2
lrwxr-xr-x  1 root  wheel  14 Jan 18 01:34 Jan11-0130.weekly.1 -> /snap/weekly.1
lrwxr-xr-x  1 root  wheel  14 Jan 18 01:34 Jan18-0130.weekly.0 -> /snap/weekly.0
lrwxr-xr-x  1 root  wheel  13 Jan 20 01:36 Jan18-0134.daily.2 -> /snap/daily.2
lrwxr-xr-x  1 root  wheel  13 Jan 20 01:36 Jan19-0135.daily.1 -> /snap/daily.1
lrwxr-xr-x  1 root  wheel  13 Jan 20 01:36 Jan20-0136.daily.0 -> /snap/daily.0
lrwxr-xr-x  1 root  wheel  14 Jan 20 17:29 Jan20-1729.hourly.0 -> /snap/hourly.0


	It is 7:20pm now, and I would like the most recent version of my lost file.  
	The most recent time available is 5:30pm.

nick@fang:/opt/recover> <font color="fuchsia">cd Jan20-1729.daily.0</font>


	Now I am in the root of the /home filesystem as it looked at 5pm today.

nick@fang:/home/recover/Jan20-1729.daily.0> <font color="fuchsia">ls -l</font>
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

nick@fang:/home/recover/Jan20-1729.daily.0> <font color="fuchsia">echo $HOME</font>
/home/s/iset/nick


	My home directory is listed in the line above.  To change to the 4pm version of it,
	I need to cd to the following directory.  (The part after '/home/' from the line above.)

nick@fang:/home/recover/Jan20-1729.daily.0> <font color="fuchsia">cd s/iset/nick</font>

	
	The timestamp shows that this is the earlier version of the file I am looking for.
	
nick@fang:/home/recover/Jan20-1729.daily.0/s/iset/nick> <font color="fuchsia">ls -al ImportantSourceCode.cpp </font>
-rw-r--r--  1 nick  staff  44028 Jan 20 17:12 ImportantSourceCode.cpp


	I can now access the 5:30pm version of my file and retrieve the lost data or copy the 
	entire file back to my home directory.

nick@fang:/home/recover/Jan20-1729.daily.0/s/iset/nick> <font color="fuchsia">less ImportantSourceCode.cpp </font>


	After I retrieve what I need from the old file, this will return me to my home directory 
	to continue working on the source code.

nick@fang:/home/recover/Jan20-1729.daily.0/s/iset/nick> <font color="fuchsia">cd ~</font>

</pre>

<BR>
If you have any questions, please stop by our workroom in Kunsela C122 or email 
<?= emaillink("admins","the Admins") ?>.

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
