---
title: 'How to Host Google Fonts Locally? Advantages & Disadvantages'
date: '2019-10-29 07:00:32'
modified: '2022-01-03 17:39:04'
slug: host-google-fonts-locally
categories:
    - seo
tags:
    - web-performance
featured_image: 2019/10/host-google-fonts-locally-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. So, you are looking for a way to host Google Fonts locally. Right? As of now, you might be serving the fonts from Google&rsquo;s servers. WordPress offers several font plugins to do that too. However, the approach has some downsides. For example, speed tools like GTmetrix show certain warnings, which can be a hindrance if you are trying to improve your speed scores. Hosting the fonts locally on your server is the solution…'
yoast_seo_title: 'How to Host Google Fonts Locally? Pros, Cons & Why is it not Beneficial?'
yoast_meta_description: 'Does hosting Google Fonts locally give any performance improvement? Here we compare both the methods with its pros, cons, and speed tests.'
cn_related_posts:
    - best-google-font-combinations
    - change-font-wordpress
---
So, you are looking for a way to host Google Fonts locally. Right?

As of now, you might be serving the fonts from Google’s servers. WordPress offers several [font plugins](http://localhost:10003/change-font-wordpress/) to do that too.

However, the approach has some downsides. For example, speed tools like GTmetrix show certain warnings, which can be a hindrance if you are trying to improve your speed scores.

Hosting the fonts locally on your server is the solution to fix these issues. In this post, I will show you the proper way to load Google fonts from your server instead of Google’s.

_However, are these really worth it?  
Do these slight performance gains matter much?_

We will discuss the pros & cons of both the approaches so that you can decide which to choose.

## 4 Reasons to Host Google Fonts Locally

### 1. Avoid an Extra DNS Lookup

Have you checked the number of external domains your website is depending on?

![Reduce DNS Lookups - GTmetrix](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/dns-lookup-warning-gtmetrix-1.png)

If it is under five, nothing to worry. Otherwise, it can make your site slow because:

- Each domain requires an additional DNS lookup.

In worst cases, if an external server goes down, your website may even fail to load correctly.

If you are loading fonts from Google, the browser makes requests to two more external domains:

- fonts.googleapis.com
- fonts.gstatic.com

The first domain loads a stylesheet while the second one loads the font files.

Instead, if you host it locally on your server or CDN, you can avoid depending on these two domains.

_Tip: Look at the YSlow tab under GTmetrix reports for checking the total no. of domains. Remember, it includes all the CDNs, APIs, and other resource URLs you’ve linked to, including your site’s primary domain._

### Remove the non-minified CSS

Google Fonts define its @font-face rules in a separate stylesheet you link in the header of your pages.

However, this stylesheet, although small, is not minified. It can cause warnings in speed tests.

[![non-minified Google Fonts CSS file](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/non-minified-font-css-1.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/non-minified-font-css-1.png)

_Now you might be thinking - why can’t I copy that @font-face rules to your site’s CSS file?_

No. Don’t do that. The @font-face rules still point to the font files on Google’s servers. Google often updates its font files. So, if the source URL changes, the CSS you copied becomes stale or unavailable.

That’s why you should serve both the CSS and font files on your own. You can minify it, and not be afraid of referring to a non-existent file.

### More Control over Caching Settings

In an earlier post, I had mentioned the importance of [setting the proper cache headers](http://localhost:10003/leverage-browser-caching/).

If you host your fonts locally, you have complete control over these settings. Generally, it is a good idea to give your font files a long expiration time, say six months or one year.

On the contrary, Google’s cache expiration settings are often shorter.

![Google Fonts - Add Expires Header](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/gtmetrix-add-expires-header-1.png)

![Google Fonts CSS file expiration time](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/google-font-css-cache-control-1.png)

### Load a Particular Font Version

As I have mentioned above, Google keeps updating font versions from time to time, in an attempt to make it better.

However, you might feel that an updated version doesn’t look as good as the previous version. So, if you want to continue using the version you like, you’ll have to host it locally.

## Why it may not be beneficial?

### 1. Google’s CDN is faster than Yours

I hope you are serving static files from a CDN. Aren’t you?

If not, you should consider enabling a CDN, at least the free Cloudflare. In another post, I’ve mentioned how BunnyCDN has helped me in improving my site’s speed, and why it is an economical solution for beginners.

Even if you use a CDN, Google’s CDN is still faster than yours. So, it may not produce any significant benefit.

Although serving fonts locally helps to improve speed scores, it may not translate to speed improvement.

### 2. Maximum Browser Support + Latest Version

When you use Google’s URL, it does all the work for figuring out the best font format, such as WOFF, WOFF2, or EOT, based on the user’s browser.

Also, you don’t need to worry about font updates. Google automatically serves the latest version.

On the other hand, if you host locally, you’ve to provide all the variants in your CSS rules.

### 3. Users Might have the Fonts Cached

If you are using a popular font combination like Open Sans, Roboto, or Merriweather, most of your users have the latest font versions cached by their browsers. 

If they come to your site after visiting another website that uses the same fonts, they don’t need to load them again. Instead, the browser retrieves the required files from its cache, eliminating the need for additional HTTP requests and DNS lookups.

When you host fonts yourself, you lose this advantage. Suppose a user has the latest version of the Roboto font in the cache. If your site is serving an older version, the browser will still download it, resulting in an unnecessary request.

So, I hope you understand both the advantages and disadvantages. If you want to try it yourself, here is how:

## Steps to Host Google Fonts Locally

### 1. Download font packages

Google Fonts website allows you to download font files. However, that is not what we want, as it provides only the TTF file. We want the latest formats like WOFF & WOFF2.

Fortunately, there is an excellent tool for that - [google webfonts helper](https://google-webfonts-helper.herokuapp.com). It provides you all the formats, including WOFF, WOFF2, TTF, EOT, and even SVG.

![How to host Google Fonts Locally - using google webfonts helper](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/google-webfonts-helper-1-1080x705.png)

Search for the fonts you want and check the weights you like to use, such as regular, bold, or italic.

For maximum browser support, select the **Best Support** option. Otherwise, if you don’t want to support old browsers, select **Modern Browsers**.

Based on the options you selected, you get a CSS snippet with the proper _@font-face_ rules. Copy it to a safe place.

Now, download the Zip package, which contains all the font files you need.

### 2. Upload the fonts to your server via FTP

Unzip the package you’ve downloaded. Then, using an FTP program like Filezilla, upload the font files to a suitable directory on your server.

![upload google fonts using Filezilla](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/google-font-upload-filezilla-1-1080x279.png)

### 3. Copy the styles to your site’s CSS file

As you have the files on your server, copy the stylesheet rules to your site’s CSS file.

Don’t forget to change the [file paths](https://css-tricks.com/quick-reminder-about-file-paths/) based on your directory structure.

![font-face rules for locally hosted fonts](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/google-webfonts-helper-css-1-1080x517.png)

**For WordPress Users**:

Things are easy if you’re on WordPress. 

Install a plugin like [Custom Fonts](https://wordpress.org/plugins/custom-fonts/). Then upload all the files you’ve downloaded from google webfonts helper.

![Custom Fonts WordPress Plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/custom-fonts-plugin-1.png)

The plugin will generate the necessary @font-face CSS rules automatically. Then you can use the font on any element by adding custom CSS using WordPress Customizer.

## Tests & Conclusion

To validate my points, I tested the speed difference when loading fonts in both ways.

**Hosted by Google CDN:**

![Speed when fonts served from Google - GTmetrix test](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/google-fonts-google-cdn-perf-1-1080x931.png)

**Hosted Locally (cached by BunnyCDN):**

![Speed when fonts served locally - GTmetrix test](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/10/google-fonts-local-perf-2-1080x695.png)

|Locally Hosted Font vs Google Hosted - Speed Difference|   |   |
|---|---|---|
||**Google Hosted**|**Local Hosted**|
|Wait Time|45.3ms|81.2ms|
|PageSpeed Score|94%|94%|
|YSlow Score|91%|93%|
|No. of Requests|20|19|
|Total Load Time|0.6ms|0.7ms|

These are my conclusions:

- Local fonts helped to reduce one extra HTTP request and a DNS lookup.
- There is no significant difference in speed. Still, Google performed slightly better than my CDN.
- Using Google's remote URL is a better way most of the time.

Do you have a different opinion about font hosting? Or have I missed some points? Mention it in the comments.