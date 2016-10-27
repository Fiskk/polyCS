<? 
$website_addons = array("greybox");
include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); 

function create_image_link($file) {
	$image_info = getimagesize("pix/$file");
	$img_w = $image_info[0] + 25;
	$img_h = $image_info[1] + 25;
	echo "<a href='pix/$file' onclick='return GB_showCenter(\"Connecting to the CS Cluster\", this.href, $img_h, $img_w )'>";
	$height = ($image_info[1] < 300) ? $image_info[1] : 300;
	echo "<img border=0 src='pix/$file' height=$height></a>\n";
}
$step = 1;
?>
<h1>Connecting to the Cluster</h1>
<div id='content'>

<h3>Introduction:</h3>

<P>To connect to the SUNYIT Computer Science cluster, you will need to SSH in. If you are looking to
connect with a Windows box, you will need to have an SSH client. These directions will be using PuTTY but
can be followed along with other SSH clients. For a copy of PuTTY or directions of using PuTTY or Secure Shell
please use the following links.
<ul>
<li><a href="http://www.cs.sunyit.edu/network/downloads/files/putty-0.60-installer.exe">Click here to download PuTTY</a>
<li><a href="http://www.cs.sunyit.edu/help/ssh.php#putty">Click Here for Directions on Using PuTTY</a>
<li><a href="http://www.cs.sunyit.edu/help/ssh.php#ssh">Click Here for Directions on Using Secure Shell</a>
<ul>

</div>

<div id='content'>

<div id='content'>
<a name=""></a>
<h3>Cluster Connection Procedures:</h3>

<BR>
<? create_image_link("cluster2.png"); ?>
<P><?= $step++ ?>. SSH into <b>node1</b>. This will create your home directory. The very first time, you'll need to log out and then log back in, or manually change over to your home directory</p>
<BR>

<BR>
<? create_image_link("cluster3.png"); ?>
<P><?= $step++ ?>. Create your ssh key with <font color=magenta>ssh-keygen. </font> For entering the file in which to save the key, <font color="red">just hit enter</font> so that default locations are used. </P>
<BR>

<BR>
<? create_image_link("cluster4.png"); ?>
<P><?= $step++ ?>. Change directory to <b>.ssh/</b> and copy your ssh public key, the contents of <b>id_rsa.pub</b>, into the file <b>authorized_keys</b>.</P>
<BR>

<BR>
<? create_image_link("cluster6.png"); ?>
<P><?= $step++ ?>. Next, use <font color=magenta>ssh-agent bash</font> followed by <font color=magenta>ssh-add</font> to add yourself to ssh so that you won't have to type your password to log into each node. ssh-add will prompt you for the password you created with <font color=magenta>ssh-keygen</font>.</P>
<BR>

<BR>
<? create_image_link("cluster7.png"); ?>
<P><?= $step++ ?>. Manually ssh to all the nodes. They should not prompt your for a password, but just to accept their ssh host key fingerprint, which you will manually have to type yes to do.</P>
<BR>

<BR>
<? create_image_link("cluster9.png"); ?>
<P><?= $step++ ?>. Create a <b>.mpd.conf</b> file in your home directory defining MPD_SECRETWORD.</P>
<BR>

<BR>
<? create_image_link("cluster10.png"); ?>
<P><?= $step++ ?>. Create a <b>mpd.hosts</b> file in your home directory listing all the hosts' names, one per line.</p>
<BR>

<BR>
<? create_image_link("cluster8.png"); ?>
<P><?= $step++ ?>. Boot the mpd ring with your desired number of hosts, <font color=magenta>mpdboot -n <i>numofhosts</i></font>. It this doesn't work on the first try you might need to change permissions on the <b>.mpd.conf</b> file.</P>
<BR>

<BR>
<? create_image_link("cluster12.png"); ?>
<P><?= $step++ ?>. Compile your programs with <font color=magenta>mpicc</font>.</P>
<BR>

<BR>
<? create_image_link("cluster12.png"); ?>
<P><?= $step++ ?>.Run your desired commands with <font color=magenta>mpiexec -n <i> numofhosts filename </i></font>.</P>
<BR>

<BR>
<? create_image_link("cluster11.png"); ?>
<P><?= $step++ ?>. When done, shutdown the mpd ring using <font color=magenta>mpdallexit</font>.</P>
<BR>

<p><?= emaillink("admins","Email us") ?> with questions or concerns.</p>

</div>
<? include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
