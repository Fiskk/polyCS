<?
$months = array ("0","January","February","March","April","May","June","July","August","September","October","November","December");
$datenow = getdate (time(void)); // "seconds" - seconds,"minutes" - minutes,"hours" - hours,"mday"- day of the month,"wday" - day of the week, numeric,"mon" - month, numeric,"year" - year, numeric,"yday" - day of the year, numeric; i.e. "299","weekday" - day of the week, textual, full; i.e. "Friday","month" - month, textual, full; i.e. "January"

if(file_exists("/opt/auth/web/{$_SERVER['csbtoken']}.php")) {
	 require_once("/opt/auth/web/{$_SERVER['csbtoken']}.php");
}

$globals = array (
        'REMOTE_HOST'   =>      $REMOTE_HOST,
        'DOC_ROOT'      =>      $HTTP_SERVER_VARS["DOCUMENT_ROOT"],
        'cookie'        =>      $HTTP_COOKIE_VARS["woofwoof"],
        'cookie_time'   =>      12000,
        'levels'        =>      array(0,1,2,3,4,5,"Suspended")
);

function db_query($string,$db="view") {
	global $mysql;

        // Perform a database query and return the result hash.
        $dbh = mysql_connect ($mysql[$db]['host'],$mysql[$db]['user'],$mysql[$db]['pass']) or error("Could not connect to database",0);
        $result=mysql_db_query($mysql[$db]['db'],"$string");
        mysql_close($dbh);
        return($result);
} // END db_query Function

function error ($message,$closetable) {
	?>
	<BR><BR><BR>
	<center>
	<table bgcolor="#CFCFCF" cellspacing=5 cellpadding=0 border=0 width=400>
	<TR><TD align=center>
	<BR><BR><BR>
	<font size="+2"><B>Error: <? echo $message ?></b></font></center>
	<BR><BR><BR>
	</TD></TR>
	</TABLE>
	</center>
	<?
	if($closetable) { echo "</div>"; include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); }
	die;
}

function class_sched_link($all) {
	$base = 'https://bannerweb.sunyit.edu/pls/pprddad/swssschd.P_ShowSchd';

	$show = array(
			1 => 1,
			2 => 1,
			3 => 1,
			4 => 1,
			5 => 6,
			6 => 6,
			7 => 6,
			8 => 9,
			9 => 9,
			10=> 9,
			11=> 9,
			12=> 1
		      );
	$semesters = array(
			1 => "Spring",
			6 => "Summer",
			9 => "Fall"
		      );

	$today = getdate();
	$month = $today['mon'];
	$year = $today['year'];

	if($month == 12) { $year++; }

	$link = "${year}0{$show[$month]}";
	$display = "{$semesters[$show[$month]]} $year";

	if($all) {
		echo "<a href=\"$base?term_in=${link}&amp;disc_in=CSC\">$display Class Schedule</a>";
	} else {
//		return "$base?term_in=${link}&disc_in=CSC\" ";
		return "$base?term_in=${link}&disc_in=";
	}
}

function htmlencode($string) {
	for($i=0;$i<strlen($string);++$i){
		$n = rand(0,1);
		if($n) { $finished.='&#x'.sprintf("%X",ord($string{$i})).';'; }
		else { $finished.='&#'.ord($string{$i}).';'; }
	}
	return $finished;
}

function emaillink($address,$anchor = NULL) {
	if( ! isset($anchor) ) $anchor = $address;
	$encoded = htmlencode($anchor);
	return "<a href='/php-bin/form-mail.php?recip=$address'>$encoded</a>";
}

function degreechair() {
	echo "Direct any questions about the program to: " .
		emaillink("urbanc","Christopher Urban") . ", Department Chair.\n";
}

function telecom_chair() {
	echo "Direct any questions about the program to: " .
		emaillink("fjam","John Marsh") .
		", Program Chair.\n";
}

function blacklisted($ip,$list = "") {

	switch($list) {
	case "all":
		$dnsbl_lists = array("zen.dnsbl","local.dnsbl");
		break;
	default:
		$dnsbl_lists = array("comb.dnsbl");
	}

    	if ($ip && preg_match('/^([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})/', $ip)) {
		$reverse_ip = implode(".", array_reverse(explode(".", $ip)));

		foreach ($dnsbl_lists as $dnsbl_list){
			if (checkdnsrr($reverse_ip . "." . $dnsbl_list . ".", "A")) {
				return $reverse_ip . "." . $dnsbl_list;
			}
		}
	}
	return false;
}

function isValidemail($email){
	// First, we check that there's one @ symbol, and that the lengths are right
	if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
		// Email invalid because wrong number of characters in one section,
		// or wrong number of @ symbols.
		return false;
	}

	// Split it into sections to make life easier
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++) {
		if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
		return false;
		}
	}
		if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
			// Check if domain is IP. If not, it should be valid domain name
			$domain_array = explode(".", $email_array[1]);
			if (sizeof($domain_array) < 2) {
				return false; // Not enough parts to domain
			}
		for ($i = 0; $i < sizeof($domain_array); $i++) {
			if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
			return false;
			}
		}
	}

	list($username,$domain) = split('@',$email);
	if ( !checkdnsrr($domain,"MX") || !checkdnsrr($domain,"A") ) {
		return false;
	}

	return true;
}

?>
