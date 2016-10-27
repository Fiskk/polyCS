<?
/*
 *******************************************************************************
 *      File: form-mail.php * Ver: 2.00 * Created: 04-AUG-01
 *    Author: Nick Merante (merantn@cs.sunyit.edu)
 *   Purpose: To act as a form to mail gateway for sending email from
 *	      clients which do not have mail settings set.
 *     Usage: Pass in the destination address on the URL by setting
 * 	      the $recip variable. form-mail.php?recip=merantn@cs.sunyit.edu
 *     To Do: Better documentation.
 * Changelog:
 *	1.1 25-JUN-01: Added several anti-spam and error checking features:
 *		     : Allowed recipient hosts and referrers must be in array
 *		     : below.  All fields must be filled out and valid email
 *	   	     : address is required.
 *	2.0 18-JUL-02: Added option for default domain to cut down on spam.
 *		     : Migrated to new variables for PHP REGISTER_GLOBALS=OFF option
 *		     : Moved to function based logic
 *		     : Added some comments
 *		     : Made script more portable
 *	2.1 26-SEP-02: Removed display of default domain on email addresses until
 *		       message is sent.
 *          27-SEP-02: Added turing.csc.sunyit.edu to allowed hosts list,
 *   		       changed admin email to admins@cs.sunyit.edu
 *	    12-FEB-03: Broke lines down to improve readability
 *	   	     : Broke down header information into variables
 *		     : Added wordwrapping of lines to 60 chars
 *******************************************************************************
 */

$page_title = "DogNET Mailer";
$defaultdomain = "cs.sunyit.edu";
$webmaster = 'bakerdp@cs.sunyit.edu';
$adminemail = 'bakerdp@cs.sunyit.edu';

// Set allowed hosts and allowed recipient domains.
$allowedhosts=array(
	"cs.sunyit.edu",
	"csnet.cs.sunyit.edu",
	"www5.cs.sunyit.edu",
	"www2.cs.sunyit.edu",
	"www.cs.sunyit.edu",
	"webmail.cs.sunyit.edu",
	"rocky.cs.sunyit.edu",
	"pike.sunyit.edu",
	"csclub.sunyit.edu",
	"turing.sunyit.edu",
	"turing.cs.sunyit.edu",
	"tickets.cs.sunyit.edu",
	"accounts.cs.sunyit.edu",
	"www.sunyit.edu",
	"forums.cs.sunyit.edu",
	"milo.cs.sunyit.edu",
	"wwwdev.cs.sunyit.edu",
	"wwwdev2.cs.sunyit.edu",
	"admin.cs.sunyit.edu",
	"web.cs.sunyit.edu",
	"www-h.cs.sunyit.edu",
);

$allowedrecip = array(
	"sunyit.edu",
	"cs.sunyit.edu",
	"pike.sunyit.edu",
	"csclub.sunyit.edu"
);

/*************************************************\
|*  Everything from here down should be fine...  *|
\*************************************************/

function rblcheck($host) {
	$rbls = array("comb.dnsbl");

	$rev = array_reverse(explode('.', $host));

	foreach ($rbls as $rbl) {
		$lookup = implode('.', $rev) . '.' . $rbl;
		if ($lookup != gethostbyname($lookup)) { return TRUE; }
		else { return FALSE; }
	}
}

require_once("{$_SERVER['DOCUMENT_ROOT']}/php-bin/dog-lib.php");

if(blacklisted($_SERVER["REMOTE_ADDR"])) {
	header("Location: /");
}

$website_addons = array("form_focus","form_focus_field"=>"name");

// include("../header.php");
// echo "<div id='content'>";
// echo "<h1>Send a message:</h1>\n";

// The recipient can be passed either via GET or POST.
if(isset($_GET['recip'])) { $recip = $_GET['recip']; }
elseif(isset($_POST['recip'])) { $recip = $_POST['recip']; }

// Determine the hostname of the REFerer.
preg_match("/^(https?:\/\/)?([^\/]+)/i",$_SERVER['HTTP_REFERER'],$matches);
$referer = $matches[2];
if ($referer && !strstr($referer,".")) { $referer .= ".cs.sunyit.edu"; }
//echo "--> " . $_SERVER["HTTP_REFERER"] . $referer;

// Determine how the recipient was specified. By username only, or by complete address.
// If specified by username only, append the default domain
if(preg_match("/^[.a-zA-Z0-9]+$/i",$recip)) {
//	$recip .= "@" . $defaultdomain;
	$allowrecip = 1;
}

// Otherwise, make sure the domain specified is an allowed one.
else {
	list ($user, $sendhost) = split ('@', $recip);
	foreach($allowedrecip as $host) { if ($sendhost == $host) { $allowrecip=1; } }
}

/*
 Make sure the referer is in our allow list.  We do not want people offsite
 constructing their own links to our script, or entering the mail URL directly.
*/

foreach($allowedhosts as $host) { if (strstr($host, $referer)) { $allowhost=1; } }
if (!$allowhost) { error("Host not allowed. $referer. Contact webmaster to be added.",1); }

// Make sure the destination is allowed.  We only want mail to be delivered to campus users.
//if (!$allowrecip) { error("Recipient not valid.  $recip. Contact webmaster to be added.",1); }

// Do we send the email, or show the input form?
if($_GET['action'] == "send") { sendmsg(); }
else { showform($recip); }


/******************|
|* FUNCTION START *|
|******************/

// Display the user form
function showform($recip) {
?>
<BR>
<center>
<FORM METHOD=POST ACTION="<?= $_SERVER['SCRIPT_NAME'] ?>?action=send" name="focus">
<table bgcolor="#FDF7BB" cellspacing=10><TR><TD>
<TABLE bgcolor="#FDF7BB" cellspacing=0 cellpadding=0 border=0>
<TR><TD align=right>Message Recipient: &nbsp;&nbsp;</TD><TD width=300>
<?
if(isset($recip)) { echo "<INPUT TYPE=hidden NAME=\"recip\" value=\"$recip\">$recip"; }
else { echo "<INPUT size=30 NAME=\"recip\">"; }
?>
</TD></TR>
<TR>
	<TD align=right>Your Name: &nbsp;&nbsp;</TD>
	<TD><INPUT TYPE="text" size=30 NAME="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</TD>
</TR><TR>
	<TD align=right>Your Email: &nbsp;&nbsp;</TD>
	<TD ALIGN="LEFT"><INPUT TYPE="text" size=30 NAME="email"></TD>
</TR><TR>
	<TD align=right>Subject: &nbsp;&nbsp;</TD>
	<TD ALIGN="LEFT"><INPUT TYPE="text" size=30 NAME="subject" value="<?= $_GET['subject'] ?>"></TD>
</TR><TR>
	<TD colspan=2>Message:<BR>
	<center>
	<TEXTAREA NAME="message" COLS="60" ROWS="8" WRAP="VIRTUAL"></TEXTAREA>
	</center>
	</TD>
</TR><TR>
	<TD COLSPAN="2" align=center><BR>
	<INPUT TYPE="SUBMIT" VALUE="Submit"> &nbsp;
	<INPUT TYPE="RESET" VALUE="Reset">
	</TD>
</TR><TR>
	<TD colspan=2><BR><font size="-1">Logged: <?= $_SERVER['REMOTE_ADDR'] ?></font></TD>
</TR>
</TABLE>
</TD></TR></TABLE>
<input type=hidden name="referer" value="<?= $_SERVER['HTTP_REFERER'] ?>">
</FORM>
</center>
<?
}

// Send the email.
function sendmsg() {
	global $adminemail,$defaultdomain;

	if(preg_match("/^[a-z]+[0-9]?$/i",$_POST['recip'])) {
	      	$recip = $_POST['recip'] . "@" . $defaultdomain;
	} else {
		$recip = $_POST['recip'];
	}

	// Ensure all fields have been filled out
	if(!$recip OR
	   !$_POST['subject'] OR
	   !$_POST['name'] OR
	   !$_POST['email'] OR
	   !$_POST['message'])
		{ error("Please complete all fields before submission",1); }
	// Make sure the host name is valid and exists
	if(!checkdnsrr(substr($_POST['email'],strpos($_POST['email'],"@")+1)))
		{ error ("Invalid host name",1); }
	// Make sure the email address is a valid one
	if ( preg_match("/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/",$_POST['email']) OR
		!preg_match("/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/",$_POST['email']) )
		{ error("Invalid email address.",1); }
	// Create the outgoing headers, subject and message.
	$outbound = "{$_POST['message']}\n";
	$outbound .= "\n------------------------------------------------------------\n";
	$outbound .= "Email generated from formail script at: {$_SERVER['SERVER_NAME']}\n";
	$outbound .= ($_POST['referer']) ? "Referred by: {$_POST['referer']}\n" : "";
	$outbound .= "Logged: {$_SERVER['REMOTE_ADDR']}\nContact $adminemail with any concerns.";
	$outbound = stripslashes($outbound);
	$subject = stripslashes($_POST['subject']);
	$headers =  "From: {$_POST['name']} <{$_POST['email']}>\n";
	$headers .= "Content-type: text/plain\n";
	$headers .= "X-Mailer: DogNET PHP/" . phpversion();

	$outbound = wordwrap($outbound,60);

	// Send the email & display the output to the screen
	if( ! rblcheck($_SERVER['REMOTE_ADDR']) ) {
		mail($recip,$subject,$outbound,$headers);
	}

?>
<BR>
The following message has been sent to: <em><?= htmlencode(str_replace("@"," (at) ",$recip)); ?></em>.
<BR><BR>
From: <em><?= $_POST['name'] ?></em>&nbsp; &lt;<?= $_POST['email'] ?>&gt;<BR>
Subject: <?= $_POST['subject'] ?><BR>
Message:<BR>
<blockquote>
<?= wordwrap(nl2br($_POST['message'])) ?>
</blockquote>
<BR><BR>
<?
}

echo "</div>";
include("{$_SERVER['DOCUMENT_ROOT']}/footer.php");
?>
