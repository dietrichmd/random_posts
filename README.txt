# random_posts
Random posts plugin for WP

Random Posts Plugin Readme

Note:  This plugin requires editing php files.  If you are not comfortable doing this, please stop now and consult a developer.  I offer no support for this plugin.

Use:
Download and install plugin

In your wordpress admin, go to the plugins editor under the Plugins menu.  
On the top right of the page, click the dropdown and select Random Posts

To add categories for a specific link, simply add the category id's to the 'cat' array on line 24
To add specific pages for a specific link, simply uncomment the commented areas and change thirditem to whatever you want it to be called.

save the file and then activate the plugin.

FAQ:
The link isn't working -- Check to make sure the link is pointed to /random or whatever you put on line 15.  The second request should match line 23.  The third should match line 27.

I'm getting error messages when I activate the plugin. -- Everything works on my site as is.  Try to delete the commented sections and see if that helps.  If it doesn't, find your favorite php forum and ask there.

Can I ask you for help? -- No.  I am way too busy to offer support for this plugin.  In fact, I've kept it private for years to avoid this, but a code change necessitated me needing help so I had to make the plugin available to the public for coding help.  I am leaving it in place on github for my own use and for anyone who stumbles upon it.  That said, should you need help with it above the two FAQs above, you will need to consult a 3rd party developer.
