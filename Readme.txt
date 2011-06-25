

** TXPMOBILE v0.4.1
** Oliver Ker (www.oliverker.co.uk)
** txpmobile.com

==================================================================


///* NEW INSTALL *///

* Upload the txpmobile file into your textpattern theme folder

* Change your theme to txpmobile in the preferences

* Done! Test on a mobile device

///* UPGRADING from 0.1 0.2 or 0.3 *///

* If you upgraded to txp v4.3.0 i'ts most likley txpmobile stoped working so disabled it, but just in case

* Upgrade textpattern to version 4.3.0

* Use the standard textpattern/index.php file

* Delete the folder textpattern/txpmobile as it's no longer needed

* Follow the instructions for new install if not already

==================================================================

Thats all Folks!
This is still in an early stage and hopefully more things to come. Please note that this has been done in my spare time and will not be able to give any kind of full support to it, but requests and help in the forum (http://forum.textpattern.com/viewtopic.php?id=34184) are more than welcome

At the moment I have developed this to be used on a standard install, so that means anything that alters the admin layout may look a bit funny in areas. Sorry, but hopefully we can put that right with you people.

==================================================================

/* VERSION */
0.4.1
- Added Upload Image Field for Android phones only - Android 2.2 support uploads in the browser.
- Added 'Create thumbnail' 

0.4
- Complete re-write
- Is now a standard theme with one folder to upload
- Some of the Code is a little rough, I will be tidying as I go 

0.3
- Added Apple Home Icon
- Changed the folder structure so not to alter desktop theme system
- Selecting a desktop theme is now separate from txpmobile

0.2
- Added Classic theme to txpmobile/theme/ as this was needed
- Removed the extra lines between the mobile if statements in the textpattern/index.php file seemed to cause problems with older versions of php. Also ensure the index txpath. were correct

0.1
- Sent out beta for testing

==================================================================

/* SUPPORTED PLUG-INS */

tru_tags, adi_variables, upm_image, upm_file

==================================================================

Should Work in.
txp v.4.3.0
php 5.0.2+

Tested in.
txp v.4.3.0
php 5.2.13+
apache 2.2.11+

Devices.
i0S 3.0+
iOS 4+
Android 2.2 (nexus one)