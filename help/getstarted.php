<? include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Getting Started Guide</h1>

<div id='content'>

<a name="getstarted"></a>
<BR>
<font size="+1"><B>Getting Started on the Computer Science network:</b></font><BR><BR>


<OL>
<LI><a href="#intro">Introduction</a>
<LI><a href="#accounts">CS accounts</a>
<LI><a href="#reset">Reseting a forgotten password</a>
<LI><a href="#labs">Computer Science Labs
<LI><a href="#logunix">Logging in to the UNIX lab</a>
<LI><a href="#logwin">Logging in to the Windows lab</a>
<LI><a href="#logunixrem">Logging in to a UNIX machine remotely</a>
<LI><a href="#storage">Disk Storage</a>
<LI><a href="#email">Email</a>
<LI><a href="#dialwl">Dialup and wireless connections</a>
<LI><a href="#other">Other services</a>
<LI><a href="#request">Requesting software or services</a>
<LI><a href="#problems">Solving common problems</a>
<LI><a href="#report">Reporting problems</a>
<LI><a href="#help">Where to go for help</a>
<LI><a href="#stuadmin">Student Administrators</a>
</OL>


<a name="intro"></a>
<BR>
<font size="+1"><B>Introduction:</b></font><BR>

<p>In order to better suit the needs of Computer Science faculty and 
students, the Computer Science Department maintains a computing 
environment which is run and managed independent of the other networks 
on campus. Everyone is welcome to take advantage of the resources
 offered, regardless of major or program of study.</p>

<P>The Computer Science Department's computing environment is comprised of
3 classroom labs and 2 special purpose labs running a variety of operating
systems, interconnected over a high speed network.  Several services are 
available to aid in research and coursework,
such as Oracle and mySQL database servers, wireless network connectivity 
for laptops in Kunsela Hall classrooms, dialup lines for connecting to the
Internet from home, a parallel processing lab, and ample workspace and 
hardware for research and experimentation.</p>

<a name="accounts"></a>
<BR>
<font size="+1"><B>Accounts on the Computer Science Network:</b></font><BR>

<p>Before you can utilize the resources on the CS network, you must first 
activate your account.  Your account information is based on the username
and password assigned to you by the Campus when you first registered for 
classes.  This username is based on your name, typically the first 6 letters
of you last name, followed by your first initial.  Your middle initial or a 
number may also be appended to the end.
If you do not know your username, 
<a href="http://its.sunyit.edu/accounts/accounts_userlookup.inc">Click Here</a>.
If you do not know your password, 
<a href="http://its.sunyit.edu/help_tut/password_reset/index.inc">Click Here</a>.  If
you click on the link to reset your password, you must wait 1 business day
before you will be able to activate your CS account.  If you are unable to
lookup your username or reset your password, contact the 
<a href="http://its.sunyit.edu/helpdesk/index.inc">ITS Help Desk</a>.</p>

<p>Once you know your SUNYIT username and password, you can then 
activate your CS account at the web site 
<a href="http://accounts.cs.sunyit.edu/">http://accounts.cs.sunyit.edu/</a>
by clicking on "<u>Activate a Login Account</u>".  Follow the instructions
on the pages.  When prompted for a username and password, enter your SUNYIT
username and password.  After 
you complete the steps on the Accounts web site your CS account will be available
for use within 15 minutes.</p>

<a name="reset"></a>
<BR>
<font size="+1"><B>Resetting a forgotten password:</b></font><BR>
<P>Once you activate your account, Computer Science passwords are not kept in
sync with your campus account.  If you change one account, the other one will
not be affected.  If you forget your CS password, go through the account activation
steps that are listed above.  When prompted for your username and password, enter
your current SUNYIT logon information.  Your CS password will then be reset to your
SUNYIT password, and be available within 15 minutes.</p>

<a name="labs"></a>
<BR>
<font size="+1"><B>Computer Science Labs:</b></font><BR>
<p>The <a href="/labs/c012/">C012 UNIX lab</a> contains 22 workstations running
the latest version of the 
<a href="http://www.gentoo.org/">Gentoo Linux operating system</a> with
the <a href="http://www.gnome.org">Gnome window manager</a>.  The 
<a href="http://wwws.sun.com/software/star/staroffice/">StarOffice</a> office
suite is available, which is compariable to the Microsoft Office applications.
Check out the <a href="/labs/c012/software.php">software list</a> for some 
programs to get started with.  The operating system and all software in this 
lab are freely available to 
<a href="http://www.gentoo.org/doc/en/handbook/handbook-x86.xml">
download from the internet</a>.  This lab is open for student use when classes
are not in session.</p>

<p>The <a href="/labs/c014/">C014 Windows lab</a> contains 24 workstations
running the latest proven version of the 
<a href="http://www.microsoft.com/windows/default.mspx">Microsoft Windows</a>
operating system.  Most of the software in this lab can be downloaded from the
<a href="/network/downloads/">downloads section</a> or through the 
<a href="msdnaa.php">Microsoft Academic Alliance</a> program.  This lab is open
for student use when classes are not in session.</p>

<p>The <a href="/labs/c107/">C107 UNIX lab</a> contains 16 workstations
running the latest version of the
<a href="http://wwws.sun.com/software/solaris/index.html">Sun Solaris</a>
operating system and 8 workstations running the 
<a href="http://www.freebsd.org/">FreeBSD</a> operating system.  This lab
is used only for classes.</p>

<P>C109</P>
<P>B118</P>


<a name="logunix"></a>
<BR>
<font size="+1"><B>Logging in to the UNIX Labs:</b></font><BR>
<p>You must have an activated CS account to log in to the workstations in the 
C012 lab.  To log in to the machines, enter your username and password and click on OK.
By default, you will be logged in to the Gnome Window Manager.  To log in to a different 
window manager, click on Sessions and choose and alternate, such as KDE or XFce.</p>

<a name="logwin"></a>
<BR>
<font size="+1"><B>Logging in to the Windows Labs:</b></font><BR>
<p>An activated CS account is also required to log into the workstations in the Windows
labs.  To log in, enter your username and password.  Be sure the Log on to field is set to
CS.SUNYIT.EDU before clicking on OK.</p>

<a name="logunixrem"></a>
<BR>
<font size="+1"><B>Logging in to a UNIX machine remotely:</b></font><BR>
<p>Use <a href="http://www.cs.sunyit.edu/help/ssh.php">SSH</a> to log in to a UNIX machine 
remotely.  Connect to fang.cs.sunyit.edu or any machine in the 
<a href="http://www.cs.sunyit.edu/labs/c012/diagram.php">C012 unix lab</a>.</p>

<a name="storage"></a>
<BR>
<font size="+1"><B>Disk Storage:</b></font><BR>
<p>There are two disk storage areas available to students.  Both are accessible from the windows
and unix environments, as well as from off campus.</p>
<uL>
<p>
<LI>Disk space available for home directories is stored on a 206gb disk array. 
This area is <a href="dumps.php">backed up to tape</a> nightly, but is restricted 
to academic use only. 
This includes both unix home directories and the H: drive on windows machines.
When you log in to a MS Windows machine on the CS network with your 
<a href="activate.php">username and password</a>,
your UNIX home directory is mounted as the H: drive.
</p>
<p>
<LI>There is also an area for temporary/general storage consisting of 710gb disk
array.  This area is mounted on most unix machines as <nobr>/opt/pub</nobr> and the 
Windows machines as the T: drive. This area is not backed up, 
nor is it actively monitored.  Please read the <a href="README.1st.txt">#README.1st.txt</a> 
file for more information on how this area is maintained and guidelines for its use.
</p>
</uL>
<p>Home directory disk usage limits will be enforced.  Please store large files or those which may
not be academicly related on the temporary/general storage area according to the guidelines in the README file above.</p>


<a name="email"></a>
<BR>
<font size="+1"><B>Email:</b></font><BR>

<p>Everyone with an activated CS account has a email address (<i>username</i>@cs.sunyit.edu) which they 
can use to send and receive mail.  Email is filtered for spam and virues. 
<a href="https://accounts.cs.sunyit.edu/disposable.php">Disposable addresses</a> are available to use 
with mailing lists and internet forums to protect your primary address from spammers.  
See the 
<a href="/help/email.php">email section in the help docs</a> for more information.</p>

<p>The CS department webmail can be found at <a href="http://webmail.cs.sunyit.edu/">http://webmail.cs.sunyit.edu/</a>.</p>

<p>Or, you can set up <a href="https://accounts.cs.sunyit.edu/dotforward.php">email forwarding</a> to have your CS 
mail forwarded to another email address.</p>

<a name="dialwl"></a>
<BR>
<font size="+1"><B>Dialup and Wireless Connections:</b></font><BR>

<p>The CS department has a modem pool with 16 dialup lines for off campus users who do not have an ISP.  
Use the standard windows dialup networking and dial 792-7510 with your modem.</p>

<p>Wireless networking is slowly being deployed in Kunsela hall.  Currently there is a 802.11b 
access point in C122 which can be reached when in the surrounding classrooms.  IP addresses are
automatically assigned.  Traffic is limited to the ssh and http ports.</p>

<a name="other"></a>
<BR>
<font size="+1"><B>Other Services:</b></font><BR>

frontpage, msdnaa, mysql/oracle, cluster, machines for experimentation, 


<a name="request"></a>
<BR>
<font size="+1"><B>Requesting Software or Services:</b></font><BR>

<a name="problems"></a>
<BR>
<font size="+1"><B>Solving Common Problems:</b></font><BR>

<a name="Report"></a>
<BR>
<font size="+1"><B>Reporting Problems:</b></font><BR>
<p>Problems with our labs or network cannot be corrected if we are not made aware of them.  If you encounter any
problems or have any suggestions, please email us at
<? emaillink("admins","admins@cs.sunyit.edu") ?>.</p>


<a name="help"></a>
<BR>
<font size="+1"><B>Where to go for Help:</b></font><BR>

<a name="stuadmin"></a>
<BR>
<font size="+1"><B>Student Administrators:</b></font><BR>


<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ <font color="fuchsia"></font> -->

<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
