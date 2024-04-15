---
title: '7 Best Cache Plugins for WordPress - With Speed Tests'
date: '2019-11-05 07:00:56'
modified: '2021-12-13 18:31:39'
slug: best-caching-plugins-wordpress
categories:
    - wordpress
tags:
    - wordpress-plugins
featured_image: 2019/11/caching-plugins-wordpress-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Struggling with a slow server response time on your WordPress website? If yes, then a lack of proper caching may be a reason. Since WordPress runs a lot of PHP scripts and database queries in the backend, it is hard to make it fast enough without a caching mechanism. The word caching means storing frequently used data in memory instead of generating it each time. The same concept applies to WordPress caching too.…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Have a slow server reponse time? List of WordPress caching plugins to make your site faster. Introduction to web hosts with server-level caching.'
cn_related_posts:
    - leverage-browser-caching
    - reduce-server-response-time-ttfb
    - eliminate-render-blocking-resources-wordpress
---
Struggling with a slow server response time on your WordPress website?

If yes, then a lack of proper caching may be a reason. Since WordPress runs a lot of PHP scripts and database queries in the backend, it is hard to make it fast enough without a caching mechanism.

The word caching means storing frequently used data in memory instead of generating it each time. The same concept applies to WordPress caching too. If you can save the HTML responses of your posts and pages in cache, your site can serve it pretty fast to your visitors.

In this article, we will compare a couple of caching plugins for WordPress that can make your site load quickly.

In the end, we will also look at a few web hosts that offer server-level caching in addition to page caching.

## How to Test a Caching Plugin

Caching is one of the most effective [ways to reduce TTFB](http://localhost:10003/reduce-server-response-time-ttfb/) (response time). Pingdom Tools show this metric in yellow color in the timeline graph, while GTmetrix shows it in purple color. 

A low waiting time results in a faster TTFB, which in turn reduces the total loading time.

For this test, I set up a default WordPress installation on a shared server without any caching. Then I measured the waiting time, TTFB, and total loading time using both Pingdom and GTmetrix.

Here is the summary of my test set-up:

- WordPress 5.2.4
- Twenty Nineteen Theme
- Home page with sample content - 10 paragraphs & 10 images
- Shared Server (from GoDaddy) - Location: North America
- GTmetrix tests from Dallas, USA
- Pingdom Tests from San Francisco, USA

Then I repeated the same tests by activating each caching plugin one after the other.

The challenge was that each plugin differs from one another in terms of features and functionalities. So, to make the readings as fair as possible, I turned on the caching option only and kept all the other options in their default values.

## Best Caching Plugins

Based on the tests, I’ve found the following plugins to be highly effective in improving WordPress performance. 

_To avoid making a long list, I’ve excluded a few plugins that didn’t give the results I expected._

_Also, I’ve only included free plugins in the list. That’s why I didn’t add WP Rocket, although it has got some great reviews online._

### W3 Total Cache

![W3 Total Cache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-w3-total-cache-1-2.png)

[W3 Total Cache](https://wordpress.org/plugins/w3-total-cache/) turned out to be the best performer in my tests. Enabling the **Disk: Enhanced** option alone brought down the backend time to **79ms** on GTmetrix.

Beginners often complain that W3TC is challenging to set up due to the sheer number of options available. However, you need not touch any of those advanced settings to get a performance boost.

![W3 Total Cache GTmetrix](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-w3-total-cache-gtmetrix-backend-1-2-1080x314.png)

![W3 Total Cache Pingdom](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-w3-total-cache-pingdom-1-2-1080x281.png)

- See also: [W3 Total Cache Recommended Settings](http://localhost:10003/w3-total-cache-recommended-settings/)

### WP Fastest Cache

![WP Fastest Cache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-wp-fastest-cache-1-2.png)

If you are a novice, you will notice [WP Fastest Cache](https://wordpress.org/plugins/wp-fastest-cache/) as highly easy to set up. Unlike W3TC, its minimal admin panel gives no room for confusion.

Performance-wise, WP Fastest Cache came out in a close second position below W3 Total Cache.

However, the plugin does not fully support multi-site WordPress yet. Otherwise, it is a reliable option with an excellent balance between features and speed.

![WP Fastest Cache GTmetrix](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-wp-fastest-cache-gtmetrix-backend-1-1080x313.png)

![WP Fastest Cache Pingdom](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-wp-fastest-cache-pingdom-1-1080x290.png)

### WP Super Cache

![WP Super Cache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-wp-super-cache-1.png)

Similar to WP Fastest Cache, [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/) is another plugin that is quite easy to set up and use. 

With over 2 million active installations, it is one of the most used plugins in the WordPress directory.

It supports multi-site as well, although you may need to enable it on each site.

However, it lacks some advanced features like Object Caching, if you need it.

WP Super Cache offers two options for caching:

- Simple (default)
- Expert

- See also: [How to Setup WP Super Cache](http://localhost:10003/wp-super-cache-settings-tutorial/)

![WP Super Cache GTmetrix](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-wp-super-cache-gtmetrix-backend-1-1080x320.png)

![WP Super Cache Pingdom](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-wp-super-cache-pingdom-1-1080x287.png)

I’ve found that selecting the Expert option gave more speed, whereas the Simple caching was not up to the mark. 

Expert Caching works by adding rewrite rules to your Htaccess file, which results in faster loading times.

See also:

- [WP Super Cache vs. WP Fastest Cache](http://localhost:10003/wp-super-cache-vs-wp-fastest-cache/)
- [W3 Total Cache vs. WP Super Cache](http://localhost:10003/wp-super-cache-vs-w3-total-cache/)

### Cache Enabler

![Cache Enabler](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-cache-enabler-1.png)

[Cache Enabler](https://wordpress.org/plugins/cache-enabler/) is a lightweight WordPress caching plugin from **KeyCDN**. 

It has fewer options than most of the other caching plugins, making it extremely easy setup for anyone.

![Cache Enabler Pingdom](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-cache-enabler-gtmetrix-backend-1-1080x318.png)

![Cache Enabler Pingdom](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-cache-enabler-pingdom-1-1080x279.png)

### Comet Cache

![Comet Cache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-comet-cache-1.png)

With over 60k installations and a 4.5 rating, many people like [Comet Cache](https://wordpress.org/plugins/comet-cache/).

While it is not as good as the plugins above, Comet Cache could bring the wait time down to 112 ms (GTmetrix), and 126ms (Pingdom).

![Comet Cache GTmetrix](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-comet-cache-gtmetrix-backend-1-1080x312.png)

![Comet Cache Pingdom](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-comet-cache-pingdom-1-1080x285.png)

### Breeze Cache

[Breeze](https://wordpress.org/plugins/breeze/) is the default caching plugin on [Cloudways](http://localhost:10003/cloudways-hosting-review/) hosting. However, you can use it on any hosting provider.

Moreover, if your hosting has Varnish enabled on the server level, you can configure Breeze to work with it, allowing you to set two levels of caching - page caching & Varnish caching.

However, since my test server does not support Varnish, the results below show only the effect of page caching. As you can see, Breeze is not that great without server-level caching.

### Swift Performance Lite

![Swift Performance Lite](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-swift-cache-1.png)

At only 20k installations, [Swift Performance](https://wordpress.org/plugins/swift-performance-lite/) may not be as popular as the other plugins. However, if you need extra features like lazy loading, you can try this plugin. 

With the convenient Auto-config option, the plugin configures itself, making the process extremely simple.

By default, the plugin removes render-blocking resources and generates critical path CSS too. The auto-configuration wizard also turns on the lazy loading feature, although I have turned it off for this test.

![Swift Performance Lite GTmetrix](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-swift-performance-gtmetrix-backend-1-1080x312.png)

![Swift Performance Lite Pingdom](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/11/cache-plugins-swift-performance-pingdom-1-1080x272.png)

Swift Performance has a premium version also with more features like image optimization and database optimization.

Overall, this one plugin alone can do the job of multiple plugins.

## Surge

![Surge - cache plugin for WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/12/surge-cache-plugin.png)

[Surge](https://wordpress.org/plugins/surge/) is the latest addition to the list of caching plugins. Initially released in December 2021, Surge is developed by Konstantin Kovshenin, a WordPress core contributor.

The plugin has a big highlight - it has no configuration option at all. Not even an option to purge the cache. Just install it from the WordPress repository, and it starts doing it right away.

The aim of the developer is to provide a simple plug-n-play caching solution that never bothers the user with any options or settings. It has its own rules to decide when to invalidate the cache, purge it, etc.

## Speed Tests Summary

|Plugin|GTmetrix|   |Pingdom|   |
|---|---|---|---|---|
||Wait|TTFB|Wait|TTFB|
|No Caching|306|475|313|393|
|W3 Total Cache|79|157|87.5|166|
|WP Fastest Cache|82|170|87.7|172|
|WP Super Cache (Expert)|83|189|98|178|
|Swift Performance Lite|86|169|109|265|
|Cache Enabler|90|173|101|181|
|WP Super Cache (Simple)|97|213|111|193|
|Breeze Cache|96|191|113|194|
|Comet Cache|112|192|126|205|

_Note: Since I added Surge later, I haven't included it in the speed tests._

Despite the slight inconsistencies in results, **W3 Total Cache, WP Fastest Cache, and WP Super Cache (expert mode)** gave the best results.

- Is there a way to improve the speed further?

_Yes, with **server-level caching**._

For that, you need a web host that provides server-level caching on top of page caching. 

I might get a bit technical here, but this post won’t be complete without mentioning them.

## Web Hosts with Server-level Caching

Usually, page caching works by storing static HTML response in the Disk and serving it to subsequent visitors. Still, the request is reaching the Apache server (most shared hosts use Apache).

To take it one step further, you can place Varnish or Nginx in the front. With such a stack, the request does not even touch the Apache webserver, let alone PHP and MySQL.

It helps to reduce resource consumption, thereby increasing the ability to handle more concurrent users.

Here, I’m mentioning four such hosts that support server-level caching. I’ve arranged them in order from the least expensive to the most expensive.

### LiteSpeed / Hostinger

[Hostinger](https://www.hostinger.com/web-hosting) is one of the cheapest shared hosts available today, yet it is super fast. The reason is, they use the [LiteSpeed](https://en.wikipedia.org/wiki/LiteSpeed_Web_Server) server instead of the traditional Apache webserver. 

[LiteSpeed Cache](https://wordpress.org/plugins/litespeed-cache/) is a WordPress plugin that offers deep integration with the LiteSpeed server. All WordPress sites on Hostinger have this plugin activated by default so that you don’t need to install another plugin.

### Varnish / Cloudways

I’ve mentioned above that the Breeze plugin is not that great in page caching performance. But when coupled with Varnish, it blows everything out of the water, even W3 Total Cache.

That’s what [Cloudways](http://localhost:10003/cloudways-hosting-review/) gives you on its platform. It has allowed me to bring down the waiting time of this website below 50ms. 

### SG Optimizer / SiteGround

[SiteGround](https://www.siteground.com/) also offers server-level caching on all its plans except the lowest StartUp plan. 

[SuperCacher](https://www.siteground.com/tutorials/supercacher/), the technology they’ve developed using Nginx reverse proxy, makes it possible to serve content directly from the RAM, without even fetching it from the Disk.

### Kinsta

[Kinsta](https://kinsta.com/) - a managed WordPress host - recommends that you don’t need any other caching plugin while on their platform.

_The reason?_

_Their platform provides multiple levels of caching, including page caching and object caching._

However, the pricing, which starts at $30/mo, can look a bit expensive if you’re coming from a shared platform.

Are these the only hosts that provide server-level caching? Of course not. These are only the ones I’ve come across. You can mention more in the comments, and I’ll take a look.

## Summary - Which Cache Plugin to Choose?

If you feel overwhelmed by the number of choices, I will simplify it into the following points.

- If you can get a host with server-level caching, then it is the best choice.
- Otherwise, if you are on a traditional host or VPS, then use W3 Total Cache. Its page cache speed is the best.
- If what you prefer is simplicity, then try WP Fastest Cache or WP Super Cache. Both are almost similar in performance while providing a straightforward interface.

Anyway, utilizing at least one level of caching is always better than none at all if you care about performance. So, which is your favorite caching plugin?