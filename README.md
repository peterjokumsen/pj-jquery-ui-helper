pj-jquery-ui-helper
===================

WordPress plugin to help with using jQuery UI in posts and pages

== Description ==

This plugin allows you to use jQuery UI's widgets with a simple to advanced shortcode in your pages or posts.

Here is a list of the current widgets and their corresponding shortcodes:

* Dialog - Used with \[pjjuh-dialog\]*contents*\[/pjjuh-tab\] to create a button where the shortcode is inserted that will open a dialog with the contents of the tag (or you can set an attribute of page to a title of one of the pages on your site to load the contents of that page into the dialog that is opened from pressing the button). For more information on how to use this please visit [my site][plugin-page].
* Tabs - Used with \[pjjuh-tab-group\] and then \[pjjuh-tab title="tab-title"\]*contents*\[/pjjuh-tab\] to create a tab with the title "tab-title" that contains the contents specified. For more information on how to use this please visit [my site][plugin-page]. 

Widgets I hope to add in the near future are:

* Accordion
* Tooltips

I also hope to allow more variations for the widgets in the near future.

== Installation ==

1. Upload files to the `/wp-content/plugins/` directory, in their own directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add shortcodes to your pages/posts as you like

== Frequently Asked Questions ==

= How can I create a dialog? =

Find where you would like to place the button, in that location (In Page/Post edit) insert \[pjjuh-dialog\]\{contents\}\[/pjjuh-dialog\] where \{contents\} is the contents you would like to have inside of your dialog.

= How can I create tabs? =

Find where you would like to place your tabs section, in that location (In Page/Post edit) insert \[pjjuh-tab-group\]\[pjjuh-tab title='\{tab-title\}'\]\{contents\}\[/pjjuh-tab\]\[/pjjuh-tab-group\] where \{contents\} is the contents you would like inside of that tab and \{tab-title\} is the text that will show in the tab's button. Take a look at screenshots for an example.

= Are there more attributes I can use in the shortcodes? =

Yes! There is a list of accepted attributes here: [Plugin Website][plugin-website].

== Screenshots ==

1. An example of a dialog using the shortcode \[pjjuh-dialog\].
2. An example of tabs using the shortcode \[pjjuh-tab-group\] and \[pjjuh-tab\].

== Changelog ==

= 1.0.3 =
* Used WordPress jQuery UI scripts
* Updated to allow for multiple dialogs on a page/post

= 1.0.2 =
* Added settings for user to set default width and height for dialogs.

= 1.0.1 =
* Included tabs functionality.
* Allow for user to choose themes, more themes to be added.

= 1.0.0 =
* Created plugin with dialog functionality.