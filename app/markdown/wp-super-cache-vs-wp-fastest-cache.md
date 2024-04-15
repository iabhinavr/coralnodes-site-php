---
title: 'WP Super Cache vs WP Fastest Cache - Which is the Best?'
date: '2019-03-15 20:51:52'
modified: '2020-11-15 13:13:28'
slug: wp-super-cache-vs-wp-fastest-cache
categories:
    - wordpress
tags:
    - wordpress-plugins
featured_image: ''
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Page Caching is the most important thing you have to implement to make your WordPress site faster. Along with good hosting, it helps to reduce the server response times significantly. Luckily, there are a couple of plugins for that. In this post, let us compare two such plugins &ndash; WP Super Cache vs WP Fastest Cache. Both are free and have good ratings on the plugins directory. Of course, there are also other…'
yoast_seo_title: ''
yoast_meta_description: ''
cn_related_posts:
    - leverage-browser-caching
    - reduce-server-response-time-ttfb
---
Page Caching is the most important thing you have to implement to make your WordPress site faster. Along with good hosting, it helps to [reduce the server response times](http://localhost:10003/reduce-server-response-time-ttfb/) significantly. Luckily, there are a couple of plugins for that. In this post, let us compare two such plugins - WP Super Cache vs WP Fastest Cache.

Both are free and have good ratings on the plugins directory. Of course, there are also other solutions like [W3 Total Cache](http://localhost:10003/w3-total-cache-recommended-settings/), which gives better performance on powerful servers.

However, W3TC's complex user interface can be intimidating for a normal user. Also, most of its advanced features are not applicable to shared hosting. If you don't plan to use those features, then W3TC can be overkill. And that's where simple plugins like WP Super Cache and WP Fastest Cache prove themselves useful.

- You might also like: [W3 Total Cache vs. WP Super Cache](http://localhost:10003/wp-super-cache-vs-w3-total-cache/)

For assessing the two plugins, I set up a site with demo content on a shared hosting account purchased from GoDaddy. Then I measured the performance of both the plugins using **GTmetrix** and compared these against the result without any caching.

- [Get WP Fastest Cache](https://wordpress.org/plugins/wp-fastest-cache/)

- [Get WP Super Cache](https://wordpress.org/plugins/wp-super-cache/)

## Performance

These were the results before applying any type of caching. The total loading time was 1.7s for just a lightweight WordPress installation without any plugins. Not bad, but not that great either.

[![WP Super Cache vs WP Fastest Cache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/nocache-1-800x401.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/nocache-1.png)

As you can see in the Waterfall chart, the server took almost half a second to send the initial response. This is because the WordPress system had to run lots of PHP scripts before sending out an HTML response. That's where the need for page caching comes in. A caching plugin can store the HTML and sent it to subsequent requests without executing expensive PHP scripts and MySQL queries.

Note that I hadn't used any other plugins on the site during this test. Plugins on the frontend could slow down the loading further.

Total load time: 1.7s  
Page size: 128KB  
No. of requests: 15

### After Enabling WP Super Cache

Next, I installed and activated the WP Super Cache plugin. With caching, the load time decreased considerably to almost 1 second. To ensure consistency, I ran multiple tests and most of the results were in the range of 0.8s to 1.2s.

![WP Super Cache vs WP Fastest Cache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/cache-wpsupercache-2-1024x510.png)

As you can see, the response time came down to 184ms due to caching. However, the total page size and number of requests remained the same.

Now, it's time to see how WPFC performed.

### With WP Fastest Cache

![WP Super Cache vs WP Fastest Cache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/cache-wpfastestcache-1-1024x509.png)

With WPFC, the speed increased further. 0.7s fully-loaded time is great by today's standards. I ran multiple tests, and the load times stayed in the range of 0.7s to 1s.

The WPFC gives you a few more optimization features which WPSC does not. These include:

- Minify HTML
- Combine CSS & JS

After minifying the HTML and combining CSS and JS files, this was how the results looked:

![WP Super Cache vs WP Fastest Cache](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/cache-wpfastestcache-minified-2-1024x463.png)

So, the minification has helped to save three HTTP requests in addition to decreasing the page size.

|Caching|Fully Loaded Time|TTFB|
|---|---|---|
|No Caching|1.7s|475ms|
|WP Super Cache|1s|185ms|
|WP Fastest Cache|**0.7s**|**160ms**|
||||

Overall, WP Fastest Cache is the winner in performance & features.

_Note: This blog is hosted with Cloudways, which supports Memcached and Varnish in addition to just page caching. So I currently use W3 Total Cache, which allows integrating these features. If you are looking for fast hosting, I suggest you [](http://localhost:10003/go/cloudways/)that out too._

[Check out Cloudways →](http://localhost:10003/go/cloudways/)

## Ease of Use

As I have said above, both the plugins are much easier to use when compared to something like W3TC. However, in my opinion, WPFC is the easiest of all.

![WP Fastest Cache Settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/wp-fastest-cache-settings.png)

All the options are arranged neatly on the settings tab. The plugin does not even bother you with complex cache timeout or garbage collection settings. Yet you can choose to clear the cache whenever you publish or update a post. If you want to set timeout rules in addition, you can do that under the Delete Cache tab.

Since it is a freemium plugin, the settings page does contain a few grayed-out options available only in the paid version.

In contrast, WPSC's options pages are a bit lengthy. Still, it doesn't include some useful features like minification and leverage browser caching.

![WP Super Cache Settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/wp-super-cache-settings-1024x690.png)

Again, WPFC is the winner as it is easier to use.

## Popularity & Recognition

WP Super Cache is developed by Automattic, the creators of WordPress.Com. With over 2 million installations and a rating of 4.26, this plugin is one of the most popular plugins.

On the other hand, WPFC has over 1 million installations, lower than WPSC. However, the plugin has a very high 4.8 rating, which includes 3000+ 5 stars, which shows that it gives more user satisfaction.

WPSC is more popular, but WPFC has better ratings. So, it is a tie.

## Conclusion

So, if you are looking for a free caching plugin, which one to choose? In my opinion, **it is WP Fastest Cache**. It is faster, easier, and offers a few more useful features.

That does not mean that you can go wrong with WP Super Cache. It is more popular and offers a stable solution. Plus, if you are using another plugin like Autoptimize along with Super Cache to manage minification, the performance differences are almost negligible.

_Finally, which is your favorite WordPress cache plugin?_

_Disclosure: Affiliate link(s) used in this article._