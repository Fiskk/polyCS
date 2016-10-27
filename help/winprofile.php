<?php include("../header.php"); ?>

<h1>Help: Windows Profiles</h1>

<div id='content'>
<a name="winprofile"></a>
<h3>Windows profiles</h3>

<p>The Microsoft Windows user roaming profile allows you to have a
personalized desktop environment.  You are able to customize your
desktop, icons, and program settings and have these setting follow you
to each Windows machine on the CS network.
A default profile is generated for new users on their first login. </p>

<h3>How it works</h3>
<p>When you log in to a Windows machine for the first time, your profile is
created based on the Default profile.  Any changes you make are then saved
to your profile.</p>
<p>Your profile is stored on the CS samba server.  Each time you log in to a
windows machine, this profile is transfered from the server to the local
computer and stored under C:\Documents and Setting\username\.  When you log out
your profile, along with any changes you have made, is then transfered back to the
server and deleted from the local machine.
</p>

<h3>Profile Size</h3>

<p>If your windows profile becomes too large or corrupt, you may have trouble
logging in to the Windows machines or running programs.</p>

<p>A size greater then 15-25mb is excessive and will result in a long wait each
time you log on/off of a windows machine.  The most common problem is the storage of large files on the desktop and Internet browser's cache directory.</p>

<p>To reduce the size of your profile, either clean it up or reset it.  Removing
large files from the desktop may be a good place to start.</p>

<!--
<h3>Profile Quotas</h3>

<p>
In order to keep windows profiles within a managable size, a 25mb profile
quota is now in place.  The size of this quota may be lowered further at
the end of the semester.  To check the amount of available space for your
profile, hover your mouse over the profile icon on the taskbar like so: </p>
<p align=center><img src="pix/proquota2.png"></p>
<p>
The red X icon on the taskbar means you have exceeded your profile quota
and must remove some files before windows will allow you to log off: </p>
<p align=center><img src="pix/proquota5.png"></p>
<p>
Double click on the red X to see which files are taking up the most space: </p>
<p align=center><img src="pix/proquota6.png"></p>

<p>
Your profile is stored on the local machine under C:\Documents and Settings\username\.
Browse to this location from My Computer and look for the large files.  Either
delete these files or move them to another location, such as your home directory
(H: drive), or the temporary storage area (T: drive).

<BR>
Once you are back within quota, you will be able to log off of the machine and
your settings will be saved to the file server.

</p>

-->
<h3>Resetting a corrupt windows profile:</h3>


<p>Your windows profile is stored on the samba server and can only be accessed
by an administrator.  Occasionally, a windows profile will become corrupt and
need to be reset.  If you would like your profile reset stop by our
workroom in C107 or <?= emaillink("admins&subject=Profile+reset","email us") ?>.

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
