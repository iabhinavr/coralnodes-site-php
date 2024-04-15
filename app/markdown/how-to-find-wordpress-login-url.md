---
title: 'How to find WordPress Login URL - WP Admin Tutorial'
date: '2019-04-18 00:31:39'
modified: '2021-12-24 22:22:29'
slug: how-to-find-wordpress-login-url
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: 2019/04/wp-login-url-featured-2.png
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. For someone who has been using the WordPress platform for a while, logging in and accessing the dashboard is an obvious step. On the other hand, if you are a complete beginner, it can be a bit confusing if you don&rsquo;t know the address of the log-in page. This post will dig into the details of finding the login URL and the different ways in which you can access your admin area. Here…'
yoast_seo_title: ''
yoast_meta_description: "A beginner's guide to finding the login URL of a WordPress website."
cn_related_posts:
    - backup-plugins-wordpress
    - best-wordpress-form-builder-plugins
    - social-media-plugins-wordpress
    - what-are-permalinks-wordpress
    - essential-settings-after-installing-wordpress
---
For someone who has been using the WordPress platform for a while, logging in and accessing the dashboard is an obvious step. On the other hand, if you are a complete beginner, it can be a bit confusing if you don't know the address of the log-in page.

This post will dig into the details of finding the login URL and the different ways in which you can access your admin area.

Here is a video about the same topic, which discusses the different login URLs, and also how to change it for better security:

<iframe src="https://www.youtube-nocookie.com/embed/v7yYTZKGhuQ?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

Before going into the explanations, here is the quick outline:

In most cases, **http://yoursite.com/wp-admin/** takes you to the login page. If WordPress is installed in a sub-directory like '**blog**', then change it to **http://yoursite.com/blog/wp-admin/.**  
  
That's it. Enter it into the address bar of your browser and hit enter. Remember to change _yoursite.com_ to the domain name of your website.

![How to find WordPress Login URL](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/wp-login-page-800x748.png)

Now let us look it in detail if you want to know more.

## Steps to find the Login URL of a WordPress Website

- **Find the site domain:** Assuming that you have already installed your site on a web host, you should know the domain name on which you did it.
- **Check whether you installed WordPress in a directory or not (WordPress URL):** You can install WordPress in the root of a domain as well as in a sub-directory. eg: http://yoursite.com/blog/ or http://yoursite.com/wordpress/.
- Add one of these slugs to the end of your WordPress URL
    1. **wp-admin**
    2. **login**
    3. **wp-login.php**

### 1. Finding the site domain

For example, _http://www.yoursite.com_ is an example of a site address where _yoursite.com_ is the domain name.

**WordPress in Sub-domain:**

If you have installed your site on a sub-domain of the main domain, then the site address will be like _http://sub.maindomain.com_

In case you did it some time ago and cannot remember it clearly, your hosting cPanel can reveal more details about all the domains you have added to it. Things can be easier if you installed your site using a one-click installer like **Installatron or Softaculous**.

![How to find WordPress Login URL](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/wp-login-3-1024x380.png)

In such a case, you should see something like _My Applications_ at the top of the cPanel. Click on it to know more info. From there, you can choose the site on which you want to log in.

It usually displays the link to your login page also. So you can skip the following steps.

![How to find WordPress Login URL](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/wp-login-2.png)

### 2. Check if WordPress is in a sub-directory

Usually, you install WordPress in the root of your domain itself, like http://yoursite.com.

However, most one-click installers allow you to install WordPress in a sub-directory also. It allows you to use your root domain for other purposes.

This [guide](https://codex.wordpress.org/Giving_WordPress_Its_Own_Directory) from WordPress codex gives more details about installing WordPress in its own directory.

In such a case, the WordPress address changes to _http://yoursite.com/directory-name/_

### 3. Add the admin page slug

You can access the login page of a WordPress site from any of the slugs like wp-admin, login, or wp-login.php.

Note that the first two slugs automatically redirect to wp-login.php page where you can see the login form. Upon logging in, you will be redirected to _yoursite.com/wp-admin/_.

These are some of the possible URLs:

![How to find WordPress Login URL](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/wp-login-1.png)

## Additional Tip: Hiding the Login Page

So far, we have discussed the default login URL of WordPress. As your site grows and becomes popular, keeping the log-in page open to anyone is not a good idea. It can result in brute force attacks. To prevent it, you can use a plugin like [WPS Hide Login](https://wordpress.org/plugins/wps-hide-login/) which conceals the default login address. Instead, you can set a custom URL that only you know.

In some cases, the hosting provider pre-installs plugins that hide the default login page. In such a case, you may not know the new URL. Visiting the 'wp-login.php' page only returns a 404 error. That had happened to me once with [A2 Hosting](http://localhost:10003/a2-hosting-review/). Their one-click WordPress installation installs the [Easy Hide Login](https://wordpress.org/plugins/easy-hide-login/) page. I didn't know about that and had to contact the support to get it deactivated before I could log in as usual.

You might also want to read:

- [How to setup permalinks in WordPress](http://localhost:10003/what-are-permalinks-wordpress/)