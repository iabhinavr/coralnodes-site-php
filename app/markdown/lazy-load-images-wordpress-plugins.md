---
title: 'How to Lazy Load Images in WordPress using Plugins'
date: '2019-07-06 01:38:17'
modified: '2019-07-06 01:37:21'
slug: lazy-load-images-wordpress-plugins
categories:
    - wordpress
tags: {  }
featured_image: 2019/07/lazy-load-wordpress-images-featured-2.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. If you have lengthy web pages with lots of images, then you shouldn&rsquo;t ignore lazy loading. In this post, we will look at some of the best plugins for quickly implementing it on your WordPress site. When you check your website in Google Page Speed Insights, you might have seen a warning to defer offscreen images. Lazy loading is the solution for that too. So, it is not just a fancy technique, it…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Learn how to implement lazy loading in WordPress websites using plugins. Helps to prevent defer offscreen images warning in pagespeed also'
cn_related_posts:
    - shortpixel-image-optimization-plugin-review
    - best-wordpress-image-optimization-plugins
    - bunnycdn-review
---
If you have lengthy web pages with lots of images, then you shouldn't ignore lazy loading. In this post, we will look at some of the best plugins for quickly implementing it on your WordPress site.

When you check your website in Google Page Speed Insights, you might have seen a warning to **defer offscreen images**. Lazy loading is the solution for that too. So, it is not just a fancy technique, it gives some performance benefits too.

Before getting into the list of plugins, let us have a quick recap about the technique and its benefits.

## What is Lazy Loading

In short, lazy loading is a technique by which only the visible content is loaded on a user's device. More content gets loaded only when the user scrolls down to those areas.

It gives mainly two advantages:

- Resources are only loaded when the user requires it, thereby **saving bandwidth and data charges**. A win-win for both the ends.
- A **faster initial page load time**. Since only the onscreen assets are loaded, users will experience a faster website.

Usually, heavy resources like images, videos, and iframes benefit more from this technique. That's why we implement lazy loading for such content. For textual content, it may not be quite fruitful as it can cause a negative impact on SEO.

### How it Works

As you already know, if an image has an _src_ attribute, the browser automatically loads it when someone visits a page. So, to prevent it and implement lazy loading, we first replace the link in the _src_ attribute with a placeholder image.

Later, we use Javascript to detect when an image enters into visibility as the user scrolls the page. Then replace the placeholder with the actual image.

### Manually Implementing Lazy Load

If you are interested in learning more about it, check out Javascript's **Intersection Observer API**. Most of the lazy loading plugins and libraries make use of it behind the scenes.

There are also a couple of JS libraries to easily implement the technique on any website, be it WordPress or not.

That's a whole topic for another post. For now, let us look at the plugins.

## Best WordPress Plugins to Lazy Load Images in WordPress

Here, I am not going to list all the plugins for lazy loading that you can find on the WordPress directory. Instead, I will share only the ones that have worked well for me.

### 1. a3 Lazy Load

![a3 Lazy Load](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/07/a3-lazy-load-1-1080x495.png)

If you want enhanced features like selective exclusion and fading effect, then look no further than a3 Lazy Load.

It is also the most popular lazy loading plugin with over 100k active installations.

It supports content in the post, pages, widgets, and even gravatars.

Performance-wise, it is also one of the heaviest in the list. However, the effect is negligible considering the benefits it provides.

[Get Plugin](https://wordpress.org/plugins/a3-lazy-load/)

### 2. WP Rocket Lazy Load

![WP Rocket](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/07/wp-rocket-lazy-load-1-1080x496.png)

If you already use WP Rocket Cache plugin, then you might not need another plugin for implementing lazy loading. The premium plugin offers that too.

However, if you don't plan to use it for caching, you can still get the lazy load feature in a separate free plugin.

This plugin is even easier to set up than a3. On the flip side, it doesn't offer many features. The settings page is quite minimal. Just select the content type for which you want the lazy load and click Save.

[Get Plugin](https://wordpress.org/plugins/rocket-lazy-load/)

### 3. JetPack Lazy Images

![JetPack Lazy Images](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/07/jaetpack-lazy-load-1-1080x472.png)

Finally, if you already have the JetPack plugin activated on your site, it includes a module for Lazy Images also.

Go to the Performance tab under on Jetpack's settings page and toggle on _'Enable Lazy Loading for Images'_.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/07/jetpack-lazy-load-1-1080x474.png)

_If you are not aware, JetPack is a plugin developed by Automattic which brings a lot of extra features to your WordPress site._

[Get Plugin](https://wordpress.org/plugins/jetpack/)

## Conclusion

Now you have an idea about the importance of lazily loading offscreen images and how to do it with the help of plugins.

One thing I want to note here is that if you use Javascript concatenation, the plugins may fail to work correctly. For example, Autoptimize plugin has an option to aggregate JS. I've found that with this option enabled, lazy images never load sometimes.

So, before enabling it on your live site, it is always a good idea to test it on a staging environment to ensure that all the images appear as expected.

You might also like:

- [12 Tips to Reduce Server Response Time](http://localhost:10003/reduce-server-response-time-ttfb/)
- [How to Eliminate Render-blocking Resources in WordPress](http://localhost:10003/eliminate-render-blocking-resources-wordpress/)