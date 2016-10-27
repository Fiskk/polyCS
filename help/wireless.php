<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Help: Wireless</h1>

<div id='content'>
<a name="wireless"></a>
<h3>Wireless Connectivity:</h3>

<p>A 802.11g wireless access point is currently located in Kunsela C122 which covers most 
of the Kunsela classroom wing.  IP addresses are dynamically assigned via DHCP.  No WEP is 
being used to secure the communication, therefore, traffic is currently filtered to block 
all unsolicited inbound traffic and all outbound traffic except for ssh, http, and https
(ports 22,80,443).</p>

<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
