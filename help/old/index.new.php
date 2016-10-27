<? require("{$_SERVER['DOCUMENT_ROOT']}/php-bin/dog-lib.php") ?>
<? supportheader(); ?>

<div class="site">
  <div class="header">Computer Science Dept.</div>
  <div class="linkbar">
    <a href="#Accounts">Accounts</a>&nbsp;&nbsp;&nbsp;&nbsp;¤ &nbsp;&nbsp;&nbsp;&nbsp;<a href="#General">General</a>&nbsp;&nbsp;&nbsp;&nbsp;¤ 
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#Unix">Unix</a>&nbsp;&nbsp;&nbsp;&nbsp;¤&nbsp;&nbsp;&nbsp;&nbsp;<a href="#Windows">Windows</a>
  </div
  <div class="topic">New Additions</div>
  <p>
  	<UL>
	   <LI><a href="/network/new/Summer2005.php">New for Fall 2005</a></LI>
  	   <LI><a href="/network/new/Summer2004.php">New for Fall 2004</a></LI>
	</UL>
  </p>
<BR>
<?

//Creates array which will be automagically sorted by desc and displayed. 
$list['Accounts']=array(
//       filename		Description	
"msdnaa"	=> "Microsoft Developer Network Software Downloads",// 09-JAN-03 (merantn)
"activate"   	=> "Activate your account",
"dialup"     	=> "Dialup Connections",
"passwd"     	=> "Changing your password",
"login"		=> "Login Problems",
"reset"		=> "Resetting a forgotten password",
//	"ssh"        	=> "Connecting in from home",
//      "php-perl"	=> "PHP & Perl",
//      "forwarding" 	=> "Email Forwarding",
//	"accounts"	=> "Account information",		// 09-JAN-03 (merantn)
);

$list['General']=array(
"storage"  	=> "Disk Storage",
"mysql"      	=> "mySQL",
"www"        	=> "Personal Web Page Info",
"htaccess"	=> "Restricting access to web pages",
"email"		=> "Email",
"spop"		=> "Checking email over an encrypted connection",
"wireless"	=> "Wireless connectivity (802.11b)",
"downloads"	=> "Downloading operating systems and software",
);

$list['Unix']=array(
"terminals"  	=> "Terminal Types",
"pgp_pgp4pine" 	=> "Pretty Good Privacy (PGP)",
"software"   	=> "Software to get you started",
"games"      	=> "Games",
"manual"     	=> "Unix Manual",
"nfs"        	=> "NFS",
"dumps"      	=> "Recovering lost data",
"printing"   	=> "Printing",
//	"x11"        	=> "X11",
"x11remote"  	=> "X11 Remote",
"scanner"	=> "Scanner usage in C012 unix lab",
"unixmedia"	=> "CD Burning and removable media under unix",
"vi"		=> "vi editor",
"ssh"        	=> "Remote connections with SSH Secure Shell",
);

$list['Windows']=array(
"winprofile"	=> "Windows User Profile",
"msdnaa"	=> "Microsoft Developer Network Software Downloads",// 09-JAN-03 (merantn)
"xwin32"	=> "Remote X11 on MS windows with X-Win32",
//	"winsw"		=> "Software download for Windows",
"ssh"		=> "Connect to unix servers from home with SSH Secure Shell",
"frontpage"	=> "Creating a Frontpage web",
"itunes"	=> "Streaming radio using iTunes",
);

/* From here down should be fine.    				       */
/* =================================================================== */

function cmp ($a, $b) {   
if (strtoupper($a) == strtoupper($b)) return 0;
return (strtoupper($a) < strtoupper($b)) ? -1 : 1;
}

foreach ($list as $topic => $value) {
uasort($list[$topic],"cmp");
echo "<div class=\"topic\"><A NAME =\"$topic\">$topic</A></div>";
echo "<UL>";
	foreach ($list[$topic] as $key => $value) {
		echo "<LI><a href=\"$key.php\">$value</a><BR>";
	}
	echo "</UL><BR>";
}
?>

<BR>
<center><font size="-1">Ideas, Comments, Contributions?  Email <a href="/php-bin/form-mail.php?recip=webmaster"><i>webmaster</i></a>.</font></center>

<? dogmainfooter("Webmaster","webmaster") ?>
