---
title: 'ShortPixel Review - Smart Way to Optimize Your WordPress Images'
date: '2019-06-13 12:25:04'
modified: '2022-01-03 17:39:04'
slug: shortpixel-image-optimization-plugin-review
categories:
    - seo
tags:
    - web-performance
featured_image: 2019/07/shortpixel-review-featured-2.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Although images are essential, they can quickly increase the bulk of your websites, resulting in slow load speeds. Unless your site has very few pages, manually optimizing each image is a time-consuming task. Even if you do it, WordPress does not allow uploading WebP images to the Media Library. That&rsquo;s why there are tools like ShortPixel, which automatically compress and convert images as you upload them to the website. In this review, we…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Review of ShortPixel Image Optimizer - how to easily compress WordPress or non-WordPress images with ease. Supports WebP also.'
cn_related_posts:
    - best-wordpress-image-optimization-plugins
    - lazy-load-images-wordpress-plugins
    - bunnycdn-review
---
ShortPixel and Smush are two popular names when it comes to compressing WordPress images. If you are confused between the two, this post will help you. In this ShortPixel vs WP Smush comparison, we will take a detailed look into the features, pricing, and performance of the two plugins.

- [Visit ShortPixel](http://localhost:10003/go/shortpixel/) | [Visit Smush](https://premium.wpmudev.org/project/wp-smush-pro/)

[![shortpixel vs wp smush - homeapage screenshots](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-vs-smush-homepages-1080x649.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-vs-smush-homepages.png)

By the end, you will be able to pick one. Also, these two are not the only image optimization plugins available out there. So check out this post as well:

- [7 Best Image Optimization Plugins for WordPress](http://localhost:10003/best-wordpress-image-optimization-plugins/)

Let us begin by comparing the features.

## Feature Comparison

|   |   |   |
|---|---|---|
|**Feature**|**Smush**|**ShortPixel**|
|Lossless compression|**Yes**|**Yes**|
|Lossy Compression|**Pro**|**Yes**|
|WebP|**Pro (works with CDN only)**|**Yes**|
|CDN|**Pro**|Separate plugin|
|Serve scaled images|**Pro**|Separate plugin|
|Compress full-size images|**Pro**|**Yes**|
|Backup & original images|**Yes**|**Yes**|
|Lazy loading|**Yes**|Separate Plugin|
|REST API|**Pro (with CDN only)**|**Yes**|
|PDF Compression|**No**|**Yes**|
|Max files size|5MB (free), 32MB (pro)|**No limit**|
|Images/month|**No limits**|100 (free), plan-based|

ShortPixel vs Smush - Comparing important features

_Searching for a hosting provider for your WordPress site? Then try Cloudways, which comes with advanced performance features like Varnish, Redis, and CDN integration._

[Check out Cloudways →](http://localhost:10003/go/cloudways/)

### Overview

Looking at the above table, you can see that Smush locks most of the features under the pro plan, which makes the free version quite limited. On the contrary, ShortPixel's free plan is fully functional.

_But there is a caveat:_

ShortPixel allows compressing only **100 images per month** with the free plan. After that, you have to purchase additional image credits to compress more.

So if you have only a few images to process each month, then ShortPixel is better. Otherwise, Smush allows losslessly compressing an unlimited number of images. However, there the maximum file size is 1MB.

### WebP & CDN

Another point against Smush is that it doesn't save WebP files on your server. That means you have to enable their CDN feature to serve WebP. So if you don't plan to use **Smush CDN**, it's better to look for some other plugins.

- Smush doesn't store WebP on your server

ShortPixel also offers CDN but within a separate plugin called **ShortPixel Adaptive Images (SAI)**. The good part is, you can use both the plugins together. The main plugin - **ShortPixel Image Optimizer (SIO)** - optimizes and saves images on your server (including WebP), while the other one optimizes and serves images from ShortPixel CDN directly. If you later decide to use a different CDN, deactivate SAI and keep SIO without losing WebP support.

- ShortPixel has two plugins: ShortPixel Image Optimizer & ShortPixel Adaptive Images - both can use either one or both.

### API Access

Lastly, if you want to programmatically optimize images, ShortPixel offers a REST API:

- **ShortPixel Reducer API**

You can send a regular HTTP request along with your API key and the URL of the image to compress. Apart from that the Post-Reducer API allows compressing images that are not available online.

![shortpixel reducer and post-reducer apis](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shotpixel-api-access-1080x240.png)

In contrast, Smush doesn't mention any direct API on its product page. I enquired about it to WPMUDEV, and the reply was that they support API with CDN only. So if you are a programmer, ShortPixel gives a better solution to optimize images.

Winner: ShortPixel - for giving a fully-functional free plugin, along with more features than Smush Pro.

- [Visit ShortPixel →](http://localhost:10003/go/shortpixel/)

## Pricing & Plans

You know that both ShortPixel and Smush offers free plugins available in the WordPress directory.

[![smush & shortpixel free versions](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-smush-free-versions-1080x337.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-smush-free-versions.png)

- [Download ShortPixel](https://wordpress.org/plugins/shortpixel-image-optimiser/) | [Download Smush](https://wordpress.org/plugins/wp-smushit/)

Now let's discuss the paid options.

### Smush Pro Pricing

There are two plans:

- **Smush Pro only** - $6/mo or $49/yr for one site (ticket support only)
- **Performance Package** - $9/mo or $79/yr for one site (includes Hummingbird Pro, Uptime Monitor, and live chat support)

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/smush-pro-pricing-spvssmush.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/smush-pro-pricing-spvssmush.png)

You might be thinking about what the Performance plan is. If you don't know, Smush is created by WPMUDEV, who also creates a bunch of other plugins. Hummingbird is one of them, a performance plugin.

Unless you need these extra things, the standalone Smush Pro which costs $6/mo can do all the image optimization jobs.

### ShortPixel Pricing

The pricing for ShortPixel is totally different from that of Smush. Unlike Smush, ShortPixel doesn't have a separate pro version for the plugin. Instead, the difference is in the no. of images you can compress in a month. The free plan allows only 100 images/mo.

There are two ways to get extra credits:

- **Monthly plans** - starting at $4.99/mo for unlimited images
- **One-time plans** - starting at $9.99 for 10k images

[![shortpixel monthly plans](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-monthly-plans-1080x848.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-monthly-plans.png)

[![shortpixel one-time plans](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-onetime-plans-1080x771.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-onetime-plans.png)

Another difference is, ShortPixel doesn't limit the no. of sites on which you can use the same API key. For example, if you buy 10k image credits, you can use it over all your sites until it gets used up.

- [Visit ShortPixel →](http://localhost:10003/go/shortpixel/)

## Installation & Activation

With both the plugins, the first step is to install the free plugin from the WordPress plugins area.

### ShortPixel Installation & upgradation

[![installing shortpixel](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/shortpixel-add-new-plugin-1080x454.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/shortpixel-add-new-plugin.png)

After installing and activating the free plugin, go to **Settings > ShortPixel**.

If it's the first time, enter your email address and ShortPixel will send you the API key along with the login credentials.

[![after installing shortpixel](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/shortpixel-settings-1-1024x610.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/shortpixel-settings-1.png)

Check your inbox, then copy the API key they've sent, and paste it back in the admin.

[![after validating shortpixel api key](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/shortpixel-admin-page-1080x550.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/shortpixel-admin-page.png)

Later when you want to buy more image credits, you can log in to ShortPixel with the same email and purchase a plan.

### Smush Installation & Upgradation

Search for 'smush' and install the free plugin, which has over 1 million installations as of now.

[![install smush](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/search-install-wp-smush-1080x307.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/search-install-wp-smush.png)

Compared to ShortPixel, upgrading Smush is a lengthier process. To do it, go to the Smush website and pick one of the plans to start the **7-day free trial**.

[![smush trial](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/start-smush-trial-1080x836.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/start-smush-trial.png)

However, to begin the trial, you have to register and provide your credit card details. They currently don't allow using PayPal either. Although you can cancel the subscription and remove the credit card details before the trial ends, I felt it as a disadvantage.

In the next step, you have to connect Smush with your site. For that, there are two methods:

- Enter your WordPress credentials right in their website, or
- Install another plugin called the WPMUDEV Dashboard and enter the API key.

If you don't like to enter your username and password, you can take the second approach. All the premium features get unlocked after the activation.

- Check out my [review of Smush](http://localhost:10003/wp-smush-review/) to view the complete steps.

Winner: ShortPixel. Overall, I felt that ShortPixel is more straightforward to activate. Also, you don't have to provide credit card details beforehand.

## User Interface

### ShortPixel UI

The interface of ShortPixel Image Optimize is somewhat minimal with just four tabs:

- General
- Advanced
- Cloudflare API
- Statistics

It works well. There is nothing fancy.

[![shortpixel image optimizer ui](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-ui-1080x553.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-ui.png)

However, as I have said above, it doesn't include the options to enable CDN and adaptive images. For that, you have to install the [ShortPixel Adaptive Images Plugin](https://wordpress.org/plugins/shortpixel-adaptive-images/).

[![shortpixel adaptive images ui](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-ai-ui-1080x637.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-ai-ui.png)

Although you can use both together without issues, you have to make sure two main things:

- When using CDN with SAI, select lossless compression with SOI. Otherwise, images might be over-compressed, noticeably reducing the quality of images.
- Disable WebP on SOI while using SAI.

Overall, I think it's a mess when using the two plugins together. I don't quite like the way they split the features into two plugins instead of one.

### Smush UI

Compared to ShortPixel, Smush's gives a beautiful interface. There is even a quick setup wizard that configures all the important features the first time you install the plugin. Also, since there are no monthly caps, you can almost set it and forget it.

[![smush user interface](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/smush-ui-1080x622.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/smush-ui.png)

Winner: Smush.

## Compression Benefits

Smush Pro offers two compression techniques:

- Lossless
- Super-smush (lossy)

whereas ShortPixel gives three:

- Lossless
- Glossy
- Lossy

To compare the size savings between the different settings of the two plugins, I created sample web pages with the following settings:

- 3 JPEG images
- 3 PNG images
- Some dummy content
- GeneratePress theme
- No other plugins other than Smush and ShortPixel

First I uploaded the original unoptimized images to a page and measured the page size and speed using GTmetrix. Then I repeated the same process with the same set of images while switching the settings and plugins. Hope you got the idea. And here are the results:

|   |   |   |
|---|---|---|
|**Setting**|**Total Image Size**|**% Savings**|
|No optimization|1.41MB|--|
|Smush lossless|1.37MB|2.83%|
|Smush lossy|590KB|**58.15%**|
|Shortpixel lossy|530KB|**62.41%**|
|Shortpixel lossless|1.32MB|6.38%|
|Shortpixel glossy|729KB|48.29%|

ShortPixel vs Smush - Image Size Savings

Winner: ShortPixel.  
  
With both lossy and lossless algorithms, ShortPixel gave more size savings. In addition to these two settings, ShortPixel also offers a technique called Glossy, which stands in between.

## Support Quality

With the free plugins, WordPress forum is the primary way to solve your problems, be it Smush or ShortPixel. Looking at the no. of issue resolved recently, it seems ShortPixel has a better rate.

However, Smush has a better overall rating (4.8/5), while ShortPixel is a tad lower - 4.6/5. Also Smush has over 1million installation, while the SP is way behind - 200k+ (as of writing this review).

- Smush - 4.8/5, 1m+ installations
- ShortPixel - 4.6/5, 200K+ installations

![shortpixel and smush ratings](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/shortpixel-smush-ratings.png)

Coming to the paid plans, both the plugins offer email support. But Smush gives more options including live chat if you go for their higher plans.

Also, if you plan to join WPMUDEV, which costs $49/mo, you can access the community as well.

Since I haven't tried any of the supports personally, I cannot comment on their effectiveness. But based on the options offered, overall rating, and popularity, WPMU's **Smush is the winner**.

## ShortPixel vs WP Smush: Conclusion

From what I've understood, ShortPixel seems to be the main product of its creators. In contrast, Smush is only one of the products that WPMU offers. That might be the reason why both the plugins differ a lot in all aspects, mainly pricing.

So, for a small blogger or website owner, ShortPixel is the right options. It's gives better compression and features for a smaller price. ShortPixel is the plugin I currently use on this blog as well.

On the other hand, if you have couple of WordPress sites, then you might want to look Smush Pro and WPMU.

So here is the summary:

- Free plugin with lossy/lossless compression: **ShortPixel (but 100 images/mo)**
- Free plugin with unlimited lossless compression: **Smush Free**
- Small site owners on a budget: **ShortPixel (with their one-time plans)**
- Large site owners/agencies who manage multiple sites: **Smush Pro**

- [Visit ShortPixel](http://localhost:10003/go/shortpixel/) | [Visit Smush](https://premium.wpmudev.org/project/wp-smush-pro/)

Hope you found this comparison useful. Also, check out this post too, if you want to know about more options:

- [7 Best Image Optimization Plugins for WordPress](http://localhost:10003/best-wordpress-image-optimization-plugins/)