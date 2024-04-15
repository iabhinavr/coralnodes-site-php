---
title: 'BunnyCDN vs KeyCDN: Comparing Content Delivery Networks'
date: '2020-09-08 07:00:00'
modified: '2020-09-21 21:11:37'
slug: bunnycdn-vs-keycdn
categories:
    - hosting
tags:
    - cdn
featured_image: 2020/09/bunnycdn-keycdn-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. In this post, we will do an in-depth comparison between BunnyCDN and KeyCDN, two affordable content delivery networks with lots of similarities and a few differences in between. As traditional CDNs offering Pull-type as well as Push-type caching, they don&rsquo;t act as a reverse proxy. That means, unlike Cloudflare or StackPath, they don&rsquo;t handle the DNS resolution for your domains. Instead, they only offer CNAME subdomains for your caching zones. Both came into…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'A detailed comparison between BunnyCDN vs. KeyCDN. Find out which is the best content delivery network by reviewing features, and prices.'
cn_related_posts:
    - best-cdn-providers
    - digitalocean-spaces-review
    - amazon-s3-alternatives
---
In this post, we will do an in-depth comparison between [BunnyCDN](http://localhost:10003/go/bunnycdn/) and [KeyCDN](http://localhost:10003/go/keycdn/), two affordable [content delivery networks](http://localhost:10003/best-cdn-providers/) with lots of similarities and a few differences in between.

As traditional CDNs offering Pull-type as well as Push-type caching, they don't act as a reverse proxy. That means, unlike [Cloudflare](http://localhost:10003/set-up-cloudflare-wordpress/) or StackPath, they don't handle the DNS resolution for your domains. Instead, they only offer CNAME subdomains for your caching zones.

Both came into existence around the same time as well. KeyCDN started its operations in 2014-2015, while BunnyCDN came into the light during 2015-2016. There is only a difference of one year or less. At least, that's what this [Google Trends](https://trends.google.com/trends/explore?date=all&q=bunnycdn,keycdn) graph says:

[![bunnycdn vs keycdn google trends](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/bunnycdn-vs-keycdn-1080x707.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/bunnycdn-vs-keycdn.png)

BunnyCDN vs KeyCDN - [Google Trends](https://trends.google.com/trends/explore?date=all&q=bunnycdn,keycdn)

KeyCDN seems to be slightly more popular.

Looking at their Twitter pages as well, currently, KeyCDN has more followers. Maybe because they have been around for longer, or because of effective marketing strategies.

However, if you check the usage trends from W3Techs, the story is different. BunnyCDN has a better position.

So, for a person looking at the two providers for the first time, it can be a little confusing to pick one. So, in this review, we will explore the subtle and not-so-subtle differences between BunnyCDN and KeyCDN.

## Pricing

Unlike Amazon S3 and other enterprise-level providers, BunnyCDN and KeyCDN don't charge for the no. of requests. But still, there are a few items that show up on your monthly bills. Here we will discuss three of them:

- Bandwidth charges
- Storage charges
- Image processing charges

### Bandwidth costs

Be it with pull zones or push zones, bandwidth charges will be the main item on your bill. Whenever someone accesses the assets on your CDN zones, it incurs bandwidth fees. So, first, let us look at that:

|Region|BunnyCDN|KeyCDN (first 10TB)|
|---|---|---|
|North America & Europe|$0.01/GB|$0.04/GB|
|Asia-Pacific|$0.03/GB|$0.10/GB|
|South America|$0.045/GB|$0.11/GB|
|South Africa|$0.06/GB|$0.11/GB|

*prices as on Sep 6, 2020

So, BunnyCDN's charges are considerably lower. For traffic from North America and Europe, it is almost one-fourth. However, the price for KeyCDN lowers as your usage increases. For example, if your bandwidth is over 100TB per month, the price becomes one-third to one-fourth.

BunnyCDN also offers custom plans for large users, but the details are not available on their site.

### Storage costs for Push Zones

You don't need to pay for any assets cached on your pull zones. The only charge is for the bandwidth, as we have discussed above. But if you have deployed any push zones, there is a storage charge in addition to the bandwidth charge.

- BunnyCDN - **$0.005/GB/month** for the first _500TB_
- KeyCDN - **$0.29/GB/month** for the first _500GB_, $0.19/GB/mo (500GB-1TB), $0.09/GB (over 1TB)

Again, BunnyCDN is considerably cheaper. The initial charge is almost 1/60th compared to KeyCDN. Suppose you store 1TB of data on both the services and the costs will be like this:

- BunnyCDN: $0.005 * 1000 = **$5/mo**
- KeyCDN: $0.29 * 500 + $0.19 * 500 = **$240/mo**

Look at the whopping difference. KeyCDN costs 48X. So, if you are planning to use push zones to store terabytes of data, BunnyCDN is clearly better.

And there is another point. With BunnyCDN, there is no limit to the number of zones you can create with an account. Whereas KeyCDN imposes a limit: 3 zones per account.

### Minimum Charge & Minimum Payment

Even if your usage is quite low, there is still a minimum monthly usage and a minimum payment. Let me try to make it clear. Even if you don't use any bandwidth during a month, but have any active zone, the minimum charge will be deducted from your balance. And when you recharge your account, you have to pay at least the minimum payment amount.

With BunnyCDN, the minimum usage is $1/mo and the minimum payment amount is $10. While for KeyCDN, it's $4 and $49 respectively. So again, BunnyCDN is almost five times cheaper.

### Image Optimization Price

Both providers offer on-the-fly image processing. It allows several things including cropping, resizing, and WebP conversions via simple URL parameters. You can enable it for individual zones for an extra charge:

- BunnyCDN: $9.5/mo, unlimited operations
- KeyCDN: $1 per 2000 operations

The pricing strategy is different here. BunnyCDN offer the service at a flat rate, while for KeyCDN, it's for the no. of operations. So, for large-scale users, BunnyCDN will be a better choice. On the other hand, if you have fewer images to process in a month, KeyCDN will be cheaper.

### Payment Methods

### BunnyCDN

- Credit Card
- PayPal
- Bitcoin

### KeyCDN

- Credit Card
- PayPal

## Data Center Locations / PoPs

||BunnyCDN|KeyCDN|
|---|---|---|
|No. of PoPs|42|34|
|Countries|25|28|
|Continents|6|6|

In the PoPs department, I don't think you can complain about either BunnyCDN or KeyCDN. Both have their presence in nearly all regions of the world, covering six continents. Look at their location maps as well:

![bunnycdn location map](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/bunnycdn-location-map-1080x541.png)

BunnyCDN

![keycdn location map](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/keycdn-location-map-1080x589.png)

KeyCDN

But if you are nit-picking, BunnyCDN has a slight edge as it has a few more locations. Also, they have a data center in Lagos, Nigeria, whereas KeyCDN doesn't have any center in West Africa.

## Pull Zone Features

As the name suggests, pull zones pull the assets from your origin server and store them on edge locations. It supports a variety of features:

|Feature|BunnyCDN|KeyCDN|
|---|---|---|
|Zone Referrers|yes|yes|
|Origin Shield|yes|yes|
|Perma-cache|yes|no|
|Token authentication|yes|yes|
|Custom CNAME & SSL|yes|yes|
|Country-level blocking|yes|no|
|CORS Header|yes|yes|
|Canonical Header|yes|yes|
|Forward Host Header|yes|yes|
|Edge Rules|yes, support conditions|yes, but not conditional|
|Network Limits|yes|no|
|Video Streaming|no|yes|

From the above table, you can see that most of the features are available with both the providers. So, I will mention only the differences:

### Perma-cache

BunnyCDN's perma-cache is a unique feature, which is highly helpful in reducing the load on your origin server. With normal caching, infrequent files often get deleted from the edge servers. Such files should be re-pulled from the origin server before sending them to the user.

With Perma-cache, you can connect a pull zone with a storage zone. The latter stands between your origin server and edge servers and stores all the files permanently. So even if a file is not available at an edge server, it pulls from the connected storage zone instead of your origin server. These storage zones also support geo-replication, which ensures lower latency.

![perma-cache feature in bunnycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/bunnycdn-perma-cache-2-1080x491.png)

### Country-level blocking and redirection

Pull zones in BunnyCDN allows blocking or redirecting requests based on a user's country, whereas, with KeyCDN, I didn't find a direct way to implement it.

### **Edge Rules**

Edge rules allow setting headers and other things for each zone. Here is a list of the rules supported by BunnyCDN:

- Block Request
- Force Download
- Force SSL
- Change Origin URL
- Override Cache Time
- Redirect to URL
- Set Request Header
- Set Response Header
- Enable/Disable Token authentication

You can set these rules conditionally as well. For example, if you want to set Force Download for a particular file, you can do that.

[![setting edge rules in bunnycdn](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/bunnycdn-edge-rules-1080x638.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/bunnycdn-edge-rules.png)

KeyCDN also supports some of these headers and rules. However, it doesn't support conditions.

![keycdn force download](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/force-download-keycdn-1080x565.png)

the same thing with keycdn, but it doesn't support conditionals

### Network Limits

BunnyCDN allows implementing the following limits per pull zone:

- Download speed limit
- Requests limits
- Maximum connections per IP
- Monthly bandwidth limit

![bunnycdn network limits](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/bunnycdn-network-limits-1080x496.png)

If you don't want the usage to exceed a certain limit, this feature is highly useful.

KeyCDN currently doesn't support such limits. All the requests go through unmetered until you have balance credits in your account.

### Video Streaming

KeyCDN gets a point here. It supports live video streaming at an affordable cost. BunnyCDN supports HTTP Live Streaming, but according to their FAQ, currently, they don't allow it.

## Other Features

### Optimization & Image Processing

As I mentioned in the pricing section above, Bunny Optimizer comes with a price tag of $9.5/mo. You can enable it at the zone-level.

Not just image processing, it includes css and js file minification as well. Here is a list of the supported features:

- WebP Conversion
- URL parameter based image processing
- CSS and JS minification
- Automatic image optimization for Desktop and mobile devices
- Watermarking

KeyCDN also offers a similar feature. But it is not as comprehensive as Bunny Optimizer. Although it supports image processing based on URL parameters, currently there is no option to enable automatic compression. It doesn't support file minification either.

### Push Zone Features

||BunnyCDN|KeyCDN|
|---|---|---|
|Location selection|Yes|No|
|FTP access|Yes|Yes|
|API access|Yes|No|
|rsync over SSH|No|Yes|

The ability to select geo-replication regions is the main advantage I found with BunnyCDN storage zones over KeyCDN's push zones. Because the cost depends on the regions you activate. Currently, there are five regions:

- New York - $0.02/GB
- Los Angeles - $0.02/GB
- Falkenstein - $0.01/GB
- Singapore - $0.03/GB
- Sydney - $0.03/GB

If you select all the five regions, your files will be replicated across all the regions and the total monthly charge will be $0.11/GB (sum of the prices of all locations). Instead, if you activate only a specific location, you will be charged only for that specific location.

KeyCDN also supports geo-replication, but you have no choice to select locations.

On the flip side, KeyCDN supports accessing Push zones via SSH, which I couldn't find with BunnyCDN storage zones.

### Log Forwarding

KeyCDN supports the Syslog protocol, which allows you to send the logs to another server. The feature comes at an extra charge of $3 per day.

Whereas with BunnyCDN, you can view the detailed logs in the dashboard itself. You can also download it as a .log file. However, there are no mentions about how to set up the Syslog protocol.

### Usage Monitoring

On BunnyCDN's Statistics page, you can monitor the following metrics:

- Bandwidth served: bandwidth, no. of requests, cache hit ratio
- Datacenter traffic distribution
- Details or non-2xx responses, which is useful in troubleshooting

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/bunnycdn-statistics-1-1080x848.png)

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/bunnycdn-datacenter-traffic-1-1019x1080.png)

KeyCDN's Reporting section is divided into two: Usage, and Analytics.

Here is how the Usage page looks like.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/reporting-usage-keycdn-1080x531.png)

And here is the Analytics page:

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/reporting-analytics-keycdn-1080x608.png)

Overall, BunnyCDN gives a richer feel with more details. Especially the data center traffic distribution is quite helpful in finding where the majority of your visitors are from.

## Support Quality

I did experience a few small glitches when I started using BunnyCDN in 2019. So I had to try their support ticket a couple of times. But their support team have been proactive all the time. The longest reply time I've got so far is only three hours.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/bunnycdn-support-ticket-1.png)

My duration with KeyCDN is not as long as with BunnyCDN. But once I opened a ticket to enquire about their image processing feature while in trial mode. And the response time was slightly longer - almost a day.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/09/keycdn-support-ticket-reply-1.png)

However, I have seen people who have received a much faster response than me.

## Performance

To compare the speed differences between the two CDNs, first I created a sample WordPress site. To make it close to a real site, I added some images and used the Elementor builder to create the page.

Then I tested the loading times from all the locations available in Pingdom Tools. You can see the result in the second column in the below table. After that, I created a pull zone each on KeyCDN and BunnyCDN with the origin URL set to our sample website. Then using the W3 Total Cache's CDN feature, I integrated each pull zone one after the other and ran the speed tests again.

|Location|without CDN|with KeyCDN|**with BunnyCDN**|
|---|---|---|---|
|Tokyo|1.57s|**854ms**|**904ms**|
|Frankfurt|893ms|**563ms**|**599ms**|
|London|801ms|**519ms**|**535ms**|
|Washington D.C|301ms|**318ms**|**336ms**|
|San Francisco|814ms|**512ms**|**520ms**|
|Sydney|2.11s|**1.08s**|**1.13s**|
|Sao Paulo|1.18s|**673ms**|**688ms**|
|**Average**|**1.095s**|**646ms (41% faster)**|**673ms (39% faster)**|

tests using Pingdom Tools

Although the difference in the average loading time (646ms vs 673ms) is not huge, KeyCDN shows consistently faster results from all locations.

So, according to my tests, KeyCDN has a slight edge in performance.

## Conclusion

### Pros & Cons of BunnyCDN

- Lots of features like perma-cache
- Cheaper than the competition
- Efficient support

- Documentation could be better: they do have good docs, but I feel that detailed explanations are missing here and there.
- comparatively newer provider

### **Pros & Cons of KeyCDN**

- Slightly faster
- Clean user interface
- Older and more popular

- Higher minimum payment
- Some features are missing

So, overall, my personal choice is BunnyCDN. It is the CDN I currently use on this site as well. That doesn't mean KeyCDN is not good enough. They have been a stable provider for quite some time with decent performances. But to be honest, I couldn't find a solid reason to consider KeyCDN over BunnyCDN.

_If you have a different opinion or experience, please mention it in the comments._