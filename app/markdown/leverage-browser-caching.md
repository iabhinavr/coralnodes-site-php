---
title: 'How to Leverage Browser Caching for Better Page Speeds'
date: '2019-05-31 23:22:54'
modified: '2022-01-03 17:39:04'
slug: leverage-browser-caching
categories:
    - seo
tags:
    - web-performance
featured_image: 2019/07/leverage-browser-caching-featured-2.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. There are several things you can do to improve the performance and load times of your website. In this post, you will learn how to leverage browser caching by adding a few response headers for your static files. While checking load speeds on sites like Pingdom, GTMetrix and Google PageSpeed, you might have seen warnings about the lack of caching. This guide helps to solve those warnings as well. Table of Contents 1.…'
yoast_seo_title: ''
yoast_meta_description: 'How to set cache-control and expires headers to leverage browser caching. How to improve load times and remove warning on Pingdom and GTMetrix.'
cn_related_posts:
    - reduce-server-response-time-ttfb
    - eliminate-render-blocking-resources-wordpress
    - shortpixel-image-optimization-plugin-review
    - best-wordpress-image-optimization-plugins
---
There are several things you can do to improve the performance and load times of your website. In this post, you will learn how to leverage browser caching by adding a few response headers for your static files.

While checking load speeds on sites like Pingdom, GTMetrix and Google PageSpeed, you might have seen warnings about the lack of caching. This guide helps to solve those warnings as well.

## What does Browser Caching means?

As you know, a web page consists of not just HTML. It includes several static files like images, CSS, JS, etc.

So, when you go to a web page, your browser sends requests for all these files and downloads them.

The browsers come with the ability to store the downloaded responses on its cache on the local machine - that's your device.

So, when you visit that page again after a while, the browser doesn't require downloading all these files again. Instead, it retrieves these from the cache and renders the page.

This has several advantages:

- **Avoids unwanted HTTP requests**, **resulting in faster page loads**
- **Saves your internet data charges**
- **Saves bandwidth for the website owner**

However, the browser may not cache things by default. For that, the server has to inform the browser how long it should cache the files and when to validate it for changes. This is known as **cache policy**.

In short, cache policy consists of:

- **Setting validity duration**
- **Cache re-validation method**

The server informs its cache policy in the form HTTP response headers send with each file.

## Important HTTP Headers for Caching

There are mainly four such headers that you should know about:

1. **Cache-control**
2. Expires
3. **Last-modified**
4. **ETag or Entity Tag**

Each one is different and you can set one or more of these headers to define your cache policy.

## Cache-control & Expires Header

Both these headers do almost the same thing albeit in a different way. They set the expiration time (validity) for a cached file.

### Cache-control Header

Out of the two, Cache-control is newer. It allows setting multiple directives using less code.

#### Example

Usually, adding the following code to the **htaccess** file is what you need in most cases to set caching.

```
Header Set Cache-Control "max-age=2592000, public"
```

Instead of explicitly setting the cache expiration for all files, you can <filesMatch> to match certain file types only:

```
#Cache images for 1 year
<filesMatch ".(jpg|jpeg|png|gif|webp)$">
Header Set Cache-Control "max-age=31536000, public"
</filesMatch>

#Cache CSS and Javascript for 1 month
<filesMatch ".(css|js|ico|ttf)$">
Header Set Cache-Control "max-age=2592000, public"
</filesMatch>

#Cache other files for 1 week
<filesMatch ".(ico|ttf|otf|svg|xml)$">
Header Set Cache-Control "max-age=1018080, public"
</filesMatch>
```

**max-age**:

This tells the browser to cache the files for the specified **number of seconds**. After that time, the browser has to request the server again.

You can adjust the time values based on the applications's needs. Usually, for assets that rarely change, a value of one year will suffice.

The word _public_ denotes that any client can cache the responses.

**Disabling cache**

You can also do the opposite - that is, disable caching. The following will ask browsers to fetch fresh content from the server without caching.

```
Header Set Cache-Control "no-cache, no-store, must-revalidate"
```

### Expires Header

Unlike Cache-control which sets a duration for the validity of cached files, Expires header sets a specific timestamp.

#### Example

```
<IfModule mod_expires.c>
    ExpiresActive On

    ExpiresDefault "access plus 1 month"

    #Images 
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/ico "access plus 1 year"
    ExpiresByType image/x-icon "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
    ExpiresByType image/bmp "access plus 1 year"

    #CSS & JS
    ExpiresByType application/javascript "access plus 7 days"
    ExpiresByType text/javascript "access plus 7 days"
    ExpiresByType text/css "access plus 7 days"
</IfModule>
```

_[The above code is based on the rules set by Breeze - a WordPress cache plugin]_

### Which one to use?

In most cases, Cache-control is enough to set proper policies. In today's age, there are not many reasons to use the older Expires header. However, you can set both to ensure maximum support.

## Validators: Last-modified & ETag Headers

Apache by default sends both ETag and Last-modified headers with the response. So, unless you turn these off, you should not see any warning during performance tests.

If GTMetrix's PageSpeed recommends specifying a cache validator, it means you have to set either the Last-modified header or the ETag header or both.

Both do the same job - specifies when to validate the cache and refresh stale content.

### Last-modified

Like Expires, Last-modified also specifies a time. For subsequent requests after the first one or after the cached content expires, the browser sends the date along with the request to the server for comparison.

If the server finds that the file is unmodified (i.e., the current modified date is same as the one in the request), the server sends a **Not-Modified** (status code: 304) header instead of the OK header (status code: 200). So, the browser can continue to serve the file from the cache until the cache expires once again.

Else, if the file is modified, the server sends the new date inside the Last-modified header along with the new content. The browser downloads it and keep it in the cache.

### ETag or Entity Tag

Instead of a date and time, the ETag header sends a hashed value. When a file is modified, the ETag value also changes. [Some sources](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Last-Modified) say that ETag is more dependable than Last-modified.

The remaining logic is same as that of Last-modified. The server compares the the current ETag value with the one from the client for validating the cache.

#### Issue with ETag Header

According to [Yahoo Developer Network](https://developer.yahoo.com/performance/rules.html#etags), ETag may not work as expected if your site uses more than one server as in a load balancer.

The reason is if Apache includes the Inode number while calculating the ETag. The Inode may be different for each server, resulting in different ETag values.

To ensure Inode is omitted, set:

```
FileETag MTime Size
# Default is FileETag INode MTime Size
```

For those who use only one server to host a site, this is not an issue at all.

## Final Code

So, the final code to add in your _.htaccess_ file is here. It is based on the code generated by the [W3 Total Cache Plugin](http://localhost:10003/w3-total-cache-recommended-settings/).

```
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css A31536000
    ExpiresByType text/x-component A31536000
    ExpiresByType application/x-javascript A31536000
    ExpiresByType application/javascript A31536000
    ExpiresByType text/javascript A31536000
    ExpiresByType text/x-js A31536000
    ExpiresByType video/asf A31536000
    ExpiresByType video/avi A31536000
    ExpiresByType image/bmp A31536000
    ExpiresByType application/java A31536000
    ExpiresByType video/divx A31536000
    ExpiresByType application/msword A31536000
    ExpiresByType application/vnd.ms-fontobject A31536000
    ExpiresByType application/x-msdownload A31536000
    ExpiresByType image/gif A31536000
    ExpiresByType application/x-gzip A31536000
    ExpiresByType image/x-icon A31536000
    ExpiresByType image/jpeg A31536000
    ExpiresByType image/webp A31536000
    ExpiresByType application/json A31536000
    ExpiresByType application/vnd.ms-access A31536000
    ExpiresByType audio/midi A31536000
    ExpiresByType video/quicktime A31536000
    ExpiresByType audio/mpeg A31536000
    ExpiresByType video/mp4 A31536000
    ExpiresByType video/mpeg A31536000
    ExpiresByType video/webm A31536000
    ExpiresByType application/vnd.ms-project A31536000
    ExpiresByType application/x-font-otf A31536000
    ExpiresByType application/vnd.ms-opentype A31536000
    ExpiresByType application/vnd.oasis.opendocument.database A31536000
    ExpiresByType application/vnd.oasis.opendocument.chart A31536000
    ExpiresByType application/vnd.oasis.opendocument.formula A31536000
    ExpiresByType application/vnd.oasis.opendocument.graphics A31536000
    ExpiresByType application/vnd.oasis.opendocument.presentation A31536000
    ExpiresByType application/vnd.oasis.opendocument.spreadsheet A31536000
    ExpiresByType application/vnd.oasis.opendocument.text A31536000
    ExpiresByType audio/ogg A31536000
    ExpiresByType application/pdf A31536000
    ExpiresByType image/png A31536000
    ExpiresByType application/vnd.ms-powerpoint A31536000
    ExpiresByType audio/x-realaudio A31536000
    ExpiresByType image/svg+xml A31536000
    ExpiresByType application/x-shockwave-flash A31536000
    ExpiresByType application/x-tar A31536000
    ExpiresByType image/tiff A31536000
    ExpiresByType application/x-font-ttf A31536000
    ExpiresByType application/vnd.ms-opentype A31536000
    ExpiresByType audio/wav A31536000
    ExpiresByType audio/wma A31536000
    ExpiresByType application/vnd.ms-write A31536000
    ExpiresByType application/font-woff A31536000
    ExpiresByType application/font-woff2 A31536000
    ExpiresByType application/vnd.ms-excel A31536000
    ExpiresByType application/zip A31536000
</IfModule>
```

In the above code, note that the ExpiresByType directive sets both the Expires and Cache-control max-age headers [[source](http://httpd.apache.org/docs/current/mod/mod_expires.html)].

## Conclusion

So, here is the summary of what we have discussed above:

- Leveraging browser cache means asking the browser to store resources in its cache for a period of time. It prevents repetitive requests to the server until the cache expiration time is reached.
- Cache-control (max-age) and Expires headers set the expiry/lifetime of a cached resource.
- Last-modified and ETag headers allow revalidating an expired cache item
- Cache-control and ETag are preferred than Expires and Last-modified, although you can set all of them.