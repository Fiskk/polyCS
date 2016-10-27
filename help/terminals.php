<?php include("{$_SERVER['DOCUMENT_ROOT']}/header.php"); ?>

<h1>Help: Terminal Types</h1>

<div id='content'>
<PRE>
The terminal setting for a bsdi machine console
is "ibmpc3". To set your terminal use the commands:
        set term=ibmpc3
        tset

When using the X window system, the "resize" command
can be used to set the TERMCAP environment variable
to reflect the type of terminal. Use the command:
        resize

A "resize" may be helpful when you stretch a window,
especially when logging in from a remote system.

For logging in from dumb terminals, like in C014, or
from a terminal emulator, from C012, C107 or over a
modem line, the vt100 setting is usually good:
        set term=vt100
        tset

Other terminal types can be looked up in the /etc/termcap
file. "ansi" sometimes seems to work well when logging
in from DogNET to a remote system.


</PRE>

</div>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/footer.php"); ?>
