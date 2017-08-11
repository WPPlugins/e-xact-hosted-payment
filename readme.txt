=== E-xact | Hosted Payment | ===

Author: DonnellC
Version: 2.0
Author URI: djkidnyce.com/about/
Contributors: DonnellC
Tags: E-xact, E-xact Hosted Payment, Hosted Payment, E-xact Hosted, ehp, exact HCO, E-xact hco, Hosted Checkout, E-xact Hosted Checkout,exact
Requires at least: 3.5
Tested up to: 4.6
Stable tag: 2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==
This is for E-xact Hosted Payment. E-xact Made easier for WordPress users to set-up a pay button on their website.

[youtube https://www.youtube.com/watch?v=h2SM6Fvur3I]

== Screenshots ==


== Installation ==

This section describes how to install the plugin and get it working.


1. Upload `e-xact-hosted-payment.zip` to the `/wp-content/plugins/` directory
2. Activate the plug-in through the 'Plug-ins' menu in WordPress
3.You will need to create a hosted payment page in your E-xact Hosted Payment account. 
4.Once created you want to click on your payment page id.
5.Next click on tap number 8 Hash Calculator. 
6.From there you want to copy the X Login and Transaction Key.
7.Select the field you want to display on your site.
8.Copy the the short-code.
9.Paste the short-code on the page you want to take payment on.

== Changelog ==

= 1.0 =
Initial release

= 2.0 =
* Before installing update. PLEASE download and/or backup your xlogin_transkey and confirm file. Located YOUR-SITE-HERE/wp-content/plugins/e-xact-hosted-payment folder.
* Updated not be able to send recurring transactions.
* Updated HTML code for better formatting.
* The Plug-in now creates 2 files in the plug-in directory. 
	One holding the xlogin and transaction key, the 2nd one only submitting the transaction.
	This is for added for security
* You are now able to view the X Login and Transaction Key from the file.
* Fixed uninstall. When you remove the plug-in, all the file that came with the plug-in will be deleted.
* Made the Amount field  required in the HTML code.
* Updated SHA-1 HMAC code.
* Added the ability to process pre-authorizations.
* Added the ability to pick a color to appear on the hosted payment page.
* Added the ability to enter a Logo URL to be sent to the payment page.
* Added the ability to get a copy of the customer's confirmation email.
* Added a date picker for recurring transactions. 
* Now required fields are working in Google Chrome.
* Added phone number field.
* Added fax number field.
* Added user 1 field.
* Added user 2 field.
* Added user 3 field.
* Added comments field.
* Added the ability to copy the billing address into the Shipping address fields.
* Added CSRF(Cross-Site Request Forgery) protection  
* Moved Settings page to sidebar.
* Added backup option.
* After backup is created. It will be removed from your server after 30 seconds.
* Updated recurring HTML code.
* Formatted landing page better.
* Added more options for recurring.
* Added option for merchant to select automatic recurring or for customer to select start and end date.
* Added placeholders for all fields.
* Added option to upload PHP and HTML files. 
* Added current HTML page to see current code. 
* Added option to edit HTML code.
* Addressed Parse error: syntax error, unexpected T_FUNCTION.
* Fixed issue where Wordpress removes and breaks code when using the visual tab.
* Removed HTML from main page.
* Added Shortcode in place of HTML.
* Tokens will be used in future release.
* Fixed issue where shortcode go to the top of your post. Giving you more control on where, you want to put the payment form. (5-1-16)
* Added the option to charge tax. (8-5-16)