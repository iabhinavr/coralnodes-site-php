---
title: '12 Essential Settings After Installing WordPress on a Web Host'
date: '2019-06-16 00:30:09'
modified: '2020-08-31 13:51:33'
slug: essential-settings-after-installing-wordpress
categories:
    - wordpress
tags: {  }
featured_image: 2019/07/wordpress-essential-settings-featured-2.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. If you are staring at a vanilla WordPress installation and wondering what&rsquo;s next, this post will hopefully serve you as a starting point. The configuration requirements can vary from on website to another. However, there are a few initial steps that are common for all WordPress installations. Below, I have curated a list of actions I usually perform after installing WordPress. Table of Contents 1. Set up Permalinks 2. Delete Sample Content 3.…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'A list of the important settings to do after installing WordPress - setting permalinks, installing theme, installing essential plugins.'
cn_related_posts:
    - how-to-set-up-google-analytics-website
    - what-are-permalinks-wordpress
    - how-to-install-a-wordpress-theme
---
If you are staring at a vanilla WordPress installation and wondering what's next, this post will hopefully serve you as a starting point.

The configuration requirements can vary from on website to another. However, there are a few initial steps that are common for all WordPress installations.

Below, I have curated a list of actions I usually perform after installing WordPress.

## 1. Set up Permalinks

By default, WordPress uses URLs based on query strings for your posts and pages.

http://example.com/?p=5

As you can see, it is difficult to remember. It only contains a number which has no relation to the content of a page. So changing it to user-friendly format is one of the first things you should do.

http://example.com/about/

Although search engines index the default permalink, changing it can give a slight SEO boost.

- [Learn more about Permalinks in WordPress](http://localhost:10003/what-are-permalinks-wordpress/)

## 2. Delete Sample Content

A fresh WordPress installation includes a sample post, a page, and a comment. This is just to give novice users an idea about the different content types.

So, you can delete these right away.

Also, the newer versions include a draft of the Privacy Policy page. No need for removing this draft. It can serve as a template for your site's policy page.

## 3. Remove Hello Dolly Plugin

[Hello Dolly](https://wordpress.org/plugins/hello-dolly/) is a simple plugin authored by **Matt Mullenweg**, the founder of WordPress, and is one of the oldest plugins in the repository.

Apart from the emotional and traditional reasons, I don't know why they still include this plugin in the WordPress package. When activated, it simply displays some lyrics on the top of your admin screen.

It has no use on a real site. As a best practice, you should not keep any unused plugins on your site. So, you should deactivate and delete Hello Dolly plugin.

## 4. Change Default Title and Tagline

The next step is to change the site title and tagline.

You might have already set the title during the installation process. If not, go to _Settings > General_ to enter the proper title.

The default tagline is _Just another WordPress site_. Unlike the title, you are not asked to set a tagline during installation. So new users often forget to change it.

The tagline can be a small description or a phrase that conveys the purpose of your site.

## 5. Create Contact and About Pages

Any website should have an about section mentioning the mission and vision of the endeavor. Giving a credible about section helps to increase the trustworthiness of the information you share.

For a personal site, you should include some details about yourself. People always like to know the real persons behind the site.

Instead, for a company site, you can include the details of your team along with a company history.

The contact page usually contains a form for users to send messages to you. Check out my post about the [best form builder plugins for WordPress](http://localhost:10003/best-wordpress-form-builder-plugins/).

After creating these pages, you can link to it in the footer or header.

## 6. Install an appropriate theme

Currently, Twenty Twenty is the default theme on any new WordPress installation. Most likely, you will want to change that.

A theme determines the look and feel of a site. So, you have to choose a theme that matches your site's branding.

For that, you have three options:

- Free Themes
- Premium Themes
- Custom Themes

There are several good quality free themes available in the official theme directory itself.

On the other hand, choosing a premium theme offers more features, advanced customizations, and SEO friendliness. [Astra](http://localhost:10003/go/astra-theme/) and [GeneratePress](http://localhost:10003/go/generatepress/) are two themes that I highly recommend. Apart from those, there are also several [theme providers](http://localhost:10003/wordpress-theme-providers/) who offer quality themes for different niches.

Lastly, if you want a completely different design that you can't find anywhere, a custom theme is the answer though it requires a developer.

- [How to install a WordPress Theme](http://localhost:10003/how-to-install-a-wordpress-theme/)

## 7. Delete Default Themes

Once you have chosen your preferred theme, there is no use in keeping unused themes on your server. It can only waste the disk space.

As I said before, Twenty Twenty is the default theme. In addition to this, the package contains Twenty Nineteen and Twenty Seventeen too. You can delete all these.

With only one active theme, you only need to worry about updating and maintaining that.

## 8. Install essential plugins

After installing a theme, the next step is to install some essential plugins. Plugins add additional functionalities to the site. Here are some of the must-have features you should have.

- **Anti-spam:** If your site allows users to post comments, you should definitely implement some kind of spam prevention.  
      
    The **[Akismet](https://wordpress.org/plugins/akismet/)** plugin that comes with WordPress is aimed at stopping spam comments. You only have to activate it with an API key.  
      
    Otherwise, you can use [Google Recaptcha](https://www.google.com/recaptcha/about/) or [honeypot system](https://dev.to/felipperegazio/how-to-create-a-simple-honeypot-to-protect-your-web-forms-from-spammers--25n8) to prevent spams.  
    
- **SEO:** An SEO plugin is crucial if you expecting to drive traffic from search engines. These plugins help to set up sitemaps, meta tags, and other important optimizations.  
      
    [**Yoast**](https://wordpress.org/plugins/wordpress-seo/) is the SEO plugin I use on this site.  
    
- **Backup:** Unless your site has a static nature, you must have a reliable backup strategy. Even if your site gets wiped off, you can recover the site if you have a backup in place.  
      
    Some notable choices are **UpdraftPlus** and **VaultPress**.  
      
    See also: [Best backup plugins for WordPress](http://localhost:10003/backup-plugins-wordpress/)  
    
- **Caching:** There are several plugins that help to enable caching on your site. Caching improves page load times and reduces server resource consumption.  
      
    You might also like:
- [Best caching plugins for WordPress](http://localhost:10003/best-caching-plugins-wordpress/)
- [W3 Total Cache Recommended Settings](http://localhost:10003/w3-total-cache-recommended-settings/)

## 9. Set Up Thumbnail Sizes

When you upload an image to the Media Library, WordPress automatically generates a few thumbnails from it.

These are the default sizes:

- Thumbnail: 150x150px
- Medium: 300px (max-width & height)
- Large: 1024px (max-width & height)

In most cases, you will need a different size setting that matches the layout of your site. For example, if your content width is 800px, it's best to use an image that is 800px wide. Instead, if you insert a larger image, the browser will have to scale it to fit inside the layout.

Apart from setting the thumbnail sizes, using an [image optimization plugin](http://localhost:10003/best-wordpress-image-optimization-plugins/) like [ShortPixel](http://localhost:10003/go/shortpixel/) can drastically improve your page speed scores.

## 10. Harden Security

Regularly updating the plugins, themes, and the core itself can get you a long way in securing your site.

However, you can still take additional measures to harden it further. I recommend you to use at least the free [Sucuri Security](https://wordpress.org/plugins/sucuri-scanner/) plugin. The plugin helps to implement things like blocking PHP file in the uploads folder, checking integrity, monitoring log-ins, etc.

## 11. Configure SSL

These days, SSL encryption is a must-have for most sites. Check with your hosting provider to know whether they offer free SSL certificates.

Once you have set up SSL on the host, the next step is to properly configure it to work with WordPress.

A plugin like [Really Simple SSL](https://wordpress.org/plugins/really-simple-ssl/) helps to configure SSL with a few clicks.

These are the main things you need to check:

- Prevent mixed content warnings
- Redirect HTTP to https
- Ensure that the WordPress URL and Site URL starts with https

## 12. Set up Analytics

An analytics system is necessary to know the reach of your site. **Google Analytics** is the most common solution for that.

Apart from Google Analytics, the Jetpack plugin also provides analytics integration. It shows reports right in your dashboard.

See also:

- [How to Set Up Google Analytics](http://localhost:10003/how-to-set-up-google-analytics-website/)

## Wrapping Up

With that, we now have an overview of the important settings any WordPress site requires.

If you notice that I have missed some important steps, please mention it in the comments.