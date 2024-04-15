---
title: 'Gzip vs. Brotli: Comparing Compression Techniques'
date: '2022-03-13 20:51:40'
modified: '2022-03-13 20:51:42'
slug: gzip-vs-brotli
categories:
    - seo
tags:
    - web-performance
featured_image: 2022/03/gzip-vs-brotli-featured-1.jpg
excerpt: 'Comparing Gzip vs. Brotli - the two common lossless compression techniques to reduce the size of web pages. Includes test results.'
yoast_seo_title: ''
yoast_meta_description: 'Comparing Gzip vs. Brotli - the two common lossless compression techniques to reduce the size of web pages. Includes test results.'
cn_related_posts:
    - clear-cache-wordpress
    - best-caching-plugins-wordpress
    - leverage-browser-caching
    - wp-super-cache-settings-tutorial
---
There are several optimization techniques to speed up web pages. Compression is one of them.

In an earlier post, we had discussed compressing images for the web, and how to [use the WebP](http://localhost:10003/what-is-webp-how-to-use-it/) format.

Images are not the only assets that can be compressed. You can compress HTML and text files as well using lossless techniques. This often reduces the overall page size by more than 60%.

Gzip and Brotli are two such compression techniques. You can enable them at the server level for HTML, CSS, Javascript, and other such files.

The server will send compressed files, which the browser decompresses and renders.

In this post, we are going to look at Gzip and Brotli in detail.

## **What is Gzip**

[Gzip](https://www.gnu.org/software/gzip/) is the most widely used compression technique for optimizing text files on the web. Almost all web servers and content delivery networks support it.

Released in 1992, it’s an open-source standard based on the LZ77 algorithm and Huffman coding.

Files compressed in Gzip end with the extension .gz. It is available by default on Linux and Unix operating systems.

For instance, on Ubuntu desktop, you can use the _gzip_ command to compress individual files or a group of files after converting it into a .tar file (files.tar.gz).

However, in this article, we are mainly interested in knowing how Gzip can help reduce the size of website files rather than on desktops.

That brings me to the next point, which is compression levels. Gzip supports compression levels from 1 to 9. 1 is the least compressed, but fastest. While level 9 gives significantly higher compression ratios by sacrificing performance. The default value is 6.

## **What is Brotli**

Released in 2013, the Brotli compression technique was developed by Google as a replacement for Gzip. Initially, the browser support was not good enough.

However, as modern browser versions started supporting it, now you can see more and more websites implementing Brotli in addition to Gzip.

Overall, Brotli offers better compression ratios than Gzip, which is evident in the test results given below.

Like Gzip, Brotli also relies on the LZ77 algorithm and Huffman Coding. But there are [other factors](https://news.ycombinator.com/item?id=27163981) that make it even better. For instance, Brotli uses context modeling, a static dictionary, etc. You can read more about the static dictionary technique [here](https://blog.cloudflare.com/brotli-compression-using-a-reduced-dictionary/).

While Gzip supports compression levels from 1 to 9, Brotli supports even more: 0 to 11. However, the highest levels 10 and 11 can be too slow for web content delivery. So, setting it between 4 to 7 usually gives the best balance between compression and speed.

## **Compression testing with files on Desktop**

To find out which of the two formats works best, I created six test files on my Ubuntu 20.04 machine and compressed each of them from the lowest to the highest levels.

The gzip command was already available, so I could use it directly.

- gzip -_(1-9)_ -k index.html

It keeps the original source file and compresses the file.

Whereas for Brotli, I installed it from the Ubuntu repository:

- sudo apt install brotli

Then:

- brotli -q _(0-11)_ index.html

### Gzip compression results

_Note: all sizes are in KB_

|Compression  <br>level|HTML File 1|HTML File 2|CSS File 1|CSS File 2|JS File 1|JS File 2|
|---|---|---|---|---|---|---|
|Un-  <br>compressed|1112|97.2|197.5|151.1|89.5|179.3|
|1|330.9 (70.2%)|24.1 (75.2%)|40 (79.7%)|23.7 (84.3%)|36 (59.8%)|61.3 (65.8%)|
|2|319.5 (71.3%)|23.4 (75.9%)|38.2 (80.7%)|23.5 (84.4%)|34.8 (61.1%)|59.1 (67%)|
|3|309.9 (72.1%)|22.8 (76.5%)|36.7 (81.4%)|23.1 (84.7%)|33.9 (62.1%)|57.4 (68%)|
|4|298.1 (73.2%)|21.6 (77.8%)|33.7 (82.9%)|21.3 (85.9%)|32 (64.2%)|54.2 (69.8%)|
|5|288.5 (74.1%)|20.7 (78.7%)|31.8 (83.9%)|21 (86.1%)|31 (65.4%)|52.4 (70.8%)|
|6|282.9 (74.6%)|20.6 (78.8%)|31.1 (84.3%)|20.8 (86.2%)|30.8 (65.6%)|51.9 (71.1%)|
|7|281.8 (74.7%)|20.5 (78.9%)|30.9 (84.4%)|20.8 (86.2%)|30.8 (65.6%)|51.7 (71.2%)|
|8|281.3 (74.7%)|20.5 (78.9%)|30.8 (84.4%)|20.7 (86.3%)|30.8 (65.6%)|51.6 (71.2%)|
|9|281.3 (74.7%)|20.5 (78.9%)|30.8 (84.4%)|20.7 (86.3%)|30.8 (65.6%)|51.6 (71.2%)|

### Brotli compression results

|Compression  <br>level|HTML File 1|HTML File 2|CSS File 1|CSS File 2|JS File 1|JS File 2|
|---|---|---|---|---|---|---|
|Un-  <br>compressed|1112|97.2|197.5|151.1|89.5|179.3|
|0|345.6 (68.9%)|23.3 (76%)|40.1 (79.7%)|25.7 (83%)|37.2 (58.4%)|62 (65.4%)|
|1|302.4 (72.8%)|22.2 (77.2%)|37.3 (81.1%)|21.8 (85.6%)|35.7 (60.1%)|59.2 (67%)|
|2|279.9 (74.8%)|20.9 (78.5%)|34.3 (82.6%)|20.6 (86.4%)|33 (63.1%)|54.3 (69.7%)|
|3|275.6 (75.2%)|20.4 (79%)|33 (83.3%)|20.4 (86.5%)|32.8 (63.4%)|53.3 (70.3%)|
|4|262.5 (76.4%)|19.2 (80.2%)|31.5 (84.1%)|19.8 (86.9%)|31.9 (64.4%)|52 (71%)|
|5|251.3 (77.4%)|18.2 (81.3%)|28.9 (85.4%)|19.1 (87.4%)|30.3 (66.1%)|49 (72.7%)|
|6|249.3 (77.6%)|18.1 (81.4%)|28.4 (85.6%)|19.1 (87.4%)|30.1 (66.4%)|48.6 (72.9%)|
|7|248.5 (77.7%)|18.1 (81.4%)|28 (85.8%)|19.1 (87.4%)|30.1 (66.4%)|48.3 (73.1%)|
|8|247.9 (77.7%)|18.1 (81.4%)|27.8 (85.9%)|19.1 (87.4%)|30 (66.5%)|48.3 (73.1%)|
|9|248.1 (77.7%)|18 (81.5%)|27.6 (86%)|19 (87.4%)|30 (66.5%)|48.2 (73.1%)|
|10|225.2 (79.7%)|16.1 (83.4%)|26.5 (86.6%)|17.5 (88.4%)|28.4 (68.3%)|44.9 (75%)|
|11|223 (79.9%)|15.8 (83.7%)|25.9 (86.9%)|17.2 (88.6%)|28 (68.7%)|44.2 (75.3%)|

## Comparing the Results

### HTML Files

![chart showing HTML file compression using Gzip vs. Brotli](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/gzip-brotli-html-1.png)

![HTML File 2](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/gzip-brotli-html-2.png)

### CSS Files

![chart showing CSS file compression using Gzip vs. Brotli](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/gzip-brotli-css-1.png)

![CSS File 2](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/gzip-brotli-css-2.png)

### Javascript Files

![chart showing jQuery file compression using Gzip vs. Brotli](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/gzip-brotli-js-1-jquery.png)

![JS File 2](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/gzip-brotli-js-2.png)

These are the takeaways:

- Brotli gave better compression ratios in every case.
- You can see noticeable jumps in the graphs at levels 2, 5 and 10.
- Levels 6 to 9 do not show significant differences

## **Testing on a WordPress website**

- I set the compression levels to 6 for both Gzip and Brotli
- Then used to Chrome Dev Tools to set the _accept-encoding_ header

|   |   |   |   |
|---|---|---|---|
||**Uncompressed**|**Gzip**|**Brotli**|
|HTML Document|116|20.6|18.6|
|CSS 1|212|35|32.5|
|CSS 2|6.2|1.8|1.7|
|JS 1|41.1|13.1|12.5|
|JS 2|5.2|2|1.9|
|Total|380.5|72.5 (80.9%)|67.2 (82.3%)|

Overall, Brotli showed 1.4% better compression than Gzip.

## **How to Check if Gzip/Brotli is enabled**

One way to know if your server supports compression or not is to check the HTTP response headers. If it is Gzip, then you'll find the following header:

- content-encoding: gzip

And if it is Brotli:

- content-encoding: br

This is based on the accept-encoding header sent by the browser while placing the request. As of writing this, the default value set by the Chrome browser is:

- accept-encoding: gzip, deflate, br

If the server supports both, then Brotli [gets the priority](https://serverfault.com/questions/941767/enable-both-brotli-and-gzip-on-nginx).

You can also explicitly set the accept-encoding header using Chrome developer tools.

### Checking with Chrome Dev Tools

Go to the Network tab in Chrome Developer Tools. There you will find a little icon that says: _More network conditions_. Clicking on it reveals the following options:

1. Caching
2. Network Throttling
3. User Agent
4. Accepted Content-Encoding

The last section is the one we’re interested in: Accepted Content-Encoding

And for that, you will find four options:

1. Use browser default
2. deflate
3. gzip
4. br

Uncheck the ‘Use browser default’ option, then check the gzip option, which sets the browser’s request header to:

- Accept-Encoding: gzip

It explicitly tells the webserver to send gzip-compressed files. Suppose some server supports Brotli and not Gzip. In such a case, you get an uncompressed response.

Likewise, you can check the ‘br’ option alone, which tells the server to send compressed files only if Brotli is enabled. Otherwise, you receive uncompressed files.

### Online Tools

There are also some online tools like [this](https://www.giftofspeed.com/gzip-test/), which check if a website supports compression or not.

## **Different Ways to Enable Gzip/Brotli Compression**

First of all, let me mention that the steps to enable Gzip or Brotli can vary depending on how your site is configured. Whether it’s WordPress or not, Nginx, Apache, or LiteSpeed, like that.

If you are using a managed WordPress host or a web host that comes with a built-in caching plugin (Kinsta, SiteGround, etc), then it might be already enabled by default. You may not need to do anything more.

Otherwise, if you are using a generic LAMP/LEMP stack, then there are several ways to install Gzip/Brotli.

_Note: If you are on a shared hosting provider, make sure the hosting provider supports compression on their servers. You may need to contact the support to confirm it._

Below, we’ll discuss some of the common ways:

### Enabling via WordPress Plugins

Most WordPress caching plugins have a section where you can enable output compression.

Here’s how to do it in WP Super Cache:

![enabling page compression in WP Super Cache plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/wp-super-cache-enable-compression-1-1080x781.png)

And here’s how to enable compression in WP Fastest Cache:

![enabling gzip compression in WP Fastest Cache](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/wp-fastest-cache-enable-gzip-1080x705.png)

If you are using Nginx, then WP Fastest Cache may show a notice to edit the server configuration file to activate Gzip.

### Gzip in Apache

Apache offers Gzip compression via a module called _mod_deflate_. If you have a self-managed server with Apache, then run the following command to enable the module (e.g., Ubuntu):

- _sudo a2enmod deflate_

Then add the following code to your site’s .htaccess file:

```
<IfModule mod_deflate.c>
AddOutputFilterByType DEFLATE text/html text/css text/plain text/xml application/x-javascript
</IfModule>
```

### Gzip in Nginx

Whereas on Nginx, Gzip should be enabled by default. 

You can access the configuration file to set the compression level and other related options. It should be located in the _/etc/nginx/_ or _/etc/nginx/conf.d_ directory.

### Brotli in Apache

The latest versions of the Apache webserver come with the Brotli module. So you can enable it right away:

- _sudo a2enmod brotli_

Then add the following to the .htaccess file:

<IfModule mod_brotli.c>

AddOutputFilterByType BROTLI_COMPRESS text/html text/plain text/xml text/css text/javascript application/javascript

</IfModule>

### Brotli in Nginx

Google provides a Brotli module for engine x The process can be a bit more complex than enabling it on Apache. You have to build Nginx from the source to enable it. You can see a step-by-step guide on [this website](https://dev.to/koddr/how-to-install-brotli-module-for-nginx-on-ubuntu-20-04-2ocp).

### Configuring on WordOps

In the above sections, we discussed how you can enable the compression under different server setups.

For this website, I have been using a tool called WordOps to set up and manage WordPress on a LEMP stack server. So I thought it is worth mentioning it here if you are also using WordOps.

Luckily, the tool automatically installs the Brotli module for Nginx. However, it is not enabled by default. Instead, Gzip is the default compression enabled on WordOps sites.

Enabling it is quite simple:

- Go to /etc/nginx/conf.d directory
- There you’ll find a file named brotli.conf.disabled. Rename it to brotli.conf (using the command - _sudo mv brotli.conf.disable brotli.conf_)
- Then restart Nginx - _sudo service nginx restart_

That’s it! And thereon, your site will support both Gzip and Brotli.

## **Browser Support**

According to [Caniuse](https://caniuse.com/brotli), Brotli is supported in all major browsers including Google Chrome, Firefox, Edge, Safari, and Opera.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/brotli-browser-support-caniuse-mar-2022-1080x480.png)

However, none of the Internet Explorer versions support Brotli.

## **Gzip vs. Brotli: Conclusion**

I hope this helped you to learn about what Gzip and Brotli are, and how to use them in different scenarios.