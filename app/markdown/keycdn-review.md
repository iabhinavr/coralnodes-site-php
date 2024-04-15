---
title: 'KeyCDN Review - Features, Performance, Pros & Cons'
date: '2020-08-30 19:00:00'
modified: '2022-03-17 18:06:14'
slug: keycdn-review
categories:
    - hosting
tags:
    - cdn
    - web-performance
featured_image: 2020/08/keycdn-review-featured-1.jpg
excerpt: 'A detailed review of KeyCDN, a content delivery network suitable for all websites. Learn more about the features, pricing, pros, and cons.'
yoast_seo_title: 'KeyCDN Review [2022] - How I made a Site 41% Faster Using It?'
yoast_meta_description: 'A detailed review of KeyCDN, a content delivery network suitable for all websites. Learn more about the features, pricing, pros, and cons.'
cn_related_posts:
    - best-cdn-providers
    - bunnycdn-review
    - amazon-s3-alternatives
    - bunnycdn-vs-keycdn
---
In this review, we will take a look at KeyCDN, a content delivery network that many WordPress users rely on. Founded in 2012, its Headquarters is in Switzerland. They have also partnered with other performance-focused providers like Kinsta and Optimizing Matters (the creators of the Autoptimize plugin).

According to [Builtwith](https://trends.builtwith.com/cdns/traffic/Entire-Internet), KeyCDN stands at the 13th position in terms of market share. That means, out of all the websites in the entire internet that use a CDN, around 8900+ use KeyCDN.

- [Visit KeyCDN](http://localhost:10003/go/keycdn/)

[![builtwith statistics for keycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-builtwith-statistics.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-builtwith-statistics.png)

Currently, I use [BunnyCDN](http://localhost:10003/go/bunnycdn/) (8th in the above list). KeyCDN is another option I would consider if I need an alternative.

You might also like:

- [BunnyCDN Review](http://localhost:10003/bunnycdn-review/)
- [Top CDN providers for WordPress](http://localhost:10003/best-cdn-providers/)

With that, let us discuss the pricing, features, and performance of KeyCDN.

## Pricing

KeyCDN offers two types of CDNs - **Pull and Push**. For Pull zones, the pricing is for the bandwidth only. An account allows upto three zones. Additional zones cost $1 each.

There is no charge for requests. So, unlike enterprise-level CDNs like Google Cloud and AWS Cloudfront, the pricing structure is a lot simpler to understand for beginners.

However, the cost varies between different regions. North American locations have the lowest price - $0.04/GB. Whereas Asia-Pacific and South America/South Africa have almost double - $0.10/GB and $0.11/GB respectively.

In addition to these bandwidth costs, Push zones charge you for storage also. The cost of storing the first 500GB is $0.12/GB/month.

- Min. bandwidth price: $0.04/GB
- Initial storage price (push zones): $0.12/GB/mo

### Free Trial

KeyCDN calculates usage based on Credits, and one credit equals one USD.

When you signup for an account, you get a **14-day free trial**, which allows free bandwidth upto **25GB (1 credit)**. No credit card required for signing up though. This quota is good enough to try out the service and decide if KeyCDN is right for you or not.

However, if you use up the free quota before the first 14 days, the trial automatically ends. Then you will have to upgrade your account to continue using the services. So, always keep an eye on the **Overview** tab, where you can monitor your remaining credits.

_Remember, one credit amounts to 1USD, which is almost 25GB of bandwidth._

[![keycdn free trial credits](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-free-credits-overview-1080x703.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-free-credits-overview.png)

### Minimum Charges

There is also a minimum monthly charge of **$4/mo**. So even if you haven't used any bandwidth during a month, you have to pay the minimum price for any active zones.

However, there is a big caveat. The minimum payment amount is $49, which is almost the minimum price for one year ($4 * 12mo = $48).

For high traffic websites, it may not be a big amount. But for small traffic websites, having to pay $49 upfront can be a deal-breaker. This is the main reason why I stick with BunnyCDN. Their minimum monthly price is just $1 while the minimum payment amount is $10, which is four times cheaper than KeyCDN.

### Payment Options

To buy credits, KeyCDN supports two payment methods:

- Credit Cards
- PayPal

The latter is usually my preferred method. However, for automatic payments, you have to use a credit card.

![buying keycdn credits using paypal](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-buycredits-paypal-1080x483.png)

buying credits using paypal - minimum payment is $49

## Features & Ease of Use

### User Interface

KeyCDN gives a clean user interface to manage your zones. It displays only the relevant details on each page. For example, the _Overview_ page shows your credit balance, storage size, and the number of zones, along with a usage graph and a table.

In comparison, the BunnyCDN dashboard felt more complex to me. Whereas you don't have much to get confused while navigating KeyCDN dashboard.

![keycdn dashboard interface](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-dashboard-1080x529.png)

### Data Centers and Edge Locations

As of writing this review, KeyCDN has data centers in **39 locations** worldwide. They have a great presence in the Asia-Pacific region as well, with PoPs in India, New Zealand, Japan, and many more.

In addition, there are five more locations coming soon - three in South America and two in Asia.

As per their website, they use [tier 1 networks](http://localhost:10003/how-the-internet-works/) to distribute the data, with necessary certifications in place (like ISO 27001).

[![keycdn edge locations](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-locations-1080x616.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-locations.png)

### CDN Zones

As I have mentioned above, KeyCDN supports two types of zones:

- Pull Zones
- Push Zones

To create either of it, go to the Zones menu and click **Add Zone**.

![adding zones in keycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-add-zone.png)

#### Pull Zones

With Pull Zones, you set the origin hostname as your website's URL. Later, when a request hits your Pull Zone, it retrieves the file from your origin server and sends it to the user. In addition to that, the file will be copied in the edge location's cache for later use.

For example, you have a file at **_yoursite.com/image.jpg_**, and your Pull Zone's URL is _**yourzone.kxcdn.com**_. When a request hits the URL _**yourzone.kxcdn.com/image.jpg**_ from London, KeyCDN pulls the image from your server and store it at an Edge Server in London. So, subsequent requests for the same image from London will be served super-fast from that Edge Location. Thus it reduces the load on your origin server.

There are almost twenty different settings you can configure while creating a Pull Zone. We will discuss only the important ones:

- **Zone Status**
- **Zone Type**
- **Origin URL**
- **Origin Shield**
- **Max Expire**
- **Ignore Cache-Control**
- **Ignore Query String**

[![KeyCDN Pull Zone Settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-pull-zone-settings-1-489x1080.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-pull-zone-settings-1.png)

I hope the settings are self-explanatory from the above image. In addition, there are a few more settings that you should know about:

##### **Other Settings**:

- **Canonical Header**: helps to avoid duplicate content problems. Enabled by default.
- **Image Processing**: KeyCDN supports on-the-fly image optimization, which you can use to resize and optimize images based on simple GET parameters. It supports WebP as well. However, enabling this feature costs extra. By default it is disabled.
- **Expire** (minutes): This sets the Cache-control and Expires response headers for [browser caching](http://localhost:10003/leverage-browser-caching/). Don't confuse it with the _Max Expire_ we discussed above, which sets the cache expiry on the server.
- **SSL:** KeyCDN supports three types of SSL certificates: shared, Let's Encrypt, and custom certificates. Shared is the default, which works for the default kxcdn.com hostname. However, if you plan to use a custom subdomain, change it to Let's Encrypt.
- **Secure Token:** Helps to limit the access to the files in a zone.

Deploying a zone can take upto ten minutes to complete. After that, you can view it or edit it from the **Zones** section.

[![pull zone deployed](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-pull-zone-deployed-1080x253.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-pull-zone-deployed.png)

#### Push Zones

To create a push zone, just set the zone type to Push in the **Add Zone** page. Compared to Pull Zones, Push Zones have fewer configuration options. The only important setting is _Directory Listing_, which you should keep disabled.

[![creating a push zone in keycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-creating-push-zones.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-creating-push-zones.png)

Unlike Pull zones, Push zones do not require an origin URL. Instead, you have to manually upload the files to the zone. For that, you can use two methods:

- **FTP(S)**
- **rsync over SSH**

However, I couldn't find any details about uploading via API. Whereas BunnyCDN's storage zones support API uploads as well as web-interface uploads.

Also, remember that Push zones incur an extra charge of **$0.12/GB** of storage per month. There are a few limits too:

- **250K Inodes**
- **Max file size is 5GB**

### Zone Aliases with Let's Encrypt SSL

The default hostname for your KeyCDN zone is a subdomain ending in **_kxcdn.com_**. With **Zone Alias**, you can set a hostname based on your site's domain name. Example: **_cdn.mysite.com_**. It supports SSL too.

Before adding an alias, make sure you do the following two things:

- **Enable Let's Encrypt or Custom SSL for the zone:** the default SSL setting is _'shared'_ which only works for the default hostname. But if you want SSL support for a custom subdomain (you should), make sure you change it to _'letsencrypt'_. Or else, if you want to install a custom certificate, you should select the _'custom'_ option.
- **Add a CNAME DNS record for your domain:** for the zone alias to work, you should set a CNAME record. For that, you have to edit your domain's DNS zone file. Most likely it will be on your domain registrar or hosting provider.

But here, I am [using Cloudflare](http://localhost:10003/set-up-cloudflare-wordpress/) to manage my DNS records. So here is how I did it:

[![add cname dns record for keycdn in cloudflare](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/add-cname-dns-record-keycdn-zone-alias-1080x342.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/add-cname-dns-record-keycdn-zone-alias.png)

_With Cloudflare, you don't have to wait for hours for the DNS edits to take effect. That's why I suggest you also to use it._

After adding the record, come back to your KeyCDN dashboard and click **Add Zone Alias**.

![add zone alias](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-add-zone-alias.png)

Then enter your subdomain, followed by selecting the Zone for which you want to set the Alias.

![zone alias settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-zone-alias-settings.png)

It might take a few minutes for the changes to get deployed. In the meantime, KeyCDN generates and installs a custom Let's Encrypt SSL certificate for your subdomain.

![deploying zone edits](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/deploying-zone-edits-keycdn-1080x285.png)

the color changes from yellow to green once the deployment is complete

_Keep refreshing your Zones page to see if the deployment is complete. Once complete, try loading a resource from the custom subdomain to verify it's working._

### Zone Referrers

By default, anybody can link to your resources from any web page. It's called **hotlinking**, which allows others to exploit your bandwidth.

By setting **Zone Referrers**, you allow accessing CDN files from your domains only - an effective way to counter hotlinking. While adding referrers, make sure you add at least the following referrers:

- Any Zone aliases you've set (you can use a wildcard _*.mysite.com_ to allow all subdomains)
- The root domain
- The default zone URL

[![add zone referrer](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-add-zone-referrer-1-1080x265.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-add-zone-referrer-1.png)

[![zone referrer settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-add-zone-referrer-2.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-add-zone-referrer-2.png)

[![after adding zone referrers in keycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-add-zone-referrer-3-1080x194.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-add-zone-referrer-3.png)

### Full Cache Purge and File Purge

KeyCDN allows both purging the full cache or purging individual files. When I tested it on a pull zone, the result was almost instant.

[![purging cache in keycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-purging.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-purging.png)

### Image Processing

Not just serving cached content, KeyCDN offers **on-the-fly image processing** as well. You can enable it for each zone. After that, you can append simple query strings to the image URLs to process them. The API supports cropping, resizing, webp conversion, and more such operations.

![keycdn enable image processing](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-enable-image-optimization.png)

For example, here is an original image on my website:

[![keycdn image optimization](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-image-optimization-1-1080x770.jpg)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-image-optimization-1.jpg)

If I want to resize it to _600x400px_, I can do it by adding _'_**_width=600&height=400'_** at the end of the URL. Here is the resized image returned by KeyCDN's image processor:

![resized image](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-image-optimization-2-1080x770.jpg)

If you get **'serve scaled images'** warning in Google PageSpeed Insights, KeyCDN's image processor is a great way to solve it.

However, you need to figure out a way to append the proper parameters at the end of image URLs. For instance, to use it with WordPress images, you might need some custom Javascript code to find out the device width.

- The price for image processing is **$0.40/1000** operations.
- Supports WebP conversion

### FTP Access (Sub-users)

On this page, you can add FTP users for your Push zones.

![adding ftp users in keycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-add-ftp-users-1080x382.png)

### Monitoring Usage

The Reporting page is quite basic, including only the necessary details. You can see two sections here:

- **Usage:** On this page, you can view the bandwidth, no. of requests served, and cache hit ratio over a period of time. Below that, you can find data related to your Push zones (storage), and image processing usage.

![usage reporting in keycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/reporting-usage-keycdn-1080x531.png)

Usage reporting

- **Analytics:** Here you can view the HTTP status codes, which is helpful in finding any errors or troubleshooting issues.

![analytics reporting in keycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/reporting-analytics-keycdn-1080x608.png)

Analytics reporting

## Performance

To assess the performance of KeyCDN, I created a sample WordPress site using Elementor and the free Astra theme. The page contained a couple of images and some text. Here is a breakdown of the details:

- No. of requests: 38
    - root domain - 2
    - subdomain (CDN) - 31
    - Google fonts (external) - 5
- Page size: 1.6MB
- CDN integration & page caching using [W3 Total Cache](http://localhost:10003/w3-total-cache-recommended-settings/)

First, I tested the base loading time without any CDN (second column in the below table). The third column shows the loading times right after a cache purge. And the last column shows the loading time when all the CDN requests were a HIT.

_Note: to find whether a request is a hit or a miss, check the cdn-cache response header. For hits, it will be **cdn-cache: HIT**, and for misses, it will be **cdn-cache: MISS**._

|Location|without CDN|with KeyCDN - cache MISS|with KeyCDN - cache HIT|
|---|---|---|---|
|Tokyo|1.57s|4.63s|**854ms**|
|Frankfurt|893ms|2.87s|**563ms**|
|London|801ms|2.52s|**519ms**|
|Washington D.C|301ms|768ms|**318ms**|
|San Francisco|814ms|2.46s|**512ms**|
|Sydney|2.11s|6.94s|**1.08s**|
|Sao Paulo|1.18s|16.97s|**673ms**|
|**Average**|**1.095s**|**5.308s**|**646ms (41% faster)**|

tests using Pingdom Tools

As you can see in the third column, the loading times were quite slow when the resources were not in the cache. Because, the edge servers had to pull the resources from the origin server, which increased latency.

_It's the reason why I quite like BunnyCDN's Perma-cache feature. It allows permanently storing the assets in geo-replicated storage zones. So, even if the Pull Zone request is a MISS, pulling from the nearest storage zone is much faster than pulling from the origin server._

With all the requests showing cache HITs, the site become 41% faster, which is a great improvement.

## WordPress Integration

To integrate any third-party CDN, you have to replace the original asset URLs with that of your CDN. If you already use a caching plugin like WP Super Cache or W3 Total Cache, it includes a feature to replace original file URLs with the CDN URLs.

See also:

- [W3 Total Cache Recommended Settings](http://localhost:10003/w3-total-cache-recommended-settings/)
- [WP Super Cache Settings Tutorial](http://localhost:10003/wp-super-cache-settings-tutorial/)

Or else, if you need a separate plugin, you can try KeyCDN's [CDN Enabler](https://wordpress.org/plugins/cdn-enabler/) plugin as well.

## KeyCDN Review: Pros & Cons

### Pros

- Great network with PoPs in all continents
- Easy to use interface
- Offers push zones, pull zones, and origin shield
- Instant purging
- Decent performance

### Cons

- The minimum payment is $49
- Cannot connect pull zone with push zone

## Conclusion

Overall, my experience with KeyCDN has been good to great so far. There isn't much to complain about. However, the $49 initial payment is a bit high in my opinion. If they could reduce it, KeyCDN would have been an ideal choice for small website owners.

_Have you used KeyCDN? What is your experience? Share it below._