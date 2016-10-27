<? require("{$_SERVER['DOCUMENT_ROOT']}/php-bin/dog-lib.php") ?>

<? dogmainheader(); ?>

<center><font size="+3"><B>Network Information</B></font></center>
<BR><BR><BR>

<PRE>

To start the X11 server AT THE CONSOLE of a machine type:

        startx

The operation of the X server can be controlled in part by files located
in your home directory.

.xinitrc
.twmrc (for the twm window manager)
.fvwmrc
.Xdefaults - customize "resources" (colors and other parameters) used
                by the X system

X11 client programs can be found in /usr/X11/bin and
        /usr/local/X11 and /usr/local/X11/bin

to run mosaic:          xmosaic http:// &
to run tkwww            tkwww&

***** DO NOT TRY TO RUN X11 FROM HOME !!! *****


</PRE>
<BR><BR>

<? dogmainfooter("Webmaster","webmaster") ?>
