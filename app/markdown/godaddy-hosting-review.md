---
title: 'GoDaddy Hosting Review - Is it Worth Considering?'
date: '2019-04-23 17:04:23'
modified: '2022-03-18 00:13:47'
slug: godaddy-hosting-review
categories:
    - hosting
tags:
    - shared-hosting
featured_image: 2019/04/godaddy-web-hosting-review-featured-2.jpg
excerpt: 'Complete review of GoDaddy Shared Hosting - Performance, uptime, and support quality. Is it good for hosting your next website'
yoast_seo_title: ''
yoast_meta_description: 'Complete review of GoDaddy Shared Hosting - Performance, uptime, and support quality. Is it good for hosting your next website'
cn_related_posts:
    - milesweb-review
    - cloud-hosting-vs-shared-hosting
    - cloud-hosting-wordpress
---
GoDaddy is a name that usually comes to anyone's mind when thinking of registering a domain name. In addition to domain registration, they offer a plethora of other services and tools like website builder, email hosting, SSL certificates, to name a few.

According to the [statistic](https://w3techs.com/technologies/overview/web_hosting) by W3Techs, GoDaddy is the fourth most popular web hosting provider. More than 4% of websites use GoDaddy's hosting services. On the same list, Amazon Web Services is at the top, which is used by more than 6% of websites.

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/godaddy-usage-stats-mar-2022.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/godaddy-usage-stats-mar-2022.png)

If you have already searched about them on the internet, you might have seen a couple of not-so-good reviews about GoDaddy. Keeping those apart, let us see how good is it in terms of real facts and figures.

## Plans & Pricing

Under the web hosting (shared) category, GoDaddy offers four plans:

- Economy: $8.99/mo, 1 website
- Deluxe: $11.99/mo, 10 websites
- Ultimate: $16.99/mo, 25 websites
- Maximum: $24.99/mo, 50 websites

[![GoDaddy shared hosting pricing - Mar 2022](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/godaddy-web-hosting-pricing-mar-2022-1080x562.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/godaddy-web-hosting-pricing-mar-2022.png)

Discounts are available if you are willing to lock in for three years.

The high-end plans offer more processing power and their prices are close to that of starting VPS plans. So these are economical only if your site gets a lot of traffic. In the below performance report, you can see how caching can improve the concurrent user load capacity.

All plans offer free MS 365 mailboxes and a free domain for one year. However, these free offerings are not available for monthly billing.

In short, GoDaddy's pricing is economical, but not the cheapest, when compared to other providers like [Dreamhost](http://localhost:10003/dreamhost-review/).

So far, we were looking at the prices given on GoDaddy's global site (godaddy.com). The plans and prices are slightly different on the Indian website.

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/godaddy-india-web-hosting-pricing-mar-2022-1080x526.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/godaddy-india-web-hosting-pricing-mar-2022.png)

The INR prices are much cheaper. They've added an ultra-cheap Starter plan that costs just INR 199/mo.

However, don't be fooled by this. Because the specifications are also different. Also, the free MS 365 mailbox offering is also not available. On the flip side, the Deluxe and the Ultimate plans allow hosting unlimited sites.

## Performance

According to the tests I've conducted, GoDaddy performs very well when it comes to loading times, uptime, and, response times.

For testing, I set up a WordPress website on the Starter plan (from GoDaddy India) with some dummy text and two images on the homepage. The page weighed 609KB with 10 requests.

The plan I used was the

For measuring response times and loading times, I ran five tests each with caching enabled and disabled. Then I took the average of all the tests to produce a result.

### Response Times

The average response times were good even without caching. After enabling the caching plugin (WP Fastest Cache), the response times went below the 200ms mark.

![GoDaddy Hosting Speed](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-web-host-load-test-1-800x342.png)

### Uptime

Using UptimeRobot, I have been monitoring the uptimes of three websites hosted on GoDaddy for the past six months. Two of them were hosted on the same server (North America) while the third was hosted using a different account with Asia as the datacenter location.

Uptime percentages for the three sites were as given below:

- **99.99%** (6 minutes of downtime in 6 months)
- **99.98%** (9 minutes of downtime)
- **100%** (haven't been down so far)

![GoDaddy Hosting Uptime](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-web-host-uptime-1-800x631.png)

On their website, GoDaddy guarantees only 99.9% uptime. As you can see, it was always above that in my tests.

### Load Testing

The shared server could handle up to three concurrent users on a WordPress site (w/o caching) while keeping the response time below 1 second. The response time increased steadily and timeouts started to occur when 35 users tried to connect simultaneously.

![GoDaddy Hosting Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-web-host-load-test-2-800x531.png)

Since WordPress consumes a lot of server resources, I tested again with caching on. This time, the server handled everything like a breeze.

![GoDaddy Hosting Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-web-host-load-test-3-1024x681.png)

### Performance Issues

As a budget shared host, the basic plans give only 512MB of RAM and 1 CPU. So, I have noticed some issues while running resource-intensive plugins like Duplicator. Backup plugins like these try to create huge SIP files while taking site snapshots. Occasionally, this can cause your shared server to run out of memory and CPU.

### Performance Summary

||Without Caching|With Caching|
|---|---|---|
|Response time|512.2ms|158ms|
|Fully loaded time|1.26s|920ms|

## Features

GoDaddy offers a bunch of useful features. These are the top things to note:

### Multiple Data-centers

After purchasing a hosting plan, you can select a data center region from one of the three options.

- North America
- Europe
- Asia

You can switch from one location to another later also. Such migrations are not free though.

![GoDaddy Hosting Data Centers](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-hosting-data-centers-1.png)

By selecting a region closer to your visitors, you can reduce network latency.

### One-click Application Installs

GoDaddy makes use of Installatron to automate the installation of popular applications and content management systems like WordPress, Joomla, Drupal, etc.

The tool is available right from your CPanel dashboard. With this, you can install 100+ applications on your web host without any technical know-how.

![GoDaddy Hosting Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-installatron-1.png)

### SSH Access

You can enable SSH access for your hosting account from the settings page. The user name and password are the same as that of your cPanel account.

![GoDaddy Hosting SSH Access](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-web-host-ssh-1-487x800.png)

### One-click Upgrades

All plans come with the option to easily upgrade resources when your CPU and RAM usage cross the limits. You can check the CPU and concurrent Usage statistics under the Metrics section of your CPanel.

![GoDaddy Hosting Upgrades](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-one-click-upgrades-1-800x519.png)

### Easy to Setup Domains

We know that GoDaddy was primarily a domain registrar. So, if you buy both the domain and hosting from them, you can easily connect those domains with your hosting account. No need of messing with Nameserver settings and DNS records.

### Security monitoring

While on GoDaddy, their team continuously monitors your server for malicious visitors and DDoS attacks.

### Standard CPanel

Earlier, GoDaddy was using a custom-made control panel for managing hosting. It was not that smooth to operate. Recently, they have completely switched to CPanel, which has made things so much easier.

On the other hand, the lack of free Let's Encrypt SSL integration is a disadvantage although you can install it manually from the CPanel. Also, unlike some of the other web hosts, they do not give free one-time site migration when you join.

## Ease of Use

As a big company that offers multiple services, GoDaddy's website shows many more things than just web hosting. Still, nothing is cluttered and you can easily navigate the site.

![GoDaddy Hosting Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-site-navigation-1.png)

Purchasing a product like hosting or domain from GoDaddy is a streamlined process. However, keep an eye on upsells. If you do not pay attention, unwanted items can get into your shopping cart, thereby rising your bills.

Upon logging in, you will be led to a dashboard that is big and easy to look at. On top of the Products page, you can see the domains you have bought while other products like hosting and email appear below that.

![GoDaddy Hosting Dashboard](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-dashboard-1-1024x348.png)

To get into your hosting dashboard, click the Manage button on the right. There you can see the specifications like server IP and data center region at the top. You can also see the options to set your cPanel username and password on the bottom left side.

![GoDaddy Hosting Dashboard](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-dashboard-2-1024x881.png)

To access the CPanel, click the bold blue button on the top right corner. Unless you are completely new to hosting, the CPanel won't be unfamiliar to you.

## Support Quality

GoDaddy offers support through phone and live chat. After trying the live chat facility, I can say that it is one of the fastest. The wait time was less than ten seconds. The support staff could easily answer the question I asked. The person was polite too.

However, in the end, he asked whether I want to renew a product, which was about to expire in one week. Excluding that unwanted question, the quality of support was very good.

![GoDaddy Hosting Support Quality](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/godaddy-support-1.png)

## Pros & Cons of GoDaddy Hosting

Now, let's sum up the above points. Firstly, these are the pros

- Excellent performance & load times
- Above average uptime
- Easy to use dashboard and cPanel
- Support is fast

  
Now, these are the disadvantages that I felt:

- Pricing could be cheaper
- Numerous up-sells while purchasing hosting or domains
- Does not offer one-click Let's Encrypt SSL Certificates

## Wrapping Up

We have seen that GoDaddy is one of the best web hosting solution you can use to make a home for your websites. Despite being a huge company with lots of customers, they offer adequately fast support round the clock. Since they are mainly a domain registrar, you can easily manage your domains and hosting from one place without logging in at multiple places.

_So, is GoDaddy's hosting worth considering?_

Yes. If you are looking to buy quality hosting, then GoDaddy's offerings are worth considering.

[Get GoDaddy Hosting](http://localhost:10003/go/godaddy/)