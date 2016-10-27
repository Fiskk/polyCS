<a name="top"></a>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>
<h1>Help: Connecting to the Cluster</h1>

<div id='content'>

<h3>Introduction:</h3>

<p>To connect to the SUNYIT Computer Science cluster, you will need to SSH in. If you are looking to
connect with a Windows box, you will need to have an SSH client. These directions will be using PuTTY but
can be followed along with other SSH clients. For a copy of PuTTY or directions of using PuTTY or Secure Shell
please use the following links.</p>
<ul>
<li><a href="http://www.cs.sunyit.edu/network/downloads/files/putty-0.60-installer.exe">Click here to download PuTTY</a>
<li><a href="http://www.cs.sunyit.edu/help/ssh.php#putty">Click Here for Directions on Using PuTTY</a>
<li><a href="http://www.cs.sunyit.edu/help/ssh.php#ssh">Click Here for Directions on Using Secure Shell</a>
</ul>

<p>In order to utilize the cluster, you will need to be a member of the cluster group. In addition, the cluster is protected by a gateway. This means you will only be able to connect to it from another DogNET machine.</p>
</div>

<div id='content'>
<h3>Cluster Connection Procedures:</h3>

<p>After you download and install the SSH program, follow the steps below to connect to the CS Cluster.</p>

<p align="center">
<TABLE width=600>
<TR>
<TD valign="top"><p>SSH into <b>node1</b>. This will create your home directory. The very first time, 
you'll need to log out and then log back in, or manually change over to your 
home directory</p></TD>
<TD><a href="pix/cluster2.png"><img src="pix/cluster2.png" width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>Create your ssh key with <font color=magenta>ssh-keygen. </font> For entering the file in which to save the key, <font color="red">just hit enter</font> so that default locations are used.</p></TD>
<TD><a href="pix/cluster3.png"><img src="pix/cluster3.png"  width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>Change directory to <b>.ssh/</b> and copy your ssh public key, the contents of <b>id_rsa.pub</b>, into the file <b>authorized_keys</b>.</p></TD>
<TD><a href="pix/cluster4.png"><img src="pix/cluster4.png"  width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>Next, use <font color=magenta>ssh-agent bash</font> followed by <font color=magenta>ssh-add</font> to add yourself to ssh so that you won't
have to type your password to log into each node. ssh-add will prompt you for the password you created with <font color=magenta>ssh-keygen</font>. If you did not create a password for your ssh key, you will <b>not</b> need to use ssh-agent.</p></TD>
<TD><a href="pix/cluster6.png"><img src="pix/cluster6.png"  width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>Manually ssh to all the nodes. They should not prompt your for a password, but 
just to accept their ssh host key fingerprint, which you will manually have to type yes to do. You will only ever have to do this once to establish the validity of the nodes in your known_hosts file.</p></TD>
<TD><a href="pix/cluster7.png"><img src="pix/cluster7.png"  width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>Create a <b>.mpd.conf</b> file in your home directory defining MPD_SECRETWORD. Be sure to set the permissions on it properly. You'll proably want to do <font color=magenta>chmod 600 .mpd.conf</font>.</p></TD>
<TD><a href="pix/cluster9.png"><img src="pix/cluster9.png"  width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>Create a <b>mpd.hosts</b> file in your home directory listing all the hosts' names, one per line.</p></TD>
<TD><a href="pix/cluster10.png"><img src="pix/cluster10.png"  width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>Boot the mpd ring with your desired number of hosts, <font color=magenta>mpdboot -n <i>numofhosts</i></font>.</p></TD>
<TD><a href="pix/cluster8.png"><img src="pix/cluster8.png"  width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>Compile your programs with <font color=magenta>mpicc</font>.</p></TD>
<TD><a href="pix/cluster12.png"><img src="pix/cluster12.png"  width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>Run your desired commands with <font color=magenta>mpiexec -n <i> numofhosts filename </i></font>.</p></TD>
<TD><a href="pix/cluster12.png"><img src="pix/cluster12.png"  width=350 height=291></a></TD>
</TR>

<TR>
<TD valign="top"><p>When done, shutdown the mpd ring using <font color=magenta>mpdallexit</font>.</p></TD>
<TD><a href="pix/cluster11.png"><img src="pix/cluster11.png"  width=350 height=291></a></TD>
</TR>
</TABLE>
</p>

<a href="#top"> Top </a> 
</div>

<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
