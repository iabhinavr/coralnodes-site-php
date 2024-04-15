---
title: 'BunnyCDN Review: How it Speeds Up Your Website Load Times'
date: '2019-06-06 04:09:52'
modified: '2022-03-21 15:10:48'
slug: bunnycdn-review
categories:
    - hosting
tags:
    - cdn
featured_image: 2019/07/bunnycdn-review-featured-2.jpg
excerpt: 'A detailed review of BunnyCDN (a.k.a Bunny.net) - learn more about the features, pricing, and how to use it. Includes speed tests.'
yoast_seo_title: 'BunnyCDN Review [2022]: Features, Pricing, How to Use, Pros & Cons'
yoast_meta_description: 'A detailed review of BunnyCDN (a.k.a Bunny.net) - learn more about the features, pricing, and how to use it. Includes speed tests.'
cn_related_posts:
    - best-wordpress-image-optimization-plugins
    - tools-to-measure-website-speed
    - best-cdn-providers
    - video-hosting-sites
---
If you are looking for a CDN that will not cost you a fortune, then you should consider [BunnyCDN](http://localhost:10003/go/bunnycdn/) (or Bunny.net). I have been using it for more than two years now.

In this review, I will show you how it has helped me in making my site faster while saving a lot of bandwidth on my origin server.

We will also discuss the important features and do some speed tests.

## Initial Impressions

After starting this blog in 2019, I was looking for an affordable content delivery network. I had used Cloudflare in the past and had heard about Stackpath and KeyCDN, but BunnyCDN was a new name to me.

So, I was a bit skeptical at first. After looking at the figures on [CDNPerf](https://www.cdnperf.com/), I decided that it's worth a try.

[Visit BunnyCDN](http://localhost:10003/go/bunnycdn/)

## Features & Ease of Use

BunnyCDN offers all the important features you expect from a typical CDN.

- 90+ PoPs in 50+ countries
- Multiple Pull Zones within one account
- Let's Encrypt SSL with Custom CNAME subdomain
- Edge Rules
- Set bandwidth and request limits

- Storage zones
- API & FTP access for storage zones
- Perma-cache & origin shielding
- On-the-fly image optimization & WebP conversion (addon)

### 1. Edge Locations or PoPs

With **90+ data centers** spread across 50+ countries, BunnyCDN has its presence on six continents. Here is a continent-wise breakdown of the number of data centers or edge locations (as of Mar 2022):

- North America - 15
- South America - 11
- Europe - 32
- Africa - 4
- Middle East - 2
- Asia - 22
- Oceania - 6

[![BunnyCDN edge locations as of Mar 2022](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/bunnycdn-locations-mar-2022-1080x586.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/bunnycdn-locations-mar-2022.png)

### 2. Pull Zones

A pull zone allows you to set the base URL from where the CDN should cache the files.

Configuring a pull zone involves two URLs:

- Origin URL
- Hostname or CDN URL

So, whenever a request hits a Hostname, the CDN checks if the file is available in the edge cache. If not, it _pulls_ the file from your origin server and sends it to the user.

After that, it saves that file from the edge location's cache for future request. Thus, the next visitor from that region gets served faster.

#### Creating a Pull Zone

Let's see how you can create a pull-zone for your website. After signing up and logging in, head over to the Pull Zones page and click the _**Add Pull Zone**_ button.

![add pull zone](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/bunnycdn-add-pullzone-1.png)

On the next page you have to set three things:

[![How to add pull zones in BunnyCDN](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-add-pull-zone-3-800x443.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-add-pull-zone-3.png)

1. **URLs - Hostname & Origin** - Give your site's name as the hostname. For the Origin URL, enter your site's domain. Alternately, if you want CDN on a specific folder only, add that to the domain name _(eg., mysite.com/images)_.  
      
    Note: You can have multiple pull zones for different directories of your site. For example, you can set one pull zone for _mysite.com/images_ while another one for _mysite.com/assets_
2. **Standard or Volume Tier** - Standard is the default choice. Keep it like that for most use cases.
3. **Prizing zones** - Keep all the four zones checked if your visitors scatter all around the globe. Otherwise, you can uncheck any unnecessary zones.  
    South Africa and South America zones are more expensive than the other two. So, disabling it can reduce your monthly bills slightly.

#### Standard & Volume Tiers

![BunnyCDN standard & volume tiers](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-pullzone-standard-volume-1-1024x229.png)

BunnyCDN offers two types of Pull zones - **Standard** and **Volume**. Standard will be the best option for most sites.

Volume tier is specially optimized for caching large files like videos. However, it is available on certain edge locations only (see the image above).

Finally, click the **Add Pull Zone** button to activate the newly added zone.

After that, you will see a page with instructions on how to integrate the Pull Zone with WordPress, Joomla, Drupal, or an HTML website.

[![How to add pull zones in BunnyCDN](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-add-pull-zone-2-800x405.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-add-pull-zone-2.png)

Note down the URL of the newly created pull zone _(looks like ****.b-cdn.net)_.

Then click on the Skip Instructions button to go access the Pull Zone's Edit page.

### 3. Custom Domain with Let's Encrypt SSL

Above, we have seen that the default URLs for your assets will be *.b-cdn.net. But with BunnyCDN's Linked hostnames feature, you can connect your custom sub-domain to it and serve the cached assets from that subdomain. So your visitors won't see BunnyCDN's third-party URLs.

[![Custom sub domain with BunnyCDN](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-cname-1-800x134.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-cname-1.png)

The default Hostname looks like:

_yourpullzone.b-cdn.net_

With CNAME sub-domain support, you can set something like:

_cdn.yoursite.com_

#### Adding the CNAME DNS Record

Before entering the sub-domain on BunnyCDN's dashboard, you have to create a CNAME DNS record in your domain's DNS editor.

Open your domain's DNS editor in a new tab. Then create a CNAME record and point it to the BunnyCDN URL you've got in the previous step (_****.b-cdn.net_). Enter an appropriate name for the host field (eg., cdn)

If you are confused about adding a CNAME, see [this guide on GoDaddy](https://in.godaddy.com/help/add-a-cname-record-19236). The process is similar for most providers.

Now, your sub-domain (cdn.yoursite.com) is pointing to ***.b-cdn.net.

#### Enter Subdomain as Hostname

Now, come back to your pull zone's edit page on the Bunny dashboard. Under Add Custom Hostname, enter the new subdomain and click _Add_.

[![Adding custom hostname/sub-domain to CDN](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-pull-zone-hostname-1-800x195.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-pull-zone-hostname-1.png)

Now, the sub-domain should appear under **Linked Hostnames**.

#### Enabling SSL for the new Subdomain

BunnyCDN offers one-click Let's Encrypt SSL certificates for sub-domains. If you wish, you can add a custom certificate from another authority also.

[![Enable SSL for custom sub-domain](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-pull-zone-ssl-1-800x325.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-pull-zone-ssl-1.png)

[![Enable SSL for custom sub-domain](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-pull-zone-ssl-3-800x293.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-pull-zone-ssl-3.png)

#### Other Settings for Pull Zones

There are also several other things you can configure for Pull Zones. We won't be going into the details of each. The below screenshot will give you an idea:

[![Bunny pull zone settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunnycdn-pullzone-settings-1-1080x521.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunnycdn-pullzone-settings-1.png)

### 4. Storage Zones

With the pull zones we discussed above, you don't have full control over what files get cached. That means, pull zones retrieve data from your origin server only when it receives a request.

Whereas with Storage Zones (a.k.a Edge Storage), you can permanently store files on BunnyCDN's servers, just like you upload files to any web host. To upload files to the storage, you can use one of the following ways:

1. **Upload via the web interface**
2. **FTP upload**
3. **via BunnyCDN API**

[![add new storage zone](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/bunnycdn-storage-zones-add-new-1080x335.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/bunnycdn-storage-zones-add-new.png)

For backups and archiving purposes that don't need public access to the files, it is sufficient. You can consider it as a cheap [alternative to S3](http://localhost:10003/amazon-s3-alternatives/) or [Dropbox](http://localhost:10003/dropbox-alternatives/). The technology behind it is object storage rather than file-based storage. So there are no limits on the number of files you can store in a zone.

In addition, if you want to serve the files to your users from a public URL (like in a pull zone), you can do that too. Connect a pull zone (yes, pull zone), and point its origin URL to the Storage zone.

- In short, a Storage zone connected to a pull zone works like Push CDN (similar to an Amazon's S3 bucket connected to Cloudfront CDN).

The storage zones also supports geo-replication, which increases redundancy and reduces latency. Currently, replication is availabe in the following locations:

- Los Angeles
- New York
- London
- Stockholm
- Falkenstein
- Singapore
- Sydney

![storage zone replication in bunnycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/bunnycdn-storage-zone-replication-1080x419.png)

- The pricing is also quite cheap - **$0.005 per GB per location per month**. If you select all five locations, the total price becomes $0.45/GB/month.

### 5. Perma-Cache

With normal CDN caching, the assets in your pull zone's edge locations expire after a set time. After that, the edge servers re-pull those assets from the origin server once again.

However, BunnyCDN has a new feature that allows storing the assets permanently on their servers - **Perma-cache**.

To enable it, you have to create a Storage Zone and connect it from your Pull Zone settings page. Once enabled, the connected storage zone stands in between the edge servers and your origin server. It caches every request and stores it permanently.

![enable perma-cache on BunnyCDN](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/bunnycdn-perma-cache-1-1080x380.png)

![perma-cache settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/bunnycdn-perma-cache-2-1080x491.png)

So, whenever a cached file expires on an edge server, it pulls from the storage zone instead of your origin server.

With replication, the edge servers pull from the nearest replication location. So, for expired cache files, the latency will be lower.

Overall, storage zones combined with perma-cache is a great way to reduce the load on your server while making the site load faster.

### 6. Origin Shield

Origin shield is another feature that is quite similar to Perma-cache. So, you need to activate only one of them.

With the origin shield enabled, all the requests to your origin servers pass through the shielding server. However, unlike Perma-cache storage zones, the shield locations do not cache files permanently.

### 7. Video Streaming

Recently, Bunny has introduced a new feature for streaming videos. You can create Video Libraries inside Storage Zones. There are two pricing tiers, Standard and High Volume. Since it is for videos, selecting the High Volume Tier will be suitable, which costs $5/TB of bandwidth.

[![Bunny Video Streaming](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunnycdn-video-stream-1-1080x483.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunnycdn-video-stream-1.png)

[![Bunny Video Streaming - Pricing Tiers](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunny-video-stream-pricing-tiers-1-1080x398.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunny-video-stream-pricing-tiers-1.png)

Not just hosting videos, Bunny also offers an HTML5 player that you can embed into your web pages. Overall, it is a potential alternative to other [video hosting services](http://localhost:10003/video-hosting-sites/) like Vimeo and Wistia.

### 8. Statistics & Monitoring

Ability to know the usage statistics is a must-have for CDNs. With Bunny, it's easy.

At the top of your pull zone page, you can see the three important metrics - bandwidth, requests, and cache hit rate.

[![Statistics-bandwidth, requests, cache hit rate](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-stats-1-800x61.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-stats-1.png)

_Usually, your cache hit rate should be around 60% or more. It may be lower during the initial days. But as more and more edge locations start caching your files, the rate should climb up._

In addition to this, the Statistics page show detailed information with line graphs and maps. You can filter metrics by date, location, and pull zone.

[![BunnyCDN statistics](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-stats-2-800x481.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-stats-2.png)

Apart from Statistics, the Logs section gives the details of each individual request. It includes HTTP status code, user's IP, data center, and browser info. Looking at the logs can help to figure out problems easily.

[Visit BunnyCDN](http://localhost:10003/go/bunnycdn/)

## Integrating with Your Website

In the above section, we have discussed how you can create a pull zone. Now let us see how you can integrate it with your website.

### Replacing links on your site

For the CDN to start caching, you have to replace the origin URLs with the new pull zone URLs, which depends on what [content management system](http://localhost:10003/what-is-cms-content-management-systems/) or site builder you are using.

First, let us discuss WordPress.

### Integrating with WordPress

With BunnyCDN's WordPress plugin, integrating and enabling CDN is quite easy.

The first step is installing it from the WP dashboard.

[![BunnyCDN WordPress Plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-wordpress-plugin-1-800x268.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-wordpress-plugin-1.png)

After installing it, go to the settings page of the plugin. If you hadn't set a custom sub-domain, just enter your pull zone's name and click _Enable_.

[![BunnyCDN WordPress Plugin Settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-wordpress-plugin-2-800x460.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-wordpress-plugin-2.png)

Otherwise, if you had set a sub-domain as per the previous steps, click _Switch to Advanced View_.

[![BunnyCDN WordPress Plugin Settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-wordpress-plugin-3-630x800.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-wordpress-plugin-3.png)

Enter the sub-domain and click _Enable_.

Now, all settings are complete. Open your site and inspect one of the assets to ensure that you are seeing the new CDN URL.

It is not a necessity to use the BunnyCDN WordPress plugin. If you are already using a caching plugin like W3 Total Cache or WP Super Cache, you can implement the link replacement from the respective cache plugin's settings page. Check the [W3 Total Cache settings tutorial](http://localhost:10003/w3-total-cache-recommended-settings/#w3tc-cdn-advanced) to learn how.

_Note: Be sure to purge any cache after enabling CDN. Otherwise, the old links may persist._

## Speed Tests - Before & After

A CDN is all about performance. So, what is the point of this review without some tests?

### Test 1: Using sample HTML pages

For this test, I created two identical web pages.

On the first web page, the assets (images, CSS, JS, and fonts) were loaded from the origin server (hosted on a DigitalOcean droplet). On the second web page, the assets were loaded from BunnyCDN.

Then I conducted multiple tests from various locations using GTmetrix to find the average page load times for each location as well as the worldwide average.

These were the results:

[![Performance Tests - BunnyCDN](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-performance-test-1-1-711x800.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/06/bunnycdn-performance-test-1-1.png)

As you can see, using BunnyCDN improved page speed by almost **37%** (average). Surprisingly, South America (Sao Paulo) was slower with BunnyCDN.

### Test 2: Using a WordPress site

Using the above web pages was enough to get an idea. However, since WordPress is so popular, that's what most people want to know - _how BunnyCDN speed up WordPress?_

So I chose a WordPress site that was not well optimized. It also contained a few large images - perfect for testing a CDN.

These were the results:

- Average load time without CDN - **2.9s**
- Average load time with BunnyCDN - **1.6s**

With WordPress, BunnyCDN showed even better results with a **44%** gain in speed. It confirmed the results from the previous test.

Also, according to the [data from CDNPerf](https://www.cdnperf.com/), it is faster that Stackpath and KeyCDN.

[Visit BunnyCDN](http://localhost:10003/go/bunnycdn/)

## Pricing

Affordable pricing is the main attractiveness of BunnyCDN. They also give a 14-day trial. These are the per GB price for Pull Zones for different regions:

- North America - $0.01
- Asia & Oceania - $0.03
- South America - $0.045
- Middle East & Africa - $0.06

The payment is in the form of recharges, which means you have to charge your account a minimum of $10. Also, the minimum usage is $1/mo. Each year, you have to recharge with a minimum of $10 to prevent deactivation. Still, it is quite cheap in my opinion.

So, your credit card won't be charged monthly. The minimum recharge amount is $10 though.

Currently, you can pay with your credit card, PayPal, or bitcoin.

[Visit BunnyCDN](http://localhost:10003/go/bunnycdn/)

## Support Quality

Currently, support tickets are the only way to request help. The account says that more options and a Slack channel are coming soon. They often post on [Twitter](https://twitter.com/BunnyCDN) with the latest news and for feature suggestions.

Apart from that, their knowledge base articles cover almost all topics related to Account setup and CDN configuration.

During my time with Bunny, I had to contact the support a couple of times. And all the time, they were very knowleadgeable and clearly answered my questions.

[![BunnyCDN support ticket 1](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunnycdn-support-ticket-1-1080x651.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunnycdn-support-ticket-1.png)

In another ticket, I was asking about how I can use Bunny for backups. And the reply was clear and assuring.

[![BunnyCDN support ticket 2](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunnycdn-support-ticket-2-1080x659.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/bunnycdn-support-ticket-2.png)

## Pros & Cons of BunnyCDN

These are the advantages and disadvantages I felt after using BunnyCDN.

### Pros

- Affordable
- Above average speed and response times worldwide
- Easy to Set Up
- User-friendly dashboard

### Cons

- Support options are less
- Slower when tested from South America

## Conclusion - Do we recommend BunnyCDN?

Absolutely. If you are searching for a CDN with a low price tag and great speed, you should consider BunnyCDN. Regarding the cons, I honestly couldn't find anything serious.

[Try BunnyCDN for free](http://localhost:10003/go/bunnycdn/)

Do you use BunnyCDN? What is your experience? Share it in the comments.