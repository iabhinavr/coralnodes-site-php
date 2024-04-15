---
title: 'How to Reduce Server Response Time (TTFB) of Your WordPress Site?'
date: '2019-02-21 17:12:36'
modified: '2022-01-03 17:39:04'
slug: reduce-server-response-time-ttfb
categories:
    - seo
tags:
    - web-performance
featured_image: 2019/02/ttfb-featured-1.png
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. A slow WordPress website is a headache. Right? Even after implementing several optimization measures, your site might still feel sluggish if the initial server response time is slow. If that is the case, you will also get a warning in Google PageSpeed Insights. Multiple factors can contribute to such a slow down. However, do not fret. In this post, I will share some tips that have helped me to bring the server response…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Find out how you can reduce the server response time or TTFB of your WordPress website. See what you can do to make your site faster.'
cn_related_posts:
    - bunnycdn-review
    - cloud-hosting-wordpress
    - eliminate-render-blocking-resources-wordpress
---
_A slow WordPress website is a headache. Right?_

Even after implementing several optimization measures, your site might still feel sluggish if the initial server response time is slow. If that is the case, you will also get a warning in Google PageSpeed Insights.

Multiple factors can contribute to such a slow down. However, do not fret.

In this post, I will share some tips that have helped me to bring the server response time of this website **below 200ms**.

![Server Response Time - Time To First Byte Test](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/gtmetrix-1-1024x812.jpg)

TTFB of this site according to [GTMetrix.com](https://gtmetrix.com) - 190ms - not bad

Before that, let us see what the term server response time means.

## What is Server Response Time?

In short, it is the time taken by the server to send the first OK response data (status code: 200) back to the requesting browser.

**Time To First Byte (TTFB)** is only another term that denotes the same idea.

After your browser sends a request to access a web page, several things happen behind the scenes before it receives a response from the server.

_Remember, we are talking about the first response alone, not the whole page load._

The following are the factors that contribute to the total **TTFB in milliseconds**:

- **DNS Lookup** - When the browser requests a domain, it sends a request to the appropriate Nameserver to find the IP of your domain.
- **Connection Speed** - After finding the IP address, the browser connects to your site's server.
- **SSL handshake speed** - If your site is on HTTPS (it should be), then the browser has to perform an SSL handshake with the server. This ensures that data transfer is secure and encrypted.
- **Wait & receive time** - Now the server has to process the request to generate a response. Then send it back to the browser. In the case of WordPress, the WP system generates a response by executing PHP scripts and database queries.

TTFB is the _first item_ that adds up to your overall page loading time. So, even if you use a [lightweight theme](http://localhost:10003/astra-theme-review/), fewer plugins, and [optimize images](http://localhost:10003/best-wordpress-image-optimization-plugins/), a high TTFB can pose as a performance bottleneck.

## How to check TTFB?

For a quick TTFB test, I've found the following tools to be quite useful:

- [KeyCDN Tools](https://tools.keycdn.com/performance)
- [Sucuri Tester](https://performance.sucuri.net/)
- [BitCatcha](https://www.bitcatcha.com/)

_You might also_ want to check:

- [7 Free Tools to Measure Your Website Speed](http://localhost:10003/tools-to-measure-website-speed/)

All of these sites allow testing from multiple locations and present the results on a single page.

![KeyCDN Performance Test to find TTFB](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-performance-test-1-1080x886.png)

Performance test by KeyCDN Tools

![Reduce Server Response Time](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/sucuri-performance-test-1-1024x602.png)

Performance Test by Sucuri

On the other hand, if you want detailed reports, **GTMetrix** or **Pingdom** can give you a time-wise breakdown of all requests in the form of waterfall charts.

When you hover over the first item on the chart, you can see the times taken by each process before responding. It is helpful in finding the real cause of the delay.

![Checking TTFB with GTMetrix](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/gtmetrix-ttfb-breakdown-1.png)

Checking TTFB with GTMetrix

However, you should also keep in mind that there can be a bit of inconsistency in the results produced by such tools. So test multiple times from multiple locations before arriving at a conclusion.

_It is also a good idea to test a simple HTML page with no other external resources before testing your WordPress site. It helps to figure out if the problem is with your WordPress or the server configuration._

## What is response time?

_Now you might be thinking, how many milliseconds is a good response time?_

It is 2020, and websites are striving to fully load in less than 1 second. So, TTFB above half a second is comparatively uggish.

The **Google PageSpeed Insights** would throw a warning if the response took longer than **~500ms**. It is often hard to achieve, but not impossible, with proper optimization.

I have tested this website multiple times using different tools mentioned below. By applying the measures written below, I could bring it under the 200ms mark. However, getting it consistently from multiple locations is a challenge.

On average, you should try to keep response time under 500ms. Below 200ms is ideal.

## 12 Ways to reduce the server response time

These are my suggestions for a better TTFB or faster server response time.

### 1. Use a Good Hosting

_You cannot expect an excellent performance from a mediocre hosting provider. Can you?_

Shared hosting with overloaded servers generally gives poor performance. These days, there are several control panels that allow hosting your WordPress site easily on top cloud platforms like Amazon AWS and DigitalOcean droplets.

So far, I have good experience with _Cloudways+DigitalOcean_ combo.

However, if you are just starting or have only a few visitors, a shared hosting package will be the most economical option.

From my personal experience, [Dreamhost](http://localhost:10003/go/dreamhost/) shared plans give decent speed while being highly cheap.

_You might also like:_

- [Dreamhost Review](http://localhost:10003/dreamhost-review/)
- [Cloud Hosting vs Shared Hosting](http://localhost:10003/cloud-hosting-vs-shared-hosting/)

### 2. Choose a closer location - Reduce Network Latency

If most of your visitors are from the Americas, it may not be a good idea to choose a server in the Asia-Pacific region, and vice-versa.

_Let's talk some Physics here._

Data transmission on the internet occurs mainly through **optical fibers** or cables [view this [submarine cable map](https://www.submarinecablemap.com/)]. So the signal travels in the form of electromagnetic waves at a speed of approximately 200k Kilometers per second (slightly less than the speed of light).

So if the server is located halfway around the globe from your visitor, the data needs to travel almost 40,000 kilometers to and fro. That itself will take 200ms of time. It is called **network latency**.

It is also why my site hosted on DigitalOcean New York loads faster from North America whereas it appears slower from Asia-Pacific.

On the contrary, if I host a website at DigitalOcean Bangalore, it should load faster in Asia and slower in the Americas and Europe.

When buying a hosting, check where their data centers are located, and choose a location closer to where the majority of your audience comes from. Check you [Google Analytics](http://localhost:10003/how-to-set-up-google-analytics-website/) or Search Console Report to find it out.

### 3. Use a CDN

Integrating a CDN (Content Delivery Network) is a great way to **reduce the latency** of static assets like images, CSS, and JS files. It helps to make your site load faster for your users.

A CDN has multiple servers around the globe that cache the static assets (like images) from your site's origin server. So when a user tries to visit your website, the CDN serves ets from its and **edge server closest to the user**.

_You might also like:_

- [Top CDN Providers for WordPress](http://localhost:10003/best-cdn-providers/)
- [BunnyCDN Review](http://localhost:10003/bunnycdn-review/)

Another advantage of using a CDN is the **reduced load and bandwidth** usage on your origin server. Lesser load means better performance.

Cloudflare, AWS CloudFront, [DigitalOcean Spaces](http://localhost:10003/digitalocean-spaces-review/), etc. are some of the CDNs you can try for WordPress.

[BunnyCDN](http://localhost:10003/bunnycdn-review/) (review) is another great option to consider especially if you are on a budget.

Remember, CDNs usually do not cache the HTML document. So, it is not a replacement for choosing a closer hosting server location.

### 4. Use a Caching Plugin

Behind the scenes, the complex WordPress system executes tons of PHP scripts and MySQL queries to generate the content of a page dynamically.

Without Caching, WordPress has to run all these things for each visitor. If the page content doesn't change often, it is a wastage of server resources.

Caching helps to store the response from the first visit and serve it to the subsequent visitors visiting that page. This eliminates the need to execute resource-intensive operations.

[WP Super Cache and WP Fastest Cache](http://localhost:10003/wp-super-cache-vs-wp-fastest-cache/) are two free caching plugins that have worked great for me and are easy to set up. **[W3 Total Cache](http://localhost:10003/w3-total-cache-recommended-settings/)** is another great option if you need advanced features.

If you want a premium plugin, **WP Rocket Cache** is a solid option with great reviews. However, as I haven't tried it, I can't comment on its performance.

Apart from these plugins, some hosting providers like Kinsta and Siteground offer their own caching plugins, so that you don't have to install another one.

_Most plugins have the option to purge cache when you update a page. It ensures that your cache is not serving outdated content._

### 5. Optimize HTML Code

The size of the HTML response can also affect the load time. If it is huge, TTFB slows down. You can look at the HTML of a page on Chrome by right-clicking and selecting _View Source_.

Important things to optimize the HTML are:

- **Minification** - Minified HTML does not contain unnecessary white spaces and other characters thereby reducing the file size
- **Removing unwanted codes** like WP Emoji
- **Concatenating** multiple resource files (CSS & JS) into one file

Plugins like W3TC, WP Super Cache, and WP Rocket do all these for you. Another option is Autoptimize, which helps to [eliminate render-blocking resources](http://localhost:10003/eliminate-render-blocking-resources-wordpress/) as well.

Also, take care to use a lightweight theme like [Astra](http://localhost:10003/astra-theme-review/) or [GeneratePress](http://localhost:10003/generatepress-theme-review/) if possible. Performance-optimized themes usually contain less code bloat.

### 6. Enable GZIP

GZIP is a type of compression that helps to reduce the size of HTML document by up to 85%.

Almost all good web hosts support GZIP. To ensure it:

- Open your site using **Chrome** browser
- Go to the **Networks Tab** and reload the page
- Click on the first response (document) to reveal the details.
- If you see `**content-encoding: gzip**` under **Response Headers**, you are good to go. Otherwise, ask your hosting provider to enable it.

![Verifying GZIP in Google Chrome](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/ttfb-gzip-check-1-1080x509.png)

Verifying GZIP in Google Chrome

### 7. Reduce Redirects

Suppose your site's address is `https://www.example.com`. If you use links inconsistently across your pages like `http://example.com`, the browser has to send more requests to reach the final URL (accompanied with 301 status codes). This further delays the response.

- Use a consistent URL scheme for internal page links - _with or without http:// & www_
- Ensure both mobile and desktop versions of the site uses the same address. Avoid using a separate mobile site like _mobile.yoursite.com_ or _yoursite.com?mobile=1_. Instead, use responsive design.
- Set your preferred domain in Google Search Console so that the search engine only index the correct version of your site.

### 8. Improve DNS lookup speed

DNS (Domain Name System) lookup is the first thing that happens when someone enters a domain name into the browser's address bar.

Usually, the default nameservers that come with your domain registrars are slow.

[SolveDNS](http://www.solvedns.com) helps you to find out the DNS speed of your website's Nameserver.

Currently, I **[use Cloudflare](http://localhost:10003/set-up-cloudflare-wordpress/) to resolve the DNS** for this website. And I have found that it is a lot faster than the default GoDaddy (the domain registrar) Nameservers.

Cloudflare is a reverse proxy and a CDN. If you want it to handle only the DNS, you can turn of the proxy feature at a domain-level in your Cloudflare dashboard.

### 9. Check for SSL Speed

SSL or HTTPS is an essential security practice and you cannot avoid it. While testing your website speed on Pingdom, find out what time it takes for **SSL handshake**.

If you are on shared hosting and your SSL is slow, ask your hosting providers for ways to improve the SSL speed.

### 10. Use Updated Server Software

Using outdated server software can be another reason for slow performance. So it emphasizes the need for selecting a reputed WordPress hosting provider.

If you are managing your own server, as on a VPS or managed server, make sure that you use the **latest versions of Apache or NGINX**.

### 11. Use PHP 7

According to a [performance test by GeekFlare](https://geekflare.com/wordpress-php-fpm7/), PHP 7 is two times faster than its previous version - PHP5.6.

It is the latest branch of the popular server-side [programming language](http://localhost:10003/wordpress-programming-languages/), and it is way more efficient.

So while shopping for a hosting provider, ensure that they provide PHP 7.

### 12. Upgrade Server Hardware

Lastly, if you have done all the things to boost the response time and still your server responds slowly, then it may be time to upgrade your hosting.

An underpowered server cannot handle a website with a massive amount of traffic. You should be happy about it because it's a sign that your site has become popular and successful.

Check the RAM size, CPU cores, and bandwidth limits of your current server. If that is the limiting factor, upgrade it. Or if you are on a shared plan, it may be time to move to a VPS or cloud hosting.

## Conclusion

Reducing TTFB is only the first step in speeding up a website. There are several other things to do including image optimization and enabling browser caching.

You might also want to check:

- [How to leverage browser caching](http://localhost:10003/leverage-browser-caching/)
- [How to eliminate render-blocking resources](http://localhost:10003/eliminate-render-blocking-resources-wordpress/)
- [Tips to fix a slow WordPress admin](http://localhost:10003/fix-a-slow-wordpress-admin/)

_If I have missed any important point, feel free to mention it in the comments._