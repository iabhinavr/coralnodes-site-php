---
title: 'How to Secure your WordPress Website from Hackers? 12 Essential Steps'
date: '2021-10-17 19:48:27'
modified: '2021-12-24 22:12:11'
slug: secure-wordpress-essentials
categories:
    - security
tags:
    - wordpress-maintenance
featured_image: 2021/10/secure-wordpress-from-hackers-featured-1.jpg
excerpt: 'Learn the essential steps to keep your WordPress website secured from hackers and other exploits.'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Learn the essential steps to keep your WordPress website secured from hackers and other exploits.'
cn_related_posts:
    - http-security-headers
    - manage-multiple-wordpress-sites-tools
    - update-wordpress-plugins-themes
    - stop-spam-comments-wordpress
---
Securing a self-hosted WordPress site is not a mammoth task, but not simple either.

Here are some of the things that I generally follow on my sites to keep them secure.

## 1. Perform Regular Updates

Keeping WordPress up-to-date is the first and foremost immunity against all types of attacks and malware. Updates often patch any known security loopholes, which prevents attackers from exploiting them.

Not just the WordPress core software, you should regularly update the plugins and themes as well.

_Now, what are the proper ways to update a site?_

_There are multiple ways:_

- You can manually login to your sites daily or weekly, then go to the **Updates** section in your WordPress admin to find all the available updates.
- However, a better way is to enable the **autoupdates** feature, which automatically downloads and installs the newer versions as and when they come.
- Or, you can also use a site management tool like **MainWP** to automate updates across multiple sites.

You might like to read these articles too:

- [How to manage multiple WordPress sites](http://localhost:10003/manage-multiple-wordpress-sites-tools/)
- [How to update WordPress websites](http://localhost:10003/update-wordpress-plugins-themes/)

That brings me to the second point, which is to avoid any unnecessary or bad plugins.

## 2. Avoid Bad Plugins

Plugins are a way to add extra functionalities to a WordPress site. It can also work without any plugins at all.

However, almost all sites require at least a few essential plugins, such as an SEO plugin, [anti-spam plugin](http://localhost:10003/akismet-alternatives/), etc.

Over time, you might feel the need for more plugins, especially with a growing WordPress website, in the form of marketing integrations, premium plugins, etc.

And that's when you need to be more cautious. Vulnerabilities can creep in intentionally or unintentionally.

Plugins developed by inexperienced developers may not be following the best practices (experienced can also make mistakes at times), which can create loopholes in the code.

Or worse, if the plugin is from an untrusted source (which can be downloaded and installed as a zip file), someone might have placed malicious code in the software.

So, keep in mind the following things whenever installing a new plugin:

- Install plugins only from trusted sources/developers. Look for ratings, reviews, and no. of active installations on the plugin's page on WordPress.Org.
- Ensure that the plugins are well-maintained and well-rated. For plugins available in the WordPress repository, WordPress usually displays warnings about oudated plugins.
- If it's not a free plugin available in WordPress.Org, do your due diligence about the plugin's developer. Check their other products, and what other users are saying about the plugin.

## 3. Theme Security

Just like the plugins, make sure you use only safe themes. The free themes you get from the WordPress.Org Themes directory are mostly safe, as they undergo rigorous checks before getting listed.

On the other hand, if you are using a premium theme from a third-party website like ThemeForest or others, make sure the author has a good reputation.

- Also check: [Top Theme Providers for WordPress](http://localhost:10003/wordpress-theme-providers/)

Nulled premium themes are a big no, as they often contain malware.

_Why would anyone offer a premium product for free, unless they have some hidden intentions?_

So, install themes from legitimate sources only.

## 4. Use Strong Passwords

Brute force attacks are a major headache for any website that allows users to log in using a username and a password. WordPress is also no different.

In this type of attack, the attacker tries to guess your password by trying different phrases and letter combinations. They may even use bots to automate the work, which increases the probability of getting it right.

So, an important measure here is to use a strong password. Never use any dictionary words or even your name as the password.

If possible, use a password generator to create totally random passwords. WordPress has a built-in password generator, which comes with a strength indicator.

Also, write it down in a safe place or store it in an encrypted password manager like OnePassword or Dashlane.

- Generate random passwords, at least 12 characters long. Include upper and lower case letters, numbers, and special characters.
- Store it safely.
- Make sure your computer is not accessible by anyone else.
- If it is multi-user/multi-author website, ensure other users also use strong passwords, especially those with higher privileges like administrator, editor, moderator, author, and contributor.

## 5. Hide Login Page

Another way to reduce brute force attacks is to change the [default login URL](http://localhost:10003/how-to-find-wordpress-login-url/) to something custom. Because if attackers don't know the login page, where can they target?

Use a plugin like [WPS Hide Login](https://wordpress.org/plugins/wps-hide-login/), which allows you to set a custom URL slug for the login page. You can bookmark this address for your own use.

So, whenever someone visits the default addresses like _example.com/wp-admin/, example.com/wp-login.php_, they'll only get a 404 Not Found Error.

_Note: [Security through obscurity](https://en.wikipedia.org/wiki/Security_through_obscurity#:~:text=Security%20through%20obscurity%20(or%20security,to%20a%20system%20or%20component.) may not be the ideal way, but it indeed helps to prevent login page attacks._

## 6. Setup Basic Security Hardening

Use a plugin like [Sucuri Security](https://wordpress.org/plugins/sucuri-scanner/) to harden the security of your WordPress installation. The plugin helps to do the following:

- Hides WordPress version from HTML output: prevents attackers from detecting your WordPress version directly.
- Disables Plugin and Theme Editors: By default, WordPress allows editing PHP files from the admin, which can be a threat if someone gains access to the admin area.
- Makes sure the default username is not "admin"
- Updates [WordPress secret keys](https://ithemes.com/security/wordpress-salt/) in wp-config.php
- Login activity monitoring.

In addition to that, Sucuri Security also includes a scanner, which periodically checks the integrity of WordPress files.

## 7. Install a Security Plugin

On top of all these measures, you can also install a dedicated security plugin as well. Some well-known options are:

- [WordFence](https://wordpress.org/plugins/wordfence/)
- [All-in-one WP Security](https://wordpress.org/plugins/all-in-one-wp-security-and-firewall/)
- [iThemes Security](https://wordpress.org/plugins/better-wp-security/)
- [Bulletproof Security](https://wordpress.org/plugins/bulletproof-security/)

Most of these plugins implement advanced measures to protect against attacks. For example, WordFence implements a Web Application Firewall (WAF), which checks all visitors for malicious nature before they access your website.

_Note: One disadvantage associated with advanced security plugins is performance. However, there are [conflicting opinions](https://www.quora.com/Do-security-related-plugins-dramatically-slow-down-the-WordPress-site) about whether security plugins cause slowdown or not. So, don't overdo it, and try to use only one security plugin at a time._

## 8. Enable HTTPS

These days, sites that don't support SSL certificates are rare. But in case your's is one of them, it is high time you do it.

An SSL certificate not only enhances security but also improves the SEO of your site.

Browsers like Google Chrome will show a _'Not Secure'_ warning in the address bar for sites that don't support HTTPS connections.

_So, what does HTTPS mean?_

HTTP stands for Hypertext Transfer Protocol, the [protocol for the internet](http://localhost:10003/how-the-internet-works/). And the letter 'S' denotes that it is _secure_. Unlike a normal HTTP connection, HTTPS [encrypts](https://www.thesslstore.com/blog/how-does-https-work/) the communication between the client and the server. It's highly essential when you are accessing websites from public wifis.

For that to work, you need a valid SSL certificate. These certs are issued by known certifying authorities like Comodo.

SSL certificates used to cost extra money earlier, but with the arrival of [Let's Encrypt](https://letsencrypt.org/), that has changed. Now you can get valid certificates for free.

So, when choosing a web hosting, make sure it allows installing Let's Encrypt SSL certificates from the control panel.

- HTTPS helps to improve security and SEO
- Redirect non-secure HTTP connections to HTTPS, especially for the wp-admin area.
- Use a hosting provider that supports free SSL certificates.

## 9. Choose a Secure Hosting

Most good web hosts take security seriously. [Cloudways](http://localhost:10003/cloudways-hosting-review/), [Dreamhost](http://localhost:10003/dreamhost-review/), [Kinsta](http://localhost:10003/kinsta-review/), etc. are some of the providers that you can consider.

- Ensure your host supports the latest stable versions of PHP, MySQL, Apache/Nginx.
- Learn about the company's data center security measures.

It is also a good idea to stay away from free web hosting providers, especially the ones that are not well-known.

Also, keep in mind that there are [different types of hosting](http://localhost:10003/web-hosting-types/) plans available today - shared, VPS, cloud, dedicated, etc. Out of these, shared hosting plans are usually the least secured. The reason is, it shares the server with other users' websites.

If you have a medium to high traffic site, consider going for a cloud, dedicated, or managed WordPress hosting.

## 10. Use SSH/SFTP to access Hosting Account

When you self-host a WordPress website, you have multiple login accounts to manage:

- WordPress (wp-admin) login
- Hosting account login
- cPanel login (provided by the host)
- Domain regsitrar login (if you buy hosting and domain from different providers)

In addition to these, most hosts also allow you to access website files using FTP (File Transfer Protocol). Your cPanel (or control panel) usually includes a section where you can find the details of your FTP account (such as hostname, user, password, and port number).

FTP by default does not use any encryption, so it is not at all secure. Anyone in the middle can steal your credentials, thereby giving them access to your website files.

So, the solution is to use an encrypted communication method like SFTP or FTPS.

SFTP is SSH File Transfer Protocol, which uses SSH protocol to connect to the server.

Whereas FTPS is File Transfer Protocol Secure, which still uses the FTP protocol, but is secured using SSL/TLS encryption.

When connecting to the server from an FTP client like FileZilla, make sure you use one of these protocols rather than plain FTP.

## 11. Disable XML-RPC

WordPress supports an RPC (Remote Procedure Call) interface out of the box. The location is:

- _yoursite.com/xmlrpc.php_

_But what is its use?_

For example, it allows you to publish posts programmatically by sending the WordPress credentials and post content in the form of an HTTP POST request directly to the URL - _yoursite.com/xmlrpc.php_. No need to login to the wp-admin post editor.

However, it has turned out to be a target for Bruteforce attacks rather than serving as a useful feature. Attackers misuse this endpoint to launch login attempts.

If you are receiving several failed login attempts even after hiding the login URL, then you might want to check if the target is wp-login.php or xmlrpc.php. If it's the latter, you should disable it.

You can do it easily by using a [plugin like this](https://wordpress.org/plugins/disable-xml-rpc/). Or, check out [this post](http://localhost:10003/prevent-wordpress-xml-rpc-attacks/) where I describe how to do it manually as well.

## 12. Take Regular Backups

The last resort is backups. Even if something happens to your site, having a recent full-site backup enables you to restore the site as soon as possible. Here are the key things to remember here:

- Have full site backups in hand, which include the database, plugins, themes, uploads, everything. Use a plugin like UpdraftPlus to do it.
- Store the backup on a remote location, off of your site server. AWS S3, DO Spaces, BunnyCDN storage, etc. are good choices (see also: [Top 10 AWS S3 Alternatives](http://localhost:10003/amazon-s3-alternatives/)).
- Even better, give the backup plugin only limited permissions to the remote storage - such as read & write only, without delete permissions. This ensures no can wipe out backups by accessing your WordPress admin area.
- In addition to that, store a copy locally on a physical device as well.
- Not just how to take backups, learn how to restore as well. Most plugins allow both.

You might also want to see:

- [How to take WordPress Backups](http://localhost:10003/how-to-backup-a-wordpress-site/)
- [Best Backup Plugins for WordPress](http://localhost:10003/backup-plugins-wordpress/)

## Conclusion

I hope this post helped you in learning the basic WordPress security practices. We haven't gone to the details of each, but the links I've sprinkled across the article should help you to learn more.