---
title: 'How to Install a WordPress Theme - Guide for Absolute Beginners'
date: '2019-01-26 17:00:24'
modified: '2021-12-24 22:22:29'
slug: how-to-install-a-wordpress-theme
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: 2019/01/install-theme-featured.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. After installing a WordPress website on a web host, the next thing you want to do is to change its look and feel. The design aspects of any WordPress website is determined by the theme you use. So, in this post, we will discuss the different ways with which you can install a WordPress theme, or change the existing one. In fact, switching a theme is a simple process if you have been…'
yoast_seo_title: 'How to Install WordPress Theme - Complete Guide for Beginners'
yoast_meta_description: 'A guide to installing WordPress Theme by different methods: 1 - free theme from WordPress, 2. from zip file, 3. ftp method'
cn_related_posts:
    - best-multi-purpose-wordpress-themes
    - wordpress-theme-providers
    - neve-theme-review-how-it-fares-as-a-multipurpose-wordpress-theme
    - astra-theme-review
---
After installing a WordPress website on a web host, the next thing you want to do is to change its look and feel. The design aspects of any WordPress website is determined by the theme you use.

So, in this post, we will discuss the different ways with which you can install a WordPress theme, or change the existing one. In fact, switching a theme is a simple process if you have been using the platform for a while. But for someone new to WordPress, it may not be like that. So, I will try to explain each step in detail along with screenshots to make it easy for any beginner.

By the way, this article assumes that you are using self-hosted WordPress. Instead if you are on WordPress.Com, the methods can be slightly different based on the plan you are using.

There are primarily three ways with which you can switch a theme:

- Finding and installing a free theme directly from the WordPress Admin area - works for free themes only, but the easiest method.
- Installing a theme from a zip file - works for both free and premium themes.
- Using FTP to upload theme - works for both free and premium, but it's the most difficult method.

## Watch Video

If you prefer to learn WordPress by watching videos rather than reading tutorials, then here is a video on the same:

<iframe src="https://www.youtube-nocookie.com/embed/_Y7DiCMbVho?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## Method #1: Installing a free theme from the WordPress Admin

The official WordPress.Org website has a [Themes directory](https://wordpress.org/themes/). From there, you can find free themes that you can use on your websites. As of 2021, [Twenty Twenty One](https://wordpress.org/themes/twentytwentyone/) is the default theme, created by the WordPress team itself. In addition to that, there are several third-party companies and developers who contribute to this open-source directory.

But, to install a free theme, you don't need to go to the WordPress website or download a theme. Instead, you can search for all the themes available in the directory right from the WP admin area, and install them.

These are the steps to follow:

### Log in to the Admin area

If you are currently logged out, go to the [WordPress login page](http://localhost:10003/how-to-find-wordpress-login-url/) and login to the dashboard.

### Go to the Themes Section

Once you have logged in to the dashboard, go to **Appearance > Themes** using the menu on the left side.

![go to appearance > themes](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/01/install-wordpress-theme-2.png)

If you look at your browser's address bar, you will find that you have arrived at the [URL](http://localhost:10003/url-basics/) - yoursite.com/wp-admin/themes.php. This page shows all the themes that are currently installed on your site. The active one will be right at the top.

### Add Themes

Towards the right side of the title _Themes_, there is a button saying _Add New_. Click on it to arrive at the _Add Themes_ page - _`yourdomain.com/wp-admin/theme-install.php.`_

![add new theme](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/01/install-wordpress-theme-3.png)

By default, this page shows the details of all the featured themes in the directory. You can also view the **Popular**, **Latest**, and **Favorites** categories also. However, the **Feature Filter** and **Search** box are the most useful if you want to find a particular theme from the directory.

![open feature filter](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/01/install-wordpress-theme-4.png)

**Example**: Suppose you need a photography theme with a grid layout and featured images. Click on the **Feature Filter** button to open the list of options. You will see three columns - Subject, Features, and Layout. Check the required options from these columns and click **Apply Filters**. You get a list of themes, which match all the selected options.

![apply filters](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/01/install-wordpress-theme-5.png)

Hover over any theme image that you like. You can see two buttons - **Install & Preview**. Before installing, quickly check the Preview and ensure that you like the theme. After Previewing, close the dialog. Now click the Install button. After it completes, the buttons are now **Activate & Live Preview** (instead of the earlier Install & Preview).

![install or preview theme](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/01/install-wordpress-theme-6.png)

Before clicking Activate, spare a few seconds for Live Previewing and ensure that everything is in place. Verify that nothing is broken. If OK, click **Activate & Publish**.

![previewing a theme](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/01/install-wordpress-theme-7.png)

![activate and publish theme](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/01/install-wordpress-theme-9.png)

![theme successfully installed](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/01/install-wordpress-theme-10.png)

Here are the full steps in one image:

[![how to install a wordpress theme](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/01/install-free-theme-full.jpg)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/01/install-free-theme-full.jpg)

## Installing Theme from a ZIP file

Now let us see how to install a theme from a .zip file. This is the preferred method whenever you want to install any premium theme you buy from the various theme marketplaces. For example, if you want to use Genesis from StudioPress, you cannot find it on the WordPress themes directory. To [install such themes](https://www.wpcity.com/install-the-genesis-framework-and-child-theme/) or child themes, the only way is to download it directly from the [theme provider](http://localhost:10003/wordpress-theme-providers/) and install it.

Firstly, ensure that you have the zip file downloaded saved on your computer.

Then, log in to your dashboard and navigate to the Themes section. Click the Add New button on the top.

Now you should see the Add Themes page. Now click the Upload Theme button to open the file browser area. Click the choose file button and select the zip file from wherever you have saved it. Then click the Install Now button.

![upload theme zip file](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/01/install-zip-1.png)

![Install WordPress theme from zip file](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/01/install-zip-2.jpg)

After installing, Live Preview it and Activate the theme.

## Uploading to the _themes_ folder via FTP

Finally, there is another way to upload a new theme. You can follow this if you are comfortable uploading files to the server via an FTP client like FileZilla. Otherwise, if you a beginner, you should not try this unless you are unable to upload a zip file using the above method.

For this, extract your theme folder out if the zip file.

Open the FileZilla program and connect to your server.

Navigate to wp-content/themes folder on your server. Now upload the theme folder to this location.

![Install theme via ftp](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/01/install-theme-ftp-1.jpg)

Once the upload completes, log in to your WordPress dashboard and go to the Themes page. There you will find the newly uploaded theme. and Activate it.

## Conclusion

We have discussed the different methods to add a WordPress theme in the above sections. Before wrapping up this article, I want to mention one more thing - installing [child themes](https://developer.wordpress.org/themes/advanced-topics/child-themes/). The process is almost the same. But instead of uploading and installing just one theme, you need to install both the parent and the child theme, then activate only the latter. The rest of the things are the same.