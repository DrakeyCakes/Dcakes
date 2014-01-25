![flaming pickle](flaming-pickle/screenshot.png)

The EEx factory profile wordpress workings

Installing
==========

Required Plugins
----------------

### Postmark

You must install a postmark plugin to send emails.

http://wordpress.org/plugins/postmark-approved-wordpress-plugin/

team@eex.io
4ec774c2-f787-4313-9295-58d58f07f0d2


### Contact form

We have a modified version of this contact form plugin:
http://wordpress.org/plugins/contact-form-plugin/

This is in this repo in `contact-form-plugin`


Installation Instructions
-------------------------

1.  Make sure git repo is up to date (this is the folder on your local machine).
    You can confirm this with the github for mac app. Make sure all branches
    are synced and merged to master.
1.  Make sure you are on the master branch.
1.  Navigate to the folder in finder.
1.  Right click `contact-form-plugin` and choose compress.
1.  Right click `flaming-pickle` *note there is no S in the name of this folder*
    and choose compress.
1.  In WP Admin go to plugins and upload the `contact-form-plugin.zip` archive
    you just created.
1.  Activate the plugin.
1.  In WP Admin go to themes and upload the `flaming-pickle.zip` archive
    you just created.
1.  Activate the theme.


Site Buildout Instructions
--------------------------

1.  Go to Pages > Add New
1.  Name the page and choose the `Page of pages` template
1.  Publish
1.  Go to Appearance > Themes > Customize
1.  Static Front Page > A static Page > and set the front page to the page you
    just created.
1.  Save & Publish then Close
1.  Now add each section starting with `Tops` and assign them to the parent page
    that you just set as the static front page.
1.  Pick the appropriate template for each section & set the order (0 is first).


Menu Instructions
-----------------

1. Create a menu with your sections in Appearance > Menus.
1. If you don't see the custom types (top, video, etc) check the boxes in the screen
   options pull down at the top of the page.
1. Check the Main Nav box and save.


Adding a new box in the code
============================

1. Register the type in functions.php
2. Add the necessary meta boxen
 a. Add a new file in fp-meta-boxen
 b. Require the new file in fp-meta-boxen/boxen.php
3. Add a template in templates
4. Add the custom type to the query_posts in page-of-pages.php

Authors
=======

Drake
Lee
