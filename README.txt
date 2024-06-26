=== Plugin Name ===
Contributors: coderscom
Tags: Odoo, Contact Form 7
Requires at least: 3.0.1
Tested up to: 4.7.3
Stable tag: 4.3
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Odoo is an Open Source ERP and CRM. WP Odoo Form Integrator plugin is a bridge between Odoo and several highly used form plugins.

== Description ==

[Odoo] (https://www.odoo.com/) is an Open Source ERP and CRM. WP Odoo Form Integrator plugin is a bridge between Odoo and several highly used form plugins.

WP Odoo Form Integrator provides the ability to Wordpress admin to bind any Odoo model with any form of the supported types. Once form fields are mapped with Odoo model fields, whenever the form is submitted, the same will also be submitted to Odoo as per the field mapping.

No programming knowledge is required. Anyone who knows the Odoo model that he/she wants to bind can do the integration with WP forms. 


A few notes about the sections above:

* Easy setup and integration
* Store data from your WordPress contact plugin in Odoo
* Simple to use UI to map the form fields with the Odoo model fields.
* Keep the data map even if you delete or deactivate the plugin


### Compatibility
WP Odoo Form Integrator plugin currently works with the following plugins;

Open source plugins

* [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)

Installation ==

#### Automatic Installation
1. Visit Plugins > Add New
2. Search for WP Odoo Form Integrator
3. Activate WP Odoo Form Integrator from your Plugins page.

#### Manual Installation
1. Download WP Odoo Form Integrator Plugin.
2. Upload the wp-odoo-form-integrator directory to your /wp-content/plugins/ directory, using your favorite method (ftp, sftp, scp)
3. Activate WP Odoo Form Integrator from your Plugins page.

#### Manual Installation
1. Download WP Odoo Form Integrator Plugin.
2. Visit Plugins > Add New
3. Click on upload plugin button.
4. Click on browse button and select plugin zip file. After file select click on Install Now button.
5. Click on Activate Plugin button.

## Usage

An example of how to use it:

1. Install this plugin.

2. Generate API key in the Odoo admin panel.
Odoo admin panel -> Preferences (or My Profile icon at the right top corner)
then open the Account Security tab, and click New API Key.

3. Specify connection details on the configuration page of this plugin.
WordPress dashboard -> WP Odoo Form Integrator -> Settings

Example for localhost:
URL – http://localhost:8069/
Database – odoo17
Username – admin
Password (API key) – bc888f410c8e8f145d9589e03ba03579809052dc

For Odoo Online:
The server url is the instance’s domain (e.g. https://mycompany.odoo.com), the database name is the name of the instance (e.g. mycompany). The username is the configured user’s login as shown by the Change Password screen.

NOTE: for localhost you can use http:// but for real website use secure https:// protocol.

NOTE 2: if you are starting odoo from command line. It contains a line of how to connect to it:

```
INFO ? odoo.service.server: HTTP service (werkzeug) running on localhost:8069
```
4. Click the “Test Authentication” button to check the connection (at the bottom of the configuration page of this plugin).

5. Download and install the Ninja Forms plugin:
https://wordpress.org/plugins/ninja-forms/

6. Create a form and add it to some wordpress page with a shortcode like:
[ninja_form id=1]

7. Check if the form appears on the front-end page.

8. Register your form for this plugin.
WordPress dashboard -> WP Odoo Form Integrator -> Add New

Example:
```
Title – Myform
Form Type – Ninja Forms
Form – select your form
Odoo Model – res.partner
Field mapping:
name – Name
email – Email
```

Click the “Save Mapping” button a the bottom of the page.

9. Open the form on the front-end and try to fill and submit it.
NOTE: if you are running odoo from command line. You should see lines like these:

```
INFO odoo17 odoo.addons.base.models.res_users: Login successful for db:odoo17 login:admin from n/a 
INFO odoo17 werkzeug: 192.162.0.100 - - [16/Jan/2024 17:40:07] "POST /xmlrpc/2/common HTTP/1.0" 200 - 8 0.005 1.123
INFO odoo17 werkzeug: 192.162.0.100 - - [16/Jan/2024 17:40:07] "POST /xmlrpc/2/object HTTP/1.0" 200 - 48 0.172 0.232
```

They mean that some script tried to access the odoo via API.

10. Go to odoo admin panel. And try to find a new customer.
You may need to activate the “Sales” odoo module.
For me it is on the page:
Odoo admin panel -> Invoicing -> Customers -> Customers

Remove the filter in the search field to view all customers.

