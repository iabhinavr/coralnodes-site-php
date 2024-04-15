---
title: 'How to Install WordPress on Localhost: Step-by-step Guide'
date: '2019-11-07 13:16:43'
modified: '2021-12-24 22:22:28'
slug: how-to-install-wordpress-on-localhost
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: 2019/11/install-wordpress-localhost-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Even if you are not a developer, having an installation of your website on your local machine can be useful in many ways. In this post, I will show you how to install WordPress on localhost on Windows 10. The process is almost the same on other operating systems as well. Advantages Learn the inner workings of WordPress from the freedom of your machine. Test your plugins, themes, or code snippets before uploading…'
yoast_seo_title: ''
yoast_meta_description: ''
cn_related_posts:
    - essential-settings-after-installing-wordpress
---
Even if you are not a developer, having an installation of your website on your local machine can be useful in many ways.

In this post, I will show you how to install WordPress on localhost on Windows 10. The process is almost the same on other operating systems as well.

**Advantages**

- Learn the inner workings of WordPress from the freedom of your machine.
- Test your plugins, themes, or code snippets before uploading to a live server.
- You can use your favorite text editor to edit or add custom code to your site.
- It is free; you don’t need to buy a staging server.

## Steps to Install WordPress on Localhost using WAMP

<iframe src="https://www.youtube-nocookie.com/embed/06p2tBBWjgY?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

### 1. Download & Install WAMP

The first step is to download the [WAMP package](http://www.wampserver.com/en/) from the official website. Once the download is complete, run the execution file and follow the installation wizard.

![WAMP home page](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-home-1-1080x583.jpg)

![Download WAMP](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-download-btn-1.jpg)

_First of all, check if you've the required VC packages installed. If not, download & install it using the links shown in the wizard._

![Required Visual C++ packages for WAMP](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-vc-warning-1.png)

list of Visual C++ packages required to run WAMP

![Windows VC Packages](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-vc-programs-1.png)

You can check the Visual C++ packages from the Control Panel

![installation wizard for WAMP](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-install-wizard-1.png)

destination location & start menu folder

![WAMP installing](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-installing-1.png)

installation going on...

![installation complete](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-after-install-1.png)

installation about to complete

![finish WAMP installation](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-after-install-2.png)

WAMP successfully installed

After that, launch the program. WAMP also gives a handy tray icon to manage all its related services. Click on the tray icon and click Start All Services. As the icon turns from red to yellow and finally green, localhost will start running.

![Windows system tray icon for WAMP](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-tray-icon-1.png)

tray icon is red - WAMP off

![Start WAMP from the tray](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-tray-icon-2.png)

start all services

![green icon - WAMP is turned on](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-tray-icon-3.png)

tray icon is green - WAMP on, all services running, localhost is live

You can verify it from the browser by going to:

- `http://localhost`

If you can see a page with WAMP’s details, you’ve successfully set up your localhost environment.

![WAMP welcome page](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-welcome-1-1080x576.png)

default localhost home page

### 2. Download WordPress

Now, download the latest version of WordPress CMS from the website:

- [https://wordpress.org/download/](https://wordpress.org/download/)

![download WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wordpress-download-btn-1-1080x522.png)

### 3. Unzip to the www folder

Inside your WAMP installation directory, you can see a folder by the name www. It is where we put all our site files. It is similar to the public_html folder on your web host.

Unzip the WordPress package to the www folder.

![unzip WordPress to www folder](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wordpress-unzip-www-1.png)

### 4. Create a database

WordPress needs a database to store all the data. So, creating a database is the next step.

WAMP comes with **PHPMyAdmin** - a tool to manage MySQL databases. It allows you to create, update, delete, edit databases using a graphical user interface.

To access PHPMyAdmin on your localhost, go to:

- `http://localhost/phpmyadmin`

![Login to PHPMyAdmin in WAMP](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-phpmyadmin-login-1.png)

username: root & empty password to log-in to PHPMyAdmin

Now, create a database and give it a name. For now, let it be WordPress.

![create a database foe WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-create-database-1.png)

![database for WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-create-database-2.png)

### 5. Edit hosts file

Although WordPress does not require a separate server name, setting up one is always a good idea.

That means:

`http://localhost/wordpress` works, but `http://wordpress.local` looks much better. Also, it resembles a real domain name.

For that, we have to edit the Windows hosts file. By modifying this file, we can map or redirect any name to a specific IP address.

For our use, we will map WordPress.local to the IP address **127.0.0.1**. If you are wondering which IP address is it, it is the **loopback address**. In short, it allows a machine to send the request to itself, rather than sending it over the internet.

You need administrator privileges to edit the hosts file. So:

Open **Notepad > Run as Administrator**

The location of the hosts file is usually:

- `C:\Windows\System32\drivers\etc`

![Windows hosts file](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-windows-hosts-file-edit-1.png)

![editing hosts file on Windows - for installing WordPress on localhost](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-windows-hosts-file-edit-2.png)

add this line at the bottom of the file

### 6. Edit Apache vhosts

With that, we have pointed our name to the loopback IP. So when you start WAMP, local Apache will receive the request, but still, it does not know which folder to load.

To inform Apache about the location of our WordPress installation, we have to set a **vhost (virtual host)**.

For that, we have to edit the vhosts configuration file of our WAMP installation.

![Editing vhost file on Apache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-edit-vhosts-2.png)

### 7. Restart Apache & MySQL

Next, we need to restart the Apache and MySQL systems for our changes to take effect.

You can do it from the tray icon - click **Restart All Services**.

![restarting Apache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wamp-restart-1.png)

### 8. Run WordPress Installation

Our WordPress system is still not connected to the database, nor we have configured it.

So, the final step is to run the installation wizard. Go to `http://wordpress.local` (our vhost) to begin the installation.

![WordPress installation begins](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wordpress-installation-1-1080x573.png)

The installation wizard will ask you to enter the database username and password. Since we haven’t set any specific password, you can use the default.

- WAMP MySQL username: **root**
- Password: (no password - leave the field empty)

![connecting database to WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wordpress-installation-2.png)

![Run installation](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wordpress-installation-3.png)

![Setting up WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wordpress-installation-4.png)

![WordPress login prompt](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wordpress-installation-5.png)

![WordPress successfully installed on localhost](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/wordpress-installation-6-1080x437.png)

admin panel - we've installed WordPress successfully

## On Mac & Linux

Like WAMP, Mac users can use the MAMP (Mac-Apache-MySQL-PHP) package to install WordPress. 

Another choice is the cross-platform **XAMPP**, which you can install on any operating system.

**WAMP or XAMPP?**

- I’ve used both WAMP and XAMPP, and both are almost the same from a WordPress user’s perspective.
- XAMPP does offer more extensions like Tomcat and FileZilla FTP Server. However, you may not require such features to run and test WordPress.
- Another thing I like about WAMP is that it allows you to switch between multiple PHP versions within a few clicks. It is helpful when you want to ensure that your code is compatible with various PHP versions.

## Conclusion

Installing WordPress locally is one of the first steps if you are starting with WordPress development. Even if you have no interest in coding, it still helps if you want to test some features or plugins before using it on your live site.

If you find any of the above steps confusing, ask me in the comments.