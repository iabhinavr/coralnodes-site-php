---
title: 'How to Reset a WordPress Website to its Original State?'
date: '2019-03-10 23:30:49'
modified: '2021-12-24 22:22:29'
slug: how-to-reset-a-wordpress-website
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: ''
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Resetting is not something you want to do often on your live WordPress website. However, there are times when you need to do this. For example, if you are a person who likes testing plugins and themes, you might find this post useful. The main step in resetting WP is to get the database back to its initial state. You can do it by deleting all the tables and going through the WordPress…'
yoast_seo_title: ''
yoast_meta_description: ''
cn_related_posts:
    - backup-plugins-wordpress
    - how-to-set-up-google-analytics-website
    - grammarly-review
---
Resetting is not something you want to do often on your live WordPress website. However, there are times when you need to do this. For example, if you are a person who likes testing plugins and themes, you might find this post useful.

The main step in resetting WP is to get the database back to its initial state. You can do it by deleting all the tables and going through the WordPress installation process once again.

If that seems a bit difficult, you can seek the help of a plugin to do the task. Using a plugin has the following benefits:

- You don't have to set up WordPress again.
- Plugins can restore the current user without changing the username or password.
- No need to do any database operation manually, which is a bit risky if you are not experienced.

**Watch Video:**

Here is a video showing how to reset a WordPress website using the WP Reset plugin:

<iframe src="https://www.youtube-nocookie.com/embed/5JJ08aupdZw?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## Best Plugin to Reset WordPress

**[WP Reset](https://wordpress.org/plugins/wp-reset/)** is currently the best choice to do this job. It is free to use and available from the WordPress plugins repository. Its rating is 4.8 and has more than 100k installs.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/reset-wordpress-1.png)

Clicking the reset button on this plugin get rid of all the contents including posts, pages, and media. However, it won't remove any of the files in the wp-content folder. That means your themes, plugins, uploads remain where they were.

![wp reset plugin interface](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/reset-wordpress-2.png)

If you want to delete everything, then go to the Tools tab of the plugin. There you can see the options to empty all these files too.

In addition to these, the tools include the options to delete custom tables, transients, and the htaccess file. Some plugins add custom tables to the WordPress database which won't go away even after you uninstall the plugin.

In such a case, these tools come useful. Remember that you can use these tools alone even if you don't want to do a full reset.

## Manual Reset

To manually reset WP, you need access to some database management tools like . Most of the web hosts offer it. If you are working on localhost, it is available with popular packages like Xampp and Wamp. Although you can do it using SSH, we are going to do it from a web interface.

The steps are as follows:

1. **Drop all tables in the database**
2. **Empty the themes, plugins, and uploads directories using FTP (on a host)**
3. **Run the WordPress installation**

### Dropping tables

First of all, log in to the PhpMyadmin of your WordPress host and select the database. _Be extra careful that you select the correct database._

In case you don't know the name of your database, check it in the wp-config.php file.

Now, check all the tables. Then from the drop-down menu, select the Drop option and click Yes.

[![Reset WordPress database using phpmyadmin](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/reset-wordpress-3-1024x446.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/reset-wordpress-3.png)

[![dropping table using phpmyadmin](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/reset-wordpress-4-1024x518.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/reset-wordpress-4.png)

This deletes all the tables and makes your database empty.

### Delete all themes, plugins, and uploads

Using an FTP program like FileZilla, go to the wp-content folder the site you want to reset. On your local machine, you can directly navigate there.

Delete every folder except plugins, themes, and uploads. Keep the index.php file also. This file ensures that no one can index the contents of your wp-content folder. Lastly, empty these folders too. Be sure you empty these three folders instead of deleting.

![reset wordpress manually - deleting files using filezilla](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/reset-wordpress-5.png)

_Optionally, you can also delete the htaccess file from the root folder if you had custom rules from your previous installation._

### Run the WordPress Installation

This is the final step. To access the installation page, go to yoursite.com/wp-admin/install.php. Just accessing your homepage also leads here.

Since you haven't deleted the wp-config.php file, details like the name of your (now empty) database and DB user are still there.

As usual, complete the installation process by supplying a site title, username, email, and password.

![reinstalling wordpress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/reset-wordpress-6.png)

_Now your site will look like a fresh WordPress installation. Using the plugin is still my personal preference. If you have more questions or if I am unclear in some steps, ask below._